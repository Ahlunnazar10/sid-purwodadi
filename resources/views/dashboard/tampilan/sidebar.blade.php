<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <a href="#collapseOperator" data-bs-toggle="collapse"> 
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3  mb-1 text-muted text-decoration-underline">
            <span>Operator Sistem</span>
          </h6> 
        </a>
        <div class="collapse" id="collapseOperator">
          <div class="card card-body" style="background-color:#F8F9FA">
            <small class="text-muted">
              Operator Sistem bertanggungjawab dalam sebagian pengelolaan Sistem Informasi Desa Purwodadi dan dengan pengawasan dari Administrator Sistem.
            </small>  
          </div>
        </div>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/beritadesa*') ? 'active' : '' }}" href="/dashboard/beritadesa">
            <span data-feather="file-text"></span>
            Kelola Berita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kategories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/kategories">
            <span data-feather="grid"></span>
            Kategori Berita
          </a>
        </li>
      </ul>

      @can('admin')
      <a class="" href="#collapseAdmin" data-bs-toggle="collapse"> 
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4  mb-1 text-muted text-decoration-underline">
          <span>Administrator Sistem</span>
        </h6> 
      </a>
      <div class="collapse" id="collapseAdmin">
        <div class="card card-body" style="background-color:#F8F9FA">
          <small class="text-muted">
            Administrator Sistem bertanggungjawab penuh dalam seluruh pengelolaan Sistem Informasi Desa Purwodadi.
          </small>  
        </div>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link dropdown-toggle {{ Request::is('dashboard/wilayah*') ? 'active' : '' }} {{ Request::is('dashboard/pendidikan*') ? 'active' : '' }} {{ Request::is('dashboard/pekerjaan*') ? 'active' : '' }} {{ Request::is('dashboard/agama*') ? 'active' : '' }} {{ Request::is('dashboard/perkawinan*') ? 'active' : '' }} {{ Request::is('dashboard/jeniskelamin*') ? 'active' : '' }}" href="#collapseData" data-bs-toggle="collapse">
            <span data-feather="database"></span>
            Data Desa 
          </a>
          <div class="collapse" id="collapseData">
            <div class="card card-body" style="background-color:#F8F9FA">
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard/wilayah">Wilayah Administrasi</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard/pendidikan">Data Pendidikan</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard/pekerjaan">Data Pekerjaan</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard/agama">Data Agama</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard/perkawinan">Data Perkawinan</a>
              <a class="text-muted" style="text-decoration: none; color:black" href="/dashboard/jeniskelamin">Data Jenis Kelamin</a>
            </div>
          </div>
        </li>
      </ul>  
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/easpirasi*') ? 'active' : '' }}" aria-current="page" href="/dashboard/easpirasi">
            <span data-feather="bell"></span>
            E-Aspirasi
          </a>
        </li>
      </ul>  
      @endcan

    </div>
  </nav>

  {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem consectetur optio soluta beatae sint laudantium consequuntur enim dignissimos, culpa hic quam a quaerat, aliquam at blanditiis accusamus esse ab. Ut voluptates, quia laboriosam neque ab aliquid vel quaerat suscipit nisi similique dolorem repudiandae omnis a distinctio, id tempore ratione quasi nemo ipsum sapiente. Nulla voluptatum et, perferendis impedit aspernatur veritatis eaque. Repellendus eum unde, incidunt provident illo est. Impedit iste voluptate iure delectus? Commodi, sunt praesentium! Nisi libero cupiditate, aliquam culpa ullam eaque. Neque nisi eveniet ex sapiente velit repellendus consequatur earum obcaecati officia dolor placeat maiores similique, ut distinctio quasi rem id quos sunt? Tempore sit nam fuga delectus odio ad ut maxime error ipsum. Ab excepturi dicta doloribus ex vero quaerat, quasi officia dolores minus sed iste delectus voluptatibus maiores soluta aut, 
  
  obcaecati sequi odio inventore nulla saepe ipsum, voluptate dignissimos! Ex praesentium, aspernatur in ad nesciunt tempore, minima fugiat voluptatem voluptatum modi impedit nihil quibusdam ratione, aut voluptate quidem magnam perferendis dolorem deleniti aperiam dolore explicabo. Aliquid, nulla nihil! Expedita officia quis dolorem. Velit id officia perferendis quia magni cupiditate modi dolor. Enim et nostrum suscipit minus, laboriosam mollitia doloremque illo debitis ullam velit ex nobis odio pariatur hic distinctio perferendis aut rem deleniti repudiandae, voluptatum explicabo? Enim, eius. 
  
  Excepturi animi, nobis corrupti eos amet laborum aperiam vitae iure iste tempore doloribus blanditiis aliquid, architecto earum repellat? Ea ratione, repellat iusto aperiam praesentium atque, amet beatae molestiae possimus delectus ab deserunt nemo velit vitae laboriosam eveniet. Sit rem necessitatibus ratione provident. Vel assumenda ipsum, tempora necessitatibus ratione omnis illo laudantium voluptate eligendi. Exercitationem cumque quo obcaecati error ab, ea sint commodi eligendi eum molestias, eius dolorem blanditiis labore voluptatum iure in, nobis neque magni! 
  
  Impedit veritatis quis iure omnis, itaque hic natus vero modi tenetur, dicta dolorem et! Eveniet hic distinctio eligendi! Hic, aperiam quo! Qui sequi repellendus officia deserunt optio, consequatur, rem nesciunt ea pariatur cumque amet hic? Rerum hic dolores reprehenderit aspernatur maiores nostrum consequuntur repellendus non. Quod animi, sequi et quasi cum ea quo similique hic vel at velit? Libero nulla veniam dolore sunt totam. 
  
  Facilis, et atque maiores alias neque consectetur debitis vel quas magnam aspernatur incidunt placeat expedita reprehenderit quaerat, assumenda, ducimus quidem aliquid voluptatum excepturi veniam iure! Dolor fuga, qui at perferendis deleniti, porro molestiae ullam ratione corrupti corporis consequatur quos fugiat dicta. Esse voluptatum facere reiciendis minus perspiciatis, consequatur iure. --}}