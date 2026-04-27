<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapBooth Studio</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div class="logo">SnapBooth</div>
        <div class="logo-sub">Studio Experience</div>
    </div>

    <!-- STEP INDICATOR -->
    <div class="step-bar" id="stepBar">
        <div class="step-dot active" data-step="1">
            <div class="dot-circle">1</div>
            <div class="dot-label">Bayar</div>
        </div>
        <div class="step-dot" data-step="2">
            <div class="dot-circle">2</div>
            <div class="dot-label">Timer</div>
        </div>
        <div class="step-dot" data-step="3">
            <div class="dot-circle">3</div>
            <div class="dot-label">Template</div>
        </div>
        <div class="step-dot" data-step="4">
            <div class="dot-circle">4</div>
            <div class="dot-label">Foto</div>
        </div>
        <div class="step-dot" data-step="5">
            <div class="dot-circle">5</div>
            <div class="dot-label">Edit</div>
        </div>
        <div class="step-dot" data-step="6">
            <div class="dot-circle">6</div>
            <div class="dot-label">Barcode</div>
        </div>
        <div class="step-dot" data-step="7">
            <div class="dot-circle">7</div>
            <div class="dot-label">Print</div>
        </div>
    </div>

    <div class="main">

        <!-- ===== STEP 1: PAYMENT ===== -->
        <div class="step-section active" id="step1">
            <div class="card">
                <div class="badge badge-yellow"><span class="badge-dot"></span> Menunggu Pembayaran</div>
                <div class="card-title">Scan & Bayar</div>
                <div class="card-sub">Scan QRIS di bawah untuk memulai sesi foto kamu</div>
                <div class="qris-container">
                    <div class="qris-frame scan-animation">
                        <div class="scan-line"></div>
                        <!-- Dummy QR Code SVG -->
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <!-- Finder patterns -->
                            <rect x="5" y="5" width="25" height="25" fill="none" stroke="#111"
                                stroke-width="3" />
                            <rect x="10" y="10" width="15" height="15" fill="#111" />
                            <rect x="70" y="5" width="25" height="25" fill="none" stroke="#111"
                                stroke-width="3" />
                            <rect x="75" y="10" width="15" height="15" fill="#111" />
                            <rect x="5" y="70" width="25" height="25" fill="none" stroke="#111"
                                stroke-width="3" />
                            <rect x="10" y="75" width="15" height="15" fill="#111" />
                            <!-- Data modules (dummy pattern) -->
                            <rect x="35" y="5" width="5" height="5" fill="#111" />
                            <rect x="45" y="5" width="5" height="5" fill="#111" />
                            <rect x="55" y="5" width="5" height="5" fill="#111" />
                            <rect x="40" y="15" width="5" height="5" fill="#111" />
                            <rect x="55" y="15" width="5" height="5" fill="#111" />
                            <rect x="35" y="25" width="5" height="5" fill="#111" />
                            <rect x="50" y="25" width="5" height="5" fill="#111" />
                            <rect x="5" y="35" width="5" height="5" fill="#111" />
                            <rect x="20" y="35" width="5" height="5" fill="#111" />
                            <rect x="35" y="35" width="5" height="5" fill="#111" />
                            <rect x="50" y="35" width="5" height="5" fill="#111" />
                            <rect x="65" y="35" width="5" height="5" fill="#111" />
                            <rect x="80" y="35" width="5" height="5" fill="#111" />
                            <rect x="90" y="35" width="5" height="5" fill="#111" />
                            <rect x="10" y="45" width="5" height="5" fill="#111" />
                            <rect x="25" y="45" width="5" height="5" fill="#111" />
                            <rect x="40" y="45" width="5" height="5" fill="#111" />
                            <rect x="55" y="45" width="5" height="5" fill="#111" />
                            <rect x="70" y="45" width="5" height="5" fill="#111" />
                            <rect x="85" y="45" width="5" height="5" fill="#111" />
                            <rect x="5" y="55" width="5" height="5" fill="#111" />
                            <rect x="15" y="55" width="5" height="5" fill="#111" />
                            <rect x="30" y="55" width="5" height="5" fill="#111" />
                            <rect x="45" y="55" width="5" height="5" fill="#111" />
                            <rect x="60" y="55" width="5" height="5" fill="#111" />
                            <rect x="75" y="55" width="5" height="5" fill="#111" />
                            <rect x="90" y="55" width="5" height="5" fill="#111" />
                            <rect x="35" y="65" width="5" height="5" fill="#111" />
                            <rect x="50" y="65" width="5" height="5" fill="#111" />
                            <rect x="65" y="65" width="5" height="5" fill="#111" />
                            <rect x="80" y="65" width="5" height="5" fill="#111" />
                            <rect x="40" y="75" width="5" height="5" fill="#111" />
                            <rect x="55" y="75" width="5" height="5" fill="#111" />
                            <rect x="70" y="75" width="5" height="5" fill="#111" />
                            <rect x="85" y="75" width="5" height="5" fill="#111" />
                            <rect x="35" y="85" width="5" height="5" fill="#111" />
                            <rect x="50" y="85" width="5" height="5" fill="#111" />
                            <rect x="65" y="85" width="5" height="5" fill="#111" />
                            <rect x="90" y="85" width="5" height="5" fill="#111" />
                        </svg>
                    </div>
                    <div class="price-tag">Rp 20.000</div>
                    <div class="price-sub">3 foto + cetak strip</div>
                    <div class="payment-methods">
                        <span class="pm-badge pm-qris">QRIS</span>
                        <span class="pm-badge pm-cash">CASH</span>
                    </div>
                    <button class="btn btn-primary btn-full" onclick="confirmPayment()">
                        ✅ Sudah Bayar
                    </button>
                </div>
            </div>
        </div>

        <!-- ===== STEP 2: TIMER ===== -->
        <div class="step-section" id="step2">
            <div class="card">
                <div class="badge badge-cyan"><span class="badge-dot"></span> Sesi Aktif</div>
                <div class="card-title">Sesi Dimulai!</div>
                <div class="card-sub">Kamu punya waktu 3 menit untuk menyelesaikan sesi foto</div>
                <div class="session-timer">
                    <div class="progress-ring">
                        <svg width="160" height="160" viewBox="0 0 160 160">
                            <circle class="ring-bg" cx="80" cy="80" r="66" />
                            <circle class="ring-fill" cx="80" cy="80" r="66" id="ringFill"
                                stroke-dasharray="414.69" stroke-dashoffset="0" />
                        </svg>
                    </div>
                    <div class="big-timer" id="sessionTimer">3:00</div>
                    <div class="timer-label">Waktu Tersisa</div>
                </div>
                <div class="divider"></div>
                <button class="btn btn-cyan btn-full" onclick="startTimer(); nextStep(3);" id="startTimerBtn">
                    🚀 Mulai & Pilih Template
                </button>
            </div>
        </div>

        <!-- ===== STEP 3: TEMPLATE ===== -->
        <div class="step-section" id="step3">
            <div class="card">
                <div class="badge badge-pink"><span class="badge-dot"></span> Pilih Tema</div>
                <div class="card-title">Template Foto</div>
                <div class="card-sub">Pilih bingkai yang kamu suka</div>
                <div class="templates-grid">
                    <div class="template-card" onclick="selectTemplate(this,'Classic')" data-tpl="classic">
                        <div class="template-preview tpl-classic">
                            <div class="tpl-row"></div>
                            <div class="tpl-row"></div>
                            <div class="tpl-row"></div>
                        </div>
                        <div class="template-name">Classic Strip <div class="check-icon">✓</div>
                        </div>
                    </div>
                    <div class="template-card" onclick="selectTemplate(this,'Vintage')" data-tpl="vintage">
                        <div class="template-preview tpl-vintage">
                            <div class="tpl-grid-preview" style="width:100%;height:100%">
                                <div class="tpl-grid-cell"></div>
                                <div class="tpl-grid-cell"></div>
                                <div class="tpl-grid-cell"></div>
                                <div class="tpl-grid-cell"></div>
                            </div>
                        </div>
                        <div class="template-name">Vintage Grid <div class="check-icon">✓</div>
                        </div>
                    </div>
                    <div class="template-card" onclick="selectTemplate(this,'Neon')" data-tpl="neon">
                        <div class="template-preview tpl-neon">
                            <div class="tpl-row"></div>
                            <div class="tpl-row"></div>
                            <div class="tpl-row"></div>
                        </div>
                        <div class="template-name">Neon Vibes <div class="check-icon">✓</div>
                        </div>
                    </div>
                    <div class="template-card" onclick="selectTemplate(this,'Minimal')" data-tpl="minimal">
                        <div class="template-preview tpl-minimal">
                            <div class="tpl-row"></div>
                            <div class="tpl-row"></div>
                            <div class="tpl-row"></div>
                        </div>
                        <div class="template-name">Minimalist <div class="check-icon">✓</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-full" id="confirmTemplate" onclick="nextStep(4)" disabled>
                    📸 Lanjut ke Foto
                </button>
            </div>
        </div>

        <!-- ===== STEP 4: TAKE PHOTO ===== -->
        <div class="step-section" id="step4">
            <div class="card">
                <div class="badge badge-pink"><span class="badge-dot"></span> Sesi Foto</div>
                <div class="card-title">Waktu Foto!</div>
                <div class="card-sub">Klik tombol, pose, dan senyum! 📸</div>

                <!-- Photo slots -->
                <div class="photo-count-row">
                    <div class="photo-slot" id="slot1">
                        <div class="photo-slot-inner">📷</div>
                        <div class="photo-num">1/3</div>
                    </div>
                    <div class="photo-slot" id="slot2">
                        <div class="photo-slot-inner">📷</div>
                        <div class="photo-num">2/3</div>
                    </div>
                    <div class="photo-slot" id="slot3">
                        <div class="photo-slot-inner">📷</div>
                        <div class="photo-num">3/3</div>
                    </div>
                </div>

                <!-- Camera view -->
                <div class="camera-area">
                    <div class="camera-dummy">
                        <div class="camera-icon">🎥</div>
                        <div class="camera-dummy-text" id="camText">Kamera siap — tekan tombol di bawah</div>
                    </div>
                    <div class="countdown-overlay" id="countdownOverlay">5</div>
                    <div class="flash-overlay" id="flashOverlay"></div>
                </div>

                <button class="btn btn-primary btn-full" id="takePhotoBtn" onclick="takePhoto()">
                    📸 Ambil Foto
                </button>
            </div>
        </div>

        <!-- ===== STEP 5: EDIT PHOTO ===== -->
        <div class="step-section" id="step5">
            <div class="card">
                <div class="badge badge-yellow"><span class="badge-dot"></span> Edit Foto</div>
                <div class="card-title">Pilih Filter</div>
                <div class="card-sub">Buat foto makin keren dengan filter favorit kamu</div>

                <div class="edit-preview">
                    <div class="edit-canvas filter-none" id="editCanvas">
                        🌟✨📸
                    </div>
                </div>

                <div class="filters-row" id="filtersRow">
                    <div class="filter-btn active" onclick="applyFilter(this,'filter-none','Normal')">
                        <div class="filter-thumb" style="filter:none">🌟</div>
                        <div class="filter-label">Normal</div>
                    </div>
                    <div class="filter-btn" onclick="applyFilter(this,'filter-bw','B&W')">
                        <div class="filter-thumb" style="filter:grayscale(1)">🌟</div>
                        <div class="filter-label">B&W</div>
                    </div>
                    <div class="filter-btn" onclick="applyFilter(this,'filter-warm','Warm')">
                        <div class="filter-thumb" style="filter:sepia(60%)">🌟</div>
                        <div class="filter-label">Warm</div>
                    </div>
                    <div class="filter-btn" onclick="applyFilter(this,'filter-cold','Cold')">
                        <div class="filter-thumb" style="filter:hue-rotate(180deg) saturate(0.8)">🌟</div>
                        <div class="filter-label">Cold</div>
                    </div>
                    <div class="filter-btn" onclick="applyFilter(this,'filter-vivid','Vivid')">
                        <div class="filter-thumb" style="filter:saturate(2) contrast(1.2)">🌟</div>
                        <div class="filter-label">Vivid</div>
                    </div>
                    <div class="filter-btn" onclick="applyFilter(this,'filter-fade','Fade')">
                        <div class="filter-thumb" style="filter:contrast(0.8) brightness(1.15)">🌟</div>
                        <div class="filter-label">Fade</div>
                    </div>
                </div>

                <button class="btn btn-yellow btn-full" onclick="nextStep(6)">
                    ✅ Simpan & Lanjut
                </button>
            </div>
        </div>

        <!-- ===== STEP 6: BARCODE ===== -->
        <div class="step-section" id="step6">
            <div class="card">
                <div class="badge badge-cyan"><span class="badge-dot"></span> Ambil Foto</div>
                <div class="card-title">Scan Barcode</div>
                <div class="card-sub">Scan barcode di mesin untuk mengambil hasil foto</div>
                <div class="barcode-wrapper">
                    <div class="barcode-card scan-animation">
                        <div class="scan-line"></div>
                        <div class="barcode-img" id="barcodeImg"></div>
                        <div class="barcode-text">SNAP-2024-08471</div>
                    </div>
                    <div class="barcode-id">📍 Booth #3 · Session #08471</div>
                    <div style="text-align:center;color:var(--muted);font-size:0.82rem;max-width:280px;">
                        Tunjukkan barcode ini ke mesin dispenser atau kamera scanner di booth
                    </div>
                    <button class="btn btn-cyan btn-full" onclick="nextStep(7)">
                        ✅ Barcode Sudah Discan
                    </button>
                </div>
            </div>
        </div>

        <!-- ===== STEP 7: PRINT ===== -->
        <div class="step-section" id="step7">
            <div class="card">
                <div class="badge badge-green"><span class="badge-dot"></span> Hampir Selesai</div>
                <div class="card-title">Cetak Foto!</div>
                <div class="card-sub">Foto siap dicetak — tekan tombol untuk memulai</div>
                <div class="print-preview">
                    <div class="photo-strip">
                        <div class="strip-photo">📸</div>
                        <div class="strip-photo">😄</div>
                        <div class="strip-photo">✨</div>
                        <div class="strip-footer">SNAPBOOTH STUDIO</div>
                    </div>
                </div>
                <div class="divider"></div>
                <div id="printState">
                    <button class="btn btn-green btn-full" id="printBtn" onclick="startPrint()">
                        🖨️ Cetak Foto Sekarang
                    </button>
                </div>
            </div>
        </div>

        <!-- ===== DONE ===== -->
        <div class="step-section" id="stepDone">
            <div class="card">
                <div class="done-screen">
                    <div class="done-icon">🎉</div>
                    <div class="done-title">Selesai!</div>
                    <div class="done-sub">Foto strip kamu sudah keluar dari mesin printer.<br>Terima kasih telah
                        menggunakan SnapBooth!</div>
                    <button class="btn btn-primary" onclick="resetAll()">
                        🔄 Sesi Baru
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- TOAST -->
    <div class="toast" id="toast">
        <span id="toastIcon">✅</span>
        <span id="toastMsg">Berhasil!</span>
    </div>

    <script src=" {{ asset('assets/js/script.js') }}"></script>
</body>

</html>
