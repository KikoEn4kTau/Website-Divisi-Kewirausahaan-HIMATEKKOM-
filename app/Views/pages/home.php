<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage_design</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
    
    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', serif;
        }
        .color_white{
            color: white;
        }
        .color_1{
            color: #252B48;
        }
        .color_2{
            color: #445069;
        }
        .color_3{
            color: #5B9A8B;
        }
        .color_4{
            color: #F7E987;
        }
        .color_5{
            color: #1d2939;
        }
        .color_6{
            color: #3C8574;
        }
        .textTitle_color{
            color: #445069;
            font-size: 18px;
        }
        .text_color{
            color: #445069;
            font-size: 16px;
        }

        .bg_button{
            background-color: #3C8574;
            color: white;
        }
        .border_color_3{
            border: #5B9A8B;
        }
        .bg_color{
            background-color: #E9F8F3;
        }
        .font_13{
            font-size: 13px;
        }
        .font_14{
            font-size: 14px;
        }
        .font_16{
            font-size: 16px;
        }
        .font_18{
            font-size: 18px;
        }
        .font_20{
            font-size: 20px;
        }
        .font_title{
            font-size: 48px;
        }
        .hero{
            font-size: 52px;
            line-height: 66px;
        }
        .search-bar {
            border: 2px solid #2D9C89;
            border-radius: 50px;
            padding: 10px 20px;
            width: 100%;
            max-width: 600px;
            margin: 20px 0px;
            display: flex;
            align-items: center;
        }
        .search-bar input {
            border: none;
            outline: none;
            flex-grow: 1;
            font-size: 1rem;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <section id="hero" class="p-md-5 pt-lg-7 pt-5" data-cue="fadeIn">
        <div class="mx-auto mt-5 p-4" style="max-width: 90vw;">
            <div class="row align-items-center flex-lg-nowrap">
                <div class="col-md-6" data-cues="slideInDown" data-group="page-title" data-delay="700">
                    <div class="text-lg-start" data-cue="zoomIn">
                        <div class="mb-5">
                            <h1 class="mb-3 display-4 font-weight-bold hero">Fueling <span class="color_3">Innovation</span> and <span class="color_3">Innovation</span> Growth</h1>
                            <p class="lead mb-0 color_2 font_20">“Take part in our entrepreneurial journey with expert guidance, exclusive events, and community support.”</p>
                        </div>
                        <div data-cues="slideInDown" data-group="page-title-buttons" data-delay="800">
                            <a href="#" class="btn fw-bold py-2 px-4 rounded-pill me-2 button-text bg_button font_18 mb-3">Join Now</a>
                        </div>
                        <div class="search-bar mt-4">
                            <i class="fas fa-search"></i>
                            <input placeholder="Search anything..." type="text"/>
                        </div>
                        <div class="d-flex color_5">
                            <div>
                                <i class="fas fa-lightbulb color_6 font_16"></i>
                                Innovative Ideas
                            </div>
                            <div>
                                <i class="fas fa-briefcase color_6 font_16 pl-5"></i>
                                Business Workshops
                            </div>
                            <div>
                                <i class="fas fa-cogs color_6 font_16 pl-5"></i>
                                Creative Solutions
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-cue="fadeIn" data-delay="1000">
                    <img class="rounded img-fluid" src="https://s3-alpha-sig.figma.com/img/67b0/025e/91f161c7604e63aa767baedc7bd2c9bb?Expires=1730678400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=NbZ049iZGGq5E~-L5Nm-Zr9cys0nqagSDy4UcSrQaVOei4w-JO8NwDlI~Ubju1EHmOcCt8NtJa5SrnfGFBqhviTtw5ksIQfNBe6jUIql30JGIWdBQsiTXtxwMxRyOKS6-mBZ7ef-QagmYVqh4YlgGcLdMDRRcKzr4TMi4QsHC-qr9HbjFklq75h14CVjdPIxm0qbDyXCd4QSBuDg-bt8BTNjE5ch4X0cym7pFTW6ok4sCrksnky0qO~cA9FMHp07PNV1s4eC-WT~c9LKRCZdmtqJZsKR~yc60yYDel51-MNvHvhjlxHRCiIv~acqFucLQEh-rZNm8cCZgP04Cojg7w__"/>
                </div>
            </div>
        </div>
    </section>

    <section id="Kegiatan Terkini" class="p-md-5 mb-5">
        <div class="kegiatanTerkini_title mx-auto" style="width:50vw;">    
            <h1 class="text-center font-weight-bold mb-3 font_title"><span class="color_3">Kegiatan</span> Terkini</h1>
            <p class="text-center color_2 font_18">Stay updated with the latest entrepreneurial activities and events. Join us to sharpen your business skills and network with like-minded innovators!</p>
        </div>
        <div class="card flex-row mt-5 mx-auto border-0 rounded bg_color " style="width: 85vw;">
            <img class="card-img-left example-card-img-responsive rounded" style="max-width: 600px;" src="https://s3-alpha-sig.figma.com/img/c1bc/2438/66531e60bb1059dd83e6a7b7986a3d81?Expires=1730678400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=B20BEwZpzJIHaYtLidw9Ggs8iletF6omVYcEPqHo1F95L3foNrkF7tItyd~QU8jBvl69a6qqrFOTq8NDBo~oa66NxFT4RstIKyhZguNiRz2iuMeH9~7SRggH3xV3EFVD7OHiSUDutul4h~N~K-yFca5j-NbPKhUcX1M29jp2Y7L6DlNEWGnyXSEvQkKUMQ77yu8TGODs70Z2xQFHbE-MIMM6z9apdCj5Nr3emLrAL-XT3YOn6x9DnC~NpmC7omOLNpVSYVQrTOd1dxqQsc~aePgNqsYzBIu~hgT0E3eCOE~11HoG14vY11TWXAE3qdQGpJd5fqIsZSCZvHpBFxCUzg__"/>
            <div class="card-body position-relative d-flex align-items-center">
                <div class=" p-4">
                    <div class="description">
                        <h2 class="card-title font-weight-bold color_6">“Insightful Experience"</h2>
                        <p class="card-text mb-5 color_1 font_18">"The business workshop provided by HIMATEKKOM was a game-changer for me. It equipped me with practical skills in financial planning, marketing strategies, and product development, all crucial for launching a successful business. The entire experience was invaluable and inspiring."</p>
                    </div>
                    <div class="nameTitle">
                        <h4 class="card-title font-weight-bold color_1 font_20">John Carter</h4>
                        <p class="card-text color_2 font_16">Workshop Participant</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="Program Kami" class="p-md-5 bg_color mb-5">
        <div class="programKami_title mx-auto" style="width:50vw;">    
            <h1 class="text-center font-weight-bold mb-3 font_title"><span class="color_3">Program</span> Kami</h1>
            <p class="text-center color_2 font_18">Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero accumsan. </p>
        </div>
        <div class="row mx-auto" style="width: 85vw;">
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 rounded shadow text-center">
                    <img alt="Placeholder image" class="rounded-circle mb-4 img-fluid" src="https://icons.veryicon.com/png/o/business/new-vision-2/picture-loading-failed-1.png" style="max-width: 50%;"/>
                    <h3 class="font-weight-bold mb-3 text-color">Business Workshop</h3>
                    <p class="text_color mb-4">An intensive training program to guide students through the process of launching their own start-up</p>
                    <a href="#" class="btn fw-bold py-2 px-4 rounded-pill mb-2 button-text bg_button">Learn More</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 rounded shadow text-center">
                    <img alt="Placeholder image" class="rounded-circle mb-4 img-fluid " src="https://icons.veryicon.com/png/o/business/new-vision-2/picture-loading-failed-1.png" style="max-width: 50%;"/>
                    <h3 class="font-weight-bold mb-3 text-color">Entrepreneur Challenge</h3>
                    <p class="text_color mb-4">A dynamic competition that fosters innovation by challenging students to develop and pitch their business ideas</p>
                    <a href="#" class="btn fw-bold py-2 px-4 rounded-pill mb-2 button-text bg_button">Learn More</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 rounded shadow text-center">
                    <img alt="Placeholder image" class="rounded-circle mb-4 img-fluid" src="https://icons.veryicon.com/png/o/business/new-vision-2/picture-loading-failed-1.png" style="max-width: 50%;"/>
                    <h3 class="font-weight-bold mb-3 text-color">Mentorship Program</h3>
                    <p class="text_color mb-4">Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalar dolor elementum tempus hac.</p>
                    <a href="#" class="btn fw-bold py-2 px-4 rounded-pill mb-2 button-text bg_button">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="Berita Terkini">
        <div class="py-5 mx-auto mt-4" style="width: 90vw;">
            <h1 class="text-center mb-5 font-weight-bold font_title"><span class="color_3">Berita</span> Terkini</h1>
            <div class="row">
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="image_card position-relative bg-success">
                            <img class="card-img-top" src="https://s3-alpha-sig.figma.com/img/ff00/d937/597dd9282ebb55b573129310b25db564?Expires=1730678400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=C3ofILcWA6ThpZ0vNu3c-CQ4ZwgxWotvu6F9Jdk8mfrJ1UJENiRVGJlWlM0E43qyLz9yYgH2YbYEY7gzesoLdn~JVeCkGd1otUonP0ss7IP4qVOvOJAvpVZZVBbXhgJtI6VjzVSL878y7HF6ODlOSzuZZ-ExZZcTdfZwZvbK6orxv4pg0apA8kI64~R~wyaLbHxoA8sU2uoOhZLSlXMWdZqUJP8Romi7OdlfdwciZooGz~NOIKkhivZ0Sqxh-BNyAGZ-NZa9nrHd0sZ68oW2FXlcAq2GhfY4Z16h4Xi8GQLpdJ5~77~dLeNhmYU41f7Yn6l8cfKx8SnDUM2sDYDISg__" alt="">
                            <div class="position-absolute top-0 end-0 translate-middle text-center p-2 rounded bg_button">
                                <span class="d-block font-weight-bold">29</span>
                                <span class="d-block">JAN</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3 color_1">“Innovative Startup Ideas from Our Business Workshop”</h5>
                            <p class="color_1 font_14 mb-4">In our latest business workshop, students presented groundbreaking ideas that have the potential to reshape industries.....
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="color_6 font-weight-bold" href="#">Read More<i class=" pl-2 fas fa-arrow-right"></i></a>
                                <div class="text-secondary">
                                    <i class="fas fa-comments pr-2"></i>65 Comments
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="cardImage position-relative">
                            <img class="card-img-top" src="https://s3-alpha-sig.figma.com/img/c14f/7553/9c13410b0b505df3160ce7e3facfd966?Expires=1730678400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=GGFv6Ss2CaxpIo8L-L8nydn2LBl-oI8AtUxGtWV5sf4ZQ3P5c7VQo6X0X78I4S-D56DuJnTIse3n0ynEH12ue4sDh-gCN05Pk~iHPzytXVK3n5F88H4RPKi9-RCL4v14VAbFAsyd1EBzRKvtxvDuonmF9BuNSVfn0IYFay6neyu4R6DgVZSpTIa-upvi0wD~ZFICOIEV4Az-o1HUMBco4EadLUSya~oaylFKp6zEHldWreth4ch5evarrc-2OJr6evH6Div0Qzn3tDnJsis1KUNR5CTl5Nafs8kB1pYcLsdhu8TUwhrSn3dJc1k~PzBqjq3qgFOS4IKUKaV6YGEV6A__" alt="">
                            <div class="position-absolute bottom-0 start-0 text-center p-2 rounded bg_button">
                                <span class="d-block font-weight-bold">29</span>
                                <span class="d-block">JAN</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3 color_1">“Collaborative Growth through Entrepreneur Challenges”</h5>
                            <p class="color_1 font_14 mb-4">Our recent Entrepreneur Challenge brought together students from various fields to collaborate and solve real-world business problems......
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="color_6 font-weight-bold" href="#">Read More<i class=" pl-2 fas fa-arrow-right"></i></a>
                                <div class="text-secondary">
                                    <i class="fas fa-comments pr-2"></i>65 Comments
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="cardImage position-relative">
                            <img class="card-img-top" src="https://s3-alpha-sig.figma.com/img/0dfa/5fbf/17463c62e62a19b57bae800893dd6cae?Expires=1730678400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=LhUSzln2Pe-L-A9tRhVL~~AuJd8ErqOAmNS5vGOVk8ldfqW3oxN0XENBd0Gq6POrntVSSx6LqSZAdVUxCyqNbNogIMCrdlKkEoRBrp95aE3-01lTdEWP19OJ9Nc9g9K8g0LEP1tDOgnQ4dXJgLfEZzGlPZ9zvPdkQERGVJAEmbnTRyAF5sdcyeGQDIOGpK5u2zUscAOPTY5PZC4YAffK~Q-qYS8JRg7dDajJgmfGzKIewNTUKte4w4axF3RFhS0fDbyjWzF8UW4nbV4MWbnZAXzl6qxi5c9YEJIjokH-dsOMx~yP~EPtW5OZMMc6GOO4jq1UE4Zeh0mvR2DmVoaztA__" alt="">
                            <div class="position-absolute bottom-0 start-0 text-center p-2 rounded bg_button">
                                <span class="d-block font-weight-bold">29</span>
                                <span class="d-block">JAN</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3 color_1">“Networking and Insights at the Business Summit"</h5>
                            <p class="color_1 font_14 mb-4">The HIMATEKKOM Business Summit gathered professionals and students to discuss emerging trends in technology and entrepreneurship......
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="color_6 font-weight-bold" href="#">Read More<i class=" pl-2 fas fa-arrow-right"></i></a>
                                <div class="text-secondary">
                                    <i class="fas fa-comments pr-2"></i>65 Comments
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn fw-bold py-2 px-4 rounded-pill mb-2 button-text bg_button">See All</a>
            </div>
        </div>
    </section>
</body>
</html>