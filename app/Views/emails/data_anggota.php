<h3>Halo <?= esc($anggota['nama_lengkap']) ?>,</h3>

<p>Berikut adalah data keanggotaan Anda di Library Borcess:</p>

<ul>
    <li><strong>Email:</strong> <?= esc($anggota['email']) ?></li>
    <li><strong>Telepon:</strong> <?= esc($anggota['telepon']) ?></li>
    <li><strong>Alamat:</strong> <?= esc($anggota['alamat']) ?></li>
    <li><strong>Tanggal Lahir:</strong> <?= esc($anggota['tanggal_lahir']) ?></li>
    <li><strong>Jenis Kelamin:</strong> <?= esc($anggota['jenis_kelamin']) ?></li>
</ul>

<p>Terima kasih telah menjadi bagian dari kami!</p>
