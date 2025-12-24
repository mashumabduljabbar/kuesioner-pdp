<?php

return [
    /*
    |--------------------------------------------------------------------------
    | BAGIAN A: SIKAP (ATTITUDE)
    |--------------------------------------------------------------------------
    | Menggunakan Skala Likert 1-5 (Sangat Tidak Setuju - Sangat Setuju).
    | Skor dihitung dari angka yang dipilih (Total 16 soal).
    */
    'attitude' => [
        'A1'  => 'Saya bersedia memberikan data pribadi hanya setelah memahami dasar hukum pemrosesannya.',
        'A2'  => 'Saya secara aktif menyampaikan pendapat dalam diskusi terkait kebijakan privasi.',
        'A3'  => 'Saya bersedia menolong diri sendiri untuk memastikan data pribadi saya terlindungi.',
        'A4'  => 'Saya setuju bahwa data pribadi hanya boleh digunakan untuk tujuan awal pengumpulannya.',
        'A5'  => 'Saya bersedia menyesuaikan diri dengan kebijakan organisasi yang membatasi akses data.',
        'A6'  => 'Saya mempraktekkan kebiasaan memberikan informasi pribadi lebih dari yang diperlukan (Misal: mengisi formulir opsional).',
        'A7'  => 'Saya secara aktif memeriksa dan memperbarui data pribadi saya untuk memastikannya tetap akurat.',
        'A8'  => 'Saya bersedia menyumbangkan peran pribadi dalam menjaga keakuratan data dalam sistem.',
        'A9'  => 'Saya mempraktekkan tindakan pengamanan, seperti menggunakan kata sandi yang kuat.',
        'A10' => 'Saya bersedia membantu membagikan informasi sensitif kepada pihak yang tidak berkepentingan.',
        'A11' => 'Saya menyatakan persetujuan hanya setelah memahami informasi mengenai risiko pemrosesan data.',
        'A12' => 'Saya melaksanakan peninjauan kebijakan atau pengaturan privasi secara berkala.',
        'A13' => 'Saya bersedia menyesuaikan diri dengan aturan organisasi terkait transparansi data.',
        'A14' => 'Saya melaksanakan penghapusan data pribadi yang tidak lagi diperlukan.',
        'A15' => 'Saya mendiskusikan tanggung jawab pribadi dalam menjaga kerahasiaan data.',
        'A16' => 'Saya bersedia menyumbangkan ide atau masukan untuk meningkatkan akuntabilitas data.',
    ],

    /*
    |--------------------------------------------------------------------------
    | BAGIAN B: PENGETAHUAN (KNOWLEDGE)
    |--------------------------------------------------------------------------
    | Pilihan Ganda. Benar = 1, Salah = 0 (Total 16 soal).
    */
    'knowledge' => [
        'K1' => [
            'question' => 'Sebuah aplikasi layanan kesehatan mengumpulkan data medis pasien. Menurut prinsip Lawfulness, Fairness, and Transparency, tindakan apa yang harus dilakukan aplikasi?',
            'options' => [
                'A' => 'Mengolah data tanpa sepengetahuan pasien untuk riset medis.',
                'B' => 'Menjual data medis kepada perusahaan farmasi tanpa izin.',
                'C' => 'Memproses data berdasarkan persetujuan eksplisit dan memberikan informasi yang jelas kepada pasien.',
                'D' => 'Menyembunyikan kebijakan privasi agar pasien tidak bingung.'
            ],
            'correct_answer' => 'C'
        ],
        'K2' => [
            'question' => 'Apa yang dimaksud dengan prinsip Purpose Limitation dalam pelindungan data pribadi?',
            'options' => [
                'A' => 'Data pribadi dapat digunakan untuk tujuan apa pun di masa depan.',
                'B' => 'Data pribadi harus dikumpulkan untuk tujuan yang spesifik, jelas, dan sah.',
                'C' => 'Data pribadi tidak perlu memiliki tujuan saat dikumpulkan.',
                'D' => 'Tujuan pemrosesan data boleh berubah tanpa memberitahu pemilik data.'
            ],
            'correct_answer' => 'B'
        ],
        'K3' => [
            'question' => 'Sebuah toko online hanya meminta alamat email dan nama untuk pendaftaran akun, tanpa meminta nomor KTP. Prinsip apa yang diterapkan?',
            'options' => [
                'A' => 'Prinsip Akurasi.',
                'B' => 'Prinsip Data Minimization.',
                'C' => 'Prinsip Integritas dan Kerahasiaan.',
                'D' => 'Prinsip Akuntabilitas.'
            ],
            'correct_answer' => 'B'
        ],
        'K4' => [
            'question' => 'Apa konsekuensi jika data pribadi yang disimpan tidak akurat (Prinsip Accuracy)?',
            'options' => [
                'A' => 'Data akan lebih aman dari peretasan.',
                'B' => 'Organisasi mendapatkan keuntungan lebih besar.',
                'C' => 'Dapat merugikan pemilik data dalam pengambilan keputusan.',
                'D' => 'Tidak ada konsekuensi bagi pemilik data.'
            ],
            'correct_answer' => 'C'
        ],
        'K5' => [
            'question' => 'Prinsip Storage Limitation mengharuskan organisasi untuk...',
            'options' => [
                'A' => 'Menyimpan data pribadi selamanya.',
                'B' => 'Menghapus data segera setelah dikumpulkan.',
                'C' => 'Menyimpan data hanya selama diperlukan untuk tujuan pemrosesan.',
                'D' => 'Menyimpan data di server luar negeri tanpa pengamanan.'
            ],
            'correct_answer' => 'C'
        ],
        'K6' => [
            'question' => 'Prinsip Integrity and Confidentiality bertujuan untuk melindungi data dari...',
            'options' => [
                'A' => 'Pembaruan data oleh pemiliknya.',
                'B' => 'Penggunaan data sesuai tujuan awal.',
                'C' => 'Transparansi kebijakan privasi.',
                'D' => 'Akses tidak sah dan kerusakan yang tidak disengaja.'
            ],
            'correct_answer' => 'D'
        ],
        'K7' => [
            'question' => 'Manakah yang merupakan wujud dari prinsip Akuntabilitas?',
            'options' => [
                'A' => 'Menyalahkan vendor pihak ketiga jika terjadi kebocoran data.',
                'B' => 'Mengabaikan keluhan pemilik data pribadi.',
                'C' => 'Menyediakan bukti kepatuhan terhadap regulasi pelindungan data.',
                'D' => 'Menghapus log aktivitas pemrosesan data.'
            ],
            'correct_answer' => 'C'
        ],
        'K8' => [
            'question' => 'Apa yang menjadi dasar pemrosesan data yang sah menurut regulasi PDP?',
            'options' => [
                'A' => 'Keinginan pribadi pengelola data.',
                'B' => 'Data tersebut bersifat publik sehingga boleh diambil siapa saja.',
                'C' => 'Persetujuan pemilik data atau kewajiban hukum.',
                'D' => 'Keperluan untuk pemasaran agresif.'
            ],
            'correct_answer' => 'C'
        ],
        'K9' => [
            'question' => 'Informasi apa yang wajib diberikan kepada pemilik data saat pengumpulan data (Prinsip Transparansi)?',
            'options' => [
                'A' => 'Daftar seluruh karyawan perusahaan.',
                'B' => 'Tujuan pemrosesan dan hak-hak pemilik data.',
                'C' => 'Kata sandi server penyimpanan data.',
                'D' => 'Laporan keuangan perusahaan tahun lalu.'
            ],
            'correct_answer' => 'B'
        ],
        'K10' => [
            'question' => 'Mengapa pembatasan tujuan (Purpose Limitation) penting bagi pemilik data?',
            'options' => [
                'A' => 'Agar data dapat dijual ke pihak ketiga dengan mudah.',
                'B' => 'Agar pemilik data tidak perlu memberikan persetujuan.',
                'C' => 'Untuk mencegah penyalahgunaan data di luar kesepakatan awal.',
                'D' => 'Supaya data tidak bisa dihapus.'
            ],
            'correct_answer' => 'C'
        ],
        'K11' => [
            'question' => 'Contoh penerapan Data Minimization adalah...',
            'options' => [
                'A' => 'Meminta riwayat kesehatan untuk pendaftaran aplikasi musik.',
                'B' => 'Menyimpan salinan KTP untuk semua jenis transaksi digital.',
                'C' => 'Hanya mengumpulkan data yang benar-benar relevan dengan layanan.',
                'D' => 'Mengumpulkan data lokasi setiap detik tanpa alasan teknis.'
            ],
            'correct_answer' => 'C'
        ],
        'K12' => [
            'question' => 'Bagaimana organisasi memastikan prinsip Akurasi terpenuhi?',
            'options' => [
                'A' => 'Melarang pemilik data mengubah informasi mereka.',
                'B' => 'Menghapus data setiap minggu tanpa verifikasi.',
                'C' => 'Memberikan akses kepada pemilik data untuk memperbarui datanya.',
                'D' => 'Mengisi data secara acak.'
            ],
            'correct_answer' => 'C'
        ],
        'K13' => [
            'question' => 'Kapan data pribadi harus dihapus atau dianonimkan menurut prinsip Storage Limitation?',
            'options' => [
                'A' => 'Segera setelah data tersebut diunggah.',
                'B' => 'Setelah tujuan pemrosesan tercapai dan tidak ada kewajiban hukum untuk menyimpannya.',
                'C' => 'Hanya jika pemilik data membayar biaya penghapusan.',
                'D' => 'Jika kapasitas server sudah penuh.'
            ],
            'correct_answer' => 'B'
        ],
        'K14' => [
            'question' => 'Enkripsi data merupakan salah satu langkah untuk memenuhi prinsip...',
            'options' => [
                'A' => 'Penyimpanan Terbatas.',
                'B' => 'Integritas dan Kerahasiaan.',
                'C' => 'Minimasi Data.',
                'D' => 'Keadilan Pemrosesan.'
            ],
            'correct_answer' => 'B'
        ],
        'K15' => [
            'question' => 'Siapa yang bertanggung jawab membuktikan kepatuhan terhadap prinsip PDP (Akuntabilitas)?',
            'options' => [
                'A' => 'Pemilik data pribadi.',
                'B' => 'Pengendali/Pengelola data pribadi.',
                'C' => 'Penyedia layanan internet.',
                'D' => 'Kepolisian.'
            ],
            'correct_answer' => 'B'
        ],
        'K16' => [
            'question' => 'Pemrosesan data yang "fair" (adil) berarti...',
            'options' => [
                'A' => 'Boleh melakukan apa saja asal data aman.',
                'B' => 'Memproses data dengan cara yang tidak merugikan atau menipu pemilik data.',
                'C' => 'Memberikan imbalan uang kepada setiap pemilik data.',
                'D' => 'Mengolah data secara rahasia.'
            ],
            'correct_answer' => 'B'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | BAGIAN SJT (SITUATIONAL JUDGMENT TEST)
    |--------------------------------------------------------------------------
    | Pilihan Ganda. Benar = 1, Salah = 0 (Total 16 soal).
    */
    'sjt' => [
        'SJT1' => [
            'question' => 'Anda menemukan bahwa perusahaan tempat Anda bekerja ingin mengumpulkan data riwayat panggilan telepon karyawan untuk "meningkatkan produktivitas" tanpa pemberitahuan resmi. Apa tindakan yang paling sesuai dengan prinsip PDP?',
            'options' => [
                'A' => 'Mendukung kebijakan tersebut agar produktivitas meningkat.',
                'B' => 'Menyarankan agar perusahaan memberikan transparansi dan meminta persetujuan karyawan.',
                'C' => 'Mengabaikannya karena itu kebijakan manajemen.',
                'D' => 'Membocorkan data tersebut ke media sosial.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT2' => [
            'question' => 'Seorang kolega meminta Anda mengirimkan database pelanggan lama untuk keperluan promosi proyek pribadinya di luar kantor. Apa tindakan Anda?',
            'options' => [
                'A' => 'Memberikannya karena dia adalah teman baik.',
                'B' => 'Menolak dengan menjelaskan bahwa data tersebut dikumpulkan hanya untuk tujuan kantor (Purpose Limitation).',
                'C' => 'Memberikan sebagian data agar tidak menyinggungnya.',
                'D' => 'Meminta imbalan atas data tersebut.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT3' => [
            'question' => 'Tim pemasaran meminta formulir pendaftaran acara baru mencantumkan kolom "Agama" dan "Pandangan Politik", padahal acara tersebut adalah seminar teknik. Apa yang Anda lakukan?',
            'options' => [
                'A' => 'Menyetujui agar profil peserta lebih lengkap.',
                'B' => 'Menyarankan penghapusan kolom tersebut karena tidak relevan dengan tujuan (Data Minimization).',
                'C' => 'Tetap mencantumkannya tetapi bersifat opsional.',
                'D' => 'Mengganti kolom tersebut dengan kolom hobi.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT4' => [
            'question' => 'Anda menyadari bahwa alamat pelanggan di sistem pengiriman banyak yang salah ketik, sehingga paket sering nyasar. Apa tindakan Anda?',
            'options' => [
                'A' => 'Menyalahkan kurir yang kurang teliti.',
                'B' => 'Mengusulkan fitur verifikasi alamat atau update data mandiri oleh pelanggan (Accuracy).',
                'C' => 'Membiarkan saja karena bukan tugas saya.',
                'D' => 'Menghapus semua alamat yang salah.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT5' => [
            'question' => 'Anda menemukan folder di komputer kantor yang berisi scan KTP pelamar kerja dari 5 tahun lalu yang sudah tidak diproses. Apa tindakan yang tepat?',
            'options' => [
                'A' => 'Mengusulkan penghapusan sesuai kebijakan penyimpanan (Storage Limitation).',
                'B' => 'Menyimpan data tersebut untuk cadangan masa depan.',
                'C' => 'Mengunggahnya ke penyimpanan awan (cloud) pribadi.',
                'D' => 'Membiarkannya agar folder tidak kosong.'
            ],
            'correct_answer' => 'A'
        ],
        'SJT6' => [
            'question' => 'Anda melihat rekan kerja meninggalkan komputer dalam keadaan terbuka dengan data penggajian karyawan terlihat di layar, sementara dia pergi makan siang. Apa yang Anda lakukan?',
            'options' => [
                'A' => 'Melihat-lihat gajinya karena penasaran.',
                'B' => 'Mengingatkan rekan tersebut untuk mengunci layar (Integrity & Confidentiality).',
                'C' => 'Memotret layar tersebut untuk berjaga-jaga.',
                'D' => 'Mematikan komputer secara paksa.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT7' => [
            'question' => 'Pimpinan meminta laporan data pelanggan segera, tetapi Anda belum memiliki mekanisme untuk melacak siapa saja yang mengakses data tersebut. Apa tindakan Anda?',
            'options' => [
                'A' => 'Memberikan laporan tanpa catatan akses.',
                'B' => 'Menolak memberikan laporan selamanya.',
                'C' => 'Memberikan laporan dan mengusulkan pembuatan log akses (Accountability).',
                'D' => 'Memalsukan log akses agar terlihat tertib.'
            ],
            'correct_answer' => 'C'
        ],
        'SJT8' => [
            'question' => 'Seorang nasabah menelpon untuk menanyakan mengapa datanya masih digunakan untuk penawaran asuransi, padahal dia sudah menutup akun 2 tahun lalu. Apa respons Anda?',
            'options' => [
                'A' => 'Menjawab bahwa data akan disimpan selamanya.',
                'B' => 'Menjelaskan haknya untuk penghapusan data dan melakukan pengecekan sistem (Lawfulness/Fairness).',
                'C' => 'Langsung menutup telepon.',
                'D' => 'Meminta nasabah untuk tidak komplain.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT9' => [
            'question' => 'Anda diminta membuat kebijakan privasi untuk aplikasi baru. Mana pendekatan yang Anda pilih?',
            'options' => [
                'A' => 'Menggunakan bahasa hukum yang sangat rumit agar pengguna tidak mengerti.',
                'B' => 'Menggunakan bahasa yang sederhana, jelas, dan mudah diakses pengguna (Transparency).',
                'C' => 'Menyalin kebijakan dari aplikasi luar negeri tanpa diterjemahkan.',
                'D' => 'Tidak membuat kebijakan privasi agar tidak repot.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT10' => [
            'question' => 'Perusahaan ingin menggunakan data pembelian pelanggan untuk melatih algoritma AI baru. Apa langkah pertama yang harus dilakukan sesuai prinsip Purpose Limitation?',
            'options' => [
                'A' => 'Langsung menjalankan AI tanpa izin.',
                'B' => 'Memeriksa apakah tujuan ini sejalan dengan persetujuan awal atau perlu izin baru.',
                'C' => 'Menyembunyikan proses AI ini dari publik.',
                'D' => 'Menghapus data asli setelah dimasukkan ke AI.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT11' => [
            'question' => 'Saat merancang formulir survei kepuasan pelanggan, Anda memutuskan untuk tidak meminta Nama dan Nomor Telepon peserta jika tidak diperlukan. Prinsip apa yang Anda terapkan?',
            'options' => [
                'A' => 'Data Minimization.',
                'B' => 'Integritas.',
                'C' => 'Akuntabilitas.',
                'D' => 'Akurasi.'
            ],
            'correct_answer' => 'A'
        ],
        'SJT12' => [
            'question' => 'Anda menemukan ada data ganda pada sistem keanggotaan. Apa yang seharusnya Anda lakukan?',
            'options' => [
                'A' => 'Melakukan pembersihan data (data cleansing) agar informasi tetap akurat (Accuracy).',
                'B' => 'Membiarkannya agar jumlah anggota terlihat lebih banyak.',
                'C' => 'Menghapus semua data yang ada di sistem.',
                'D' => 'Menjual data ganda tersebut.'
            ],
            'correct_answer' => 'A'
        ],
        'SJT13' => [
            'question' => 'Sistem cadangan (backup) data kantor disimpan dalam harddisk eksternal yang tidak dipassword dan diletakkan di atas meja. Apa tindakan Anda?',
            'options' => [
                'A' => 'Mengabaikannya karena itu backup lama.',
                'B' => 'Membawa harddisk tersebut pulang.',
                'C' => 'Menyarankan penggunaan enkripsi dan tempat penyimpanan terkunci (Integrity & Confidentiality).',
                'D' => 'Menghapus isi harddisk agar aman.'
            ],
            'correct_answer' => 'C'
        ],
        'SJT14' => [
            'question' => 'Seorang mantan karyawan masih memiliki akses ke sistem database perusahaan. Apa tindakan yang tepat bagi tim IT?',
            'options' => [
                'A' => 'Membiarkannya selama dia tidak berbuat jahat.',
                'B' => 'Meminta dia untuk tidak masuk ke sistem.',
                'C' => 'Segera mencabut hak akses sebagai bentuk tanggung jawab (Accountability/Confidentiality).',
                'D' => 'Memberikan bonus agar dia tidak membocorkan data.'
            ],
            'correct_answer' => 'C'
        ],
        'SJT15' => [
            'question' => 'Organisasi Anda mengalami kebocoran data kecil. Atasan menyuruh untuk merahasiakannya agar nama baik terjaga. Apa tindakan Anda?',
            'options' => [
                'A' => 'Mengikuti perintah atasan sepenuhnya.',
                'B' => 'Menyarankan untuk mengikuti prosedur hukum, yaitu melapor ke otoritas dan pemilik data (Transparency).',
                'C' => 'Keluar dari perusahaan tanpa bicara apa pun.',
                'D' => 'Menyebarkan berita tersebut secara anonim di internet.'
            ],
            'correct_answer' => 'B'
        ],
        'SJT16' => [
            'question' => 'Anda menerima email penawaran dari bank yang tidak pernah Anda hubungi. Mereka menyebutkan data Anda didapat dari "mitra". Apa yang Anda lakukan berdasarkan prinsip Lawfulness?',
            'options' => [
                'A' => 'Mempertanyakan dasar hukum pemindahan data saya ke bank tersebut.',
                'B' => 'Langsung membeli produk yang ditawarkan.',
                'C' => 'Memaki-maki pengirim email.',
                'D' => 'Memberikan data tambahan agar lebih lengkap.'
            ],
            'correct_answer' => 'A'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | BAGIAN C: KETERAMPILAN (SKILLS)
    |--------------------------------------------------------------------------
    | Urutan Langkah. Benar = 1, Salah = 0 (Total 16 soal).
    */
    'skills' => [
        'P1' => [
            'question' => 'Urutkan langkah memproses data pelanggan baru:',
            'options' => [
                'A' => 'B - C - A (Beri info tujuan -> Minta izin -> Simpan data)',
                'B' => 'A - B - C', 'C' => 'C - A - B', 'D' => 'B - A - C'
            ],
            'correct_answer' => 'A'
        ],
        'P2' => [
            'question' => 'Urutkan langkah menangani perubahan tujuan penggunaan data:',
            'options' => [
                'A' => 'C - B - A',
                'B' => 'A - B - C (Identifikasi tujuan baru -> Beri tahu pemilik -> Minta persetujuan baru)',
                'C' => 'B - A - C', 'D' => 'A - C - B'
            ],
            'correct_answer' => 'B'
        ],
        'P3' => [
            'question' => 'Urutkan langkah pendaftaran aplikasi (Minimasi Data):',
            'options' => [
                'A' => 'B - C - A (Tentukan data minimal -> Hapus field tidak perlu -> Buat formulir)',
                'B' => 'A - B - C', 'C' => 'C - A - B', 'D' => 'B - A - C'
            ],
            'correct_answer' => 'A'
        ],
        'P4' => [
            'question' => 'Urutkan langkah verifikasi akurasi data:',
            'options' => [
                'A' => 'C - B - A',
                'B' => 'B - A - C',
                'C' => 'A - B - C (Kirim notifikasi cek data -> Izinkan koreksi -> Perbarui database)',
                'D' => 'A - C - B'
            ],
            'correct_answer' => 'C'
        ],
        'P5' => [
            'question' => 'Urutkan langkah penghapusan data (Storage Limitation):',
            'options' => [
                'A' => 'A - B - C',
                'B' => 'C - B - A',
                'C' => 'B - C - A',
                'D' => 'B - A - C (Identifikasi data kadaluarsa -> Konfirmasi -> Hapus permanen)'
            ],
            'correct_answer' => 'D'
        ],
        'P6' => [
            'question' => 'Urutkan langkah pengamanan akses data:',
            'options' => [
                'A' => 'A - B - C',
                'B' => 'B - A - C (Tentukan level akses -> Berikan password -> Monitor log akses)',
                'C' => 'C - B - A', 'D' => 'B - C - A'
            ],
            'correct_answer' => 'B'
        ],
        'P7' => [
            'question' => 'Urutkan langkah audit internal (Akuntabilitas):',
            'options' => [
                'A' => 'C - B - A',
                'B' => 'A - B - C (Periksa kebijakan -> Cek kepatuhan nyata -> Buat laporan)',
                'C' => 'B - A - C', 'D' => 'A - C - B'
            ],
            'correct_answer' => 'B'
        ],
        'P8' => [
            'question' => 'Urutkan langkah meluncurkan kebijakan privasi:',
            'options' => [
                'A' => 'B - A - C',
                'B' => 'C - B - A',
                'C' => 'A - B - C (Susun bahasa sederhana -> Publikasikan -> Sediakan kontak pengaduan)',
                'D' => 'A - C - B'
            ],
            'correct_answer' => 'C'
        ],
        'P9' => [
            'question' => 'Urutkan langkah menangani keluhan pemilik data:',
            'options' => [
                'A' => 'B - C - A',
                'B' => 'A - C - B',
                'C' => 'A - B - C (Terima keluhan -> Verifikasi identitas -> Berikan tanggapan)',
                'D' => 'C - B - A'
            ],
            'correct_answer' => 'C'
        ],
        'P10' => [
            'question' => 'Urutkan langkah transfer data ke pihak ketiga:',
            'options' => [
                'A' => 'C - B - A',
                'B' => 'A - B - C (Verifikasi kontrak -> Enkripsi data -> Kirim melalui jalur aman)',
                'C' => 'B - A - C', 'D' => 'A - C - B'
            ],
            'correct_answer' => 'B'
        ],
        'P11' => [
            'question' => 'Urutkan langkah anonimisasi data untuk riset:',
            'options' => [
                'A' => 'B - A - C',
                'B' => 'C - B - A',
                'C' => 'A - B - C (Hapus identitas langsung -> Kelompokkan data -> Uji efektivitas anonimitas)',
                'D' => 'A - C - B'
            ],
            'correct_answer' => 'C'
        ],
        'P12' => [
            'question' => 'Urutkan langkah mengamankan dokumen fisik (KTP/Formulir):',
            'options' => [
                'A' => 'A - B - C',
                'B' => 'C - B - A',
                'C' => 'B - C - A',
                'D' => 'A - B - C (Kumpulkan dokumen -> Simpan di lemari kunci -> Catat siapa yang meminjam)'
            ],
            'correct_answer' => 'D'
        ],
        'P13' => [
            'question' => 'Urutkan langkah verifikasi identitas via telepon:',
            'options' => [
                'A' => 'A - B - C (Tanyakan data dasar -> Cocokkan dengan sistem -> Berikan informasi)',
                'B' => 'C - B - A', 'C' => 'B - A - C', 'D' => 'A - C - B'
            ],
            'correct_answer' => 'A'
        ],
        'P14' => [
            'question' => 'Urutkan langkah menghapus akun pengguna:',
            'options' => [
                'A' => 'B - C - A',
                'B' => 'A - C - B',
                'C' => 'A - B - C (Terima permintaan -> Verifikasi -> Hapus data dari database utama & backup)',
                'D' => 'C - B - A'
            ],
            'correct_answer' => 'C'
        ],
        'P15' => [
            'question' => 'Urutkan langkah sosialisasi PDP di kantor:',
            'options' => [
                'A' => 'A - B - C',
                'B' => 'C - B - A',
                'C' => 'B - C - A',
                'D' => 'A - B - C (Siapkan materi -> Lakukan training -> Uji pemahaman karyawan)'
            ],
            'correct_answer' => 'D'
        ],
        'P16' => [
            'question' => 'Urutkan langkah menyajikan bukti audit:',
            'options' => [
                'A' => 'A - B - C',
                'B' => 'B - A - C',
                'C' => 'C - B - A',
                'D' => 'A - B - C (Kumpulkan log -> Validasi kelengkapan -> Sajikan ke auditor)'
            ],
            'correct_answer' => 'D'
        ],
    ]
];