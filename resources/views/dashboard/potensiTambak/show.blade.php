
@extends('dashboard.tampilan.kerangka')

@section('container')

<style>
    #form-input {
    box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.2);
    border: 5px;
    border-radius: 15px;
    position: relative;
    z-index: 1;
    background: inherit;
    overflow: hidden;
    padding: 30px;
    color: #055160;
}
</style>

    <div class="row  p-5">
        <div class="col-lg-8" id="form-input">
          <h2 class="text-center mb-3 text-uppercase">
             Data Potensi Tambak :
          </h2>
            <form method="" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis Produksi :</label>
                    <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required autofocus value="{{ $tambak->jenis }}" disabled readonly>
                    @error('jenis')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="volume" class="form-label">Volume Produksi :</label>
                    <input type="text" class="form-control @error('volume') is-invalid @enderror" id="volume" name="volume" required autofocus value="{{ $tambak->volume }}" placeholder="16 digit" disabled readonly>
                    @error('volume')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="luas" class="form-label">Luas Area :</label>
                    <input type="text" class="form-control @error('luas') is-invalid @enderror" id="luas" name="luas" required autofocus value="{{ $tambak->luas }}" placeholder="16 digit" disabled readonly>
                    @error('luas')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="perusahaan" class="form-label">Perusahaan :</label>
                    <input type="text" class="form-control @error('perusahaan') is-invalid @enderror" id="perusahaan" name="perusahaan" required autofocus value="{{ $tambak->perusahaan }}" placeholder="16 digit" disabled readonly>
                    @error('perusahaan')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                    <a class="btn btn-secondary mt-2" href="/dashboard-tambak">Kembali</a>
            </form>
        </div>
    </div>
</div>    

@endsection