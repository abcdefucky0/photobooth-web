
        // ========== STATE ==========
        let currentStep = 1;
        let totalSteps = 7;
        let timerInterval = null;
        let sessionSec = 180;
        let photoCount = 0;
        let isTakingPhoto = false;
        let selectedTemplate = null;
        let selectedFilter = 'Normal';

        // ========== BARCODE GENERATE ==========
        function generateBarcode() {
            const el = document.getElementById('barcodeImg');
            if (!el) return;
            el.innerHTML = '';
            const widths = [3, 1, 2, 1, 3, 2, 1, 1, 2, 3, 1, 2, 1, 3, 1, 2, 2, 1, 3, 1, 2, 1, 3, 2, 1, 1, 2, 3, 1, 2, 1, 1,
                3, 2, 1, 3, 1, 2, 1, 1, 2
            ];
            let isBar = true;
            widths.forEach(w => {
                const div = document.createElement('div');
                div.className = 'bar';
                div.style.width = (w * 2.5) + 'px';
                div.style.height = isBar ? (40 + Math.random() * 20) + 'px' : '0';
                div.style.background = isBar ? '#111' : 'transparent';
                el.appendChild(div);
                isBar = !isBar;
            });
        }

        // ========== NAVIGATION ==========
        function nextStep(step) {
            // Hide current
            document.getElementById('step' + currentStep).classList.remove('active');
            document.querySelector(`[data-step="${currentStep}"]`).classList.remove('active');
            document.querySelector(`[data-step="${currentStep}"]`).classList.add('done');

            currentStep = step;

            // Show next
            if (step > totalSteps) {
                document.getElementById('stepDone').classList.add('active');
            } else {
                document.getElementById('step' + step).classList.add('active');
                document.querySelector(`[data-step="${step}"]`).classList.add('active');
                document.querySelector(`[data-step="${step}"]`).classList.remove('done');
            }

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // ========== TIMER ==========
        function startTimer() {
            if (timerInterval) return;
            timerInterval = setInterval(() => {
                if (sessionSec <= 0) {
                    clearInterval(timerInterval);
                    showToast('⏰', 'Waktu sesi habis!');
                    return;
                }
                sessionSec--;
                const m = Math.floor(sessionSec / 60);
                const s = sessionSec % 60;
                document.getElementById('sessionTimer').textContent = m + ':' + String(s).padStart(2, '0');
                // Ring
                const circumference = 414.69;
                const offset = circumference - (sessionSec / 180) * circumference;
                document.getElementById('ringFill').style.strokeDashoffset = offset;
            }, 1000);
        }

        // ========== TEMPLATE ==========
        function selectTemplate(card, name) {
            document.querySelectorAll('.template-card').forEach(c => c.classList.remove('selected'));
            card.classList.add('selected');
            selectedTemplate = name;
            document.getElementById('confirmTemplate').disabled = false;
            showToast('🎨', 'Template "' + name + '" dipilih');
        }

        // ========== PHOTO ==========
        function takePhoto() {
            if (isTakingPhoto || photoCount >= 3) return;
            isTakingPhoto = true;
            const btn = document.getElementById('takePhotoBtn');
            btn.disabled = true;

            const overlay = document.getElementById('countdownOverlay');
            const flash = document.getElementById('flashOverlay');
            const camText = document.getElementById('camText');
            overlay.style.display = 'flex';

            let count = 5;
            overlay.textContent = count;

            const countInterval = setInterval(() => {
                count--;
                if (count <= 0) {
                    clearInterval(countInterval);
                    overlay.style.display = 'none';

                    // Flash effect
                    flash.style.display = 'block';
                    flash.style.opacity = '1';
                    setTimeout(() => {
                        flash.style.transition = 'opacity 0.4s';
                        flash.style.opacity = '0';
                        setTimeout(() => {
                            flash.style.display = 'none';
                            flash.style.transition = '';
                        }, 400);
                    }, 100);

                    // Mark slot
                    photoCount++;
                    const slot = document.getElementById('slot' + photoCount);
                    if (slot) {
                        slot.classList.add('taken');
                        const emojis = ['😄', '🤩', '🥳'];
                        slot.querySelector('.photo-slot-inner').textContent = emojis[photoCount - 1];
                    }

                    showToast('📸', 'Foto ' + photoCount + '/3 berhasil!');

                    if (photoCount < 3) {
                        camText.textContent = `Foto ${photoCount}/3 diambil! Siap foto ${photoCount + 1}?`;
                        isTakingPhoto = false;
                        btn.disabled = false;
                        btn.textContent = `📸 Ambil Foto ${photoCount + 1}`;
                    } else {
                        camText.textContent = '✅ Semua foto diambil!';
                        btn.textContent = '➡️ Lanjut ke Edit';
                        btn.disabled = false;
                        btn.onclick = () => nextStep(5);
                        isTakingPhoto = false;
                    }
                } else {
                    overlay.textContent = count;
                }
            }, 1000);
        }

        // ========== FILTER ==========
        function applyFilter(btn, filterClass, name) {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const canvas = document.getElementById('editCanvas');
            canvas.className = 'edit-canvas ' + filterClass;
            selectedFilter = name;
        }

        // ========== PRINT ==========
        function startPrint() {
            const printState = document.getElementById('printState');
            printState.innerHTML = `
    <div style="text-align:center;padding:20px 0;">
      <div class="printer-anim">🖨️</div>
      <div style="margin-top:12px;color:var(--accent3);font-weight:600;">Mencetak...</div>
      <div style="color:var(--muted);font-size:0.8rem;margin-top:6px;">Harap tunggu sebentar</div>
    </div>
  `;
            setTimeout(() => {
                printState.innerHTML = `
      <div style="text-align:center;padding:8px 0;">
        <div style="font-size:2rem;margin-bottom:8px;">✅</div>
        <div style="color:var(--success);font-weight:600;font-size:1rem;margin-bottom:16px;">Foto berhasil dicetak!</div>
        <button class="btn btn-primary btn-full" onclick="nextStep(8)">🎉 Selesai</button>
      </div>
    `;
            }, 2800);
        }

        // ========== RESET ==========
        function resetAll() {
            // Hide done
            document.getElementById('stepDone').classList.remove('active');

            // Reset all steps
            document.querySelectorAll('.step-section').forEach(s => s.classList.remove('active'));
            document.querySelectorAll('.step-dot').forEach(d => {
                d.classList.remove('active', 'done');
            });

            // Reset vars
            currentStep = 1;
            photoCount = 0;
            isTakingPhoto = false;
            selectedTemplate = null;
            sessionSec = 180;
            clearInterval(timerInterval);
            timerInterval = null;
            document.getElementById('sessionTimer').textContent = '3:00';
            document.getElementById('ringFill').style.strokeDashoffset = 0;
            document.getElementById('confirmTemplate').disabled = true;
            document.querySelectorAll('.template-card').forEach(c => c.classList.remove('selected'));
            document.querySelectorAll('.photo-slot').forEach(s => {
                s.classList.remove('taken');
                s.querySelector('.photo-slot-inner').textContent = '📷';
            });
            document.getElementById('editCanvas').className = 'edit-canvas filter-none';
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            document.querySelector('.filter-btn').classList.add('active');
            document.getElementById('camText').textContent = 'Kamera siap — tekan tombol di bawah';
            const btn = document.getElementById('takePhotoBtn');
            btn.textContent = '📸 Ambil Foto';
            btn.onclick = takePhoto;
            btn.disabled = false;
            document.getElementById('printState').innerHTML = `
    <button class="btn btn-green btn-full" id="printBtn" onclick="startPrint()">
      🖨️ Cetak Foto Sekarang
    </button>
  `;

            // Show step 1
            document.getElementById('step1').classList.add('active');
            document.querySelector('[data-step="1"]').classList.add('active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // ========== TOAST ==========
        function showToast(icon, msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toastIcon').textContent = icon;
            document.getElementById('toastMsg').textContent = msg;
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 2500);
        }

        // Init
        generateBarcode();
