<x-navbar>
    @slot('page', "input")
</x-navbar>

<x-app-layouts>

    @slot('title', "Input Data Mahasiswa")
    
    @slot('content')
        <form action="/" method="post" class="form-input">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" id="nrp" name="nrp">
                    @error('nrp')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" id="nama" name="nama">
                    @error('nama')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="text" id="email" name="email">
                    @error('email')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Rumah</label>
                    <input type="text" id="alamat" name="alamat">
                    @error('alamat')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="number" id="ipk" name="ipk" min="0" max="4" step=".01">
                    @error('ipk')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value=""> --- pilih status ---</option>
                        <option value="lulus">Lulus</option>
                        <option value="belum lulus">Belum Lulus</option>
                    </select>
                    @error('status')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn-submit-data">Submit Data</button>
        </form>
    @endslot

</x-app-layouts>