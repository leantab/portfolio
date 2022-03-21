<x-app-layout>
	<div>
		<div class="sm:block md:flex flex-row justify-arround">
			<!-- Header -->
			<section id="left">
				<div style="background-image: url(/images/bg.jpg)" class="h-full max-w-3xl bg-fixed flex flex-col justify-start  items-center">
					<img src="/images/avatar.jpg" alt="photo" class="w-1/2 m-8 border-4 rounded-full" />
					<h1 class="mx-4 my-12 text-center text-xl ">I am <strong>Leandro</strong>, a Software engenier<br />
						PHP Developer, Laravel lover<br />
						This is my Portfolio page.</h1>
				</div>
			</section>

			<!-- Main -->
			<div id="main" class="mt-8 ml-8 flex flex-col justify-arround">

				<!-- One -->
				<section id="one">
					<header class="text-6xl my-16">
						<h2>Ipsum lorem dolor aliquam ante commodo<br />
							magna sed accumsan arcu neque.</h2>
					</header>
					<p>Accumsan orci faucibus id eu lorem semper. Eu ac iaculis ac nunc nisi lorem vulputate lorem neque cubilia ac in adipiscing in curae lobortis tortor primis integer massa
						adipiscing id nisi accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque
						cubilia.</p>
					<ul class="actions">
						<li><a href="#" class="button">Learn More</a></li>
					</ul>
				</section>

				<!-- Two -->
				<section id="two" class="my-16 ">
					<h2 class="text-2xl my-4">Recent Work</h2>
					<div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-3">
						<article class="col-6 col-12-xsmall work-item">
							<a href="/images/fulls/01.jpg" class="image fit thumb"><img src="images/thumbs/01.jpg" alt="" /></a>
							<h3>Magna sed consequat tempus</h3>
							<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
						</article>
						<article class="col-6 col-12-xsmall work-item">
							<a href="/images/fulls/02.jpg" class="image fit thumb"><img src="images/thumbs/02.jpg" alt="" /></a>
							<h3>Ultricies lacinia interdum</h3>
							<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
						</article>
						<article class="col-6 col-12-xsmall work-item">
							<a href="/images/fulls/03.jpg" class="image fit thumb"><img src="images/thumbs/03.jpg" alt="" /></a>
							<h3>Tortor metus commodo</h3>
							<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
						</article>
						<article class="col-6 col-12-xsmall work-item">
							<a href="/images/fulls/04.jpg" class="image fit thumb"><img src="images/thumbs/04.jpg" alt="" /></a>
							<h3>Quam neque phasellus</h3>
							<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
						</article>
						<article class="col-6 col-12-xsmall work-item">
							<a href="/images/fulls/05.jpg" class="image fit thumb"><img src="images/thumbs/05.jpg" alt="" /></a>
							<h3>Nunc enim commodo aliquet</h3>
							<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
						</article>
						<article class="col-6 col-12-xsmall work-item">
							<a href="/images/fulls/06.jpg" class="image fit thumb"><img src="images/thumbs/06.jpg" alt="" /></a>
							<h3>Risus ornare lacinia</h3>
							<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
						</article>
					</div>
					<ul class="actions">
						<li><a href="#" class="button">Full Portfolio</a></li>
					</ul>
				</section>

				<!-- Three -->
				<section id="three">
					<h2>Get In Touch</h2>
					<p>Accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque lorem ipsum
						dolor.</p>
					<div class="row">
						<div class="col-8 col-12-small">
							<form method="post" action="#">
								<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
									<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
									<div class="col-12">
										<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
									</div>
								</div>
							</form>
							<ul class="actions">
								<li><input type="submit" value="Send Message" /></li>
							</ul>
						</div>
						<div class="col-4 col-12-small">
							<ul class="labeled-icons">
								<li>
									<h3 class="icon solid fa-home"><span class="label">Address</span></h3>
									1234 Somewhere Rd.<br />
									Nashville, TN 00000<br />
									United States
								</li>
								<li>
									<h3 class="icon solid fa-mobile-alt"><span class="label">Phone</span></h3>
									000-000-0000
								</li>
								<li>
									<h3 class="icon solid fa-envelope"><span class="label">Email</span></h3>
									<a href="#">hello@untitled.tld</a>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</x-app-layout>
