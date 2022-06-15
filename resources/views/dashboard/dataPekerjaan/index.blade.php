@extends('dashboard.tampilan.kerangka')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Data Pekerjaan</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success') }}
    </div> 
    @endif

    <div class="table-responsive col-lg-10">
      <a href="/dashboard/pekerjaan-create" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tidak Bekerja</th>
              <th scope="col">Wiraswasta</th>
              <th scope="col">Petani</th>
              <th scope="col">IRT</th>
              <th scope="col">Guru</th>
              <th scope="col">Pedagang</th>
              <th scope="col">Pelajar/Mahasiswa</th>
              <th scope="col">Supir</th>
              <th scope="col">Pensiunan</th>
              <th scope="col">PNS</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pekerjaans as $pekerjaan)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pekerjaan->tidak_bekerja }}</td>
              <td>{{ $pekerjaan->wiraswasta }}</td>
              <td>{{ $pekerjaan->petani }}</td>
              <td>{{ $pekerjaan->irt }}</td>
              <td>{{ $pekerjaan->guru }}</td>
              <td>{{ $pekerjaan->pedagang }}</td>
              <td>{{ $pekerjaan->pelajar }}</td>
              <td>{{ $pekerjaan->supir }}</td>
              <td>{{ $pekerjaan->pensiunan }}</td>
              <td>{{ $pekerjaan->pns }}</td>
              <td>
                <a href="/dashboard/pekerjaan/{{ $pekerjaan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/pekerjaan/{{ $pekerjaan->id }}" method="POST" class="d-inline">
                  @csrf

                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    
@endsection

{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, saepe! Adipisci officia dolore fugit perferendis earum debitis modi? Officiis, quis corrupti aspernatur sed fuga iste aliquam, maiores dolor aut beatae consequatur, minima molestias facere earum totam hic vitae! Sit id quasi labore sunt rem cumque. Tempora illo atque consectetur, voluptate porro error dolores placeat, aliquam cum hic architecto reprehenderit adipisci sint laudantium tenetur eius, dicta odio ipsum consequatur fuga ipsam nostrum. 

Magni, assumenda ratione. Dolor ut pariatur, aliquid cumque praesentium sequi cupiditate ex sapiente aut? Voluptates voluptatibus dolor temporibus iste repudiandae natus reprehenderit consequuntur soluta, nihil facere molestias, quo perferendis. Sequi, quo ut ea praesentium culpa, ipsum voluptatibus molestiae laudantium placeat odit unde, sunt nisi minima quidem minus repellendus dolorem alias quia harum aspernatur necessitatibus repudiandae quibusdam perspiciatis sit! Facere neque corporis delectus cum. 

dolores numquam dolorem vero nam repellendus harum adipisci laborum sequi quod nostrum, autem recusandae similique, impedit enim ipsa facilis, fugiat est labore nulla! Doloremque accusamus blanditiis aliquid accusantium quidem officiis voluptatum rerum debitis pariatur enim minima eligendi facilis rem omnis laudantium autem quis, mollitia commodi magni cupiditate ut distinctio harum. Culpa esse excepturi molestias, cum neque dolor eos asperiores, nam recusandae, expedita eaque eum tempora beatae? --}}