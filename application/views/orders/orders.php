<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('partials/head', ['title' => 'Orders - Nyabloon Banget']); ?>
<head>
	<style>
        /* Footer positioning styles */
        html, body {
            height: 100%;
        }
        
        #pageWrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        main {
            flex: 1;
        }
        
        #footer {
            margin-top: auto;
        }
        
        /* Existing order styles */
        .order-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
            padding: 15px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .order-header span {
            font-weight: bold;
        }
        .order-products {
            display: flex;
            align-items: center;
        }
        .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 15px;
        }
        .total-price {
            font-size: 16px;
            font-weight: bold;
        }
        .btn-detail {
            background-color: #00aa5b;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>

</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- header -->
		<?php $this->load->view('partials/navbar') ?>
		<main>
			<!-- introBannerHolder -->
			<section class="introBannerHolder d-flex w-100 bgCover">
				<div class="container">
					<div class="row">
						<div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
							<h1 class="headingIV fwEbold playfair mb-4">Orders</h1>
							<ul class="list-unstyled breadCrumbs d-flex justify-content-center">
								<li class="mr-2"><a href="<?= site_url() ?>">Home</a></li>
								<li class="mr-2">/</li>
								<li class="active">Orders</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
            
			<!-- Orders List -->
			<section class="order-list py-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php if (!empty($orders)): ?>
								<?php foreach ($orders as $order): ?>
									<!-- Card Pesanan -->
									<div class="order-card">
										<div class="order-header">
											<div>
												<span><?= date('d M Y', strtotime($order['created_at'])); ?></span>
												<span class="badge <?= $order['status'] == 'PAID' ? 'badge-success' : 'badge-warning'; ?>">
													<?= $order['status']; ?>
												</span>
											</div>
											<div class="order-code">
												<?= $order['order_code']; ?>
											</div>
										</div>

										<!-- Produk Pesanan -->
										<div class="order-products mt-3">
											<img src="<?= $order['products'][0]['product_image']; ?>" alt="Product Image" class="product-image">
											<div>
												<strong><?= $order['products'][0]['product_name']; ?></strong><br>
												<?= $order['products'][0]['quantity']; ?> barang x Rp<?= number_format($order['products'][0]['price'], 0, ',', '.'); ?>
												<br>
												<?php if (count($order['products']) > 1): ?>
													<small>+<?= count($order['products']) - 1; ?> produk lainnya</small>
												<?php endif; ?>
											</div>
										</div>

										<!-- Total Harga dan Tombol -->
										<div class="d-flex justify-content-between align-items-center mt-3">
											<div class="total-price">
												Total Belanja: Rp<?= number_format($order['total_price'], 0, ',', '.'); ?>
											</div>
											<a href="<?= site_url('orders/' . $order['order_code']); ?>" class="btn-detail btn btn-success" style="background-color: #5BA514; border-color: #5BA514;">Lihat Detail Transaksi</a>
										</div>
									</div>
								<?php endforeach; ?>
							<?php else: ?>
								<p class="text-center">Tidak ada pesanan yang ditemukan.</p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- footer -->
		<?php $this->load->view('partials/footer') ?>
	</div>
	<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="js/popper.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustome.js"></script>
    <script>
        $(document).ready(function() {
            $('tr[data-href]').on('click', function() {
                window.location = $(this).data('href');
            });
        });
    </script>
</body>
</html>
