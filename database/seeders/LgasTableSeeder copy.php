<?php

namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Laravolt\Indonesia\Models\Province;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 9, 9, 9, 9, 9, 9, 9, 11, 11, 11, 11, 11, 11, 11, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 26, 26, 26, 26, 26, 26, 26, 26, 41, 41, 41, 41, 41, 41, 41, 41, 41, 42, 42, 42, 42, 42, 42, 42, 42, 42, 42, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 51, 51, 51, 51, 51, 51, 51, 51, 51, 51, 51, 51, 51, 51, 52, 52, 52, 52, 52, 52, 52, 52, 52, 52, 52, 52, 52, 52, 53, 53, 53, 53, 53, 53, 53, 53, 53, 53, 53, 53, 53, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 55, 55, 55, 55, 55, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 61, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 63, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 65, 65, 65, 65, 65, 65, 66, 66, 66, 66, 66, 66, 71, 71, 71, 71, 71, 71, 71, 71, 71, 71, 71, 72, 72, 72, 72, 72, 72, 72, 72, 72, 72, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 81, 82, 82, 82, 82, 82, 82, 82, 82, 82, 82, 82, 82, 82,
        ];

        $lgas = [
            "KABUPATEN ACEH SELATAN", "KABUPATEN ACEH TENGGARA", "KABUPATEN ACEH TIMUR", "KABUPATEN ACEH TENGAH", "KABUPATEN ACEH BARAT", "KABUPATEN ACEH BESAR", "KABUPATEN PIDIE", "KABUPATEN ACEH UTARA", "KABUPATEN SIMEULUE", "KABUPATEN ACEH SINGKIL", "KABUPATEN BIREUEN", "KABUPATEN ACEH BARAT DAYA", "KABUPATEN GAYO LUES", "KABUPATEN ACEH JAYA", "KABUPATEN NAGAN RAYA", "KABUPATEN ACEH TAMIANG", "KABUPATEN BENER MERIAH", "KABUPATEN PIDIE JAYA", "KOTA BANDA ACEH", "KOTA SABANG", "KOTA LHOKSEUMAWE", "KOTA LANGSA", "KOTA SUBULUSSALAM", "KABUPATEN TAPANULI TENGAH", "KABUPATEN TAPANULI UTARA", "KABUPATEN TAPANULI SELATAN", "KABUPATEN NIAS", "KABUPATEN LANGKAT", "KABUPATEN KARO", "KABUPATEN DELI SERDANG", "KABUPATEN SIMALUNGUN", "KABUPATEN ASAHAN", "KABUPATEN LABUHANBATU", "KABUPATEN DAIRI", "KABUPATEN TOBA SAMOSIR", "KABUPATEN MANDAILING NATAL", "KABUPATEN NIAS SELATAN", "KABUPATEN PAKPAK BHARAT", "KABUPATEN HUMBANG HASUNDUTAN", "KABUPATEN SAMOSIR", "KABUPATEN SERDANG BEDAGAI", "KABUPATEN BATU BARA", "KABUPATEN PADANG LAWAS UTARA", "KABUPATEN PADANG LAWAS", "KABUPATEN LABUHANBATU SELATAN", "KABUPATEN LABUHANBATU UTARA", "KABUPATEN NIAS UTARA", "KABUPATEN NIAS BARAT", "KOTA MEDAN", "KOTA PEMATANGSIANTAR", "KOTA SIBOLGA", "KOTA TANJUNG BALAI", "KOTA BINJAI", "KOTA TEBING TINGGI", "KOTA PADANGSIDIMPUAN", "KOTA GUNUNGSITOLI", "KABUPATEN PESISIR SELATAN", "KABUPATEN SOLOK", "KABUPATEN SIJUNJUNG", "KABUPATEN TANAH DATAR", "KABUPATEN PADANG PARIAMAN", "KABUPATEN AGAM", "KABUPATEN LIMA PULUH KOTA", "KABUPATEN PASAMAN", "KABUPATEN KEPULAUAN MENTAWAI", "KABUPATEN DHARMASRAYA", "KABUPATEN SOLOK SELATAN", "KABUPATEN PASAMAN BARAT", "KOTA PADANG", "KOTA SOLOK", "KOTA SAWAHLUNTO", "KOTA PADANG PANJANG", "KOTA BUKITTINGGI", "KOTA PAYAKUMBUH", "KOTA PARIAMAN", "KABUPATEN KAMPAR", "KABUPATEN INDRAGIRI HULU", "KABUPATEN BENGKALIS", "KABUPATEN INDRAGIRI HILIR", "KABUPATEN PELALAWAN", "KABUPATEN ROKAN HULU", "KABUPATEN ROKAN HILIR", "KABUPATEN SIAK", "KABUPATEN KUANTAN SINGINGI", "KABUPATEN KEPULAUAN MERANTI", "KOTA PEKANBARU", "KOTA DUMAI", "KABUPATEN KERINCI", "KABUPATEN MERANGIN", "KABUPATEN SAROLANGUN", "KABUPATEN BATANGHARI", "KABUPATEN MUARO JAMBI", "KABUPATEN TANJUNG JABUNG BARAT", "KABUPATEN TANJUNG JABUNG TIMUR", "KABUPATEN BUNGO", "KABUPATEN TEBO", "KOTA JAMBI", "KOTA SUNGAI PENUH", "KABUPATEN OGAN KOMERING ULU", "KABUPATEN OGAN KOMERING ILIR", "KABUPATEN MUARA ENIM", "KABUPATEN LAHAT", "KABUPATEN MUSI RAWAS", "KABUPATEN MUSI BANYUASIN", "KABUPATEN BANYUASIN", "KABUPATEN OGAN KOMERING ULU TIMUR", "KABUPATEN OGAN KOMERING ULU SELATAN", "KABUPATEN OGAN ILIR", "KABUPATEN EMPAT LAWANG", "KABUPATEN PENUKAL ABAB LEMATANG ILIR", "KABUPATEN MUSI RAWAS UTARA", "KOTA PALEMBANG", "KOTA PAGAR ALAM", "KOTA LUBUK LINGGAU", "KOTA PRABUMULIH", "KABUPATEN BENGKULU SELATAN", "KABUPATEN REJANG LEBONG", "KABUPATEN BENGKULU UTARA", "KABUPATEN KAUR", "KABUPATEN SELUMA", "KABUPATEN MUKO MUKO", "KABUPATEN LEBONG", "KABUPATEN KEPAHIANG", "KABUPATEN BENGKULU TENGAH", "KOTA BENGKULU", "KABUPATEN LAMPUNG SELATAN", "KABUPATEN LAMPUNG TENGAH", "KABUPATEN LAMPUNG UTARA", "KABUPATEN LAMPUNG BARAT", "KABUPATEN TULANG BAWANG", "KABUPATEN TANGGAMUS", "KABUPATEN LAMPUNG TIMUR", "KABUPATEN WAY KANAN", "KABUPATEN PESAWARAN", "KABUPATEN PRINGSEWU", "KABUPATEN MESUJI", "KABUPATEN TULANG BAWANG BARAT", "KABUPATEN PESISIR BARAT", "KOTA BANDAR LAMPUNG", "KOTA METRO", "KABUPATEN BANGKA", "KABUPATEN BELITUNG", "KABUPATEN BANGKA SELATAN", "KABUPATEN BANGKA TENGAH", "KABUPATEN BANGKA BARAT", "KABUPATEN BELITUNG TIMUR", "KOTA PANGKAL PINANG", "KABUPATEN BINTAN", "KABUPATEN KARIMUN", "KABUPATEN NATUNA", "KABUPATEN LINGGA", "KABUPATEN KEPULAUAN ANAMBAS", "KOTA BATAM", "KOTA TANJUNG PINANG", "KABUPATEN ADM. KEP. SERIBU", "KOTA ADM. JAKARTA PUSAT", "KOTA ADM. JAKARTA UTARA", "KOTA ADM. JAKARTA BARAT", "KOTA ADM. JAKARTA SELATAN", "KOTA ADM. JAKARTA TIMUR", "KABUPATEN BOGOR", "KABUPATEN SUKABUMI", "KABUPATEN CIANJUR", "KABUPATEN BANDUNG", "KABUPATEN GARUT", "KABUPATEN TASIKMALAYA", "KABUPATEN CIAMIS", "KABUPATEN KUNINGAN", "KABUPATEN CIREBON", "KABUPATEN MAJALENGKA", "KABUPATEN SUMEDANG", "KABUPATEN INDRAMAYU", "KABUPATEN SUBANG", "KABUPATEN PURWAKARTA", "KABUPATEN KARAWANG", "KABUPATEN BEKASI", "KABUPATEN BANDUNG BARAT", "KABUPATEN PANGANDARAN", "KOTA BOGOR", "KOTA SUKABUMI", "KOTA BANDUNG", "KOTA CIREBON", "KOTA BEKASI", "KOTA DEPOK", "KOTA CIMAHI", "KOTA TASIKMALAYA", "KOTA BANJAR", "KABUPATEN CILACAP", "KABUPATEN BANYUMAS", "KABUPATEN PURBALINGGA", "KABUPATEN BANJARNEGARA", "KABUPATEN KEBUMEN", "KABUPATEN PURWOREJO", "KABUPATEN WONOSOBO", "KABUPATEN MAGELANG", "KABUPATEN BOYOLALI", "KABUPATEN KLATEN", "KABUPATEN SUKOHARJO", "KABUPATEN WONOGIRI", "KABUPATEN KARANGANYAR", "KABUPATEN SRAGEN", "KABUPATEN GROBOGAN", "KABUPATEN BLORA", "KABUPATEN REMBANG", "KABUPATEN PATI", "KABUPATEN KUDUS", "KABUPATEN JEPARA", "KABUPATEN DEMAK", "KABUPATEN SEMARANG", "KABUPATEN TEMANGGUNG", "KABUPATEN KENDAL", "KABUPATEN BATANG", "KABUPATEN PEKALONGAN", "KABUPATEN PEMALANG", "KABUPATEN TEGAL", "KABUPATEN BREBES", "KOTA MAGELANG", "KOTA SURAKARTA", "KOTA SALATIGA", "KOTA SEMARANG", "KOTA PEKALONGAN", "KOTA TEGAL", "KABUPATEN KULON PROGO", "KABUPATEN BANTUL", "KABUPATEN GUNUNGKIDUL", "KABUPATEN SLEMAN", "KOTA YOGYAKARTA", "KABUPATEN PACITAN", "KABUPATEN PONOROGO", "KABUPATEN TRENGGALEK", "KABUPATEN TULUNGAGUNG", "KABUPATEN BLITAR", "KABUPATEN KEDIRI", "KABUPATEN MALANG", "KABUPATEN LUMAJANG", "KABUPATEN JEMBER", "KABUPATEN BANYUWANGI", "KABUPATEN BONDOWOSO", "KABUPATEN SITUBONDO", "KABUPATEN PROBOLINGGO", "KABUPATEN PASURUAN", "KABUPATEN SIDOARJO", "KABUPATEN MOJOKERTO", "KABUPATEN JOMBANG", "KABUPATEN NGANJUK", "KABUPATEN MADIUN", "KABUPATEN MAGETAN", "KABUPATEN NGAWI", "KABUPATEN BOJONEGORO", "KABUPATEN TUBAN", "KABUPATEN LAMONGAN", "KABUPATEN GRESIK", "KABUPATEN BANGKALAN", "KABUPATEN SAMPANG", "KABUPATEN PAMEKASAN", "KABUPATEN SUMENEP", "KOTA KEDIRI", "KOTA BLITAR", "KOTA MALANG", "KOTA PROBOLINGGO", "KOTA PASURUAN", "KOTA MOJOKERTO", "KOTA MADIUN", "KOTA SURABAYA", "KOTA BATU", "KABUPATEN PANDEGLANG", "KABUPATEN LEBAK", "KABUPATEN TANGERANG", "KABUPATEN SERANG", "KOTA TANGERANG", "KOTA CILEGON", "KOTA SERANG", "KOTA TANGERANG SELATAN", "KABUPATEN JEMBRANA", "KABUPATEN TABANAN", "KABUPATEN BADUNG", "KABUPATEN GIANYAR", "KABUPATEN KLUNGKUNG", "KABUPATEN BANGLI", "KABUPATEN KARANGASEM", "KABUPATEN BULELENG", "KOTA DENPASAR", "KABUPATEN LOMBOK BARAT", "KABUPATEN LOMBOK TENGAH", "KABUPATEN LOMBOK TIMUR", "KABUPATEN SUMBAWA", "KABUPATEN DOMPU", "KABUPATEN BIMA", "KABUPATEN SUMBAWA BARAT", "KABUPATEN LOMBOK UTARA", "KOTA MATARAM", "KOTA BIMA", "KABUPATEN KUPANG", "KAB TIMOR TENGAH SELATAN", "KABUPATEN TIMOR TENGAH UTARA", "KABUPATEN BELU", "KABUPATEN ALOR", "KABUPATEN FLORES TIMUR", "KABUPATEN SIKKA", "KABUPATEN ENDE", "KABUPATEN NGADA", "KABUPATEN MANGGARAI", "KABUPATEN SUMBA TIMUR", "KABUPATEN SUMBA BARAT", "KABUPATEN LEMBATA", "KABUPATEN ROTE NDAO", "KABUPATEN MANGGARAI BARAT", "KABUPATEN NAGEKEO", "KABUPATEN SUMBA TENGAH", "KABUPATEN SUMBA BARAT DAYA", "KABUPATEN MANGGARAI TIMUR", "KABUPATEN SABU RAIJUA", "KABUPATEN MALAKA", "KOTA KUPANG", "KABUPATEN SAMBAS", "KABUPATEN MEMPAWAH", "KABUPATEN SANGGAU", "KABUPATEN KETAPANG", "KABUPATEN SINTANG", "KABUPATEN KAPUAS HULU", "KABUPATEN BENGKAYANG", "KABUPATEN LANDAK", "KABUPATEN SEKADAU", "KABUPATEN MELAWI", "KABUPATEN KAYONG UTARA", "KABUPATEN KUBU RAYA", "KOTA PONTIANAK", "KOTA SINGKAWANG", "KABUPATEN KOTAWARINGIN BARAT", "KABUPATEN KOTAWARINGIN TIMUR", "KABUPATEN KAPUAS", "KABUPATEN BARITO SELATAN", "KABUPATEN BARITO UTARA", "KABUPATEN KATINGAN", "KABUPATEN SERUYAN", "KABUPATEN SUKAMARA", "KABUPATEN LAMANDAU", "KABUPATEN GUNUNG MAS", "KABUPATEN PULANG PISAU", "KABUPATEN MURUNG RAYA", "KABUPATEN BARITO TIMUR", "KOTA PALANGKARAYA", "KABUPATEN TANAH LAUT", "KABUPATEN KOTABARU", "KABUPATEN BANJAR", "KABUPATEN BARITO KUALA", "KABUPATEN TAPIN", "KABUPATEN HULU SUNGAI SELATAN", "KABUPATEN HULU SUNGAI TENGAH", "KABUPATEN HULU SUNGAI UTARA", "KABUPATEN TABALONG", "KABUPATEN TANAH BUMBU", "KABUPATEN BALANGAN", "KOTA BANJARMASIN", "KOTA BANJARBARU", "KABUPATEN PASER", "KABUPATEN KUTAI KARTANEGARA", "KABUPATEN BERAU", "KABUPATEN KUTAI BARAT", "KABUPATEN KUTAI TIMUR", "KABUPATEN PENAJAM PASER UTARA", "KABUPATEN MAHAKAM ULU", "KOTA BALIKPAPAN", "KOTA SAMARINDA", "KOTA BONTANG", "KABUPATEN BULUNGAN", "KABUPATEN MALINAU", "KABUPATEN NUNUKAN", "KABUPATEN TANA TIDUNG", "KOTA TARAKAN", "KABUPATEN BOLAANG MONGONDOW", "KABUPATEN MINAHASA", "KABUPATEN KEPULAUAN SANGIHE", "KABUPATEN KEPULAUAN TALAUD", "KABUPATEN MINAHASA SELATAN", "KABUPATEN MINAHASA UTARA", "KABUPATEN MINAHASA TENGGARA", "KABUPATEN BOLAANG MONGONDOW UTARA", "KABUPATEN KEP. SIAU TAGULANDANG BIARO", "KABUPATEN BOLAANG MONGONDOW TIMUR", "KABUPATEN BOLAANG MONGONDOW SELATAN", "KOTA MANADO", "KOTA BITUNG", "KOTA TOMOHON", "KOTA KOTAMOBAGU", "KABUPATEN BANGGAI", "KABUPATEN POSO", "KABUPATEN DONGGALA", "KABUPATEN TOLI TOLI", "KABUPATEN BUOL", "KABUPATEN MOROWALI", "KABUPATEN BANGGAI KEPULAUAN", "KABUPATEN PARIGI MOUTONG", "KABUPATEN TOJO UNA UNA", "KABUPATEN SIGI", "KABUPATEN BANGGAI LAUT", "KABUPATEN MOROWALI UTARA", "KOTA PALU", "KABUPATEN KEPULAUAN SELAYAR", "KABUPATEN BULUKUMBA", "KABUPATEN BANTAENG", "KABUPATEN JENEPONTO", "KABUPATEN TAKALAR", "KABUPATEN GOWA", "KABUPATEN SINJAI", "KABUPATEN BONE", "KABUPATEN MAROS", "KABUPATEN PANGKAJENE KEPULAUAN", "KABUPATEN BARRU", "KABUPATEN SOPPENG", "KABUPATEN WAJO", "KABUPATEN SIDENRENG RAPPANG", "KABUPATEN PINRANG", "KABUPATEN ENREKANG", "KABUPATEN LUWU", "KABUPATEN TANA TORAJA", "KABUPATEN LUWU UTARA", "KABUPATEN LUWU TIMUR", "KABUPATEN TORAJA UTARA", "KOTA MAKASSAR", "KOTA PARE PARE", "KOTA PALOPO", "KABUPATEN KOLAKA", "KABUPATEN KONAWE", "KABUPATEN MUNA", "KABUPATEN BUTON", "KABUPATEN KONAWE SELATAN", "KABUPATEN BOMBANA", "KABUPATEN WAKATOBI", "KABUPATEN KOLAKA UTARA", "KABUPATEN KONAWE UTARA", "KABUPATEN BUTON UTARA", "KABUPATEN KOLAKA TIMUR", "KABUPATEN KONAWE KEPULAUAN", "KABUPATEN MUNA BARAT", "KABUPATEN BUTON TENGAH", "KABUPATEN BUTON SELATAN", "KOTA KENDARI", "KOTA BAU BAU", "KABUPATEN GORONTALO", "KABUPATEN BOALEMO", "KABUPATEN BONE BOLANGO", "KABUPATEN PAHUWATO", "KABUPATEN GORONTALO UTARA", "KOTA GORONTALO", "KABUPATEN PASANGKAYU", "KABUPATEN MAMUJU", "KABUPATEN MAMASA", "KABUPATEN POLEWALI MANDAR", "KABUPATEN MAJENE", "KABUPATEN MAMUJU TENGAH", "KABUPATEN MALUKU TENGAH", "KABUPATEN MALUKU TENGGARA", "KABUPATEN KEPULAUAN TANIMBAR", "KABUPATEN BURU", "KABUPATEN SERAM BAGIAN TIMUR", "KABUPATEN SERAM BAGIAN BARAT", "KABUPATEN KEPULAUAN ARU", "KABUPATEN MALUKU BARAT DAYA", "KABUPATEN BURU SELATAN", "KOTA AMBON", "KOTA TUAL", "KABUPATEN HALMAHERA BARAT", "KABUPATEN HALMAHERA TENGAH", "KABUPATEN HALMAHERA UTARA", "KABUPATEN HALMAHERA SELATAN", "KABUPATEN KEPULAUAN SULA", "KABUPATEN HALMAHERA TIMUR", "KABUPATEN PULAU MOROTAI", "KABUPATEN PULAU TALIABU", "KOTA TERNATE", "KOTA TIDORE KEPULAUAN", "KABUPATEN MERAUKE", "KABUPATEN JAYAWIJAYA", "KABUPATEN JAYAPURA", "KABUPATEN NABIRE", "KABUPATEN KEPULAUAN YAPEN", "KABUPATEN BIAK NUMFOR", "KABUPATEN PUNCAK JAYA", "KABUPATEN PANIAI", "KABUPATEN MIMIKA", "KABUPATEN SARMI", "KABUPATEN KEEROM", "KABUPATEN PEGUNUNGAN BINTANG", "KABUPATEN YAHUKIMO", "KABUPATEN TOLIKARA", "KABUPATEN WAROPEN", "KABUPATEN BOVEN DIGOEL", "KABUPATEN MAPPI", "KABUPATEN ASMAT", "KABUPATEN SUPIORI", "KABUPATEN MAMBERAMO RAYA", "KABUPATEN MAMBERAMO TENGAH", "KABUPATEN YALIMO", "KABUPATEN LANNY JAYA", "KABUPATEN NDUGA", "KABUPATEN PUNCAK", "KABUPATEN DOGIYAI", "KABUPATEN INTAN JAYA", "KABUPATEN DEIYAI", "KOTA JAYAPURA", "KABUPATEN SORONG", "KABUPATEN MANOKWARI", "KABUPATEN FAK FAK", "KABUPATEN SORONG SELATAN", "KABUPATEN RAJA AMPAT", "KABUPATEN TELUK BINTUNI", "KABUPATEN TELUK WONDAMA", "KABUPATEN KAIMANA", "KABUPATEN TAMBRAUW", "KABUPATEN MAYBRAT", "KABUPATEN MANOKWARI SELATAN", "KABUPATEN PEGUNUNGAN ARFAK", "KOTA SORONG",
        ];

        for ($i = 0; $i < count($lgas); $i++) {
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }
}