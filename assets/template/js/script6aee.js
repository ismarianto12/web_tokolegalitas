function replaceText(v, w, y) {
    return v.split(w).join(y)
}

function ChangeUrl(v, w, y) {
    "undefined" != typeof history.pushState ? (v = {
        Page: v,
        Title: w,
        Url: y
    }, history.pushState(v, v.Title, v.Url)) : console.log("Browser does not support HTML5. Can not change URL State")
}
$(document).ready(function() {
    function v(a) {
        if (a.files && a.files[0]) {
            var b = new FileReader;
            b.onload = function(c) {
                $("#photo-profil-nextr").attr("src", c.target.result)
            };
            b.readAsDataURL(a.files[0])
        }
    }

    function w(a, b, c) {
        $.ajax({
            type: "GET",
            url: domain + "/api/" + a,
            data: b,
            success: function(d) {
                c(d)
            },
            contentType: "application/json"
        })
    }

    function y(a) {
        $("#news-content").html("");
        if (void 0 != a)
            for (var b = $("#news-content-template").html(), c = 0; c < a.length; c++) {
                var d = domain + "/detail/" + a[c].slug,
                    h = new Date(a[c].date_posted),
                    e =
                    replaceText(b, "{{ID}}", a[c].id);
                e = replaceText(e, "SLUG", d);
                e = replaceText(e, "{{IMAGE}}", a[c].image_full);
                e = replaceText(e, "{{TITLE}}", a[c].title);
                e = replaceText(e, "{{DATE}}", h.toLocaleString("id-ID", {
                    year: "numeric",
                    day: "numeric",
                    month: "long"
                }));
                e = replaceText(e, "{{EXCERPT}}", a[c].excerpt.replace(/^(.{134}).+/, "$1&hellip;"));
                $("#news-content").append(e)
            }
    }
    $(".lazy").Lazy({
        effect: "fadeIn",
        asyncLoader: function(a, b) {
            setTimeout(function() {
                a.html('element handled by "asyncLoader"');
                b(!0)
            }, 1E3)
        }
    });
    window.addEventListener("popstate",
        function(a) {
            a = window.location.pathname;
            0 <= a.toLowerCase().indexOf("promo") || 0 <= a.toLowerCase().indexOf("news") || 0 <= a.toLowerCase().indexOf("artikel") ? ($(".load-more").hide(), $(".loading-klinik").toggleClass("hidden"), $(".news-part").toggleClass("hidden"), setTimeout(function() {
                window.location.replace(window.location.href)
            }, 500)) : 0 <= a.toLowerCase().indexOf("search-result") ? ($("#search-result-content").hide(), $(".loading-klinik").toggleClass("hidden"), setTimeout(function() {
                    window.location.replace(window.location.href)
                },
                500)) : 0 <= a.toLowerCase().indexOf("investor-relation") ? ($(".content-about-us>.loading-klinik").toggleClass("hidden"), setTimeout(function() {
                window.location.replace(window.location.href)
            }, 500)) : $(35) ? ($(".card-bottom-klinik>.loading-klinik").toggleClass("hidden"), $(".klinik-content").hide(), setTimeout(function() {
                window.location.assign(window.location.href)
            }, 500)) : window.location.replace(window.location.href)
        });
    767 < $(window).width() && $("#milestone-about .item").each(function() {
        var a = $(this).next();
        a.length ?
            (a.children(":first-child").clone().appendTo($(this)), 0 < a.next().length ? a.next().children(":first-child").clone().appendTo($(this)) : $(this).siblings(":first").children(":first-child").clone().empty().appendTo($(this))) : (a = $(this).siblings(":first"), a.children(":first-child").clone().empty().appendTo($(this)), $(this).siblings(":first").children(":first-child").clone().empty().appendTo($(this)));
        $(".lazy").Lazy({
            effect: "fadeIn"
        })
    });
    if (768 > $(window).width()) {
        if (0 < $("#lightgallery").length) {
            var q = $("#lightgallery .image-gallery").data("imgresponsive");
            $("#lightgallery .top-image-klinik").css("background-image", "url(" + q + ")")
        }
        0 < $(".rumah-sakit-home").length && (q = $(".rumah-sakit-home .active .home-image-klinik").data("imgresponsive"), $(".rumah-sakit-home .active .home-image-klinik").css("background-image", "url(" + q + ")"));
        $("#res-klinik-home").addClass("dropdown-menu")
    }
    $(window).resize(function() {
        if (767 == $("header").width()) $("#res-klinik-home li").click(function(b) {
            $("#res-klinik-home").hide()
        });
        else if (767 < $(window).width()) $("#res-klinik-home").length &&
            $("#res-klinik-home").show(), 0 < $("#pills-klinik-tab").length && $("#pills-klinik-tab li").css("left", "0%"), $("#info-dokter-content .row").first().find(".col-md-3 .row:last-child").removeClass("hidden");
        else if (767 > $(window).width()) {
            if ($(".rumah-sakit-home").length) {
                var a = $(".rumah-sakit-home .active .home-image-klinik").data("imgresponsive");
                $(".rumah-sakit-home .active .home-image-klinik").css("background-image", "url(" + a + ")")
            }
            $("#pills-klinik-tab").fadeIn(500)
        }
        a = $(this);
        767 < a.width() ? ($("#res-klinik-home").show(),
            0 < $(".center-btn-res").length && $("div > .btn-border-pink").unwrap()) : $(".btn-border-pink").wrap('<div class="center-btn-res"></div>');
        a = $(this);
        767 < a.width() ? $("#milestone-about .item").each(function() {
            var b = $(this).next();
            b.length ? (b.children(":first-child").clone().addClass("hidden").appendTo($(this)), 0 < b.next().length ? b.next().children(":first-child").clone().addClass("hidden").appendTo($(this)) : $(this).siblings(":first").children(":first-child").clone().empty().addClass("hidden").appendTo($(this))) :
                (b = $(this).siblings(":first"), b.children(":first-child").clone().empty().addClass("hidden").appendTo($(this)), $(this).siblings(":first").children(":first-child").clone().empty().addClass("hidden").appendTo($(this)));
            $(".lazy").Lazy({
                effect: "fadeIn"
            })
        }) : (0 < $("#lightgallery").length && (a = $("#lightgallery .image-gallery").data("imgresponsive"), $("#lightgallery .top-image-klinik").css("background-image", "url(" + a + ")")), 0 < $(".rumah-sakit-home").length && (a = $(".rumah-sakit-home .active .home-image-klinik").data("imgresponsive"),
            $(".rumah-sakit-home .active .home-image-klinik").css("background-image", "url(" + a + ")")))
    });
    0 < $("#toggle-about").length && ($("#menu-about-us li.active").hasClass("open") ? $("#current-about").text($("#menu-about-us li.active .open").text()) : $("#current-about").text($("#menu-about-us li.active").text()));
    $("#menu-about-us .nav-item").click(function(a) {
        0 != $("#menu-about-us li.active .open").length ? (a = $("#menu-about-us li.active .open").text(), $("#current-about").text(a)) : (a = $(this).text(), $("#current-about").text(a));
        $("#toggle-about").click()
    });
    $("#menu-about-us a").on("click", function(a) {
        $(".nav-item").hasClass("open") && a.stopPropagation();
        a.preventDefault()
    });
    0 < $("#boarddetail-modal").length && $(".button-detail").click(function(a) {
        $("#boarddetail-modal .nama-testimoni-detail").text($(this).data("nama-lengkap"));
        $("#boarddetail-modal .role").text($(this).data("role"));
        $("#boarddetail-modal .foto-modal-board").attr("src", $(this).data("photo"));
        if ("en" == lang) switch ($(this).data("nama")) {
            case "rustiyan":
                var b = "Mr. Rustiyan Oen has been our President Director since 2014. He has been the Managing Director of TokoLegalitas.com Group since 1997. He began his career at J.I. Management Co. Inc. in Pomona, California, USA, where he served as Finance Director from 1988 to 1990 before returning to Indonesia, where he was President Director of PT Vayatour from 1990 to 1993 and President Commissioner from 1993 to 2004. He served as President Director of PT Arya Mitra from 1990 to 1994, Commissioner from 2002 to 2008, and Director from 2008 to present. <br/><br/>Mr. Oen received his Bachelor\u2019s degree from the Bogor Agricultural University in 1984 and obtained his Masters of Business Administration in Finance from San Diego State University in San Diego, California, USA in 1988.";
                break;
            case "joyce":
                b = "Ms. Joyce V. Handajani has been our Director and Corporate Secretary since January 2014. She began her career as Corporate Treasury Manager at PT Enseval Putera Megatrading Tbk in 1994. From 2005 to 2008, she served as Deputy Director of the Corporate Treasury at PT Kalbe Farma Tbk From September 2008 to January 2011, she was then appointed as Director of PT Hexpharm Jaya Laboratories, a subsidiary of PT Kalbe Farma Tbk During the same time, she also served as Director of Corporate Treasury and Investor Relations of PT Kalbe Farma Tbk (2008 to 2013). <br/><br/>Ms. Handajani received a Bachelor of Arts degree in Finance with honors from the University of Texas at Austin, USA in 1992 and a Masters of Business Administration from the University of Texas at San Antonio, USA in 1993.";
                break;
            case "esther":
                b = "She was appointed as the Company\u2019s Independent Director since May 2016. She started her career as Head of Puskesmas Ketapang and then Head of Puskesmas Lahei at North Barito, Central Kalimantan in 1987-1990. She joined PT Bank Arta Prima in 1990-1994. Her career in TokoLegalitas.com started as Division Staff, and then as Medical Manajer and HRD & General Affairs Manager at RS TokoLegalitas.com Jatinegara (1995-2001); Project Officer and Director at TokoLegalitas.com Kelapa Gading (2002- 2008). <br/><br/>She was then appointed as Director at Mitra Kemayoran since 2008 until now. Ms. Ramono graduated with Medical degree from University of Indonesia in 1987 and Master in Management from Atmajaya University, Jakarta, in 2000.";
                break;
            case "jozef":
                b = "Jozef Darmawan Angkasa has been President Commissioner since 2014. He started his career as Financial Controller of KC Pharmaceuticals Inc., California, USA in 1992 until 1994. <br/><br/>Currently he holds several other positions such as lecturer at Binus Business School (2007-present); Chairman/Founder of SPLASH!! Wave of Communication, Indonesia \u2013 a creative activation agency (2008-present); and Chairman/Founder of Kasih Group (2008-present). Mr. Angkasa received Bachelor of Science (BSc) in engineering Management from University of Portland, Portland, Oregon, USA in 1990. He earned his MBa from Loyola Marymount University, USA (1993), and Master of Science (MSc) degree in engineering Management from the University of Southern California, Los Angeles, USA (1995).";
                break;
            case "laura":
                b = "Ms. Laura Aryanto, has been a Commissioner since 2014. She started her career as a Corporate Finance of PT Dongsuh Kolibindo Securities (1997-1998); Commissioner of PT Adimitra Transferindo from 2001 to 2006; and PT Sanghiang Perkasa from 2006 to 2008; trustee member of Yayasan Pendidikan Kalbe (2008-present); and Director of PT Bina Arta Charisma since 2011 until now. Ms. Aryanto received a Bachelors of Arts degree in Finance from California State University at Fullerton in 1992.";
                break;
            case "hamzah":
                b = "Hamzah bin Mahmood has been a Commissioner since May 2016. He started his career at HSBC Malaysia as Residence Officer and Officer In Charge during 1986-1988. <br/><br/>He now assume his role as Founder & CEO at Kini Murni Development Sdn Bhd since 2003; Co-founder & Group Executive Director at Prominent Harmony Sdn Bhd since 2015; and Director at Lion Capital Group Sdn Bhd since 2015. Mr. Mahmood received Bachelor of Science (Mathematics) from Illinois State University (1984) and he received Master Business Administration (Finance)  from North Texas State University (1986).";
                break;
            case "johannes":
                b = "Indonesian citizen, born in Solo on 1944. Graduated with a degree in Pharmaceutical from Bandung Institute of Technology in 1969. He joined PT Kalbe Farma Tbk in 1972 as Research & Development Manager and was appointed as Director of Marketing in 1976. Between 1992 and 1998, he served as a Commissioner of PT Kalbe Farma Tbk as well as that of several other companies in the Kalbe Group, namely as Commissioner of PT Kageo Igar Jaya Tbk, President Commissioner of PT Hexpharm Jaya Laboratories and also as Commissioner PT SanghiangPerkasa since 1993. <br /><br />Between 1996 and 1998, he served as President Director of PT Enseval Putera Megatrading Tbk. Up until 2008, he was the President Commissioner of PT Bintang Toedjoe and a Commissioner of PT Finusolprima Farma. He has also held several senior positions in PT Dankos Laboratories Tbk, having been appointed as a Director in 1985, a Commissioner between 1989 and 1994 and President Commissioner from April 1994 until the merger. He served as President Director of PT Kalbe Farma Tbk from 1998 until May 2008 and as the President Commissioner from 2008 until 2017. In 2011, he was appointed as the Chairman of the Indonesian Pharmaceutical Association (GP Farmasi) for period of 2011-2016.";
                break;
            case "gede":
                b = "Dr. I Gede Subawa has been Independent Commissioner since 2014. He started his career as Head of District Health Center Insana, East Nusa Tenggara (NTT) in 1978. Currently, he is a member of the Committee Health Insurance Management Expert and Indonesian Health Insurance (PAMJAKI), which is a professional organization of health insurance that provides continuing education with respect to health insurance management. <br/><br/>dr. I Gede Subawa received his bachelors degree in Medical from Udayana University, Denpasar in 1978 and his Master degree/Magister Management of Hospital from Gadjah Mada University, Yogyakarta in 1996."
        } else switch ($(this).data("nama")) {
            case "rustiyan":
                b =
                    "Menjabat sebagai Direktur Utama Perseroan sejak 2014. Managing Director TokoLegalitas.com sejak 1997. Memiliki pengalaman karir sebagai Direktur Keuangan di J.I. Management Co. Inc. di Pomona, California, USA (1988-1990); Direktur Utama PT Vayatour (1990-1993) dan Presiden Komisaris (1993-2004). Direktur Utama PT Arya Mitra (1990-1994), Komisaris (2002-2008), dan sebagai Direktur (2008-sekarang). <br/><br/>Beliau memperoleh gelar Sarjana dari Institut Pertanian Bogor tahun 1984, dan gelar <i>Masters of Business Administration</i> dalam bidang <i>Finance</i> dari San Diego State University, California, USA pada tahun 1988.";
                break;
            case "joyce":
                b = "Menjabat sebagai Direktur Perseroan dan Sekretaris Perusahaan sejak Januari 2014. Memulai karir sebagai Corporate Treasury Manager PT Enseval Putera Megatrading Tbk (1994); Wakil Direktur Corporate Treasury PT Kalbe Farma Tbk (2005-2008); Direktur PT Hexpharm Jaya Laboratories, yang merupakan Anak Perusahaan PT Kalbe Farma Tbk (September 2008-January 2011); Direktur Corporate Treasury & Investor Relations PT Kalbe Farma Tbk (2008- 2013). <br/><br/>Beliau memperoleh gelar Bachelor of Arts di bidang Finance dari University of Texas di Austin, USA (1992) dan gelar Master of Business Administration dari University of Texas di San Antonio, USA (1993).";
                break;
            case "esther":
                b = "Menjabat sebagai Direktur Independen Perseroan sejak Mei 2016. Beliau memulai karir sebagai Kepala Puskesmas Ketapang kemudian Kelapa Puskesmas Lahei di Barito Utara, Kalimantan Tengah pada tahun 1987-1990. Kemudian beliau bekerja di PT Bank Arta Prima pada tahun 1990-1994. Selanjutnya, beliau memulai karir dengan TokoLegalitas.com sebagai Division Staff dan kemudian menjabat sebagai Manajer Medis dan HRD & Bagian Umum di RS TokoLegalitas.com Jatinegara (1995-2001); Project Officer dan Direktur di TokoLegalitas.com Kelapa Gading (2002-2008); Direktur di Mitra Kemayoran dari tahun 2008 hingga sekarang. <br/><br/>Beliau meraih gelar Sarjana Kedokteran pada tahun 1987 dari Universitas Indonesia, dan mengambil gelar Magister Manajemen dari Universitas Atmajaya, Jakarta, pada tahun 2000.";
                break;
            case "jozef":
                b = "Menjabat sebagai Komisaris Perseroan sejak 2014. Memulai karir sebagai Financial Controller KC Pharmaceuticals Inc., California, USA (1992-1994). <br/><br/>Saat ini beliau memegang beberapa posisi seperti Dosen Binus Business School (2007-saat ini); Chairman/ Pendiri SPLASH!! Wave of Communication, Indonesia \u2013 creative activation agency (2008-sekarang); dan Chairman/Pendiri Kasih Group (2008-sekarang). Beliau memperoleh gelar Bachelor of Science (BSc) di bidang engineering Management dari university of Portland, Portland, Oregon, USA (1990), gelar Master of Business Administration (MBa) dari Loyola Marymount University, Los Angeles, California, USA (1993) dan gelar Master of Science (MSc) di bidang Engineering Management dari University of Southern California, Los Angeles, USA (1995).";
                break;
            case "laura":
                b = "Menjabat sebagai Komisaris Perseroan sejak 2014. Memulai karir sebagai sebagai Corporate Finance PT Dongsuh Kolibindo Securities (1997-1998); menjabat sebagai Komisaris PT Adimitra Transferindo (2001-2006); Komisaris PT Sanghiang Perkasa (2006-2008); anggota Dewan Pembina Yayasan Pendidikan Kalbe (2008-sekarang); dan Direktur PT Bina Arta Charisma (2011-saat ini). Beliau memperoleh gelar Bachelor of Arts di bidang Finance dari California State University di Fullerton (1992).";
                break;
            case "hamzah":
                b = "Menjabat sebagai Komisaris Perseroan sejak Mei 2016.Beliau memulai karirnya di HSBC Malaysia sebagai Residence Officer dan Officer In Charge pada tahun 1986-1988.<br/><br/>Selain itu hingga saat ini, beliau juga menjabat sebagai Founder & CEO di Kini Murni Development Sdn Bhd sejak 2003; Co-founder & Group Executive Director di Prominent Harmony Sdn Bhd sejak 2015; dan Director di Lion Capital Group Sdn Bhd sejak 2015. Beliau meraih gelar Bachelor of Science (Mathematics) dari Illinois State University pada tahun 1984 dan gelar Master Business Administration (Finance) dari North Texas State University pada tahun 1986.";
                break;
            case "johannes":
                b = "Warga Negara Indonesia, lahir di Solo pada tahun 1944. Meraih gelar Sarjana Farmasi dari Institut Teknologi Bandung pada tahun 1969. Sejak tahun 1972, beliau telah bergabung dengan PT Kalbe Farma Tbk sebagai Research & Development Manager dan diangkat menjadi Direktur Pemasaran pada tahun 1976. Sejak tahun 1992 hingga tahun 1998, beliau menjabat sebagai Komisaris PT Kalbe Farma Tbk dan beberapa anak perusahaan PT Kalbe Farma Tbk, antara lain sebagai Komisaris PT Kageo Igar Jaya Tbk, Presiden Komisaris PT Hexpharm Jaya Laboratories dan juga sebagai Komisaris PT Sanghiang Perkasa sejak tahun 1993. <br /><br />Dari tahun 1996 sampai dengan tahun 1998 beliau menduduki jabatan Presiden Direktur PT Enseval Putera Megatrading Tbk. Sampai tahun 2008, beliau menjabat sebagai Presiden Komisaris PT Bintang Toedjoe dan sebagai Presiden Komisaris PT Finusolprima Farma. Beliau juga menjabat beberapa posisi sebagai pemimpin di PT Dankos Laboratories Tbk, yaitu sebagai Direktur pada tahun 1985, sebagai Komisaris pada tahun 1989 hingga 1994, dan sebagai Presiden Komisaris sejak April 1994 sampai dengan penggabungan usaha. Beliau menjadi Presiden Direktur PT Kalbe Farma Tbk sejak tahun 1998 hingga Mei 2008 dan menjabat sebagai Presiden Komisaris sejak 2008 hingga 2017. Pada tahun 2011, beliau terpilih sebagai Ketua Umum GP Farmasi Indonesia untuk periode 2011-2016.";
                break;
            case "gede":
                b = "Menjabat sebagai Komisaris Independen Perseroan sejak 2014. Beliau memulai karir sebagai Kepala Puskesmas Kec Insana Kab. Timor Tengah Utara (TTU) Provinsi Nusa Tenggara Timur (NTT) di tahun 1978. Saat ini sebagai Pengurus Persatuan Ahli Manajemen Jaminan Kesehatan dan Asuransi Kesehatan Indonesia (PAMJAKI), sebuah organisasi profesi di bidang asuransi kesehatan yang memberikan pendidikan lanjutan di bidang manajemen asuransi kesehatan. <br/><br/>Beliau memperoleh gelar S1 Kedokteran dari Fakultas Kedokteran Universitas Udayana, Denpasar (1978) dan S2 Master Kesehatan/Magister Manajemen Nama Kantor dari Universitas Gadjah Mada, Yogyakarta pada tahun 1996."
        }
        $("#boarddetail-modal .text-testimoni").html(b)
    });
    0 < $("#toggle-infors").length && $("#current-infors").text($("#menu-info-rs li.active").text());
    0 < $("#pills-klinik-tab").length && 767 >= $(window).width() && ($("#pills-klinik-tab").fadeOut(), $(window).load(function() {
        $("#pills-klinik-tab").fadeIn(500)
    }));
    0 < $(".calendar-jui").length && ($(".calendar-jui input").val((new Date($(".hidden-jui").text())).toLocaleString("id-ID", {
            day: "2-digit",
            month: "long",
            year: "numeric"
        })), $("#tanggal-jadwal-sr").length ? $("#tanggal-jadwal-sr").val($(".hidden-jui").text()) : $("#jadwalform-tanggal").val($(".hidden-jui").text()),
        $(".calendar-jui .input-group-addon").click(function(a) {
            a.preventDefault();
            $(".calendar-jui #jadwalform-tanggal-disp-kvdate input").datepicker("show")
        }));
    $(".overlay-calendar-search").length && ($(".overlay-calendar-search input").val((new Date($("#search-tanggal-jadwal").val())).toLocaleString("id-ID", {
        day: "2-digit",
        month: "long",
        year: "numeric"
    })), $(".overlay-calendar-search .input-group-addon").click(function(a) {
        a.preventDefault();
        $(".overlay-calendar-search #jadwalform-tanggal-disp-kvdate input").datepicker("show")
    }));
    if (0 < $("#form-buat-janji").length) {
        var E = url_post;
        $("#jenis-janji li a").click(function(a) {
            $("#buatjanjimodal #input-category").val($(this).data("id"))
        });
        $("#form-buat-janji").validator().on("beforeSubmit", function(a) {
            $("#buatjanjimodal").removeClass("in");
            $("#buatjanjimodal").fadeOut(200);
            $("#loading-form-buat-janji").addClass("in");
            $("#loading-form-buat-janji").fadeIn(200);
            a.isDefaultPrevented() || (a.preventDefault(), a = $(this).serializeArray(), $.ajax({
                type: "POST",
                url: E,
                dataType: "json",
                data: a,
                success: function(b) {
                    if (200 ==
                        b.status) $("#loading-form-buat-janji").removeClass("in"), $("#loading-form-buat-janji").fadeOut(200), $("#buatjanjimodal #input-phone").val(""), $("#thanksmodal").addClass("in"), $("#thanksmodal").fadeIn(200);
                    else {
                        $("#loading-form-buat-janji").removeClass("in");
                        $("#loading-form-buat-janji").removeClass(200);
                        var c = "";
                        $.isArray(b.msg) && b.msg.length ? $.each(b.msg, function(d, h) {
                            c += h + "<br/>"
                        }) : c = b.msg;
                        $("#buatjanjimodal .error-message").html(c)
                    }
                },
                error: function(b, c, d) {
                    console.log("%c AJAX _POST ", "background: #c5d14b; color: #333",
                        this.url + " | Error with status code " + r.status)
                }
            }))
        }).on("submit", function(a) {
            a.preventDefault()
        })
    }
    q = new Date($("#datetimepicker-sr").val());
    q.setSeconds(q.getSeconds() + 10);
    $("#datetimepicker-sr").datetimepicker({
        locale: "id",
        format: "DD MMMM YYYY",
        widgetPositioning: {
            vertical: "bottom"
        },
        useCurrent: !1,
        defaultDate: q
    }).on("dp.change", function() {
        $("#datetimepicker-sr").closest(".row").find(".obsolete-error").addClass("hide")
    });
    0 < $("#datetimepicker-sr").length && (q = new Date, q.setHours(0, 0, 0, 0), $("#datetimepicker-sr").data("DateTimePicker").minDate(q),
        q = new Date($("#datetimepicker-sr").val()), $("#datetimepicker-sr").data("DateTimePicker").date(q));
    $("#cabang-rumah-sakit-sr li a").click(function(a) {
        $("#btn-search-result").data("idclinic", $(this).data("id"))
    });
    $("#spesialisasi-sr li a").click(function(a) {
        $("#btn-search-result").data("idspesialis", $(this).data("id"))
    });
    $("#btn-search-result").click(function(a) {
        a = $(this).data("idclinic");
        var b = $(this).data("idspesialis"),
            c = new Date($("#datetimepicker-sr").val()),
            d;
        0 == c.getDay() && (d = "sun");
        1 == c.getDay() &&
            (d = "mon");
        2 == c.getDay() && (d = "tue");
        3 == c.getDay() && (d = "wed");
        4 == c.getDay() && (d = "thu");
        5 == c.getDay() && (d = "fri");
        6 == c.getDay() && (d = "sat");
        var h = $("#nama-dokter-janji").val();
        $("#nama-dokter-janji-res").val();
        c = c.getDate() + "-" + c.getMonth() + 1 + "-" + c.getFullYear();
        window.location = h ? window.location.origin + window.location.pathname + "?clinic=" + a + "&specialization=" + b + "&day=" + d + "&date=" + c + "&doctorname=" + h : window.location.origin + window.location.pathname + "?clinic=" + a + "&specialization=" + b + "&day=" + d + "&date=" + c
    });
    0 < $("#nav-buat-janji-content").length && ($("#cabang-rs-select li a").click(function(a) {
        $("#btn-buat-janji-sr").data("idclinic", $(this).data("id"))
    }), $("#spesialisasi-select li a").click(function(a) {
        $("#btn-buat-janji-sr").data("idspesialis", $(this).data("id"))
    }), $("#btn-buat-janji-sr").click(function(a) {
        a = $(this).data("idclinic");
        var b = $(this).data("idspesialis"),
            c = new Date($("#datetimepicker1").val()),
            d;
        0 == c.getDay() && (d = "sun");
        1 == c.getDay() && (d = "mon");
        2 == c.getDay() && (d = "tue");
        3 == c.getDay() && (d = "wed");
        4 == c.getDay() && (d = "thu");
        5 == c.getDay() && (d = "fri");
        6 == c.getDay() && (d = "sat");
        var h = $("#nama-janji").val();
        c = c.getDate() + "-" + c.getMonth() + 1 + "-" + c.getFullYear();
        window.location = h ? window.location.origin + window.location.pathname + "/search-result?clinic=" + a + "&specialization=" + b + "&day=" + d + "&date=" + c + "&doctorname=" + h : window.location.origin + window.location.pathname + "/search-result?clinic=" + a + "&specialization=" + b + "&day=" + d + "&date=" + c
    }));
    $(document).off("submit").on("submit", "#jadwal-form-md", function(a) {
        a.preventDefault();
        $("#search-result-content").hide();
        $(".loading-klinik").removeClass("hidden");
        $(this).serializeArray();
        var b = {};
        $.each($(this).serializeArray(), function() {
            b[this.name.replace(/[\[\]']+/g, "")] = this.value
        });
        a = b.JadwalFormtanggal;
        var c = new Date(a);
        $.ajax({
            type: "GET",
            url: domain + "/api/search-doctor",
            data: "search[clinic]=" + b.JadwalFormid_clinic + "&search[specialization]=" + b.JadwalFormid_specialization + "&search[date]=" + a + "&search[doctorName]=" + b.JadwalFormnama_dokter,
            contentType: "application/json",
            success: function(d) {
                $("#search-result-content").html("");
                var h = $("#search-results-template").html(),
                    e = $("#jadwal-searchresult-template").html();
                if (200 == d.status && 0 < d.data.doctors.length)
                    for (var k = 0; k < d.data.doctors.length; k++) {
                        var m = d.data.doctors[k];
                        $("#buatjanjimodal #input-idclinic").val(m.clinic);
                        var g = replaceText(h, "{{DOCTORID}}", m.doctor.id);
                        g = replaceText(g, "{{DOCTORNAME}}", m.doctor.name);
                        g = replaceText(g, "{{DOCTORIDSP}}", m.doctor.specialization.id);
                        g = replaceText(g, "{{DOCTORSP}}", m.doctor.specialization.name);
                        g = replaceText(g, "{{DOCTORCV}}", m.doctor.description);
                        g = replaceText(g, "{{DOCTORPHOTO}}", m.doctor.photo_full);
                        g = replaceText(g, "{{CLINICID}}", m.clinic);
                        g = replaceText(g, "{{CLINICNAME}}", $("#select2-jadwalform-id_clinic-container").text());
                        g = replaceText(g, "{{MONTH}}", c.toLocaleString(l, {
                            month: "long"
                        }));
                        g = replaceText(g, "{{YEAR}}", c.toLocaleString(l, {
                            year: "numeric"
                        }));
                        null != m.schedule.remarks && (g = replaceText(g, "{{REMARKS}}", m.schedule.remarks));
                        $("#search-result-content").append(g);
                        null != m.schedule.remarks && $("#remarks-" + m.doctor.id).removeClass("hidden");
                        for (g = 0; 7 > g; g++) {
                            var f = new Date(d.data.doctors[k].schedule.schedule[g].date),
                                l = "id-ID",
                                p = replaceText(e, "{{DOCTORID}}", m.doctor.id);
                            p = replaceText(p, "{{DATE}}", f.toLocaleString(l, {
                                day: "2-digit"
                            }));
                            p = replaceText(p, "{{DAYTEXT}}", f.toLocaleString(l, {
                                weekday: "long"
                            }));
                            p = replaceText(p, "{{ID}}", g);
                            $("#jadwal-buat-janji-" + m.doctor.id).find(".row").append(p);
                            0 == g && $("#jadwal-buat-janji-" + m.doctor.id).find(".col-md-1").addClass("highlighted-day");
                            p = $("#button-jam-searchresult-template").html();
                            p = replaceText(p,
                                "{{FULLDATE}}", f.getMonth() + 1 + "/" + f.toLocaleString(l, {
                                    day: "2-digit"
                                }) + "/" + f.getFullYear());
                            p = replaceText(p, "{{DOCTORID}}", m.doctor.id);
                            p = replaceText(p, "{{DOCTORNAME}}", m.doctor.name);
                            p = replaceText(p, "{{DOCTORPHOTO}}", m.doctor.photo_full);
                            p = replaceText(p, "{{DOCTORSP}}", m.doctor.specialization.name);
                            if (-1 < d.data.doctors[k].schedule.schedule[g].time.indexOf("--")) p = replaceText(p, "{{TIME}}", "---"), $("#day-text-" + m.doctor.id + "-" + f.toLocaleString(l, {
                                day: "2-digit"
                            }) + "-" + g).append(p), $("#day-text-" + m.doctor.id +
                                "-" + f.toLocaleString(l, {
                                    day: "2-digit"
                                }) + "-" + g).find("button").attr("disabled", !0);
                            else
                                for (var n = d.data.doctors[k].schedule.schedule[g].time.split(","), z = 0; z < n.length; z++) {
                                    var x = p,
                                        A = d.data.doctors[k].schedule.schedule[g].is_active;
                                    x = replaceText(x, "{{TIME}}", n[z]);
                                    x = replaceText(x, "{{DAY}}", (new Date(d.data.doctors[k].schedule.schedule[g].date)).getDay());
                                    $("#day-text-" + m.doctor.id + "-" + f.toLocaleString(l, {
                                        day: "2-digit"
                                    }) + "-" + g).append(x);
                                    $("#day-text-" + m.doctor.id + "-" + f.toLocaleString(l, {
                                            day: "2-digit"
                                        }) +
                                        "-" + g).find("button").attr("disabled", A ? !1 : !0)
                                }
                        }
                    }
                setTimeout(function() {
                    ChangeUrl("searchresult", "title", domain + "/buat-janji/search-result?" + $("#jadwal-form-md").serialize());
                    $(".loading-klinik").addClass("hidden");
                    $("#search-result-content").show()
                }, 1E3)
            }
        })
    });
    0 <= window.location.pathname.toLowerCase().indexOf("promo") && ($(".loading-klinik").addClass("hidden"), $(".news-part").removeClass("hidden"));
    var B = 0;
    q = $("#startchange");
    var t = $(".in-change"),
        F = t.offset();
    q.offset();
    t.length && $(document).scroll(function() {
        B =
            $(this).scrollTop();
        B > F.top - 545 ? $(".share-in").hide() : $(".share-in").show()
    });
    0 < $("#toggle-career").length && $("#current-career").text($("#careerTab .active a").text());
    $("#careerTab .nav-item").click(function(a) {
        $("#current-career").text($("#careerTab .active a").text());
        $("#toggle-career").click()
    });
    $(".button-cv-career").click(function() {
        $("#upload-cv").trigger("click")
    });
    0 < $("#toggle-investor").length && ($("#menu-investor-news li.active").has(".open").length ? $("#current-investor").text($("#menu-investor-news li.active .open").text()) :
        $("#current-investor").text($("#menu-investor-news li.active").text()));
    $(".shareholder-composition").length && $(".shareholder-composition table").each(function() {
        $(this).addClass("col-md-12");
        $(this).wrap("<div class='table-responsive'></div>")
    });
    0 < $(".content-fh").length && $(".content-fh").find("table").each(function() {
        $(this).addClass("table");
        $(this).wrap('<div class="table-responsive sc-table"></div>')
    });
    $(document).on("click", ".shareholder-tab", function(a) {
        var b = $(this).data("target").replace("-content",
                "-detail"),
            c = $(this).data("id-category");
        $.ajax({
            type: "GET",
            url: domain_investor_shareholder,
            dataType: "json",
            data: "search[category]=" + c + "&lang=" + lang,
            success: function(d) {
                if (200 == d.status) {
                    d = d.data.investor_shareholder;
                    for (var h = 0; h < d.length; h++) d[h].id == c && $(b).html(d[h].shareholder_composition)
                }
            }
        });
        $(b).find("table").each(function() {
            $(this).wrap("<div class='table-responsive'></div>")
        })
    });
    0 < $(".panel-hs").length && $(".panel-hs").each(function(a, b) {
        if ("0" != $(this).find(".accordion-paket").data("accordion")) {
            var c =
                $(this).find(".accordion-paket").attr("id");
            $(this).find("h4").each(function(d, h) {
                $(this).attr("data-toggle", "collapse");
                $(this).attr("data-parent", "#" + c);
                $(this).addClass("collapsed");
                $(this).addClass("panel-title-sc");
                $(this).addClass("panel-title");
                var e = $(this).text().toLowerCase().replace(/&nbsp;/g, "").replace(/[_\W]+/g, "").replace(/[_\s]/g, "-") + d;
                "" === $.trim($(this).siblings("p").text()) && ($(this).siblings("p").css("margin-bottom", "0"), $(this).siblings("p").css("line-height", "0"));
                $(this).nextUntil("h4").andSelf().wrapAll('<div class="panel panel-default panel-default-sc"></div>');
                0 === d ? ($(this).removeClass("collapsed"), $(this).nextUntil("h4").wrapAll("<div id='paket-" + e + "' class='panel-collapse collapse in'><div class='panel-body panel-body-sc'></div></div>")) : $(this).nextUntil("h4").wrapAll("<div id='paket-" + e + "' class='panel-collapse collapse'><div class='panel-body panel-body-sc'></div></div>");
                $(this).wrap("<div class='panel-heading panel-heading-sc'></div>");
                $(this).attr("data-target", "#paket-" + e)
            })
        }
    });
    0 < $("#accordion-corporate-information").length && ($("#accordion-corporate-information").children("h4").each(function(a,
        b) {
        $(this).attr("data-toggle", "collapse");
        $(this).attr("data-parent", "#accordion-corporate-information");
        var c = "ci-" + a;
        $(this).nextUntil("h4").andSelf().wrapAll('<div class="panel panel-default panel-default-ci"></div>');
        0 === a ? $(this).nextUntil("h4").wrapAll('<div id="' + c + '" class="panel-collapse collapse in"></div>') : ($(this).nextUntil("h4").wrapAll('<div id="' + c + '" class="panel-collapse collapse"></div>'), $(this).addClass("collapsed"));
        $(this).wrap('<div class="panel-heading panel-heading-ci"></div>');
        $(this).attr("href", "#" + c);
        $(this).addClass("panel-title");
        $(this).addClass("panel-title-ci")
    }), $("#accordion-corporate-information").find("table").each(function() {
        $(this).addClass("table");
        $(this).wrap('<div class="table-responsive fh-table"></div>')
    }));
    0 < $("#accordion-shareholder-composition").length && ($("#accordion-shareholder-composition").children("h4").each(function(a, b) {
        $(this).attr("data-toggle", "collapse");
        $(this).attr("data-parent", "#accordion-shareholder-composition");
        var c = "sc-" + a;
        $(this).nextUntil("h4").andSelf().wrapAll('<div class="panel panel-default panel-default-sc"></div>');
        0 === a ? $(this).nextUntil("h4").wrapAll('<div id="' + c + '" class="panel-collapse collapse in"><div class="panel-body panel-body-sc"></div></div>') : $(this).nextUntil("h4").wrapAll('<div id="' + c + '" class="panel-collapse collapse"><div class="panel-body panel-body-sc"></div></div>');
        $(this).wrap('<div class="panel-heading panel-heading-sc"></div>');
        $(this).attr("href", "#" + c);
        $(this).addClass("panel-title");
        $(this).addClass("panel-title-sc")
    }), $("#accordion-shareholder-composition").find("table").each(function() {
        $(this).addClass("table");
        $(this).wrap('<div class="table-responsive sc-table"></div>')
    }));
    $("#search-fh li a").click(function(a) {
        $(this).attr("id");
        var b = $(this).attr("href");
        $(".content-fh div").removeClass("show");
        $(b).hasClass("show") || $(b).addClass("show");
        a.preventDefault();
        $(".content-fh").hide();
        $("#financial-highlights-content .loading-klinik").removeClass("hidden");
        history.pushState({}, "", b);
        setTimeout(function() {
                $(".content-fh").fadeIn(200);
                $("#financial-highlights-content .loading-klinik").addClass("hidden")
            },
            500)
    });
    if (0 < $(".shareholder-tab").length) {
        t = $(".shareholder-tab").first();
        var G = t.data("target").replace("-content", "-detail");
        t = t.data("id-category");
        t = "search[category]=" + t + "&lang=" + lang;
        $.ajax({
            type: "GET",
            url: domain_investor_shareholder,
            dataType: "json",
            data: t,
            success: function(a) {
                if (200 == a.status) {
                    a = a.data.investor_shareholder;
                    for (var b = $(".shareholder-tab").first().attr("data-id-category"), c = 0; c < a.length; c++) a[c].id == b && $(G).html(a[c].shareholder_composition)
                }
            }
        })
    }
    if (0 < $(".report-presentation-tab").length) {
        t =
            $(".report-presentation-tab").eq(0);
        q = t.data("target");
        var C = q.replace("-content", "-detail");
        t = t.data("id-category");
        t = "search[category]=" + t + "&lang=" + lang;
        $(q).find(".year-rp").length && (t += "&search[year]=" + $(q).find(".year-rp").find("button").text());
        $.ajax({
            type: "GET",
            url: domain_investor_report,
            dataType: "json",
            data: t,
            success: function(a) {
                if (200 == a.status && (a = a.data.investor_reports, void 0 != a)) {
                    $(C).html("");
                    for (var b = $("#reports-presentations-template").html(), c = 0; c < a.length; c++) {
                        var d = replaceText(b,
                            "{{TITLE}}", a[c].title);
                        d = replaceText(d, "{{URL}}", a[c].pdf_url);
                        d = replaceText(d, "{{ID}}", a[c].id);
                        null != a[c].cover_thumb ? (d = replaceText(d, "{{IMG}}", a[c].cover_thumb), d = replaceText(d, "hidden", "")) : d = replaceText(d, "{{IMG}}", "");
                        "en" == lang && (d = replaceText(d, "Unduh", "Download"));
                        $(C).append(d)
                    }
                }
            }
        })
    }
    $(document).on("click", ".report-presentation-tab", function(a) {
        a = $(this).data("target");
        var b = a.replace("-content", "-detail"),
            c = "search[category]=" + $(this).data("id-category") + "&lang=" + lang;
        $(a).find(".year-rp").length &&
            (c += "&search[year]=" + $(a).find(".year-rp").find("button").text());
        $.ajax({
            type: "GET",
            url: domain_investor_report,
            dataType: "json",
            data: c,
            success: function(d) {
                if (200 == d.status && (d = d.data.investor_reports, void 0 != d)) {
                    $(b).html("");
                    for (var h = $("#reports-presentations-template").html(), e = 0; e < d.length; e++) {
                        var k = replaceText(h, "{{TITLE}}", d[e].title);
                        k = replaceText(k, "{{URL}}", d[e].pdf_url);
                        k = replaceText(k, "{{ID}}", d[e].id);
                        null != d[e].cover_thumb ? (k = replaceText(k, "{{IMG}}", d[e].cover_thumb), k = replaceText(k,
                            "hidden", "")) : k = replaceText(k, "{{IMG}}", "");
                        "en" == lang && (k = replaceText(k, "Unduh", "Download"));
                        $(b).append(k)
                    }
                }
            }
        })
    });
    $(document).keydown(function(a) {
        27 == a.keyCode && ($(".close").trigger("click"), window.close())
    });
    $("#thanksmodal button").click(function(a) {
        $("#thanksmodal").removeClass("in");
        $(".modal-backdrop.in").remove();
        $("body").removeClass("modal-open");
        $("#thanksmodal").fadeOut(200)
    });
    $(".modal").on("show.bs.modal", function() {
        0 < $(".pre-scrollable").length && (204 < $(".text-testimoni").height() ? ($(".pre-scrollable").scrollTop(-100),
            $(".pre-scrollable").scrollTop(0)) : ($(".ps-scrollbar-y-rail").css("height", "0px"), $(".ps-scrollbar-y").css("height", "0px")))
    });
    $(".modal").on("shown.bs.modal", function() {
        0 < $(".pre-scrollable").length && $(".pre-scrollable").scrollTop(0)
    });
    0 != $(".navbar-custom .dropdown-menu").find(".active").length && $(".navbar-custom .dropdown-menu").find(".active").closest(".dropdown").addClass("active");
    $(".dropdown-menu-custom li").hover(function(a) {
        $(this).children("a").css("color", "#33A4FF")
    }, function(a) {
        $(this).children("a").css("color",
            "#333333")
    });
    $("#lang-about-dd.dropdown").click(function(a) {
        a.preventDefault()
    });
    $("#dd-lang li a").click(function(a) {
        window.location.href = $(this).attr("href");
        a.preventDefault()
    });
    $("#promotion-search #search-lokasi-klinik li a").click(function(a) {
        location.href = $(this).attr("href")
    });
    $("#search-category-article li a").click(function(a) {
        location.href = $(this).attr("href")
    });
    $(".dropdown-menu li a").click(function(a) {
        a = $(this).closest(".dropdown").attr("id");
        if ("spesialisasi-sr" == a) {
            var b = "#" + a + " .dropdown-button:first-child";
            0 > $("#" + a + " span.text-elipsis").length ? $(b).append("<span class='text-elipsis'>" + $(this).text() + "</span>") : $("#spesialisasi-sr span.text-elipsis").text($(this).text());
            $(b).val($(this).text())
        } else a = "#" + a + " .dropdown-button:first-child", $(a).text($(this).text()), $(a).val($(this).text())
    });
    $(".dropdown-res button").click(function(a) {
        $("#res-klinik-home").is(":hidden") ? $("#res-klinik-home").show() : ($("#res-klinik-home").hide(), 768 < $(window).width() && $("#res-klinik-home").show());
        a.preventDefault()
    });
    $("#submit-contact-button").click(function(a) {
        $("#contact-form").yiiActiveForm("validate", !0)
    });
    $(".form-group.has-error input").on("input", function(a) {
        $(this).parents(".has-error").removeClass("has-error")
    });
    $(".form-group.has-error textarea").on("input", function(a) {
        $(this).parents(".has-error").removeClass("has-error")
    });
    $(".nav-fasilitas-rs li").click(function(a) {
        $(".nav-fasilitas-rs li.active").removeClass("active");
        var b = $(this);
        b.hasClass("active") || b.addClass("active");
        a.preventDefault()
    });
    $("#submenu2 li a").click(function(a) {
        $("#submenu2 li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        b = b.text();
        $("#current-infors").text(b);
        767 >= $(window).width() && $("#toggle-infors").click();
        $("#submenu2").addClass("in");
        $("html, body").animate({
            scrollTop: $("#menu-fasilitas-rs").offset().top
        }, 1E3);
        a.preventDefault()
    });
    $("#submenu4 li a").click(function(a) {
        $("#submenu4 li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        b = b.text();
        $("#current-infors").text(b);
        767 >= $(window).width() && $("#toggle-infors").click();
        $("html, body").animate({
            scrollTop: $("#menu-fasilitas-rs").offset().top
        }, 1E3);
        a.preventDefault()
    });
    $("#sub-our-profile li a").click(function(a) {
        $("#sub-our-profile li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        a.preventDefault()
    });
    $("#sub-csr li a").click(function(a) {
        $("#sub-csr li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        a.preventDefault()
    });
    $("#sub-our-management li a").click(function(a) {
        $("#sub-our-management li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        $("html, body").animate({
            scrollTop: $(".content-about-us").offset().top - 200
        }, 1E3);
        a.preventDefault()
    });
    $("#sub-corporate-governance li a").click(function(a) {
        $("#sub-corporate-governance li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        a.preventDefault()
    });
    $("#sub-investor-relation li a").click(function(a) {
        $("#sub-investor-relation li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        a.preventDefault()
    });
    $("#rp-menu li a").click(function(a) {
        $("#rp-menu li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        b = b.text();
        $("#current-investor").text(b);
        767 >= $(window).width() && $("#toggle-investor").click();
        a.preventDefault()
    });
    $("#sc-menu li a").click(function(a) {
        $("#sc-menu li a.open").removeClass("open");
        var b = $(this);
        b.hasClass("open") || b.addClass("open");
        b = b.text();
        $("#current-investor").text(b);
        767 >= $(window).width() && $("#toggle-investor").click();
        a.preventDefault()
    });
    $("#toggle-investor").click(function() {
        0 < $("#sc-menu .open").length && ($("#sc-menu").addClass("in"), $("#sc-menu").collapse());
        0 < $("#rp-menu .open").length && ($("#rp-menu").addClass("in"), $("#rp-menu").collapse())
    });
    $("#menu-investor-news>li>a").click(function(a) {
        if ("rp-tab" == $(this).attr("id")) {
            $("#rp-menu li a").removeClass("open");
            if (768 < $(window).width()) {
                $("#rp-menu .nav li:first a").first().addClass("open");
                var b = $(".report-presentation-tab").first().data("target");
                $(".tab-pane").not(b).removeClass("in");
                $(".tab-pane").not(b).removeClass("active");
                $(b).addClass("in");
                $(b).addClass("active")
            }
            $("#rp-tab").removeClass("collapsed");
            $("#menu-investor-news li a").not("#rp-tab").removeClass("active");
            $("#sc-menu").removeClass("in");
            $("#sc-menu").removeClass("active");
            $("#sc-menu").find(".open").removeClass("open");
            $("#rp-menu li:first a").addClass("open");
            $("#rp-menu").collapse();
            $("#rp-menu").addClass("in");
            $("#rp-menu").addClass("active")
        } else "shareholder-composition-tab" ==
            $(this).attr("id") ? ($("#shareholder-composition-tab").removeClass("collapsed"), $("#menu-investor-news li a").not("#shareholder-composition-tab").removeClass("active"), $("#sc-menu li a").not(":first").removeClass("open"), $("#sc-menu li a:first").removeClass("open"), $("#sc-menu").collapse(), $("#rp-menu").removeClass("in"), $("#rp-menu").removeClass("active"), $("#rp-menu").find(".open").removeClass("open"), $("#sc-menu").addClass("in"), $("#sc-menu").addClass("active"), 768 < $(window).width() && ($(".shareholder-tab").first().addClass("open"),
                b = $(".shareholder-tab").first().data("target"), $(".tab-pane").not(b).removeClass("in"), $(".tab-pane").not(b).removeClass("active"), $(b).addClass("in"), $(b).addClass("active"))) : ($("#sc-menu").find(".open").removeClass("open"), $("#rp-menu").find(".open").removeClass("open"), $("#rp-menu").removeClass("in"), $("#sc-menu").removeClass("in"), $("#rp-menu").removeClass("active"), $("#sc-menu").removeClass("active"), b = $(this).text(), $("#current-investor").text(b), 767 >= $(window).width() && $("#toggle-investor").click());
        $("html, body").animate({
            scrollTop: 100
        }, 1E3);
        a.preventDefault()
    });
    $("#fk-tab").click(function(a) {
        $("#fk-tab").removeClass("collapsed");
        $("#menu-info-rs li a").not("#fk-tab").removeClass("active");
        $("a.nav-link").not("#pelayanan-umum-tab").removeClass("open");
        $("#submenu4.collapse").removeClass("in");
        $("#submenu4.collapse").removeClass("active");
        $("#submenu2.collapse").addClass("in");
        $("#submenu2.collapse").addClass("active");
        $("#pelayanan-umum-tab").removeClass("open");
        768 < $(window) && ($("#layanan-unggulan-konten").removeClass("active"),
            $("#rekanan-perusahaan-konten").removeClass("active"), $(".content-fasilitas-rs .tab-pane").not("#pelayanan-umum-content").removeClass("in"), $(".content-fasilitas-rs .tab-pane").not("#pelayanan-umum-content").removeClass("active"), $("#pelayanan-umum-tab").addClass("open"), $("#pelayanan-umum-content").addClass("in"), $("#pelayanan-umum-content").addClass("active"));
        a.preventDefault()
    });
    $("#rekanan-tab").click(function(a) {
        $("#rekanan-tab").removeClass("collapsed");
        $("#menu-info-rs li a").not("#rekanan-tab").removeClass("active");
        $("a.nav-link").not("#sub-rekanan-perusahaan").removeClass("open");
        $("#submenu2.collapse").removeClass("in");
        $("#submenu2.collapse").removeClass("active");
        $("#submenu4.collapse").addClass("in");
        $("#submenu4.collapse").addClass("active");
        $("#sub-rekanan-perusahaan").removeClass("open");
        768 < $(window) && ($("#layanan-unggulan-konten").removeClass("active"), $("#pelayanan-umum-content").removeClass("active"), $(".content-fasilitas-rs .tab-pane").not("#rekanan-perusahaan-konten").removeClass("in"), $(".content-fasilitas-rs .tab-pane").not("#rekanan-perusahaan-konten").removeClass("active"),
            $("#rekanan-perusahaan-konten").addClass("in"), $("#rekanan-perusahaan-konten").addClass("active"), $("#sub-rekanan-perusahaan").addClass("open"));
        a.preventDefault()
    });
    $("#sub-our-brand").click(function() {
        $("#menu-about us li").not("#sub-our-brand").removeClass("active");
        $("#sub-our-management").removeClass("in");
        $("#sub-our-management").removeClass("active");
        $("#sub-our-management li a.open").removeClass("open");
        $("html, body").animate({
            scrollTop: $(".content-about-us").offset().top - 200
        }, 1E3)
    });
    $("#sub-vision-mission").click(function() {
        $("#menu-about us li").not("#sub-vision-mission").removeClass("active");
        $("#sub-our-management").removeClass("in");
        $("#sub-our-management").removeClass("active");
        $("#sub-our-management li a.open").removeClass("open");
        $("html, body").animate({
            scrollTop: $(".content-about-us").offset().top - 200
        }, 1E3)
    });
    $("#sub-milestone").click(function() {
        $("#menu-about us li").not("#sub-milestone").removeClass("active");
        $("#sub-our-management").removeClass("in");
        $("#sub-our-management").removeClass("active");
        $("#sub-our-management li a.open").removeClass("open");
        $("html, body").animate({
            scrollTop: $(".content-about-us").offset().top -
                200
        }, 1E3)
    });
    $("#our-profile-tab").click(function(a) {
        $("div.tab-pane").not("#our-brand-content").removeClass("in");
        $("div.tab-pane").not("#our-brand-content").removeClass("active");
        $("a.nav-link").not("#sub-our-brand").removeClass("open");
        $("#sub-our-brand").addClass("open");
        $("#our-brand-content").addClass("in");
        $("#our-brand-content").addClass("active");
        a.preventDefault()
    });
    $("#our-management-tab").click(function(a) {
        768 < $(window).width() && ($("div.tab-pane").not("#board-directors-content").removeClass("in"),
            $("div.tab-pane").not("#board-directors-content").removeClass("active"), $("#board-directors-content").addClass("in"), $("#board-directors-content").addClass("active"));
        $("a.nav-link").not("#sub-board-directors").removeClass("open");
        $("#sub-board-directors").addClass("open");
        $("html, body").animate({
            scrollTop: $(".content-about-us").offset().top - 200
        }, 1E3);
        a.stopPropagation();
        a.preventDefault();
        $("#sub-our-management").addClass("in")
    });
    $("#investor-relation-tab").click(function(a) {
        $("div.tab-pane").not("#investor-news").removeClass("in");
        $("div.tab-pane").not("#investor-news").removeClass("active");
        $("a.nav-link").not("#sub-investor-news").removeClass("open");
        $("#sub-investor-news").addClass("open");
        $("#investor-news").addClass("in");
        $("#investor-news").addClass("active");
        a.preventDefault()
    });
    $("#corporate-governance-tab").click(function(a) {
        $("div.tab-pane").not("#corporate-governance-content").removeClass("in");
        $("div.tab-pane").not("#corporate-governance-content").removeClass("active");
        $("a.nav-link").not("#sub-structure").removeClass("open");
        $("#sub-structure").addClass("open");
        $("#structure-content").addClass("in");
        $("#structure-content").addClass("active");
        a.preventDefault()
    });
    $("#csr-tab").click(function(a) {
        $("div.tab-pane").not("#csr-programs-content").removeClass("in");
        $("div.tab-pane").not("#csr-programs-content").removeClass("active");
        $("a.nav-link").not("#sub-csr-programs").removeClass("open");
        $("#sub-csr-programs").addClass("open");
        $("#csr-programs-content").addClass("in");
        $("#csr-programs-content").addClass("active");
        a.preventDefault()
    });
    $("#fasilitas-kami-tab").click(function(a) {
        $("#fasilitas-kami-tab").removeClass("collapsed");
        $("#menu-info-rs li a").not("#fasilitas-kami-tab").removeClass("active");
        $("#submenu2.collapse").removeClass("in");
        $("#submenu2.collapse").removeClass("active");
        $("#submenu4.collapse").removeClass("in");
        $("#submenu4.collapse").removeClass("active");
        $("#layanan-unggulan-konten").addClass("in");
        $("#layanan-unggulan-konten").addClass("active");
        var b = $(this).text();
        $("#current-infors").text(b);
        $("#toggle-infors").click();
        $("html, body").animate({
            scrollTop: $("#menu-fasilitas-rs").offset().top
        }, 1E3);
        a.preventDefault()
    });
    $("#indikator-mutu-tab").click(function(a) {
        $(this).removeClass("collapsed");
        $("#menu-info-rs li a").not(this).removeClass("active");
        $("#submenu2.collapse").removeClass("in");
        $("#submenu2.collapse").removeClass("active");
        $("#submenu4.collapse").removeClass("in");
        $("#submenu4.collapse").removeClass("active");
        $("#indikator-mutu-konten").addClass("in");
        $("#indikator-mutu-konten").addClass("active");
        var b =
            $(this).text();
        $("#current-infors").text(b);
        $("#toggle-infors").click();
        $("html, body").animate({
            scrollTop: $("#menu-fasilitas-rs").offset().top
        }, 1E3);
        a.preventDefault()
    });
    $("#sertifikasi-tab").click(function(a) {
        $(this).removeClass("collapsed");
        $("#menu-info-rs li a").not(this).removeClass("active");
        $("#submenu2.collapse").removeClass("in");
        $("#submenu2.collapse").removeClass("active");
        $("#submenu4.collapse").removeClass("in");
        $("#submenu4.collapse").removeClass("active");
        $("#sertifikasi-konten").addClass("in");
        $("#sertifikasi-konten").addClass("active");
        var b = $(this).text();
        $("#current-infors").text(b);
        $("#toggle-infors").click();
        $("html, body").animate({
            scrollTop: $("#menu-fasilitas-rs").offset().top
        }, 1E3);
        a.preventDefault()
    });
    $("#nav-hs li").on("click", function(a) {
        var b = $(this);
        $("#nav-hs li").removeClass("active");
        b.hasClass("active") || b.addClass("active");
        b = $(this).data("href");
        $(".panel-hs").removeClass("in");
        $(b).addClass("in");
        a.preventDefault()
    });
    $("#menu-fasilitas-rs").on("show.bs.collapse", ".collapse",
        function() {
            $("#menu-fasilitas-rs").find(".col-md-3 .collapse.in").collapse("hide")
        });
    $("#menu-about-us").on("show.bs.collapse", ".collapse", function() {
        $("#menu-about-us").find(".collapse.in").collapse("hide")
    });
    $("ul.nav-pills a").click(function(a) {
        a.preventDefault();
        $(this).tab("show")
    });
    $(document).click(function(a) {
        a = $(a.target);
        !0 !== $("#res-klinik-home").is(":visible") || a.hasClass("dropdown-toggle") || $("button.dropdown-toggle").click()
    });
    $("#milestone-about").carousel({
        interval: 0
    });
    $("#carousel-gallery-klinik").carousel({
        interval: 0
    });
    0 < $("#lightgallery").length && $("#lightgallery").lightGallery({
        selector: ".image-gallery"
    });
    0 < $(".site-index .carousel-inner .item").length && ($(window).load(function() {
        $("#carousel-example-generic").carousel("pause")
    }), setTimeout(function() {
        $("#carousel-example-generic").carousel("cycle")
    }, 15E3), $("#carousel-example-generic").on("slid.bs.carousel", function(a) {
        switch (a.relatedTarget.id) {
            case "hold-15-second":
                $("#carousel-example-generic").carousel("pause"), setTimeout(function() {
                        $("#carousel-example-generic").carousel("cycle")
                    },
                    1E4)
        }
    }));
    $(".pre-scrollable").perfectScrollbar();
    $(".container-res-klinik-home").perfectScrollbar();
    0 < $(".scroll-cv-dokter").length && ($(".scroll-cv-dokter").scrollTop($(".container-res-klinik-home").scrollTop() + 1), $(".scroll-cv-dokter").scrollTop($(".container-res-klinik-home").scrollTop() - 1), $(".scroll-cv-dokter").addClass("ps-active-y"), $(".ps-scrollbar-y-rail").css("height", "250px"), $(".ps-scrollbar-y").css("height", "35px"));
    $(".card-home-lk .btn-dropdown-res").click(function() {
        $(".container-res-klinik-home").scrollTop($(".container-res-klinik-home").scrollTop() +
            1);
        $(".container-res-klinik-home").scrollTop($(".container-res-klinik-home").scrollTop() - 1);
        $(".container-res-klinik-home").addClass("ps-active-y")
    });
    $(".accordion-paket").on("shown.bs.collapse", function() {
        var a = $(this).find(".in");
        $("html, body").animate({
            scrollTop: a.offset().top - 100
        }, 1E3)
    });
    $("#accordion-corporate-information").on("shown.bs.collapse", function() {
        $("html, body").animate({
            scrollTop: $("#accordion-corporate-information").offset().top - 100
        }, 1500)
    });
    $("#accordion-shareholder-composition").on("shown.bs.collapse",
        function() {
            var a = $(this).find(".in");
            $("html, body").animate({
                scrollTop: a.offset().top - 100
            }, 500)
        });
    $(".card-home-lk .dropdown-res button").click(function() {
        $(".container-res-klinik-home:visible").length ? $(this).find(".caret").css("top", "10%") : $(this).find(".caret").css("top", "50%")
    });
    $("#res-klinik-home li").click(function(a) {
        $("#res-klinik-home li.active").removeClass("active");
        var b = $(this);
        b.hasClass("active") || b.addClass("active");
        $("#name-klinik-home").text($(this).children("a").text());
        $("#res-klinik-home").hide();
        a.preventDefault();
        767 < $(window).width() ? ($("#res-klinik-home").show(), $(".lazy-lokasiklinik-home").lazy({
            bind: "event",
            asyncLoader: function(c, d) {
                setTimeout(function() {
                    d(!0)
                }, 1E3)
            }
        })) : (a = $(this).find("a").attr("href"), b = $(".rumah-sakit-home " + a + " .home-image-klinik").data("imgresponsive"), $(".rumah-sakit-home " + a + " .home-image-klinik").css("background-image", "url(" + b + ")"));
        $(".card-home-lk .dropdown-res button .caret").css("top", "50%")
    });
    $(document).on("click", ".jadwal-dokter .day-text .available",
        function() {
            $(this).closest(".card-search").attr("id");
            var a = $(this).data("buatjanji"),
                b = $(this).data("date"),
                c = [];
            for (i = 0; 6 >= i; i++) i != a && c.push(i);
            var d = new Date(b);
            d.setDate(d.getDate());
            var h = {
                    locale: "id",
                    format: "DD MMMM YYYY",
                    widgetPositioning: {
                        vertical: "bottom"
                    },
                    defaultDate: d
                },
                e = null;
            switch (a) {
                case 0:
                    e = "Minggu";
                    break;
                case 1:
                    e = "Senin";
                    break;
                case 2:
                    e = "Selasa";
                    break;
                case 3:
                    e = "Rabu";
                    break;
                case 4:
                    e = "Kamis";
                    break;
                case 5:
                    e = "Jumat";
                    break;
                case 6:
                    e = "Sabtu"
            }
            $("#datetimepicker-buat-janji").datetimepicker(h);
            $("#datetimepicker-buat-janji").data("DateTimePicker").daysOfWeekDisabled(c);
            $("#datetimepicker-buat-janji").data("DateTimePicker").date(d);
            $("#buatjanjimodal #input-date").val(b);
            a = d.toLocaleString("id-ID", {
                year: "numeric",
                day: "numeric",
                month: "long"
            });
            $("#buatjanjimodal .hari-janji").text(e);
            e = $(this).data("jam");
            $("#jam-buat-janji .dropdown-button:first-child").text(e);
            $("#jam-buat-janji .dropdown-button:first-child").val(e);
            $("#buatjanjimodal #input-time").val(e);
            $("#buatjanjimodal .jadwal-janji").text(e);
            $("#buatjanjimodal .tanggal-janji").text(a);
            $("#buatjanjimodal #nama-bj").text($(this).data("doctorname"));
            $("#buatjanjimodal .spesialisasi-buat-janji h4").text($(this).data("specialization"));
            $("#buatjanjimodal .foto-info-dokter").attr("src", $(this).data("doctorphoto"));
            $("#buatjanjimodal #input-iddoctor").val($(this).data("iddoctor"))
        });
    $("#jadwal-lokasi-klinik .day-text .available").click(function(a) {
        a.stopPropagation();
        $(this).closest(".jadwal-detail-dokter").attr("id");
        a = $(this).data("buatjanji");
        var b = $(this).data("jam"),
            c = null;
        switch (a) {
            case 0:
                c = "Senin";
                break;
            case 1:
                c = "Selasa";
                break;
            case 2:
                c = "Rabu";
                break;
            case 3:
                c = "Kamis";
                break;
            case 4:
                c = "Jumat";
                break;
            case 5:
                c = "Sabtu"
        }
        $("#buatjanjimodal1 .hari-janji").html(c);
        $("#buatjanjimodal1 .jadwal-janji").html(b);
        $("#buatjanjimodal .hari-janji").html(c);
        $("#buatjanjimodal .jadwal-janji").html(b)
    });
    $(document).click(function(a) {
        $(a.target).is(".day-text .available") || $(".button-buat-janji").attr("disabled", !0)
    });
    $("#datetimepicker1").datetimepicker({
        locale: "id",
        format: "DD MMMM YYYY",
        daysOfWeekDisabled: [0],
        widgetPositioning: {
            vertical: "bottom"
        },
        minDate: new Date
    });
    $("#tanggal-lahir-date").datetimepicker({
        locale: "id",
        format: "DD MMMM YYYY",
        widgetPositioning: {
            vertical: "bottom"
        }
    });
    $(".btn-career").click(function() {
        var a = $(this).data("title-career");
        $("#input-idcareer").val($(this).data("id"));
        $(".apply-career-title").text(a)
    });
    $("#upload-cv").change(function() {
        $(".button-cv-career").text($(this).val().replace(/C:\\fakepath\\/i, ""))
    });
    $(".pull-down-promotion").each(function() {
        var a =
            $(this);
        a.css("margin-top", a.parent().height() - a.prev(".content-gray").height() - a.height())
    });
    $("#search-lokasi-klinik li a").click(function() {
        var a = $(this).data("href");
        $("#search-lokasi-klinik").data("href", a)
    });
    $(".search-klinik .button-klinik .button-search-klinik").click(function() {
        var a = $("#search-lokasi-klinik").data("href");
        location.href = a
    });
    (q = document.location.hash) && 0 < $(".nav-klinik-top").length && $('.nav-klinik-top a[href="' + q + '"]').tab("show");
    $(".navbar-custom .dropdown-menu a").on("click",
        function() {
            window.location.href = $(this).attr("href")
        });
    $(".klinik-content").hide();
    $(".klinik-content").fadeIn(200);
    $(".loading-klinik").addClass("hidden");
    $(window).load(function() {
        $(".tab-pane.active").fadeIn(200);
        $(".loading-klinik").addClass("hidden");
        $(".klinik-content").fadeIn(200)
    });
    $(".lokasi-klinik .glyphicon-map-marker").fadeIn(200);
    $("#search-promo .glyphicon-map-marker").fadeIn(200);
    $("#search-news .glyphicon-map-marker").fadeIn(200);
    $(".nav-klinik-top a").on("shown.bs.tab", function(a) {
        a.preventDefault()
    }).on("click",
        function(a) {
            a.preventDefault()
        });
    $(".navbar-custom .dropdown ul li a").click(function() {
        location.href = $(this).attr("href")
    });
    $(".milestone-indicator").on("click", ".prev", function(a) {
        a.preventDefault();
        a = $("#milestone-about .carousel-indicators").width() - 15;
        a = $("#milestone-about .carousel-indicators").scrollLeft() - a;
        $("#milestone-about .carousel-indicators").animate({
            scrollLeft: a
        }, 2E3)
    });
    $(".milestone-indicator").on("click", ".next", function(a) {
        a.preventDefault();
        a = $("#milestone-about .carousel-indicators").width() -
            15;
        a = $("#milestone-about .carousel-indicators").scrollLeft() + a;
        $("#milestone-about .carousel-indicators").animate({
            scrollLeft: a
        }, 2E3)
    });
    $(".clinic-location.right").click(function() {
        var a = $("#pills-klinik-tab .active").next("li").length ? $("#pills-klinik-tab .active").next("li") : $("#pills-klinik-tab li:first");
        $("#pills-klinik-tab").hide();
        $("#pills-klinik-tab .active").removeClass("active");
        a.addClass("active");
        $('.nav-klinik-top a[href="#' + a.children("a").attr("href") + '"]').tab("show");
        $("#pills-tabContent .tab-pane").removeClass("in");
        $("#pills-tabContent .tab-pane").removeClass("active");
        $(a.children("a").attr("href")).addClass("in");
        $(a.children("a").attr("href")).addClass("active");
        a = $(a.children("a")).attr("href").substring(1);
        ChangeUrl("klinik", a, url_changeurl + a);
        $("#pills-klinik-tab").fadeIn(500)
    });
    $(".clinic-location.left").click(function() {
        var a = $("#pills-klinik-tab .active").prev("li").length ? $("#pills-klinik-tab .active").prev("li") : $("#pills-klinik-tab li:last");
        $("#pills-klinik-tab").hide();
        $("#pills-klinik-tab .active").removeClass("active");
        a.addClass("active");
        $('.nav-klinik-top a[href="#' + a.children("a").attr("href") + '"]').tab("show");
        $("#pills-tabContent .tab-pane").removeClass("in");
        $("#pills-tabContent .tab-pane").removeClass("active");
        $(a.children("a").attr("href")).addClass("in");
        $(a.children("a").attr("href")).addClass("active");
        a = $(a.children("a")).attr("href").substring(1);
        ChangeUrl("klinik", a, url_changeurl + a);
        $("#pills-klinik-tab").fadeIn(500)
    });
    $("#menu-investor-news a").on("shown.bs.tab", function(a) {
        a = $(this).attr("href").substring(1);
        ChangeUrl("investor-relation", a, domain + "/investor-relation/" + lang + "/" + a)
    });
    $("#pills-klinik-tab a").on("shown.bs.tab", function(a) {
        a = $(this).attr("href").substring(1);
        5 < count || ChangeUrl("klinik", a, url_changeurl + a)
    });
    $(".button-upload-profil").click(function() {
        $("#upload-foto-profil").trigger("click")
    });
    $("#upload-foto-profil").change(function() {
        v(this)
    });
    $(".carousel-caption-pasien .btn-white-testimoni").click(function() {
        $("#modal-testimonial-detail .foto-testimoni-detail").attr("src", $(this).data("foto"));
        $("#modal-testimonial-detail #nama-testimoni").text($(this).data("nama"));
        $("#modal-testimonial-detail #spesialis-testimoni").text($(this).data("spesialis"));
        $("#modal-testimonial-detail .text-testimoni").html($(this).data("text"))
    });
    $(".load-more").click(function(a) {
        a.preventDefault();
        var b = $(this);
        b.next("span").removeClass("hidden");
        b.attr("disabled", "disabled");
        a = b.data("action");
        var c = b.data("limit"),
            d = b.data("page"),
            h = b.data("target"),
            e = b.data("type"),
            k = $("#" + h + "-template").html();
        if ("news-event" ==
            e) e = $("#search-news #w0").val(), e = "All" == e ? null : e, w(a, null != e ? "search[clinic]=" + e + "&limit=" + c + "&offset=" + c * (d - 1) : "limit=" + c + "&offset=" + c * (d - 1), function(g) {
            var f = b.attr("href").split("page")[0] + "page=" + (d + 2);
            b.attr("href", f);
            b.data("page", d);
            if (200 == g.status && 0 < g.data.articles.length) {
                g = g.data.articles;
                d++;
                for (f = 0; f < g.length; f++) {
                    var l = domain + "/news/detail/" + g[f].slug,
                        p = new Date(g[f].date_posted),
                        n = replaceText(k, "{{ID}}", g[f].id);
                    n = replaceText(n, "SLUG", l);
                    n = replaceText(n, "{{IMAGE}}", g[f].image_full);
                    n = replaceText(n, "{{TITLE}}", g[f].title);
                    n = replaceText(n, "{{DATE}}", p.toLocaleString("id-ID", {
                        year: "numeric",
                        day: "numeric",
                        month: "long"
                    }));
                    n = replaceText(n, "{{EXCERPT}}", g[f].excerpt.replace(/^(.{134}).+/, "$1&hellip;"));
                    $("#news-content").append(n);
                    if (3 < g[f].location.length) $("#detail-location-promotion-" + g[f].id).append("<span class='content-gray'>Grup</span>");
                    else
                        for (l = 0; l < g[f].location.length; l++) l == g[f].location.length - 1 ? $("#detail-location-promotion-" + g[f].id).append("<span class='content-gray'>" +
                            g[f].location[l] + "</span>") : $("#detail-location-promotion-" + g[f].id).append("<span class='content-gray'>" + g[f].location[l] + "</span>,")
                }
                b.data("page", d)
            } else b.fadeOut(), $(".all-loaded").addClass("in"), $(".all-loaded").fadeIn(), setTimeout(function() {
                $(".all-loaded").fadeOut()
            }, 1E3);
            b.next("span").addClass("hidden");
            b.removeAttr("disabled")
        });
        else if ("promotion" == e) e = $("#search-promo #w0").val(), e = "All" == e ? null : e, w(a, null != e ? "search[clinic]=" + e + "&limit=" + c + "&offset=" + c * (d - 1) : "limit=" + c + "&offset=" + c *
            (d - 1),
            function(g) {
                var f = b.attr("href").split("page")[0] + "page=" + (d + 2);
                b.attr("href", f);
                b.data("page", d);
                if (200 == g.status && 0 < g.data.promos.length) {
                    g = g.data.promos;
                    d++;
                    for (f = 0; f < g.length; f++) {
                        var l = domain + "/promo/detail/" + g[f].slug,
                            p = new Date(g[f].start_date),
                            n = replaceText(k, "{{ID}}", g[f].id);
                        n = replaceText(n, "SLUG", l);
                        n = replaceText(n, "{{IMAGE}}", g[f].image_full);
                        n = replaceText(n, "{{TITLE}}", g[f].title);
                        n = replaceText(n, "{{DATE}}", p.toLocaleString("id-ID", {
                            year: "numeric",
                            day: "numeric",
                            month: "long"
                        }));
                        n = replaceText(n, "{{EXCERPT}}", g[f].excerpt.replace(/^(.{134}).+/, "$1&hellip;"));
                        $("#promotion-content").append(n);
                        if (3 < g[f].location.length) $("#detail-location-promotion-" + g[f].id).append("<span class='content-gray'>Grup</span>");
                        else
                            for (l = 0; l < g[f].location.length; l++) l == g[f].location.length - 1 ? $("#detail-location-promotion-" + g[f].id).append("<span class='content-gray'>" + g[f].location[l] + "</span>") : $("#detail-location-promotion-" + g[f].id).append("<span class='content-gray'>" + g[f].location[l] + "</span>,")
                    }
                    b.data("page",
                        d)
                } else b.fadeOut(), $("#" + h).next(".all-loaded").addClass("in"), $("#" + h).next(".all-loaded").fadeIn(), setTimeout(function() {
                    $("#" + h).next(".all-loaded").fadeOut()
                }, 1E3);
                b.next("span").addClass("hidden");
                b.removeAttr("disabled")
            });
        else if ("article" == e) e = $("#input-keyword").val(), "" != e ? c = "keywords=" + e + "&limit=" + c + "&offset=" + c * (d - 1) : (a = "article", c = "limit=" + c + "&offset=" + c * (d - 1)), w(a, c, function(g) {
            var f = b.attr("href").split("page")[0] + "page=" + (d + 2);
            b.attr("href", f);
            b.data("page", d);
            if (200 == g.status && 0 <
                g.data.articles.length) {
                g = g.data.articles;
                d++;
                for (f = 0; f < g.length; f++) {
                    var l = domain + "/artikel/" + g[f].category_slug + "/" + g[f].slug,
                        p = new Date(g[f].date_posted),
                        n = replaceText(k, "{{ID}}", g[f].id);
                    n = replaceText(n, "SLUG", l);
                    n = replaceText(n, "{{IMAGE}}", g[f].image_full);
                    n = replaceText(n, "{{TITLE}}", g[f].title);
                    n = replaceText(n, "{{DATE}}", p.toLocaleString("id-ID", {
                        year: "numeric",
                        day: "numeric",
                        month: "long"
                    }));
                    n = replaceText(n, "{{EXCERPT}}", g[f].excerpt.replace(/^(.{134}).+/, "$1&hellip;"));
                    $("#health-article-content").append(n)
                }
                b.data("page",
                    d)
            } else b.fadeOut(), $(".all-loaded").addClass("in"), $(".all-loaded").fadeIn(), setTimeout(function() {
                $(".all-loaded").fadeOut()
            }, 1E3);
            b.next("span").addClass("hidden");
            b.removeAttr("disabled")
        });
        else if ("investor-news" == e) {
            e = $("#select2-category-in").val();
            var m = $("#year-ir button").text();
            c = "search[category]=" + e + "&search[year]=" + m + "&limit=" + c + "&offset=" + c * (d - 1) + "&lang=" + lang;
            w(a, c, function(g) {
                var f = b.attr("href").split("page")[0] + "page=" + (d + 2);
                b.attr("href", f);
                b.data("page", d);
                if (200 == g.status && 0 <
                    g.data.investor_news.length) {
                    g = g.data.investor_news;
                    d++;
                    for (f = 0; f < g.length; f++) {
                        var l = new Date(g[f].date_posted),
                            p = replaceText(k, "SLUG", domain + "/investor-relation/" + lang + "/" + g[f].category_slug + "/" + g[f].slug);
                        p = replaceText(p, "{{TITLE}}", g[f].title);
                        p = replaceText(p, "{{DATE}}", l.toLocaleString("id-ID", {
                            year: "numeric",
                            day: "numeric",
                            month: "long"
                        }));
                        $("#in-content").append(p)
                    }
                    b.data("page", d)
                } else b.fadeOut(), $(".all-loaded").addClass("in"), $(".all-loaded").fadeIn(), setTimeout(function() {
                        $(".all-loaded").fadeOut()
                    },
                    1E3);
                b.next("span").addClass("hidden");
                b.removeAttr("disabled")
            })
        }
    });
    $("#category-news-dd .scroll-dropdown li").click(function(a) {
        for (a = window.location.pathname.split("/");
            "mitrakeluarga" != a[a.length - 1];) a.pop();
        a = a.join("/");
        a = "http://" + window.location.host + a + "/api/news";
        var b = $("#search-lokasi-klinik button").data("id");
        b = "All" == b ? null : b;
        $.ajax({
            type: "GET",
            url: a,
            data: null != b ? "search[clinic]=" + b : "",
            dataType: "json",
            success: function(c) {
                "" == c.data.articles ? $("#news-content").html("<div class='article-home nodata'> <p> Nantikan berita-berita seputar Nama Kantor TokoLegalitas.com </p> </div>") :
                    y(c.data.articles)
            },
            contentType: "application/json"
        })
    });
    $("#clinic-news-dd li a").click(function(a) {
        $("#search-lokasi-klinik button").data("id", $(this).data("id"));
        a = $(this).data("id");
        a = "All" == a ? null : a;
        $.ajax({
            type: "GET",
            url: url,
            data: null != a ? "search[clinic]=" + a : "",
            dataType: "json",
            success: function(b) {
                "" == b.data.articles ? ($("#news-content").html("<div class='article-home nodata'> <p> Nantikan berita-berita seputar Nama Kantor TokoLegalitas.com </p> </div>"), $(".load-more").hide()) : (y(b.data.articles),
                    $(".load-more").show())
            },
            contentType: "application/json"
        })
    });
    $("#spesialisasi-info-dokter").click(function(a) {
        a.preventDefault()
    });
    $("#spesialisasi-info-dokter li a").click(function(a) {
        a = $(this).data("id");
        var b = $("#w0").val();
        $.ajax({
            type: "GET",
            url: url_infodokter,
            data: "All" == a ? "search[clinic]=" + b : "search[specialization]=" + a + "&search[clinic]=" + b,
            dataType: "json",
            success: function(c) {
                c = c.data.doctors;
                $("#info-dokter-content").html("");
                if (void 0 != c)
                    for (var d = $("#info-dokter-template").html(), h = 0; h < c.length; h++) {
                        var e =
                            replaceText(d, "{{DOCTORID}}", c[h].doctor.id);
                        e = replaceText(e, "{{DOCTORNAME}}", c[h].doctor.name);
                        e = replaceText(e, "{{IMAGE}}", c[h].doctor.photo_full);
                        e = replaceText(e, "{{DOCTORCV}}", c[h].doctor.description);
                        e = replaceText(e, "{{SLUG}}", c[h].doctor.slug);
                        e = replaceText(e, "{{SPNAME}}", c[h].doctor.specialization.name);
                        e = replaceText(e, "{{SSPNAME}}", c[h].doctor.specialization.slug);
                        e = replaceText(e, "{{SPID}}", c[h].doctor.specialization.id);
                        e = replaceText(e, "{{CLINICID}}", $("#clinic-location-name").data("id"));
                        e = replaceText(e, "{{CLINICNAME}}", $("#clinic-location-name").text());
                        0 < c[h].schedule.id ? (e = replaceText(e, "{{IS_MON}}", c[h].schedule.is_mon), e = replaceText(e, "{{IS_TUE}}", c[h].schedule.is_tue), e = replaceText(e, "{{IS_WED}}", c[h].schedule.is_wed), e = replaceText(e, "{{IS_THU}}", c[h].schedule.is_thu), e = replaceText(e, "{{IS_FRI}}", c[h].schedule.is_fri), e = replaceText(e, "{{IS_SAT}}", c[h].schedule.is_sat), e = replaceText(e, "{{IS_SUN}}", c[h].schedule.is_sun), e = replaceText(e, "{{MON}}", c[h].schedule.mon), e = replaceText(e,
                            "{{TUE}}", c[h].schedule.tue), e = replaceText(e, "{{WED}}", c[h].schedule.wed), e = replaceText(e, "{{THU}}", c[h].schedule.thu), e = replaceText(e, "{{FRI}}", c[h].schedule.fri), e = replaceText(e, "{{SAT}}", c[h].schedule.sat), e = replaceText(e, "{{SUN}}", c[h].schedule.sun)) : e = replaceText(e, 'data-ismon="{{IS_MON}}" data-istue="{{IS_TUE}}" data-iswed="{{IS_WED}}" data-isthu="{{IS_THU}}" data-isfri="{{IS_FRI}}" data-issat="{{IS_SAT}}" data-issun="{{IS_SUN}}" data-mon="{{MON}}" data-tue="{{TUE}}" data-wed="{{WED}}" data-thu="{{THU}}" data-fri="{{FRI}}" data-sat="{{SAT}}" data-sun="{{SUN}}"',
                            " ");
                        $("#info-dokter-content").append(e)
                    }
            },
            contentType: "application/json"
        })
    });
    0 < $("#info-dokter-modal").length && (q = $(".text-testimoni"), q.each(function() {
        var a = $(this).text();
        250 > a.length || $(this).html(a.slice(0, 250) + '<span>... </span><a href="#" class="more">Lihat lebih</a><span style="display:none;">' + a.slice(100, a.length) + ' <a href="#" class="less">Lihat sedikit</a></span>')
    }), $("a.more", q).click(function(a) {
        a.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show()
    }), $("a.less", q).click(function(a) {
        a.preventDefault();
        $(this).parent().hide().prev().show().prev().show()
    }));
    $("#info-dokter-modal").length && window.location.hash.length && (document.title = $('.info-dokter[data-id="' + window.location.hash.replace("#", "") + '"]').attr("data-name") + " - Klinik " + $('.info-dokter[data-id="' + window.location.hash.replace("#", "") + '"]').attr("data-spesialis") + " - Info Dokter | TokoLegalitas.com - " + $('.info-dokter[data-id="' + window.location.hash.replace("#", "") + '"]').attr("data-nama-rs"), $("meta[name=title]").remove(), $("head").append('<meta name="title" content="' +
            document.title + '">'), $("meta[name=description]").remove(), $('.info-dokter[data-id="' + window.location.hash.replace("#", "") + '"]').attr("data-cv").length ? $("head").append('<meta name="description" content="' + $('.info-dokter[data-id="' + window.location.hash.replace("#", "") + '"]').attr("data-cv") + '">') : $("head").append('<meta name="description" content="' + document.title + '">'), t = $('.info-dokter[data-id="' + window.location.hash.replace("#", "") + '"]'), $("#info-dokter-modal #doctor-name").text($(t).data("name")),
        $("#info-dokter-modal #doctor-spesialization").text($(t).data("spesialis")), $("#info-dokter-modal #doctor-clinic").text("Nama Kantor TokoLegalitas.com " + $(t).data("nama-rs")), $("#info-dokter-modal #doctor-photo").attr("src", $(t).data("src-photo")), 0 >= $(t).data("cv").length ? ($("#title-tentangdokter").addClass("hidden"), $(".scroll-cv-dokter").addClass("hidden")) : $("#info-dokter-modal #doctor-cv").html($(t).data("cv")), $('.info-dokter[data-id="' + window.location.hash.replace("#", "") + '"]').trigger("click"));
    $(document).on("click", "#info-dokter-content .info-dokter", function(a) {
        a.preventDefault();
        a = $(this).data("target");
        $(a).fadeIn();
        $("#info-dokter-modal #doctor-name").text($(this).data("name"));
        $("#info-dokter-modal #doctor-spesialization").text($(this).data("spesialis"));
        $("#info-dokter-modal #doctor-clinic").text("Nama Kantor TokoLegalitas.com " + $(this).data("nama-rs"));
        $("#info-dokter-modal #doctor-photo").attr("src", $(this).data("src-photo"));
        0 >= $(this).data("cv").length ? ($("#title-tentangdokter").addClass("hidden"),
            $(".scroll-cv-dokter").addClass("hidden")) : $("#info-dokter-modal #doctor-cv").html($(this).data("cv"));
        a = new Date;
        a.getDay();
        a.getDay();
        a.getDay();
        a.getDay();
        a.getDay();
        a.getDay();
        a.getDay()
    });
    $(document).on("click", ".dokter-search .info-dokter", function(a) {
        a.preventDefault();
        a = $(this).data("target");
        $(a).fadeIn();
        $("#info-dokter-modal #doctor-name").text($(this).data("name"));
        $("#info-dokter-modal #doctor-spesialization").text($(this).data("spesialis"));
        $("#info-dokter-modal #doctor-clinic").text("Nama Kantor TokoLegalitas.com " +
            $(this).data("nama-rs"));
        $("#info-dokter-modal #doctor-photo").attr("src", $(this).data("src-photo"));
        0 >= $(this).data("cv").length ? ($("#title-tentangdokter").addClass("hidden"), $(".scroll-cv-dokter").addClass("hidden")) : $("#info-dokter-modal #doctor-cv").html($(this).data("cv"))
    });
    $(document).on("click", "#info-dokter-content .row .center-info-dokter .row:first-child", function(a) {
        768 > $(window).width() && (a.preventDefault(), $(this).parent().next().hasClass("hidden-xs") ? ($(this).addClass("open"), $(this).parent().next(".col-md-9").removeClass("hidden-xs"),
            $(this).parent().next(".col-md-9").removeClass("hidden-sm"), $(this).siblings().toggleClass("hidden"), $(this).parent().siblings(".row-bottom").toggleClass("hidden")) : ($(this).removeClass("open"), $(this).siblings().toggleClass("hidden"), $(this).parent().siblings(".row-bottom").toggleClass("hidden"), $(this).parent().next(".col-md-9").addClass("hidden-xs"), $(this).parent().next(".col-md-9").addClass("hidden-sm")))
    });
    0 < $(".card-search").length && 768 > $(window).width() && $(".card-search").first().find(".col-md-9").hasClass("hidden-xs") &&
        ($(".card-search").first().find(".col-md-3").addClass("open"), $(".card-search").first().find(".col-md-9").removeClass("hidden-xs"), $(".card-search").first().find(".col-md-9").removeClass("hidden-sm"));
    0 < $("#info-dokter-content").length && (768 > $(window).width() ? $("#info-dokter-content .row").first().find(".col-md-9").hasClass("hidden-xs") && ($("#info-dokter-content .row").first().find(".col-md-3 .row:first").addClass("open"), $("#info-dokter-content .row").first().find(".col-md-3 .row:last-child").toggleClass("hidden"),
        $("#info-dokter-content .row").first().find(".row-bottom").toggleClass("hidden"), $("#info-dokter-content .row").first().find(".col-md-9").removeClass("hidden-xs"), $("#info-dokter-content .row").first().find(".col-md-9").removeClass("hidden-sm")) : $("#info-dokter-content .row").first().find(".col-md-3 .row:last-child").removeClass("hidden"));
    0 < $(".content-fh").length && $(".content-fh .hide a").each(function() {
        $(this).addClass("btn btn-border-pink button-detail-rp");
        "id" == lang ? $(this).text("Unduh") : "en" ==
            lang && $(this).text("Download")
    });
    $("#year-ir a").click(function(a) {
        a.preventDefault();
        $("#in-content").hide();
        $(".load-more").hide();
        a = $(this).closest(".tab-pane").attr("id");
        $("#" + a + " .loading-klinik").removeClass("hidden");
        var b = $("#select2-category-in").val();
        a = domain_investor_news;
        b = "search[category]=" + b + "&search[year]=" + $(this).text() + "&lang=" + lang;
        $.ajax({
            type: "GET",
            url: a,
            data: b,
            dataType: "json",
            success: function(c) {
                c = c.data.investor_news;
                $("#in-content").html("");
                if (void 0 != c) {
                    for (var d = $("#investor-news-template").html(),
                            h = 0; h < c.length; h++) {
                        var e = replaceText(d, "{{TITLE}}", c[h].title);
                        e = replaceText(e, "{{DATE}}", (new Date(c[h].date_posted)).toLocaleString("id-ID", {
                            year: "numeric",
                            day: "numeric",
                            month: "long"
                        }));
                        e = replaceText(e, "SLUG", domain + "/investor-relation/" + lang + "/" + c[h].category_slug + "/" + c[h].slug);
                        $("#in-content").append(e)
                    }
                    $(".load-more").show()
                }
                0 === c.length && ($(".load-more").hide(), "id" == lang ? $("#in-content").html("<b class='text-pink'>Nantikan berita seputar investor Nama Kantor TokoLegalitas.com</b>") : "en" == lang &&
                    $("#in-content").html("<b class='text-pink'>Our investorn news will be released later this year</b>"))
            }
        });
        setTimeout(function() {
            $("#in-content").fadeIn(200);
            $(".loading-klinik").addClass("hidden")
        }, 500)
    });
    $(".year-rp a").click(function(a) {
        a.preventDefault();
        var b = $("#rp-menu a.open").attr("data-target");
        $(b).find(".row-result").hide();
        a = $(this).closest(".tab-pane").attr("id");
        $("#" + a + " .loading-klinik").removeClass("hidden");
        var c = $("#rp-menu a.open").attr("data-id-category");
        a = domain_investor_report;
        c = "search[category]=" + c + "&search[year]=" + $(this).text() + "&lang=" + lang;
        $.ajax({
            type: "GET",
            url: a,
            data: c,
            dataType: "json",
            success: function(d) {
                d = d.data.investor_reports;
                $(b).find(".row-result").html("");
                if (void 0 != d)
                    for (var h = $("#reports-presentations-template").html(), e = 0; e < d.length; e++) {
                        var k = replaceText(h, "{{TITLE}}", d[e].title);
                        k = replaceText(k, "{{URL}}", d[e].pdf_url);
                        k = replaceText(k, "{{ID}}", d[e].id);
                        null != d[e].cover_thumb ? (k = replaceText(k, "{{IMG}}", d[e].cover_thumb), k = replaceText(k, "hidden", "")) :
                            k = replaceText(k, "{{IMG}}", "");
                        "en" == lang && (k = replaceText(k, "Unduh", "Download"));
                        $(b).find(".row-result").append(k)
                    }
                0 === d.length && ("id" == lang ? $(b).find(".row-result").html("<b class='text-pink'>Nantikan laporan dan presentasi Nama Kantor TokoLegalitas.com</b>") : "end" == lang && $(b).find(".row-result").html("<b class='text-pink'>Our reports and presentations will be released later this year</b>"))
            }
        });
        setTimeout(function() {
            $(b).find(".row-result").fadeIn(200);
            $(".loading-klinik").addClass("hidden")
        }, 500)
    });
    $(document).on("click", ".dokter-search", function(a) {
        1025 > $(window).width() && (a.preventDefault(), $(this).next().hasClass("hidden-xs") ? ($(this).addClass("open"), $(this).next(".col-md-9").removeClass("hidden-xs"), $(this).next(".col-md-9").removeClass("hidden-sm")) : ($(this).removeClass("open"), $(this).next(".col-md-9").addClass("hidden-xs"), $(this).next(".col-md-9").addClass("hidden-sm")))
    });
    $(document).on("click", "#info-dokter-content .button-buat-janji-detail", function() {
        var a = $(this).data("idsp"),
            b = $(this).data("nama");
        $("#jadwal-form #form-specialization").val(a);
        $("#jadwal-form #form-namadokter").val(b);
        $(this).is("[disabled=disabled]") || $("#jadwal-form #form-submit").trigger("click")
    });
    $("#spesialisasi-jadwal-klinik li a").click(function() {
        $("#btn-search-jadwal-klinik").data("idspecialization", $(this).data("id"))
    });
    $("#btn-search-jadwal-klinik").click(function() {
        var a = $(this).data("idclinic"),
            b = $(this).data("idspecialization");
        a = null == b || 0 == b ? "id_clinic=" + a : "id_clinic=" + a + "&id_specialization=" +
            b;
        for (b = window.location.pathname.split("/");
            "mitrakeluarga" != b[b.length - 1];) b.pop();
        b = b.join("/");
        $.ajax({
            type: "GET",
            url: "http://" + window.location.host + b + "/api/clinic-schedule",
            data: a,
            dataType: "json",
            success: function(c) {
                c = c.data.clinics;
                $("#list-jk-content").html("");
                if (void 0 != c)
                    for (var d = 1, h = 0; h < c.length; h++) {
                        var e = $("#jadwal-klinik-template").html();
                        e = replaceText(e, "{{SPNAME}}", c[h].name_specialization);
                        e = replaceText(e, "{{IDSCH}}", c[h].id);
                        var k = new Date,
                            m;
                        0 == k.getDay() && (m = "sun");
                        1 == k.getDay() &&
                            (m = "mon");
                        2 == k.getDay() && (m = "tue");
                        3 == k.getDay() && (m = "wed");
                        4 == k.getDay() && (m = "thu");
                        5 == k.getDay() && (m = "fri");
                        6 == k.getDay() && (m = "sat");
                        k = k.getDate() + "-" + k.getMonth() + 1 + "-" + k.getFullYear();
                        k = window.location.origin + "/" + window.location.pathname.split("/")[1] + "/buat-janji/search-result?clinic=" + c[h].id_clinic + "&specialization=" + c[h].id_specialization + "&day=" + m + "&date=" + k;
                        e = replaceText(e, "{{URL}}", k);
                        $("#list-jk-content").append(e);
                        e = c[h].id;
                        k = $("#jadwal-dokter-template").html();
                        var g = $("#jam-jadwal-dokter-template").html(),
                            f = replaceText(k, "{{HARI}}", "Senin");
                        f = replaceText(f, "{{ID}}", d);
                        var l = c[h].mon.split(", "),
                            p = c[h].tue.split(","),
                            n = c[h].wed.split(","),
                            z = c[h].thu.split(","),
                            x = c[h].fri.split(","),
                            A = c[h].sat.split(","),
                            D = c[h].sun.split(",");
                        $("#jadwal-klinik-template-content-" + e).append(f);
                        for (f = 0; f < l.length; f++) {
                            var u = replaceText(g, "{{JAM}}", l[f]);
                            0 < f && $("#jam-container-" + d).append("<p id='row1'></p>");
                            $("#jam-container-" + d).append(u)
                        }
                        d++;
                        f = replaceText(k, "{{HARI}}", "Selasa");
                        f = replaceText(f, "{{ID}}", d);
                        $("#jadwal-klinik-template-content-" +
                            e).append(f);
                        for (f = 0; f < p.length; f++) u = replaceText(g, "{{JAM}}", p[f]), 0 < f && $("#jam-container-" + d).append("<p id='row1'></p>"), $("#jam-container-" + d).append(u);
                        d++;
                        l = replaceText(k, "{{HARI}}", "Rabu");
                        l = replaceText(l, "{{ID}}", d);
                        $("#jadwal-klinik-template-content-" + e).append(l);
                        for (f = 0; f < n.length; f++) u = replaceText(g, "{{JAM}}", n[f]), 0 < f && $("#jam-container-" + d).append("<p id='row1'></p>"), $("#jam-container-" + d).append(u);
                        d++;
                        f = replaceText(k, "{{HARI}}", "Kamis");
                        f = replaceText(f, "{{ID}}", d);
                        $("#jadwal-klinik-template-content-" +
                            e).append(f);
                        for (f = 0; f < z.length; f++) u = replaceText(g, "{{JAM}}", z[f]), 0 < f && $("#jam-container-" + d).append("<p id='row1'></p>"), $("#jam-container-" + d).append(u);
                        d++;
                        f = replaceText(k, "{{HARI}}", "Jumat");
                        f = replaceText(f, "{{ID}}", d);
                        $("#jadwal-klinik-template-content-" + e).append(f);
                        for (f = 0; f < x.length; f++) u = replaceText(g, "{{JAM}}", x[f]), 0 < f && $("#jam-container-" + d).append("<p id='row1'></p>"), $("#jam-container-" + d).append(u);
                        d++;
                        f = replaceText(k, "{{HARI}}", "Sabtu");
                        f = replaceText(f, "{{ID}}", d);
                        $("#jadwal-klinik-template-content-" +
                            e).append(f);
                        for (f = 0; f < A.length; f++) u = replaceText(g, "{{JAM}}", A[f]), 0 < f && $("#jam-container-" + d).append("<p id='row1'></p>"), $("#jam-container-" + d).append(u);
                        d++;
                        f = replaceText(k, "{{HARI}}", "Minggu");
                        f = replaceText(f, "{{ID}}", d);
                        $("#jadwal-klinik-template-content-" + e).append(f);
                        for (f = 0; f < D.length; f++) u = replaceText(g, "{{JAM}}", D[f]), 0 < f && $("#jam-container-" + d).append("<p id='row1'></p>"), $("#jam-container-" + d).append(u);
                        d++
                    }
            },
            contentType: "application/json"
        })
    });
    0 < $("#list-jk-content").length && $("#btn-search-jadwal-klinik").trigger("click");
    $("#search-keyword").submit(function(a) {
        a.preventDefault();
        a = $(this).find("#input-keyword").val();
        if ("" != a) {
            var b = "keywords=" + a + "&limit=6";
            var c = domain_search_article
        } else b = "limit=6", c = domain + "/api/article";
        var d = domain + "/artikel?search=" + a;
        $(".loading-klinik").toggleClass("hidden");
        $(".news-part").toggleClass("hidden");
        $(".load-more").hide();
        $.ajax({
            type: "GET",
            url: c,
            data: b,
            contentType: "application/json",
            success: function(h) {
                $("#health-article-content").html("");
                var e = !1,
                    k = $("#health-article-content-template").html();
                if (200 == h.status && 0 < h.data.articles.length) {
                    e = !0;
                    h = h.data.articles;
                    for (var m = 0; m < h.length; m++) {
                        var g = domain + "/artikel/" + h[m].category_slug + "/" + h[m].slug,
                            f = new Date(h[m].date_posted),
                            l = replaceText(k, "{{ID}}", h[m].id);
                        l = replaceText(l, "SLUG", g);
                        l = replaceText(l, "{{IMAGE}}", h[m].image_full);
                        l = replaceText(l, "{{TITLE}}", h[m].title);
                        l = replaceText(l, "{{PUREDATE}}", h[m].date);
                        l = replaceText(l, "{{DATE}}", f.toLocaleString("id-ID", {
                            year: "numeric",
                            day: "numeric",
                            month: "long"
                        }));
                        l = replaceText(l, "{{EXCERPT}}", h[m].excerpt.replace(/^(.{134}).+/,
                            "$1&hellip;"));
                        $("#health-article-content").append(l)
                    }
                } else $(".load-more").hide(), $("#health-article-content").append("<div class='article-home nodata'><p>Nantikan penawaran menarik dari kami di masa yang akan datang</p></div>");
                setTimeout(function() {
                    e && $(".load-more").show();
                    $(".loading-klinik").addClass("hidden");
                    $(".news-part").toggleClass("hidden");
                    ChangeUrl("artikel", "title", d)
                }, 500)
            }
        })
    })
});