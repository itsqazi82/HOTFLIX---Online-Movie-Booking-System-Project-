<?php
include('header.php');
?>
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Show Time</h2>

						<span class="main__title-stat">9,071 Total</span>

						<div class="main__title-wrap">
							<!-- <button type="button" data-bs-toggle="modal" class="main__title-link main__title-link--wrap" data-bs-target="#modal-user">Add user</button>
							  -->
							  <!-- <a href="add-showtime.php" class="main__title-link main__title-link--wrap">Add Show-time</a> -->
							
							<select class="filter__select" name="sort" id="filter__sort">
								<option value="0">Date created</option>
								<option value="1">Rating</option>
							</select>

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Key word..">
								<button type="button">
									<i class="ti ti-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- reviews -->
				<div class="col-12">
					<div class="catalog catalog--1">
						<table class="catalog__table">
							<thead>
								<tr>
									<th>MOVIE</th>
									<th>START TIME</th>
									<th>TEEND TIMEXT</th>
									<th>DATE</th>
									<!-- <th>ACTIONS</th> -->
								</tr>
							</thead>

							<tbody>
								<?php
								include('connect.php');
								$select = "SELECT * FROM `movieshow`";
								$result=mysqli_query($con,$select);
								while($row=mysqli_fetch_assoc(result: $result)){?>
								
								<tr>
									<td>
										<div class="catalog__text"><a href="#"><?php echo $row['show_movie']?></a></div>
									</td>
									<td>
										<div class="catalog__text"><?php echo $row['show_timestart']?></div>
									</td>
									<td>
										<div class="catalog__text"><?php echo $row['show__timeend']?></div>
									</td>
									<td>
										<div class="catalog__text catalog__text--rate"><?php echo $row['show_date']?></div>
									</td>
									<!-- <td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td> -->
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- end reviews -->

				<!-- paginator -->
				
				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- view modal -->
	<div class="modal fade" id="modal-view" tabindex="-1" aria-labelledby="modal-view" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content modal__content--view">
					<div class="reviews__autor">
						<img class="reviews__avatar" src="img/user.svg" alt="">
						<span class="reviews__name">Best Marvel movie in my opinion</span>
						<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

						<span class="reviews__rating reviews__rating--green">8.4</span>
					</div>
					<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end view modal -->
	
	<!-- delete modal -->
	<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-delete" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<form action="#" class="modal__form">
						<h4 class="modal__title">Review delete</h4>

						<p class="modal__text">Are you sure to permanently delete this review?</p>

						<div class="modal__btns">
							<button class="modal__btn modal__btn--apply" type="button"><span>Delete</span></button>
							<button class="modal__btn modal__btn--dismiss" type="button" data-bs-dismiss="modal" aria-label="Close"><span>Dismiss</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<img src="img/cover3.jpg" class="background-image" alt="">

	<!-- end delete modal -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>