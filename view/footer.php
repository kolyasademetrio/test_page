<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="footer-inner">
						<div class="footer-location-block">
							<div class="footer-location">
								<h5>Центр дерматологии и<br/> эстетической хирургии В. Багирова</h5>
								<div class="footer-location-wrap">
									<address><span>Lange Str. 71, 76530<br/>Baden-Baden, Германия</span></address><!-- span для выравнивания текста из нескольких строк по вертикали -->
									<a href="tel:+4972217020290"><span>+49 7221 7020290</span></a><!-- span для выравнивания текста из нескольких строк по вертикали -->
								</div>
							</div>
							<div class="footer-location">
								<h5>Клиника Багирова</h5>
								<div class="footer-location-wrap">
									<address><span>Mühlenweg 2, 56235<br/>Ransbach-Baumbach,<br/> Германия</span></address><!-- span для выравнивания текста из нескольких строк по вертикали -->
									<a href="tel:+492623926777"><span>+49 2623 926777</span></a><!-- span для выравнивания текста из нескольких строк по вертикали -->
								</div>
							</div>
						</div>
						<div class="social-wrap">
							<a href="#" class="twitter"></a>
							<a href="#" class="fb"></a>
							<a href="#" class="gplus"></a>
						</div>
						<a href="#popup" class="footer-feedback">Обратная связь</a>
						<div id="popup" class="popup mfp-hide">
                            <form method="POST" id="form"> <!-- action="mail.php" -->
                                <div class="popup__header">
                                    <div class="popup__title">Закажите звонок<br>прямо сейчас!</div>
                                    <div class="popup__info">оставьте свои данные, чтобы<br> мы могли связаться с вами:</div>
                                </div>
                                <div class="popup__footer">
                                    <input type="text" name="fio" class="popup__inputText" placeholder="Введите имя" id="test">
                                    <input type="text" name="email" class="popup__inputText" placeholder="Введите e-mail">
                                    <input type="text" name="phone" class="popup__inputText" placeholder="Введите телефон">
                                    <textarea name="descr" class="popup__inputTextarea" placeholder="Введите сообщение"></textarea>
                                    <input type="submit" class="popup__inputSubmit" value="Отправить" name="submit">
                                    <div id="results"></div>
                                </div>
                            </form>
                           
                        </div>
						<p class="footer-copyright">Все права защищены.<br/> Разработано  в веб -студии  Seotm.com</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer End -->
	<div class="fixed-links">
		<a href="#"></a>
		<a href="#"></a>
	</div>
</div>

    <!-- *****************   javascript   *************** -->

    <!-- jQuery -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <!-- flexslider JS -->
    <script type="text/javascript" src="plugins/flexslider/jquery.flexslider-min.js"></script>
    <!-- magnific-popup JS -->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- validate js -->
    <script type="text/javascript" src="plugins/validate/jquery.validate.min.js"></script>
    <!-- maskedinput js -->
    <script type="text/javascript" src="plugins/maskedinput/jquery.maskedinput.min.js"></script>
    <!-- formvalidation js -->
    <script type="text/javascript" src="js/formvalidation.js"></script>
    <!-- initializations -->
    <script type="text/javascript" src="js/init.js"></script>


	<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$('.popup__inputSubmit').click(function(e){
			e.preventDefault();
			var fd = new FormData();
			fd.append('fio', $('input[name="fio"]').val());
			fd.append('email', $('input[name="email"]').val());
			fd.append('phone', $('input[name="phone"]').val());
			fd.append('descr', $('textarea[name="descr"]').val());
			fd.append('dt', $('textarea[name="dt"]').val());
			fd.append('id', $('textarea[name="id"]').val());
			$.ajax({
				type: "POST",
				url: "/handler.php",
				data: fd,
				contentType: false,
				cache: false,
				processData: false,
				success:function(data){
	               $('.popup__header').html(data);
	            }
			})

		});
	});
	</script>
</body>
</html>