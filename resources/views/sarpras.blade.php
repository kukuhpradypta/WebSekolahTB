@include('template.navbar')
@include('template.background')
@include('template.carousel')

<div class="container pt-5" style="height: 600px">
<nav class="nav nav-tabs flex-column flex-sm-row mt-1">
  <a class="flex-sm-fill text-sm-center nav-link active " aria-current="page" data-bs-toggle="tab" data-bs-target="#sarpras">Sarana dan Prasarana Sekolah</a>
  <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#ruangumum">Ruang Pembelajaran Umum</a>
  <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" data-bs-target="#ruangkhusus">Ruang Pembelajaran Khusus</a>
</nav>
<div class="tab-content mb-5" id="myTabContent">
  <div class="tab-pane fade show active" id="sarpras" role="tabpanel" aria-labelledby="home-tab">
    <h3 class="mt-5"><b>Sarana dan Prasarana Sekolah</b></h3>
    <hr>
    <br>
    <p class="mt-3">Gedung Sekolah Milik sendiri dengan design bangunan berbentuk permanen yang di sesuaikan dengan kebutuhan pendidikan dan berlantai 4.</p>
  </div>
  <div class="tab-pane fade" id="ruangumum" role="tabpanel" aria-labelledby="profile-tab">
    
  </div>
  <div class="tab-pane fade" id="ruangkhusus" role="tabpanel" aria-labelledby="contact-tab">
    
  </div>
</div>
</div>


@include('template.footer')