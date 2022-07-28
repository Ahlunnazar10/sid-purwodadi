<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\User;
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
                'name' => 'Dea Caesaria Fitri Prasetyo',
                'username' => 'deacantik',
                'email' => 'deacaa1@gmail.com',
                'password' => bcrypt('password')
            ]);
            User::create([
                'name' => 'Ahlun Nazar Bin Kasmin',
                'username' => 'Ahlunnazar22',
                'email' => 'ahlun.nzr22@gmail.com',
                'password' => bcrypt('password')
            ]);
            User::create([
                'name' => 'Muhammad Fauzi',
                'username' => 'fauzi',
                'email' => 'fauzi@gmail.com',
                'password' => bcrypt('password')
            ]);            
            User::create([
                'name' => 'Safiul Bari',
                'username' => 'safiul',
                'email' => 'safiul@gmail.com',
                'password' => bcrypt('password')
            ]);            
            User::create([
                'name' => 'Damai Prasetro',
                'username' => 'damai',
                'email' => 'damai@gmail.com',
                'password' => bcrypt('password')
            ]);                    

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
            'user_id' => 1,
            'slug' => 'postingan-pertama',
            'excerpt' => 'Excerpt Postingan Pertama',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti, exercitationem cupiditate? Iste cupiditate deleniti laborum sed pariatur doloremque ad necessitatibus minima dolor tempore repudiandae odit error, harum voluptatibus sint temporibus, omnis labore corrupti, enim assumenda rerum aspernatur. Possimus voluptatibus voluptatem temporibus atque delectus doloremque consectetur.</p> <p>Commodi quisquam eveniet ducimus! Sapiente velit veniam ut. Sint veritatis suscipit quae? Reiciendis recusandae nihil, delectus a sit dignissimos commodi architecto adipisci error perspiciatis ut ipsa sunt est, voluptate animi obcaecati, expedita voluptatum officia perferendis. Iste molestias asperiores itaque accusamus libero natus aliquam excepturi ipsam! Consectetur, consequuntur, debitis doloribus quasi voluptate aperiam deserunt facilis harum nam blanditiis saepe, eaque nesciunt totam laboriosam in eius quam veniam mollitia nemo vel eveniet? Culpa velit ducimus, facilis ab harum quas ipsa repudiandae laboriosam delectus debitis libero hic, saepe molestias laudantium, nulla illum vero dolor numquam odit deleniti.</p> <p>Ducimus necessitatibus, nihil sed reiciendis unde distinctio aliquid vel minus, laudantium ad itaque! Eligendi excepturi error deleniti? Laudantium error suscipit iure repellat fugit ipsa amet aliquid hic architecto explicabo distinctio sint atque est, quisquam libero voluptates corporis. Non architecto doloremque vel possimus! Placeat ipsum aspernatur repellendus molestiae omnis obcaecati debitis quia, amet explicabo optio cupiditate dolorum, incidunt autem nobis atque dignissimos esse libero quis quaerat ipsa quo unde! Eaque earum omnis, itaque molestias saepe incidunt, ea possimus, soluta rerum id voluptates qui quam? Recusandae, ipsa facere impedit earum soluta perferendis quisquam vitae laborum error illo ad dolorem velit voluptate ex tenetur odio quos ipsam natus culpa ab. Consectetur possimus sit id, maxime architecto vitae hic laborum excepturi quisquam, minima error sequi dolorum! Dignissimos, iure. Ullam odio quas inventore atque animi modi vero architecto iusto vitae fuga, expedita veniam, perferendis quasi quaerat nihil quidem voluptatibus provident? Id, ipsam sequi.</p>'
        ]);
        Artikel::create([
            'title' => 'Postingan Kedua',
            'kategori_id' => 1,
            'user_id' => 1,
            'slug' => 'postingan-kedua',
            'excerpt' => 'Excerpt Postingan Kedua',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti, exercitationem cupiditate? Iste cupiditate deleniti laborum sed pariatur doloremque ad necessitatibus minima dolor tempore repudiandae odit error, harum voluptatibus sint temporibus, omnis labore corrupti, enim assumenda rerum aspernatur. Possimus voluptatibus voluptatem temporibus atque delectus doloremque consectetur.</p> <p>Commodi quisquam eveniet ducimus! Sapiente velit veniam ut. Sint veritatis suscipit quae? Reiciendis recusandae nihil, delectus a sit dignissimos commodi architecto adipisci error perspiciatis ut ipsa sunt est, voluptate animi obcaecati, expedita voluptatum officia perferendis. Iste molestias asperiores itaque accusamus libero natus aliquam excepturi ipsam! Consectetur, consequuntur, debitis doloribus quasi voluptate aperiam deserunt facilis harum nam blanditiis saepe, eaque nesciunt totam laboriosam in eius quam veniam mollitia nemo vel eveniet? Culpa velit ducimus, facilis ab harum quas ipsa repudiandae laboriosam delectus debitis libero hic, saepe molestias laudantium, nulla illum vero dolor numquam odit deleniti.</p> <p>Ducimus necessitatibus, nihil sed reiciendis unde distinctio aliquid vel minus, laudantium ad itaque! Eligendi excepturi error deleniti? Laudantium error suscipit iure repellat fugit ipsa amet aliquid hic architecto explicabo distinctio sint atque est, quisquam libero voluptates corporis. Non architecto doloremque vel possimus! Placeat ipsum aspernatur repellendus molestiae omnis obcaecati debitis quia, amet explicabo optio cupiditate dolorum, incidunt autem nobis atque dignissimos esse libero quis quaerat ipsa quo unde! Eaque earum omnis, itaque molestias saepe incidunt, ea possimus, soluta rerum id voluptates qui quam? Recusandae, ipsa facere impedit earum soluta perferendis quisquam vitae laborum error illo ad dolorem velit voluptate ex tenetur odio quos ipsam natus culpa ab. Consectetur possimus sit id, maxime architecto vitae hic laborum excepturi quisquam, minima error sequi dolorum! Dignissimos, iure. Ullam odio quas inventore atque animi modi vero architecto iusto vitae fuga, expedita veniam, perferendis quasi quaerat nihil quidem voluptatibus provident? Id, ipsam sequi.</p>'
        ]);
        Artikel::create([
            'title' => 'Postingan Ketiga',
            'kategori_id' => 1,
            'user_id' => 1,
            'slug' => 'postingan-ketiga',
            'excerpt' => 'Excerpt Postingan Ketiga',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti, exercitationem cupiditate? Iste cupiditate deleniti laborum sed pariatur doloremque ad necessitatibus minima dolor tempore repudiandae odit error, harum voluptatibus sint temporibus, omnis labore corrupti, enim assumenda rerum aspernatur. Possimus voluptatibus voluptatem temporibus atque delectus doloremque consectetur.</p> <p>Commodi quisquam eveniet ducimus! Sapiente velit veniam ut. Sint veritatis suscipit quae? Reiciendis recusandae nihil, delectus a sit dignissimos commodi architecto adipisci error perspiciatis ut ipsa sunt est, voluptate animi obcaecati, expedita voluptatum officia perferendis. Iste molestias asperiores itaque accusamus libero natus aliquam excepturi ipsam! Consectetur, consequuntur, debitis doloribus quasi voluptate aperiam deserunt facilis harum nam blanditiis saepe, eaque nesciunt totam laboriosam in eius quam veniam mollitia nemo vel eveniet? Culpa velit ducimus, facilis ab harum quas ipsa repudiandae laboriosam delectus debitis libero hic, saepe molestias laudantium, nulla illum vero dolor numquam odit deleniti.</p> <p>Ducimus necessitatibus, nihil sed reiciendis unde distinctio aliquid vel minus, laudantium ad itaque! Eligendi excepturi error deleniti? Laudantium error suscipit iure repellat fugit ipsa amet aliquid hic architecto explicabo distinctio sint atque est, quisquam libero voluptates corporis. Non architecto doloremque vel possimus! Placeat ipsum aspernatur repellendus molestiae omnis obcaecati debitis quia, amet explicabo optio cupiditate dolorum, incidunt autem nobis atque dignissimos esse libero quis quaerat ipsa quo unde! Eaque earum omnis, itaque molestias saepe incidunt, ea possimus, soluta rerum id voluptates qui quam? Recusandae, ipsa facere impedit earum soluta perferendis quisquam vitae laborum error illo ad dolorem velit voluptate ex tenetur odio quos ipsam natus culpa ab. Consectetur possimus sit id, maxime architecto vitae hic laborum excepturi quisquam, minima error sequi dolorum! Dignissimos, iure. Ullam odio quas inventore atque animi modi vero architecto iusto vitae fuga, expedita veniam, perferendis quasi quaerat nihil quidem voluptatibus provident? Id, ipsam sequi.</p>'
        ]);
        Artikel::create([
            'title' => 'Postingan Keempat',
            'kategori_id' => 1,
            'user_id' => 1,
            'slug' => 'postingan-keempat',
            'excerpt' => 'Excerpt Postingan Keempat',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti, exercitationem cupiditate? Iste cupiditate deleniti laborum sed pariatur doloremque ad necessitatibus minima dolor tempore repudiandae odit error, harum voluptatibus sint temporibus, omnis labore corrupti, enim assumenda rerum aspernatur. Possimus voluptatibus voluptatem temporibus atque delectus doloremque consectetur.</p> <p>Commodi quisquam eveniet ducimus! Sapiente velit veniam ut. Sint veritatis suscipit quae? Reiciendis recusandae nihil, delectus a sit dignissimos commodi architecto adipisci error perspiciatis ut ipsa sunt est, voluptate animi obcaecati, expedita voluptatum officia perferendis. Iste molestias asperiores itaque accusamus libero natus aliquam excepturi ipsam! Consectetur, consequuntur, debitis doloribus quasi voluptate aperiam deserunt facilis harum nam blanditiis saepe, eaque nesciunt totam laboriosam in eius quam veniam mollitia nemo vel eveniet? Culpa velit ducimus, facilis ab harum quas ipsa repudiandae laboriosam delectus debitis libero hic, saepe molestias laudantium, nulla illum vero dolor numquam odit deleniti.</p> <p>Ducimus necessitatibus, nihil sed reiciendis unde distinctio aliquid vel minus, laudantium ad itaque! Eligendi excepturi error deleniti? Laudantium error suscipit iure repellat fugit ipsa amet aliquid hic architecto explicabo distinctio sint atque est, quisquam libero voluptates corporis. Non architecto doloremque vel possimus! Placeat ipsum aspernatur repellendus molestiae omnis obcaecati debitis quia, amet explicabo optio cupiditate dolorum, incidunt autem nobis atque dignissimos esse libero quis quaerat ipsa quo unde! Eaque earum omnis, itaque molestias saepe incidunt, ea possimus, soluta rerum id voluptates qui quam? Recusandae, ipsa facere impedit earum soluta perferendis quisquam vitae laborum error illo ad dolorem velit voluptate ex tenetur odio quos ipsam natus culpa ab. Consectetur possimus sit id, maxime architecto vitae hic laborum excepturi quisquam, minima error sequi dolorum! Dignissimos, iure. Ullam odio quas inventore atque animi modi vero architecto iusto vitae fuga, expedita veniam, perferendis quasi quaerat nihil quidem voluptatibus provident? Id, ipsam sequi.</p>'
        ]);

    }
}
