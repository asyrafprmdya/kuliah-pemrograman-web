<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes wave {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-10px) rotate(-5deg); }
            75% { transform: translateY(-5px) rotate(5deg); }
        }
        @keyframes ripple {
            0% { transform: scale(1); opacity: 0.6; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }
        .animate-wave {
            animation: wave 4s ease-in-out infinite;
        }
        .animate-slideDown {
            animation: slideDown 0.6s ease-out forwards;
        }
        .animate-zoomIn {
            animation: zoomIn 0.5s ease-out forwards;
        }
        .card-3d {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .card-3d:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 25px 50px rgba(14, 165, 233, 0.3);
        }
        .ocean-bg {
            background: linear-gradient(135deg, #0EA5E9 0%, #0284C7 25%, #0369A1 50%, #075985 75%, #0C4A6E 100%);
        }
        .frost-glass {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        .shimmer-effect {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            background-size: 1000px 100%;
            animation: shimmer 3s infinite;
        }
        .ripple-circle {
            position: absolute;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: ripple 2s infinite;
        }
        .progress-bar {
            transition: width 1.5s ease-out;
        }
        .tooltip {
            position: relative;
        }
        .tooltip:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            padding: 8px 12px;
            background: rgba(14, 165, 233, 0.95);
            color: white;
            border-radius: 8px;
            font-size: 12px;
            white-space: nowrap;
            margin-bottom: 8px;
            z-index: 100;
        }
    </style>
</head>
<body class="ocean-bg min-h-screen overflow-x-hidden">
    <!-- Animated Background Circles -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="ripple-circle w-96 h-96 top-10 left-10" style="animation-delay: 0s;"></div>
        <div class="ripple-circle w-80 h-80 top-40 right-20" style="animation-delay: 0.5s;"></div>
        <div class="ripple-circle w-72 h-72 bottom-20 left-1/3" style="animation-delay: 1s;"></div>
    </div>

    <!-- Top Navigation -->
    <nav class="frost-glass border-b border-white border-opacity-20 animate-slideDown" style="opacity: 0;">
        <div class="max-w-7xl mx-auto px-8 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-6">
                    <div class="text-3xl animate-wave cursor-pointer">🌊</div>
                    <h1 class="text-2xl font-bold text-white tracking-wide">Ocean Dashboard</h1>
                </div>
                <div class="flex items-center space-x-8">
                    <div class="relative group">
                        <input type="text" placeholder="Cari di sini..." 
                            class="bg-white bg-opacity-10 text-white placeholder-gray-300 rounded-full px-6 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:w-80 transition-all duration-300">
                        <span class="absolute right-4 top-2.5 text-gray-300">🔍</span>
                    </div>
                    <button class="relative tooltip" data-tooltip="3 Notifikasi Baru">
                        <span class="text-2xl hover:scale-125 transition-transform duration-300">🔔</span>
                        <span class="absolute -top-1 -right-1 bg-cyan-400 text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center animate-pulse">3</span>
                    </button>
                    <div class="flex items-center space-x-3 cursor-pointer hover:scale-105 transition-transform">
                        <div class="text-right">
                            <p class="text-white font-semibold">John Doe</p>
                            <p class="text-cyan-200 text-xs">Administrator</p>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-full flex items-center justify-center text-white font-bold ring-4 ring-cyan-400 ring-opacity-30">
                            JD
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-8 py-12 relative z-10">
        <!-- Hero Welcome Section -->
        <div class="frost-glass rounded-3xl p-10 mb-10 overflow-hidden relative animate-zoomIn" style="animation-delay: 0.2s; opacity: 0;">
            <div class="shimmer-effect absolute inset-0 pointer-events-none"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-cyan-200 text-lg mb-2">Kamis, 6 November 2025</p>
                        <h2 class="text-5xl font-bold text-white mb-4 leading-tight">Selamat Datang Kembali! 🎉</h2>
                        <p class="text-xl text-gray-200 mb-8 max-w-2xl">Produktivitas Anda meningkat 24% minggu ini. Luar biasa!</p>
                        <div class="flex space-x-4">
                            <button class="bg-gradient-to-r from-cyan-400 to-blue-500 text-white font-bold px-8 py-4 rounded-full hover:shadow-2xl hover:scale-105 transition-all duration-300 flex items-center space-x-2">
                                <span>Lihat Analitik</span>
                                <span>📊</span>
                            </button>
                            <button class="bg-white bg-opacity-20 text-white font-semibold px-8 py-4 rounded-full hover:bg-opacity-30 transition-all duration-300">
                                Panduan Cepat
                            </button>
                        </div>
                    </div>
                    <div class="hidden lg:block">
                        <div class="text-9xl animate-wave">🏄</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Card 1 -->
            <div class="frost-glass rounded-2xl p-6 card-3d animate-slideDown" style="animation-delay: 0.3s; opacity: 0;">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center text-2xl shadow-lg">
                        💎
                    </div>
                    <span class="bg-green-400 bg-opacity-20 text-green-300 px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                        <span class="mr-1">↑</span> 18.2%
                    </span>
                </div>
                <h3 class="text-gray-300 text-sm font-medium mb-2">Total Revenue</h3>
                <p class="text-3xl font-bold text-white mb-3">$128,450</p>
                <div class="w-full bg-white bg-opacity-10 rounded-full h-2 overflow-hidden">
                    <div class="progress-bar bg-gradient-to-r from-cyan-400 to-blue-500 h-full rounded-full" style="width: 0%;" onload="this.style.width='75%'"></div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="frost-glass rounded-2xl p-6 card-3d animate-slideDown" style="animation-delay: 0.4s; opacity: 0;">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-teal-400 to-cyan-500 rounded-xl flex items-center justify-center text-2xl shadow-lg">
                        👥
                    </div>
                    <span class="bg-blue-400 bg-opacity-20 text-blue-300 px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                        <span class="mr-1">↑</span> 12.5%
                    </span>
                </div>
                <h3 class="text-gray-300 text-sm font-medium mb-2">Active Users</h3>
                <p class="text-3xl font-bold text-white mb-3">24,582</p>
                <div class="w-full bg-white bg-opacity-10 rounded-full h-2 overflow-hidden">
                    <div class="progress-bar bg-gradient-to-r from-teal-400 to-cyan-500 h-full rounded-full" style="width: 0%;" onload="this.style.width='62%'"></div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="frost-glass rounded-2xl p-6 card-3d animate-slideDown" style="animation-delay: 0.5s; opacity: 0;">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-xl flex items-center justify-center text-2xl shadow-lg">
                        🚀
                    </div>
                    <span class="bg-cyan-400 bg-opacity-20 text-cyan-300 px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                        <span class="mr-1">↑</span> 28.4%
                    </span>
                </div>
                <h3 class="text-gray-300 text-sm font-medium mb-2">Projects</h3>
                <p class="text-3xl font-bold text-white mb-3">1,247</p>
                <div class="w-full bg-white bg-opacity-10 rounded-full h-2 overflow-hidden">
                    <div class="progress-bar bg-gradient-to-r from-blue-400 to-indigo-500 h-full rounded-full" style="width: 0%;" onload="this.style.width='88%'"></div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="frost-glass rounded-2xl p-6 card-3d animate-slideDown" style="animation-delay: 0.6s; opacity: 0;">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-cyan-300 to-teal-500 rounded-xl flex items-center justify-center text-2xl shadow-lg">
                        ⚡
                    </div>
                    <span class="bg-teal-400 bg-opacity-20 text-teal-300 px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                        <span class="mr-1">↑</span> 15.7%
                    </span>
                </div>
                <h3 class="text-gray-300 text-sm font-medium mb-2">Performance</h3>
                <p class="text-3xl font-bold text-white mb-3">94.2%</p>
                <div class="w-full bg-white bg-opacity-10 rounded-full h-2 overflow-hidden">
                    <div class="progress-bar bg-gradient-to-r from-cyan-300 to-teal-500 h-full rounded-full" style="width: 0%;" onload="this.style.width='94%'"></div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activity -->
            <div class="lg:col-span-2 frost-glass rounded-2xl p-8 animate-zoomIn" style="animation-delay: 0.7s; opacity: 0;">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-2xl font-bold text-white">Aktivitas Terbaru</h3>
                    <button class="text-cyan-300 hover:text-cyan-200 font-semibold">Lihat Semua →</button>
                </div>
                <div class="space-y-4">
                    <div class="bg-white bg-opacity-5 rounded-xl p-4 hover:bg-opacity-10 transition-all cursor-pointer group">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-teal-500 rounded-full flex items-center justify-center text-xl group-hover:scale-110 transition-transform">✓</div>
                            <div class="flex-1">
                                <p class="text-white font-semibold">Project "Ocean Wave" selesai dikerjakan</p>
                                <p class="text-cyan-200 text-sm">5 menit yang lalu • oleh Tim Design</p>
                            </div>
                            <span class="text-cyan-400 text-2xl opacity-0 group-hover:opacity-100 transition-opacity">→</span>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-5 rounded-xl p-4 hover:bg-opacity-10 transition-all cursor-pointer group">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-full flex items-center justify-center text-xl group-hover:scale-110 transition-transform">📊</div>
                            <div class="flex-1">
                                <p class="text-white font-semibold">Laporan bulanan telah dihasilkan</p>
                                <p class="text-cyan-200 text-sm">23 menit yang lalu • oleh Sistem</p>
                            </div>
                            <span class="text-cyan-400 text-2xl opacity-0 group-hover:opacity-100 transition-opacity">→</span>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-5 rounded-xl p-4 hover:bg-opacity-10 transition-all cursor-pointer group">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-full flex items-center justify-center text-xl group-hover:scale-110 transition-transform">👤</div>
                            <div class="flex-1">
                                <p class="text-white font-semibold">12 pengguna baru bergabung hari ini</p>
                                <p class="text-cyan-200 text-sm">1 jam yang lalu • Registration</p>
                            </div>
                            <span class="text-cyan-400 text-2xl opacity-0 group-hover:opacity-100 transition-opacity">→</span>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-5 rounded-xl p-4 hover:bg-opacity-10 transition-all cursor-pointer group">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-teal-400 to-cyan-500 rounded-full flex items-center justify-center text-xl group-hover:scale-110 transition-transform">💬</div>
                            <div class="flex-1">
                                <p class="text-white font-semibold">45 pesan baru dari pelanggan</p>
                                <p class="text-cyan-200 text-sm">3 jam yang lalu • Customer Support</p>
                            </div>
                            <span class="text-cyan-400 text-2xl opacity-0 group-hover:opacity-100 transition-opacity">→</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="frost-glass rounded-2xl p-8 animate-zoomIn" style="animation-delay: 0.8s; opacity: 0;">
                <h3 class="text-2xl font-bold text-white mb-6">Quick Actions</h3>
                <div class="space-y-4">
                    <button class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 rounded-xl p-5 hover:shadow-2xl hover:scale-105 transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <span class="text-3xl group-hover:scale-125 transition-transform">➕</span>
                                <span class="text-white font-semibold">Buat Project Baru</span>
                            </div>
                            <span class="text-white opacity-50 group-hover:opacity-100 transition-opacity">→</span>
                        </div>
                    </button>
                    <button class="w-full bg-gradient-to-r from-teal-500 to-cyan-600 rounded-xl p-5 hover:shadow-2xl hover:scale-105 transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <span class="text-3xl group-hover:scale-125 transition-transform">📈</span>
                                <span class="text-white font-semibold">Lihat Analytics</span>
                            </div>
                            <span class="text-white opacity-50 group-hover:opacity-100 transition-opacity">→</span>
                        </div>
                    </button>
                    <button class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl p-5 hover:shadow-2xl hover:scale-105 transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <span class="text-3xl group-hover:scale-125 transition-transform">⚙️</span>
                                <span class="text-white font-semibold">Pengaturan</span>
                            </div>
                            <span class="text-white opacity-50 group-hover:opacity-100 transition-opacity">→</span>
                        </div>
                    </button>
                    <button class="w-full bg-gradient-to-r from-cyan-400 to-teal-500 rounded-xl p-5 hover:shadow-2xl hover:scale-105 transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <span class="text-3xl group-hover:scale-125 transition-transform">📧</span>
                                <span class="text-white font-semibold">Kirim Pesan</span>
                            </div>
                            <span class="text-white opacity-50 group-hover:opacity-100 transition-opacity">→</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Trigger progress bar animations on load
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.querySelectorAll('.progress-bar').forEach(bar => {
                    bar.style.width = bar.getAttribute('onload').match(/\d+/)[0] + '%';
                });
            }, 500);
        });

        // Parallax effect
        document.addEventListener('mousemove', (e) => {
            const cards = document.querySelectorAll('.card-3d');
            const x = e.clientX / window.innerWidth - 0.5;
            const y = e.clientY / window.innerHeight - 0.5;
            
            cards.forEach((card, index) => {
                const intensity = (index + 1) * 2;
                const translateX = x * intensity;
                const translateY = y * intensity;
                card.style.transform = `translate(${translateX}px, ${translateY}px)`;
            });
        });
    </script>
</body>
</html>