 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?= $data['judul']; ?></h2>
          <ol>
            <li><a href="<?= BASEURL; ?>/home">Home</a></li>
            <li><?= $data['judul']; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Informasi Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <?php foreach($data['informasi'] as $informasi) : ?>
        <div class="row">
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= BASEURL; ?>/public/img/dishub1.PNG" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= BASEURL; ?>/informasi/informasiSingle"><?= $informasi['judul_informasi']?></a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle"><?= $informasi['username']?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= BASEURL; ?>/blog/blogSingle"><?= $informasi['waktu_upload']?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="limit-text">
                  <?= $informasi['text_informasi']?>
                </p>
                <div class="read-more">
                  <a href="<?= BASEURL; ?>/informasi/detailInformasi/<?= $informasi['ID_informasi']?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
          <?php endforeach; ?>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= BASEURL; ?>/public/img/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= BASEURL; ?>/informasi/informasiSingle">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                </p>
                <div class="read-more">
                  <a href="<?= BASEURL; ?>/informasi/informasiSingle">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= BASEURL; ?>/public/img/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= BASEURL; ?>/informasi/informasiSingle">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis tara kero pakla metaruna nedore stan.
                </p>
                <div class="read-more">
                  <a href="<?= BASEURL; ?>/informasi/informasiSingle">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= BASEURL; ?>/public/img/blog-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= BASEURL; ?>/informasi/blogSingle">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                </p>
                <div class="read-more">
                  <a href="<?= BASEURL; ?>/informasi/informasiSingle">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= BASEURL; ?>/public/img/blog-5.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= BASEURL; ?>/informasi/informasiSingle">Blanditiis dignissimos deleniti. Rerum iste et.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Quidem et eum explicabo quia illo numquam nostrum corrupti provident. Quia aspernatur et et facere. Quisquam maiores natus nihil incidunt ipsum est optio eum maxime. Dignissimos vitae explicabo. Corrupti esse sed a a. Laborum optio reprehenderit quia dena per.
                </p>
                <div class="read-more">
                  <a href="<?= BASEURL; ?>/informasi/informasiSingle">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= BASEURL; ?>/public/img/blog-6.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= BASEURL; ?>informasi/informasiSingle">Debitis cupiditate saepe ex quam aut id. Consequatur dignissimos et id id.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= BASEURL; ?>informasi/informasiSingle">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Modi dolor et placeat ut iure ad. Qui perferendis fugit quo et cumque facilis et debitis rerum. Repellendus animi qui eos. Unde perferendis et tempora Ratione porro omnis magn delata sera marto ned.
                </p>
                <div class="read-more">
                  <a href="<?= BASEURL; ?>/informasi/informasiSingle">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

        </div>

        <div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
          </ul>
        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->