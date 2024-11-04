<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                "title" => "Sangkuriang",
                "slug" => "sangkuriang",
                "author" => "Ikranegara, Tira",
                "publication" => "2008-01-01",
                "publisher" => "Surabaya : Serba Jaya, 2008",
                "price" => 0,
                "format" => "pdf",
                "description" => "Sangkuriang adalah legenda dari Jawa Barat tentang seorang pemuda bernama Sangkuriang yang jatuh cinta pada ibunya sendiri, Dayang Sumbi, tanpa menyadarinya. Untuk menghindari pernikahan, Dayang Sumbi meminta Sangkuriang membuat danau dan perahu dalam semalam. Ketika hampir selesai, Dayang Sumbi menggagalkan usahanya, membuat Sangkuriang marah dan menendang perahu hingga terbalik, yang kemudian menjadi Gunung Tangkuban Perahu.",
                "like" => 12,
                "point" => 20,
                "file_name" => "sangkuriang.pdf",
                "total_page" => 3,
                "cover_name" => "cover-sangkuriang.jpg"
            ],
            [
                "title" => "Sejenak Hening: Menjalani Setiap Hari dengan Hidup Sehat",
                "slug" => "sejenak-hening-menjalani-setiap-hari-dengan-hidup-sehat",
                "author" => "Adjie Silarus",
                "publication" => "2018-01-01",
                "publisher" => "Metagraf",
                "price" => 0,
                "format" => "pdf",
                "description" => "
                    Menjalani setiap hari dalam hidup dengan sadar, sederhana, dan bahagia Setiap manusia pasti menginginkan kebahagiaan dalam hidupnya. Untuk meraih kebahagiaan tidak perlu meraih harta duniawi terlebih dahulu. Bahagia itu juga tidak ditentukan oleh hal-hal yang di luar diri kita, bahagia itu begitu sederhana. Bahagia sejatinya ada dalam hati kita, hanya saja kita sebagai manusia kerap kali tidak menyadarinya.
                    Karena itulah ada baiknya kita meluangkan waktu untuk sejenak hening atau hening sejenak agar kita bisa menemukan arti kebahagiaan yang hakiki. Sejenak hening akan membuat jiwa kita merasa lebih bersemangat dan bergairah menghadapi hidup dengan bahagia. Kita berpijak pada masa kini, saat ini, jadi bukan waktunya untuk termenung mengingat segala memori masa lalu, baik pahit maupun manis.
                    Bukan juga waktunya untuk ragu dengan ketakutan-ketakutan masa depan yang belum jelas di depan mata. Yang ada adalah hidup kita sekarang, yang harus disyukuri sepenuhnya. Dan kebahagiaan itu ada dalam hati kita sendiri, bukan terletak pada orang lain atau hal-hal di sekitar kita.
                ",
                "like" => 112,
                "file_name" => "sejenak-hening.pdf",
                "total_page" => 326,
                "cover_name" => "cover-sejenak-hening.jpg"
            ],
            [
                "title" => "Merengkuh Kebahagiaan di Dunia yang Penuh Ketidakpastian",
                "slug" => "merengkuh-kebahagiaan-di-dunia-yang-penuh-ketidakpastian",
                "author" => "Adjie Silarus",
                "publication" => "2020-01-01",
                "publisher" => "Gramedia Pustaka Utama",
                "price" => 0,
                "format" => "pdf",
                "description" => "Dua tokoh besar spiritual. Lima hari. Satu pertanyaan klasik sepanjang masa. Peraih Penghargaan Nobel Yang Mulia Dalai Lama dan Uskup Agung Desmond Tutu berhasil bertahan dalam pengasingan dan tekanan kekejaman yang menghancurkan jiwa selama lebih dari lima puluh tahun. Terlepas dari segala kesulitan yang mereka hadapi—atau, seperti kata mereka, justru karena hal itu—mereka adalah dua orang yang paling dipenuhi sukacita di dunia ini. Mereka pun merefleksikan kehidupan mereka yang panjang untuk menjawab pertanyaan yang ada di benak hampir semua orang: Bagaimana kita bisa menemukan sukacita saat menghadapi penderitaan hidup yang tak terperi? Buku ini menyajikan kesempatan langka bagi kita untuk menyaksikan mereka menggali Sifat-Sifat Sukacita yang Sesungguhnya dan menyikapi Halangan bagi Sukacita—rasa takut, stres, amarah, duka, kesakitan, dan kematian. Mereka lalu menawarkan Delapan Pilar Sukacita, yang memberikan fondasi untuk kebahagiaan yang bertahan lama, lewat kisah, kebijaksanaan, dan ilmu pengetahuan. Tak hanya itu, mereka juga berbagi Praktik-Praktik Sukacita harian yang menjadi penguat hidup emosi dan spiritual mereka. Lewat kolaborasi yang unik ini, kita bisa menarik inspirasi untuk menemukan kedamaian, keberanian, dan sukacita, lalu menerapkannya dalam hidup kita sendiri.",
                "like" => 500,
                "point" => 5,
                "file_name" => "merengkuh-kebahagiaan.pdf",
                "total_page" => 384,
                "cover_name" => "cover-merengkuh-kebahagiaan.jpg"
            ],
            [
                "title" => "Geochemical and biogeochemical reaction modeling",
                "slug" => "geochemical-and-biogeochemical-reaction-modeling",
                "author" => "Bethke, Craig M.",
                "publication" => "2007-01-01",
                "publisher" => "Cambridge University Press",
                "price" => 0,
                "format" => "pdf",
                "description" => "This book provides a comprehensive overview of reaction processes in the Earth's crust and on its surface, both in the laboratory and in the field. A clear exposition of the underlying equations and calculation techniques is balanced by a large number of fully worked examples. The book uses The Geochemist's Workbench® modeling software, developed by the author and already installed at over 1000 universities and research facilities worldwide. Since publication of the first edition, the field of reaction modeling has continued to grow and find increasingly broad application. In particular, the description of microbial activity, surface chemistry, and redox chemistry within reaction models has become broader and more rigorous. These areas are covered in detail in this new edition, which was originally published in 2007. This text is written for graduate students and academic researchers in the fields of geochemistry, environmental engineering, contaminant hydrology, geomicrobiology, and numerical modeling.
                ",
                "like" => 1400,
                "file_name" => "geochemical-and-biogeochemical-reaction-modeling.pdf",
                "total_page" => 565,
                "cover_name" => "cover-geochemical.jpg"
            ],
            [
                "title" => "Pedoman Umum Panen & PascaPanen Tanaman Obat",
                "slug" => "pedoman-umum-panen-&-pascapanen-tanaman-obat",
                "author" => "Kemenkes RI",
                "publication" => "2011-01-01",
                "publisher" => "Kemenkes",
                "price" => 0,
                "format" => "pdf",
                "description" => "Buku ini Membahas Tentang Panen dan Pascapanen Tanaman Obat.",
                "like" => 0,
                "file_name" => "sejenak-hening.pdf",
                "total_page" => 62,
                "cover_name" => "cover-pedoman.jpg"
            ],
            [
                "title" => "Literasi sebagai Praktik Sosial",
                "slug" => "literasi-sebagai-praktik-sosial",
                "author" => "Sofie Dewayani & Pratiwi Retnaningdyah",
                "publication" => "2007-05-01",
                "publisher" => "PT Remaja Rosdakarya",
                "price" => 0,
                "format" => "pdf",
                "description" => " Buku ini akan membantu para pembaca memperluas makna literasi. Sangat penting dibaca oleh siapapun yang peduli
                        terhadap peningkatan kemampuan berliterasi masyarakat.
                        Lebih-lebih di era digital yang luber informasi seperti saat
                        ini. Pengalaman penulis bergulat dengan teks sangat menarik
                        dan begitu dekat—terjangkau oleh diri saya yang ingin sekali
                        bangsa ini menjadi literat dan peduli terhadap membaca dan
                        menulis.",
                "like" => 345,
                "file_name" => "literasi-sebagai-praktik-sosial.pdf",
                "total_page" => 248,
                "cover_name" => "cover-literasi-sebagai-praktik-sosial.jpg"
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
