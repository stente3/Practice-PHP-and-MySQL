<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="./favicon.svg" type="image/x-icon" />
		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
			crossorigin="anonymous"
		/>
		<title>Practice POO JavaScript</title>
	</head>
	<body>
		<div
			class="
				container-fluid
				col-12
				navbar-light
				bg-light bg-opacity-70
				border
				mb-5
			"
		>
			<h1 class="fs-2 text-center p-3">Names and prices</h1>
		</div>
		<main
			class="
				container-fluid
				col-12 col-md-11
				m-auto
				d-md-flex
				mt-5
				justify-content-around
				align-items-baseline
			"
		>
			<div class="card col-12 col-sm-8 m-sm-auto m-md-0 col-md-4 col-lg-3">
				<h2 class="fs-3 card-title bg-light border-bottom text-center p-2">
					Add A Product
				</h2>
				<div class="card-body">
					<form action="#" class="needs-validation" novalidate>
						<div class="container-input">
							<input
								type="text"
								name="product"
								id="product"
								class="d-block form-control"
								placeholder="Product Name"
								required
								autocomplete="off"
							/>
							<div class="valid-feedback">¡Perfect!</div>
							<div class="invalid-feedback">
								You must say what the name of the product is
							</div>
						</div>
						<div class="container-input">
							<input
								type="number"
								name="price"
								id="price"
								class="d-block form-control mt-3"
								placeholder="Product Price"
								step="any"
								;
								required
								autocomplete="off"
							/>
							<div class="valid-feedback">¡Perfect!</div>
							<div class="invalid-feedback">
								You must say what the price of the product is
							</div>
						</div>
						<div class="my-3">
							<label for="description" class="form-label"
								>Product Description</label
							>
							<textarea
								class="form-control"
								id="description"
								rows="3"
								required
							></textarea>
						</div>
						<button
							type="submit"
							class="btn btn-primary w-100 mt-3 rounded-pill"
						>
							Enviar
						</button>
					</form>					
				</div> <!-- .card-body -->
			</div> <!-- .card -->

			<!-- Table Of Content -->
			<div
				class="
					col-12 col-sm-8
					my-3 my-sm-3
					m-sm-auto m-md-0
					col-md-7 col-lg-8
					table-of-content
					d-flex
					flex-column
					align-items-center
				"
			></div>
		</main>
	</body>
</html>