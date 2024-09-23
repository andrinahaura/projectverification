<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="tambahPaketUmrahForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Periode Bulan Field -->
                    <div class="form-group">
                        <label for="periode-bulan">Name</label>
                        <input class="form-control" type="text" id="estimasi-harga-tiket"
                            placeholder="Name">
                        <input type="hidden" id="harga-tiket-hidden" name="estimasi_harga_tiket">
                    </div>

                    <!-- Tanggal Berangkat Field -->
                    <div class="form-group">
                        <label for="tanggal-berangkat">Email</label>
                        <input class="form-control" type="text" id="estimasi-harga-tiket"
                            placeholder="Email">
                        <input type="hidden" id="harga-tiket-hidden" name="estimasi_harga_tiket">
                    </div>

                    <!-- Tanggal Berangkat Field -->
                    <div class="form-group">
                        <label for="tanggal-berangkat">Password</label>
                        <input class="form-control" type="password" id="estimasi-harga-tiket"
                            placeholder="Password">
                        <input type="hidden" id="harga-tiket-hidden" name="estimasi_harga_tiket">
                    </div>

                    {{-- <div class="form-row">
                        <!-- Berangkat Dari and Tujuan Ke Fields -->
                        <div class="form-group col-md-6">
                            <label for="berangkat-dari">Berangkat Dari</label>
                            <select class="form-control" id="berangkat-dari" name="berangkat_dari">
                                <option value="" disabled>Berangkat Dari</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Makasar">Makasar</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Banjarmasin">Banjarmasin</option>
                                <option value="Medan">Medan</option>
                                <option value="Kendari">Kendari</option>
                                <option value="Kota Palu">Kota Palu</option>
                                <option value="Singapura">Singapura</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tujuan-ke">Tujuan Ke</label>
                            <select class="form-control" id="tujuan-ke" name="tujuan_ke">
                                <option value="" disabled>Tujuan Ke</option>
                                <option value="Mekkah">Mekkah</option>
                                <option value="Jeddah">Jeddah</option>
                            </select>
                        </div>
                    </div> --}}

                      <!-- Paket Hari Field -->
                      <div class="form-group">
                        <label for="paket-hari">Company</label>
                        <select class="form-control" id="paket-hari" name="paket_hari" placeholder="Select Company">
                            <option value="">Company 1</option>
                            <option value="5">Company 2</option>
                            <option value="7">Company 3</option>
                        </select>
                    </div>

                    <!-- Paket Hari Field -->
                    <div class="form-group">
                        <label for="paket-hari">Role</label>
                        <select class="form-control" id="paket-hari" name="paket_hari" placeholder="Select Role">
                            <option value="">Super Admin</option>
                            <option value="5">Kepala Admin</option>
                            <option value="7">Admin</option>
                        </select>
                    </div>

                    {{-- <!-- Tanggal Pulang Field -->
                    <div class="form-group">
                        <label for="tanggal-pulang">Tanggal Pulang</label>
                        <input type="date" class="form-control" id="tanggal-pulang" name="tanggal_pulang" readonly>
                    </div> --}}


                    {{-- <div class="form-row">
                        <!-- Pulang Dari and Tujuan Ke Fields -->
                        <div class="form-group col-md-6">
                            <label for="pulang-dari">Pulang Dari</label>
                            <select class="form-control" id="pulang-dari" name="pulang_dari">
                                <option value="" disabled>Pulang Dari</option>
                                <option value="Mekkah">Mekkah</option>
                                <option value="Jeddah">Jeddah</option>

                                <!-- Add options here -->
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tujuan-pulang">Tujuan Ke</label>
                            <select class="form-control" id="tujuan-pulang" name="tujuan_pulang">
                                <option value="" disabled>Tujuan Ke</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Makasar">Makasar</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Banjarmasin">Banjarmasin</option>
                                <option value="Medan">Medan</option>
                                <option value="Kendari">Kendari</option>
                                <option value="Kota Palu">Kota Palu</option>
                                <option value="Singapura">Singapura</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                            </select>
                        </div>
                    </div> --}}

                    <!-- Maskapai Field -->
                    {{-- <div class="form-group">
                        <label for="maskapai">Maskapai</label>
                        <select class="form-control" id="maskapai" name="maskapai">
                            <option value="">Pilih Maskapai</option>
                            <option value="IndiGo">IndiGo</option>
                            <option value="American Airlines">American Airlines</option>
                            <option value="American Airlines">American Airlines</option>
                            <option value="Air France Air France">Air France Air France</option>
                            <option value="Air India Air India">Air India Air India</option>
                            <option value="British Airways">British Airways</option>
                            <option value="Royal Brunei Airlines Royal Brunei Airlines">Royal Brunei Airlines Royal
                                Brunei Airlines</option>
                            <option value="Emirates Emirates">Emirates Emirates</option>
                            <option value="Etihad Airways Etihad Airways">Etihad Airways Etihad Airways</option>
                            <option value="Garuda Indonesia Garuda Indonesia">Garuda Indonesia Garuda Indonesia
                            </option>
                            <option value="Gulf Air Gulf Air">Gulf Air Gulf Air</option>
                            <option value="Iberia Iberia">Iberia Iberia</option>
                            <option value="Lion Air Lion Air">Lion Air Lion Air</option>
                            <option value="Malaysia Airlines Malaysia Airlines">Malaysia Airlines Malaysia Airlines
                            </option>
                            <option value="EgyptAir EgyptAir">EgyptAir EgyptAir</option>
                            <option value="Batik Air Batik Air">Batik Air Batik Air</option>

                            <!-- Add options here -->
                        </select>
                    </div> --}}

                    <!-- Estimate Harga Tiket -->
                    {{-- <div class="form-group">
                        <label for="estimasi-harga-tiket">Estimasi Harga Tiket</label>
                        <input class="form-control" type="text" id="estimasi-harga-tiket"
                            placeholder="Masukkan harga tiket">
                        <input type="hidden" id="harga-tiket-hidden" name="estimasi_harga_tiket">
                    </div> --}}



                    <!--Infromasi Tiket -->
                    {{-- <div class="form-group">
                        <label for="informasi_tiket">Informasi Tiket Pesawat</label>
                        <input type="file" class="form-control" id="informasi_tiket" name="informasi_tiket">
                    </div> --}}

                    <!-- Jumlah Peserta Field -->
                    <!-- resources/views/your-view.blade.php -->

                    {{-- <div class="form-group">
                        <label for="jumlah-peserta">Jumlah Peserta</label>
                        <select class="form-control" id="jumlah-peserta" name="jumlah_peserta">
                            <option value="" disabled>Pilih Jumlah Peserta</option>
                            @for ($i = 1; $i <= 50; $i++)
                                <option value="{{ $i }}">
                                    {{ $i }} Peserta
                                </option>
                            @endfor
                        </select>
                        <small class="form-text text-danger">35 - 45 Peserta free biaya bus</small>
                    </div> --}}


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $(document).ready(function() {
        $('#tambahPaketUmrahForm').on('submit', function(event) {
            event.preventDefault();

            var form = $(this);
            var url = form.attr('action') ||
            '{{ route('produk.store') }}'; // Use route name if action is empty
            var data = new FormData(this);

            $.ajax({
                url: url,
                method: 'POST',
                data: data,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#tambahProdukModal').modal('hide');
                        $('#tambahVendorHotelModal').modal('show');
                    } else {
                        alert('Gagal menyimpan data: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    alert('Terjadi kesalahan. Silakan coba lagi.');
                }
            });
        });
    });
</script> --}}
<script>
    document.getElementById('periode-bulan').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var tanggalMulai = selectedOption.getAttribute('data-tanggal-mulai');
        var tanggalSelesai = selectedOption.getAttribute('data-tanggal-selesai');
        var tanggalBerangkatInput = document.getElementById('tanggal-berangkat');
        tanggalBerangkatInput.min = tanggalMulai;
        tanggalBerangkatInput.max = tanggalSelesai;

        tanggalBerangkatInput.value = '';
    });

    document.getElementById('tanggal-berangkat').addEventListener('change', hitungTanggalPulang);
    document.getElementById('paket-hari').addEventListener('change', hitungTanggalPulang);

    function hitungTanggalPulang() {
        var tanggalBerangkat = document.getElementById('tanggal-berangkat').value;
        var paketHari = document.getElementById('paket-hari').value;

        if (tanggalBerangkat && paketHari) {
            var tanggal = new Date(tanggalBerangkat);

            tanggal.setDate(tanggal.getDate() + parseInt(paketHari));

            var tanggalPulang = tanggal.toISOString().split('T')[0];

            document.getElementById('tanggal-pulang').value = tanggalPulang;
        } else {
            document.getElementById('tanggal-pulang').value = '';
        }
    }

    var inputHargaTiket = document.getElementById('estimasi-harga-tiket');
    var inputHiddenHargaTiket = document.getElementById('harga-tiket-hidden');

    inputHargaTiket.addEventListener('keyup', function(e) {
        inputHargaTiket.value = formatRupiah(this.value, 'Rp. ');

        inputHiddenHargaTiket.value = this.value.replace(/[^,\d]/g, '');
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    document.querySelector('form').addEventListener('submit', function(e) {
        var inputHargaTiket = document.getElementById('estimasi-harga-tiket');

        inputHargaTiket.value = inputHargaTiket.value.replace(/[^,\d]/g, '');
    });

</script>
