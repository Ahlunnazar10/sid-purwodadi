
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

    <div class="row justify-content-center p-5">
        <div class="col-lg-11" id="form-input">
          <h2 class="text-center mb-3 text-uppercase">
             Data Wilayah {{ $wilayah->dusun }} :
          </h2>
            <form method="" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="dusun" class="form-label">Dusun :</label>
                    <input type="text" class="form-control @error('dusun') is-invalid @enderror" id="dusun" name="dusun" required autofocus value="{{ $wilayah->dusun }}" placeholder="16 digit" disabled readonly>
                    @error('dusun')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="ka_dusun" class="form-label">Kepala Dusun :</label>
                    <input type="text" class="form-control @error('ka_dusun') is-invalid @enderror" id="ka_dusun" name="ka_dusun" required autofocus value="{{ $wilayah->ka_dusun }}" placeholder="16 digit" disabled readonly>
                    @error('ka_dusun')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_rt" class="form-label">Jumlah RT :</label>
                    <input type="text" class="form-control @error('j_rt') is-invalid @enderror" id="j_rt" name="j_rt" required autofocus value="{{ $wilayah->j_rt }}" placeholder="16 digit" disabled readonly>
                    @error('j_rt')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_kk" class="form-label">Jumlah KK :</label>
                    <input type="text" class="form-control @error('j_kk') is-invalid @enderror" id="j_kk" name="j_kk" required autofocus value="{{ $wilayah->j_kk }}" placeholder="16 digit" disabled readonly>
                    @error('j_kk')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_jiwa" class="form-label">Jumlah Jiwa :</label>
                    <input type="text" class="form-control @error('j_jiwa') is-invalid @enderror" id="j_jiwa" name="j_jiwa" required autofocus value="{{ $wilayah->j_jiwa }}" placeholder="16 digit" disabled readonly>
                    @error('j_jiwa')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_pria" class="form-label">Jumlah Pria :</label>
                    <input type="text" class="form-control @error('j_pria') is-invalid @enderror" id="j_pria" name="j_pria" required autofocus value="{{ $wilayah->j_pria }}" placeholder="16 digit" disabled readonly>
                    @error('j_pria')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_wanita" class="form-label">Jumlah Wanita :</label>
                    <input type="text" class="form-control @error('j_wanita') is-invalid @enderror" id="j_wanita" name="j_wanita" required autofocus value="{{ $wilayah->j_wanita }}" placeholder="16 digit" disabled readonly>
                    @error('j_wanita')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                    <a class="btn btn-secondary mt-2" href="/dashboard-wilayah">Kembali</a>
            </form>
        </div>
    </div>
</div>    

@endsection