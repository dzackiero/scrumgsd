<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            1 => "Kemampuan melakukan pengembangan pengetahuan tentang produk",
            2 => "Kemampuan memfasilitasi pengembangan pengetahuan tentang produk",
            3 => "Kemampuan merakit Definition of Done (DoD) yang efektif",
            4 => "Kemampuan membuat product increment sehingga bisa menghasilkan suatu nilai",
            5 => "Kemampuan memberi pertimbangan pemilihan alat dan teknologi umum",
            6 => "Kemampuan memfasilitasi re-platforming, pertimbangan keamanan dengan kepemimpinan teknologi",
            7 => "Kemampuan mengkreasikan praktik Scrum yang disesuaikan dengan alokasi kerja terdistribusi",
            8 => "Kemampuan mengadaptasi jam kerja untuk mendapatkan efisiensi dari konsep Follow the Sun (FTS)",
            9 => "Kemampuan menggunakan teknik komunikasi sinkronous dan asinkronous dalam konteks global",
            10 => "Kemampuan menggunakan tulisan maupun percakapan yang jelas dan fasih dalam bahasa asing untuk berkomunikasi dengan tim yang berbeda budaya dan kepribadian",
        ];

        $options = [
            1 => [
                [
                    "text" => "Memahami secara menyeluruh dan mendalam kebutuhan pengguna, tujuan bisnis, fitur dan fungsionalitas produk yang sedang dikembangkan",
                    "value" => 2.51
                ],
                [
                    "text" => "Aktif melakukan riset pasar, menganalisis tren industri, dan mengumpulkan informasi terkini terkait produk",
                    "value" => 2.26
                ],
                [
                    "text" => "Tajam dalam merinci kebutuhan dan peluang pengembangan berdasarkan pengetahuan yang diperoleh",
                    "value" => 2.26
                ],
                [
                    "text" => "Mengintegrasikan pengetahuan produk ke dalam siklus pengembangan",
                    "value" => 2.43
                ],
                [
                    "text" => "Menghubungkan informasi dengan tindakan konkrit, seperti perancangan fitur atau pengembangan solusi yang relevan",
                    "value" => 2.26
                ],
                [
                    "text" => "Menggunakan metrik kinerja produk untuk mengevaluasi keberhasilan dan menentukan arah pengembangan selanjutnya",
                    "value" => 2.18
                ],
                [
                    "text" => "Responsif dan cepat menyesuaikan strategi pengembangan dan mengambil tindakan yang diperlukan terhadap perubahan kebutuhan pasar atau umpan balik pengguna terkait produk",
                    "value" => 2.43
                ],
            ],
            2 => [
                [
                    "text" => "Mengidentifikasi dan memperdalam pengetahuan produk yang relevan dan secara efektif membagikannya di dalam tim",
                    "value" => 2.43
                ],
                [
                    "text" => "Menggunakan teknik pengembangan seperti merancang prototipe untuk menggali lebih dalam pengetahuan produk",
                    "value" => 2.26
                ],
                [
                    "text" => "Tidak hanya memahami produk secara teoritis tetapi juga mampu mengaplikasikan konsep-konsep tersebut dalam konteks nyata melalui pembuatan prototipe",
                    "value" => 2.35
                ],
                [
                    "text" => "Terlibat aktif dalam proses pengembangan produk dan berkontribusi pada diskusi strategis terkait arah pengembangan produk",
                    "value" => 2.43
                ],
                [
                    "text" => "Terlibat dan berkontribusi dalam membuat keputusan terkait pengembangan produk, menunjukkan pemahaman yang mendalam tentang produk dan visi bisnis",
                    "value" => 2.35
                ],

            ],
            3 => [
                [
                    "text" => "Memastikan bahwa DoD mencakup aspek keamanan dan kualitas yang memadai untuk memastikan bahwa setiap increment produk memenuhi standar keamanan dan kualitas yang ditetapkan",
                    "value" => 2.51
                ],
            ],
            4 => [
                [
                    "text" => "Berkomunikasi aktif dengan pelanggan dan pemangku kepentingan untuk memahami kebutuhan mereka",
                    "value" => 2.6
                ],
                [
                    "text" => "Menyampaikan hasil kerja secara teratur, menciptakan transparansi dalam proses pengembangan",
                    "value" => 2.6
                ],
                [
                    "text" => "Merespons perubahan kebutuhan atau umpan balik pelanggan dengan cepat dan efektif",
                    "value" => 2.26
                ],
                [
                    "text" => "Mengadaptasi 'product increment' berdasarkan perubahan kondisi atau harapan pelanggan",
                    "value" => 2.26
                ],
                [
                    "text" => "Memahami nilai bisnis dari setiap 'product increment' yang dihasilkan",
                    "value" => 2.35
                ],
            ],
            5 => [
                [
                    "text" => "Menilai kesesuaian alat dan teknologi untuk kebutuhan proyek atau tugas pengembangan yang spesifik",
                    "value" => 2.26
                ],
                [
                    "text" => "Memberikan pertimbangan yang cerdas dan relevan dalam pemilihan alat dan teknologi berdasarkan tujuan proyek dan kebutuhan bisnis dari aspek skalabilitas dan efisiensi",
                    "value" => 2.26
                ],
                [
                    "text" => "Memilih solusi yang tidak hanya sesuai dengan kebutuhan saat ini tetapi juga dapat berkembang seiring waktu tanpa mengorbankan kinerja atau keefisienan",
                    "value" => 2.43
                ],
                [
                    "text" => "Mengevaluasi keberlanjutan alat dan teknologi yang dipilih serta tingkat dukungan yang tersedia dari komunitas atau penyedia",
                    "value" => 2.43
                ],
            ],
            6 => [
                [
                    "text" => "Mengidentifikasi dan merinci kebutuhan re-platforming secara komprehensif",
                    "value" => 2.43
                ],
                [
                    "text" => "Memasukkan pertimbangan keamanan dalam proses re-platforming",
                    "value" => 2.60
                ],
                [
                    "text" => "Mengidentifikasi potensi risiko keamanan, menerapkan praktik keamanan terbaik, dan memastikan bahwa re-platforming tidak mengorbankan keamanan sistem",
                    "value" => 2.43
                ],
                [
                    "text" => "Mengidentifikasi, mengelola, dan merinci risiko terkait re-platforming, serta mempertimbangkan dampak bisnis yang mungkin terjadi selama dan setelah proses migrasi",
                    "value" => 2.5
                ],
                [
                    "text" => "Memimpin dan memfasilitasi re-platforming dengan memastikan adopsi teknologi yang tepat, koordinasi yang efektif antar tim, dan komunikasi yang baik dengan pihak-pihak terkait",
                    "value" => 2.26
                ],
            ],
            7 => [
                [
                    "text" => "Mengkreasikan dan mengadaptasi praktik-praktik Scrum ke dalam konteks alokasi kerja terdistribusi",
                    "value" => 2.26
                ],
                [
                    "text" => "Membuat penyesuaian yang diperlukan dalam tahapan Scrum, seperti sprint planning, daily scrum, dan sprint review, untuk mendukung keberhasilan tim yang tersebar",
                    "value" => 2.43
                ],
                [
                    "text" => "Memilih, mengonfigurasi, dan menggunakan alat dan teknologi kolaboratif dengan efektif untuk mendukung komunikasi dan koordinasi antar anggota tim yang berlokasi di lokasi yang berbeda",
                    "value" => 2.43
                ],
                [
                    "text" => "Memberikan pemantauan dan transparansi yang cukup terhadap progres pekerjaan, terutama dalam situasi alokasi kerja yang terdistribusi",
                    "value" => 2.43
                ],
                [
                    "text" => "Melakukan refleksi reguler, menerima umpan balik, dan menggabungkan pembelajaran mereka ke dalam proses kerja secara berkelanjutan",
                    "value" => 2.43
                ],
                [
                    "text" => "Menyediakan metrik dan laporan yang relevan serta dapat diakses oleh semua anggota tim",
                    "value" => 2.43
                ],
                [
                    "text" => "Mengidentifikasi dan mengelola risiko yang terkait dengan alokasi kerja terdistribusi, seperti perbedaan waktu, budaya, atau hambatan komunikasi",
                    "value" => 2.43
                ],
            ],
            8 => [
                [
                    "text" => "Memastikan komunikasi yang efektif dan sinkronisasi antaranggota tim yang berada di zona waktu yang berbeda",
                    "value" => 2.43
                ],
                [
                    "text" => "Menggunakan alat komunikasi dan kolaborasi secara efisien, seperti penggunaan platform virtual dan rapat sinkronisasi yang terjadwal",
                    "value" => 2.35
                ],
                [
                    "text" => "Cepat menanggapi perubahan kondisi, seperti perubahan kebutuhan atau jadwal, dan tetap efisien dalam menerapkan perubahan tersebut di seluruh tim global",
                    "value" => 2.35
                ],
                [
                    "text" => "Memahami dinamika pekerjaan dan kehidupan anggota tim yang berada di zona waktu yang berbeda, menciptakan lingkungan kerja yang inklusif dan mendukung",
                    "value" => 2.35
                ],
                [
                    "text" => "Memastikan komunikasi yang efektif dan sinkronisasi antaranggota tim yang berada di zona waktu yang berbeda",
                    "value" => 2.43
                ],
                [
                    "text" => "Menggunakan alat komunikasi dan kolaborasi secara efisien, seperti penggunaan platform virtual dan rapat sinkronisasi yang terjadwal",
                    "value" => 2.35
                ],
                [
                    "text" => "Cepat menanggapi perubahan kondisi, seperti perubahan kebutuhan atau jadwal, dan tetap efisien dalam menerapkan perubahan tersebut di seluruh tim global",
                    "value" => 2.35
                ],
                [
                    "text" => "Memahami dinamika pekerjaan dan kehidupan anggota tim yang berada di zona waktu yang berbeda, menciptakan lingkungan kerja yang inklusif dan mendukung",
                    "value" => 2.35
                ],
            ],
            9 => [
                [
                    "text" => "Memastikan kesinambungan informasi di platform asynchronous, memastikan bahwa anggota tim yang berbeda waktu masih dapat mengakses informasi terkini dan konteks proyek",
                    "value" => 2.26
                ],
                [
                    "text" => "Menciptakan lingkungan kolaboratif yang memungkinkan partisipasi aktif dan pemahaman bersama di antara anggota tim yang tersebar secara global",
                    "value" => 2.51
                ],
            ],
            10 => [
                [
                    "text" => "Memastikan kesinambungan informasi di platform asynchronous, memastikan bahwa anggota tim yang berbeda waktu masih dapat mengakses informasi terkini dan konteks proyek",
                    "value" => 2.26
                ],
                [
                    "text" => "Menciptakan lingkungan kolaboratif yang memungkinkan partisipasi aktif dan pemahaman bersama di antara anggota tim yang tersebar secara global",
                    "value" => 2.51
                ],
            ]
        ];

        foreach ($questions as $order => $question) {
            $question = Question::create([
                "text" => $question,
                "order" => $order,
            ]);

            $q_options = $options[$order];
            foreach ($q_options as $option) {
                Option::create([
                    "question_id" => $question->id,
                    "text" => $option["text"],
                    "value" => $option["value"],
                ]);
            }
        }
    }
}
