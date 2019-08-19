<?php $this->load->view('header');?>

    <div class="another">
        <div class="gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 data-aos="fade-right" data-aos-duration="500">Need Boost For Your Website?</h1>
                    <h2 data-aos="fade-left" data-aos-duration="500">Fill in the form to get a free quote for your website seo</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Support section Start -->
    <div class="support">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" data-aos="fade-up" data-aos-duration="400">
                    <div class="heading">
                        <h3>get the full Support</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ad modi blanditiis perferendis natus nesciunt officia quibusdam voluptates tempore inventore, sit! Mollitia dignissimos esse adipisci. Libero vitae quam, ex iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic autem ipsam est, obcaecati eaque quaerat quod maiores vitae. Quod quo perferendis asperiores culpa deserunt dolores cum adipisci saepe laborum in!</p>
                    </div>
                </div>
                <div class="col-sm-12" data-aos="fade-up" data-aos-duration="500">
                    <figure class="figure">
                        <img src="<?php echo base_url();?>/assets/images/support-bg.jpg" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                    </figure>
                </div>
            </div>
        </div>
        <div class="container py-5 main">
            <div class="row" data-aos="fade-up" data-aos-duration="600">
                <div class="col-md-12">
                    <form>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Your Email id" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Your Website" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <select required>
                                      <option value="none">None</option>
                                      <option value="web design">Web Design</option>
                                      <option value="psd to html">Psd to html</option>
                                      <option value="web hosting">Web hosting</option>
                                      <option value="website template">website template</option>
                                      <option value="" selected disabled hidden>What Type of Service your are looking for?</option>
                                    </select>
                            </div>
                            <div class="col-sm-4">
                                <select required>
                                      <option value="0">0</option>
                                      <option value="1l">1L</option>
                                      <option value="2ls">2Ls</option>
                                      <option value="3ls">3Ls</option>
                                      <option value="4ls">4Ls</option>
                                      <option value="" selected disabled hidden>Your Budget</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control" placeholder="Extra Message" rows="8" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary px-4">Alright, Get the Free Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Support section Ended -->

<?php $this->load->view('footer');?>

