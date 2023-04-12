CREATE TABLE `roles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20),
  `created_at` timestamp,
  `modified_at` timestamp
);

CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `roles` int FOREIGN KEY REFERENCES `roles` (`id`),
  `full_name` varchar(50),
  `email` varchar(30),
  `password` varchar(255),
  `created_at` timestamp,
  `modified_at` timestamp
);

CREATE TABLE `layanan` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nama_layanan` varchar(255),
  `jenis_layanan` varchar(255),
  `deskripsi` varchar(255),
  `estimasi` int,
  `harga` int
);

CREATE TABLE `sub_layanan` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `layanan_id` int FOREIGN KEY REFERENCES `layanan` (`id`),
  `nama_sub` varchar(255),
  `desc_sub` varchar(255),
  `est_sub` int,
  `harga_sub` int,
  `jenis_barang` varchar(255)
);

CREATE TABLE `list_order` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_users` int FOREIGN KEY REFERENCES `users` (`id`),
  `no_order` int,
  `nama_users` varchar(255),
  `waktu_order` timestamp,
  `alamat` varchar(255),
  `jenis_pelayanan` varchar(255),
  `harga` int
);

CREATE TABLE `detail_order` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `list_id` int FOREIGN KEY REFERENCES `list_order` (`id`),
  `keluhan` varchar(255),
  `foto_keluhan` varchar(255),
  `opsi_pengiriman` int,
  `pembayaran` varchar(255),
  `foto_pembayaran` varchar(255),
  `status` varchar(255)
);