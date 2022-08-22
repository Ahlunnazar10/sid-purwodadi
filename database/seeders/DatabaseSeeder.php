<?php

namespace Database\Seeders;

use App\Models\Agama;
use App\Models\Artikel;
use App\Models\JenisKelamin;
use App\Models\Kategori;
use App\Models\Nelayan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Perkawinan;
use App\Models\Perkebunan;
use App\Models\Pertanian;
use App\Models\Tambak;
use App\Models\User;
use App\Models\Wilayah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Ahlun Nazar Bin Kasmin',
            'username' => 'Ahlunnazar22',
            'email' => 'ahlun.nzr22@gmail.com',
            'password' => bcrypt('password'),
            'verify' => 1,
            'is_admin' => 1,
            'verified_at' => now(),
        ]);
        User::create([
            'name' => 'Administrator Sistem',
            'username' => 'Administrtor',
            'email' => 'sidpurwodadi1@gmail.com',
            'password' => bcrypt('administrator'),
            'verify' => 1,
            'is_admin' => 1,
            'verified_at' => now(),
        ]);
        User::create([
            'name' => 'Operator Sistem',
            'username' => 'Operator',
            'email' => 'ahlun.nazar2215@gmail.com',
            'password' => bcrypt('administrator'),
            'verify' => 1,
            'is_admin' => 1,
            'verified_at' => now(),
        ]);
        // User::create([
        //     'name' => 'Safiul Bari',
        //     'username' => 'safiul',
        //     'email' => 'safiul@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        // User::create([
        //     'name' => 'Damai Prasetro',
        //     'username' => 'damai',
        //     'email' => 'damai@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        // User::factory(5)->create();

        Kategori::create([
            'name' => 'Informasi Desa',
            'slug' => 'informasi-desa'
        ]);
        Kategori::create([
            'name' => 'Kegiatan Desa',
            'slug' => 'kegiatan-desa'
        ]);
        Kategori::create([
            'name' => 'Pembangunan Desa',
            'slug' => 'pembangunan-desa'
        ]);

        // Artikel::factory(25)->create();

        Artikel::create([
            'title' => 'Postingan Pertama',
            'kategori_id' => 1,
            'user_id' => 3,
            'image' => 'image/sRtuTqyWiouVU1EBqOyuDx3gDaiEAsWmGjNvwQ3G.jpg',
            'slug' => 'postingan-pertama',

            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti...',

            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti, exercitationem cupiditate? Iste cupiditate deleniti laborum sed pariatur doloremque ad necessitatibus minima dolor tempore repudiandae odit error, harum voluptatibus sint temporibus, omnis labore corrupti, enim assumenda rerum aspernatur. Possimus voluptatibus voluptatem temporibus atque delectus doloremque consectetur.</p> <p>Commodi quisquam eveniet ducimus! Sapiente velit veniam ut. Sint veritatis suscipit quae? Reiciendis recusandae nihil, delectus a sit dignissimos commodi architecto adipisci error perspiciatis ut ipsa sunt est, voluptate animi obcaecati, expedita voluptatum officia perferendis. Iste molestias asperiores itaque accusamus libero natus aliquam excepturi ipsam! Consectetur, consequuntur, debitis doloribus quasi voluptate aperiam deserunt facilis harum nam blanditiis saepe, eaque nesciunt totam laboriosam in eius quam veniam mollitia nemo vel eveniet? Culpa velit ducimus, facilis ab harum quas ipsa repudiandae laboriosam delectus debitis libero hic, saepe molestias laudantium, nulla illum vero dolor numquam odit deleniti.</p> <p>Ducimus necessitatibus, nihil sed reiciendis unde distinctio aliquid vel minus, laudantium ad itaque! Eligendi excepturi error deleniti? Laudantium error suscipit iure repellat fugit ipsa amet aliquid hic architecto explicabo distinctio sint atque est, quisquam libero voluptates corporis. Non architecto doloremque vel possimus! Placeat ipsum aspernatur repellendus molestiae omnis obcaecati debitis quia, amet explicabo optio cupiditate dolorum, incidunt autem nobis atque dignissimos esse libero quis quaerat ipsa quo unde! Eaque earum omnis, itaque molestias saepe incidunt, ea possimus, soluta rerum id voluptates qui quam? Recusandae, ipsa facere impedit earum soluta perferendis quisquam vitae laborum error illo ad dolorem velit voluptate ex tenetur odio quos ipsam natus culpa ab. Consectetur possimus sit id, maxime architecto vitae hic laborum excepturi quisquam, minima error sequi dolorum! Dignissimos, iure. Ullam odio quas inventore atque animi modi vero architecto iusto vitae fuga, expedita veniam, perferendis quasi quaerat nihil quidem voluptatibus provident? Id, ipsam sequi.</p>'
        ]);
        Artikel::create([
            'title' => 'Postingan Kedua',
            'kategori_id' => 1,
            'user_id' => 3,
            'image' => 'image/sRtuTqyWiouVU1EBqOyuDx3gDaiEAsWmGjNvwQ3G.jpg',
            'slug' => 'postingan-kedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti...',

            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti, exercitationem cupiditate? Iste cupiditate deleniti laborum sed pariatur doloremque ad necessitatibus minima dolor tempore repudiandae odit error, harum voluptatibus sint temporibus, omnis labore corrupti, enim assumenda rerum aspernatur. Possimus voluptatibus voluptatem temporibus atque delectus doloremque consectetur.</p> <p>Commodi quisquam eveniet ducimus! Sapiente velit veniam ut. Sint veritatis suscipit quae? Reiciendis recusandae nihil, delectus a sit dignissimos commodi architecto adipisci error perspiciatis ut ipsa sunt est, voluptate animi obcaecati, expedita voluptatum officia perferendis. Iste molestias asperiores itaque accusamus libero natus aliquam excepturi ipsam! Consectetur, consequuntur, debitis doloribus quasi voluptate aperiam deserunt facilis harum nam blanditiis saepe, eaque nesciunt totam laboriosam in eius quam veniam mollitia nemo vel eveniet? Culpa velit ducimus, facilis ab harum quas ipsa repudiandae laboriosam delectus debitis libero hic, saepe molestias laudantium, nulla illum vero dolor numquam odit deleniti.</p> <p>Ducimus necessitatibus, nihil sed reiciendis unde distinctio aliquid vel minus, laudantium ad itaque! Eligendi excepturi error deleniti? Laudantium error suscipit iure repellat fugit ipsa amet aliquid hic architecto explicabo distinctio sint atque est, quisquam libero voluptates corporis. Non architecto doloremque vel possimus! Placeat ipsum aspernatur repellendus molestiae omnis obcaecati debitis quia, amet explicabo optio cupiditate dolorum, incidunt autem nobis atque dignissimos esse libero quis quaerat ipsa quo unde! Eaque earum omnis, itaque molestias saepe incidunt, ea possimus, soluta rerum id voluptates qui quam? Recusandae, ipsa facere impedit earum soluta perferendis quisquam vitae laborum error illo ad dolorem velit voluptate ex tenetur odio quos ipsam natus culpa ab. Consectetur possimus sit id, maxime architecto vitae hic laborum excepturi quisquam, minima error sequi dolorum! Dignissimos, iure. Ullam odio quas inventore atque animi modi vero architecto iusto vitae fuga, expedita veniam, perferendis quasi quaerat nihil quidem voluptatibus provident? Id, ipsam sequi.</p>'
        ]);
        Artikel::create([
            'title' => 'Postingan Ketiga',
            'kategori_id' => 1,
            'user_id' => 3,
            'slug' => 'postingan-ketiga',
            'image' => 'image/sRtuTqyWiouVU1EBqOyuDx3gDaiEAsWmGjNvwQ3G.jpg',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti...',

            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti, exercitationem cupiditate? Iste cupiditate deleniti laborum sed pariatur doloremque ad necessitatibus minima dolor tempore repudiandae odit error, harum voluptatibus sint temporibus, omnis labore corrupti, enim assumenda rerum aspernatur. Possimus voluptatibus voluptatem temporibus atque delectus doloremque consectetur.</p> <p>Commodi quisquam eveniet ducimus! Sapiente velit veniam ut. Sint veritatis suscipit quae? Reiciendis recusandae nihil, delectus a sit dignissimos commodi architecto adipisci error perspiciatis ut ipsa sunt est, voluptate animi obcaecati, expedita voluptatum officia perferendis. Iste molestias asperiores itaque accusamus libero natus aliquam excepturi ipsam! Consectetur, consequuntur, debitis doloribus quasi voluptate aperiam deserunt facilis harum nam blanditiis saepe, eaque nesciunt totam laboriosam in eius quam veniam mollitia nemo vel eveniet? Culpa velit ducimus, facilis ab harum quas ipsa repudiandae laboriosam delectus debitis libero hic, saepe molestias laudantium, nulla illum vero dolor numquam odit deleniti.</p> <p>Ducimus necessitatibus, nihil sed reiciendis unde distinctio aliquid vel minus, laudantium ad itaque! Eligendi excepturi error deleniti? Laudantium error suscipit iure repellat fugit ipsa amet aliquid hic architecto explicabo distinctio sint atque est, quisquam libero voluptates corporis. Non architecto doloremque vel possimus! Placeat ipsum aspernatur repellendus molestiae omnis obcaecati debitis quia, amet explicabo optio cupiditate dolorum, incidunt autem nobis atque dignissimos esse libero quis quaerat ipsa quo unde! Eaque earum omnis, itaque molestias saepe incidunt, ea possimus, soluta rerum id voluptates qui quam? Recusandae, ipsa facere impedit earum soluta perferendis quisquam vitae laborum error illo ad dolorem velit voluptate ex tenetur odio quos ipsam natus culpa ab. Consectetur possimus sit id, maxime architecto vitae hic laborum excepturi quisquam, minima error sequi dolorum! Dignissimos, iure. Ullam odio quas inventore atque animi modi vero architecto iusto vitae fuga, expedita veniam, perferendis quasi quaerat nihil quidem voluptatibus provident? Id, ipsam sequi.</p>'
        ]);

        Wilayah::create([
            'dusun' => 'Lenggoksono',
            'ka_dusun' => 'Mirso Wiyono',
            'j_rt' => '7',
            'j_kk' => '430',
            'j_jiwa' => '1995',
            'j_pria' => '1058',
            'j_wanita' => '937'
        ]);
        Wilayah::create([
            'dusun' => 'Purwodadi',
            'ka_dusun' => 'Didik Harianto',
            'j_rt' => '13',
            'j_kk' => '534',
            'j_jiwa' => '2555',
            'j_pria' => '1490',
            'j_wanita' => '1065'
        ]);
        Wilayah::create([
            'dusun' => 'Balearjo',
            'ka_dusun' => 'Dwisetyo',
            'j_rt' => '5',
            'j_kk' => '267',
            'j_jiwa' => '813',
            'j_pria' => '503',
            'j_wanita' => '310'
        ]);

        Pendidikan::create([
            'tidak_sekolah' => 1233,
            'tamat_sd' => 911,
            'tamat_smp' => 751,
            'tamat_sma' => 1662,
            'strata1' => 537,
            'strata2' => 269
        ]);

        Pekerjaan::create([
            'tidak_bekerja' => 268,
            'wiraswasta' => 643,
            'petani' => 1072,
            'irt' => 536,
            'guru' => 482,
            'pedagang' => 591,
            'pelajar' => 804,
            'supir' => 323,
            'pensiunan' => 214,
            'pns' => 429
        ]);

        Agama::create([
            'islam' => 3217,
            'kristen' => 1608,
            'hindu' => 270,
            'budha' => 268
        ]);

        Perkawinan::create([
            'belum_menikah' => 1716,
            'menikah' => 2790,
            'cerai_hidup' => 589,
            'cerai_mati' => 268
        ]);

        JenisKelamin::create([
            'pria' => 3110,
            'wanita' => 2252
        ]);

        Tambak::create([
            'jenis' => 'Ikan',
            'volume' => '300 Ton',
            'luas' => '200 Hektar',
            'perusahaan' => 'Swasta'
        ]);
        Tambak::create([
            'jenis' => 'Udang',
            'volume' => '500 Ton',
            'luas' => '350 Hektar',
            'perusahaan' => 'Swasta'
        ]);
        Pertanian::create([
            'jenis' => 'Beras',
            'volume' => '800 Ton',
            'luas' => '900 Hektar',
            'jumlah' => '1400 Petani'
        ]);
        Perkebunan::create([
            'jenis' => 'Cengkeh',
            'volume' => '1300 Ton',
            'luas' => '2000 Hektar',
            'jumlah' => '2300 Petani'
        ]);
        Perkebunan::create([
            'jenis' => 'Kopi',
            'volume' => '400 Ton',
            'luas' => '600 Hektar',
            'jumlah' => '780 Petani'
        ]);
        Perkebunan::create([
            'jenis' => 'Pisang',
            'volume' => '200 Ton',
            'luas' => '300 Hektar',
            'jumlah' => '600 Petani'
        ]);
        Nelayan::create([
            'jenis' => 'Ikan',
            'volume' => '600 Ton',
            'jumlah' => '850 Nelayan'
        ]);
    }
}
