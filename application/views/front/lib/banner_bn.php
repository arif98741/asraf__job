
<div id="banner" class="with-transparent-header parallax background" style="background-image: url(<?php echo base_url(); ?>asset/front/images/temp_background.jpg)" data-img-width="2000" data-img-height="1330" data-diff="300">
    <div class="container">
        <div class="sixteen columns">

            <div class="search-container">

                <!-- Form -->
                <h2>চাকরি খুজুন </h2>
                <?php echo form_open_multipart('home/search_action',array()) ?>

                <input type="text" name="keyword" class="ico-01" placeholder="job title, keywords or company name" value="" />
                <input type="text" name="location" class="ico-02" placeholder="city, province or region" value="" />

                <button type="submit" name="SEARCH" value="Search" onclick="return valid();"><i class="fa fa-search"></i></button>

                <!-- Browse Jobs -->
                <div class="browse-jobs">
                   আপনার জন্য <a href="<?php echo base_url(); ?>seeker/job/manage_categories"> ক্যাটাগরি</a> <!-- or <a href="#">location</a> -->
                </div>

                <!-- Announce -->
                <div class="announce">
                    আমাদের আছে <strong>15 000</strong> গুলো চাকুরি আপনার জন্য
                </div>

            </div>

        </div>
    </div>
</div>