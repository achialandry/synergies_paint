<template>
    <div class="container-fluid" id="landing-page">
        <div class="row "><br><br>
            <div class="col-md-3 offset-md-6 col-sm-4 mx-auto text-center mt-5"><br><br><br>
                <img :src="'img-assets/logos.png'" alt="Logo Synergy" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 ">
                <div class="row">
                    <div class="col-md-12 text-center mt-4 ml-0 pl-0 mr pr-0">
                        <h2 class="h2-responsive white-text"><a class="black-text" href="#"></b>TRUSTED,</a> PROFESSIONAL &</b></h2>
                    </div>
                    <!-- <div class="col-md-6 text-center ml-0 pl-1 mr-0 pr-0">
                        <h3 class="h3-responsive white-text"> </h3>
                    </div> -->
                </div>
                <div class="row text-center">
                    <div class="col-md-12 text-center">
                        <h2 class="h2-responsive white-text"></b>AFFORDABLE PAINTERS</b></h2>
                    </div>

                </div>
                <div class="row text-center">
                    <div class="col-md-6 offset-md-3 text-center"><br>
                        <h6 class="h6-responsive black-text"><b>RESIDENTIAL & COMMERCIAL PAINTING SERVICES</b></h6>
                        <h6 class="h6-responsive black-text"><b>SYNERGY PAINTING HAS SERVED THE GREATER VANCOUVER AREA SINCE 2009 WITH THE HIGHEST QUALITY
OF SERVICE AND COMPETITIVE PRICE.</b></h6>
                    </div>
                </div><br><br><br>
                <div class="row">
                    <div class="col-md-4 offset-md-4 text-center mt-4 mb-2">
                     <a href="#"><i class="fab fa-2x fa-facebook-square white-text" aria-hidden="true"></i></a>
                 </div><br><br><br>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Landing Page mounted.')
        }
    }
</script>
