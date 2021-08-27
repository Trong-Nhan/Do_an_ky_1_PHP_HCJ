-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2020 lúc 05:35 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wend_travel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descriptions` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `image`, `status`, `content`, `meta_keywords`, `meta_descriptions`, `destination_id`, `created_at`) VALUES
(1, 'Phố Cổ Hội An - Vẻ Đẹp Thời Gian Ngưng Đọng', 'pho-co-hoi-an-ve-dep-thoi-gian-ngung-dong', 'hoi_an2.jpg', 1, '<strong><strong><em>Hội An – nơi mà cuộc sống cứ bình lặng như thế. Hội An – nơi mà dường như dòng chảy vô tình của thời gian chẳng thể nào vùi lấp đi cái không khí cổ xưa. Những mái ngói cũ phủ đầy rêu phong, những con đường ngập trong sắc đỏ của đèn lồng, những bức hoành phi được chạm trổ tinh vi, tất cả như đưa ta về với một thế giới của vài trăm năm trước. Đó mới chỉ là một phần dung dị ở khu phố cổ Hội An nhưng cũng đã đủ khiến người ta phải đắm say, đi quên lối.<br><br></em></strong></strong>\r\n<p>Khu phố cổ Hội An là một đô thị cổ nằm ở hạ lưu sông Thu Bồn, thuộc vùng đồng bằng ven biển tỉnh Quảng Nam, cách thành phố Đà Nẵng khoảng chừng 30km về phía Nam.</p>\r\n<p> </p>\r\n<p>Khu phố cổ Hội An gói gọn trong phường Minh An với diện tích chỉ tầm 2km2 với một địa thế thật đặc biệt theo kiểu bàn cờ mà đặc trưng ở đó là những con đường ngắn và hẹp, chạy uốn lượn, ngang dọc, khiến người ta rẽ lối nào rồi cũng dễ dàng gặp được nhau.<br><br><span>Theo thống kê Hội An có 1360 di tích bao gồm 1068 nhà cổ, 11 giếng nước cổ, 38 nhà thờ tộc, 19 ngôi chùa, 43 miếu thờ thần, 23 đình, 44 mộ cổ loại đặc biệt và một cây cầu. Mặc cho không gian và thời gian cứ chuyển dời, đô thị cổ Hội An vẫn giữ nguyên được những nét đẹp cổ xưa nhất. Đó như một nơi chốn mà người ta có thể tìm thấy một quần thể di tích được gìn giữ hầu như nguyên vẹn khiến Hội An trở thành một địa danh độc nhất vô nhị trong biên niên sử thời hiện đại.</span><br><br><span>Tới Hội An ngày nay, ta cứ ngỡ như là mình đang quay ngược dòng thời gian, lạc bước trong không khí truyền thống của một thương cảng sầm uất thời nhà Nguyễn. Tới Hội An ngày nay là có thể rời xa mọi cám dỗ của đời thường để sống trọn vẹn trong từng giây phút.</span></p>\r\n<strong><em><br></em></strong>', NULL, NULL, 7, '2020-08-18'),
(2, 'Phú Quốc làm tôi say đắm từ cái nhìn đầu tiên', 'phu-quoc-lam-toi-say-dam-tu-cai-nhin-dau-tien', 'phuquocblog.jpg', 1, '<p class=\"the-article-summary\"><em><strong>Được nghe những chia sẻ của bạn bè đã đi cũng như được xem qua báo đài, tôi háo hức chờ đón đến chuyến đi của mình khám phá hòn đảo ở miền Nam tổ quốc.</strong></em></p>\r\n<div class=\"the-article-body\">\r\n<p><span>Phú Quốc </span>là hòn đảo xinh đẹp nằm sâu trong vịnh Thái Lan, thuộc tỉnh Kiên Giang, vùng biển phía Nam của Tổ Quốc được mệnh danh là \"đảo ngọc\". Đến đây bạn có thể đi bằng đường hàng không hoặc đường biển.</p>\r\n<p>Hành trình xuất phát từ Hồ Chí Minh bằng máy bay, bạn chỉ mất khoảng 40 phút là đã thoát khỏi không khí oi bức, ồn ào của chốn đô thị để thoải mái thư giãn với biển xanh, nắng vàng, cát trắng của đảo ngọc. Đảo Phú Quốc có khí hậu nhiệt đới gió mùa với hai mùa rõ rệt: mùa khô và mùa mưa. Chuyến bay của tôi đáp xuống sân bay vào thời điểm mùa khô của đảo. Tháng 11, Phú Quốc chào đón tôi bằng cái nóng 30 độ, cái nắng chói chang và bầu trời trong xanh cùng làn gió khô rát ập vào người.</p>\r\n<p>Với mong muốn được trải nghiệm thực tế nhất, tôi quyết định đi bằng xe máy. Điểm dừng chân đầu tiên sẽ là Khu Du lịch Sinh thái Suối Tranh, được tạo nên từ những dòng suối nhỏ, chảy qua rừng cây khe núi, bắt nguồn từ dãy Hàm Ninh. <br><br></p>\r\n<p>Thật may mắn vì đã vào mùa khô nhưng Suối Tranh vẫn còn nước chảy nhiều, tận mắt nhìn thấy dòng thác  trắng xóa đổ xuống thật tuyệt, như một sự ưu ái mà Phú Quốc dành tặng tôi trong chuyến đi này. Khung cảnh thiên nhiên hữu tình, tuyệt đẹp như một bức tranh sinh động.</p>\r\n<p>Chiều dần buông, tôi tranh thủ tạm biệt Suối Tranh tiếp tục chạy ngược về hướng làng chài Hàm Ninh nằm trên bờ biển phía Đông đảo, sau lưng là núi rừng trước mặt là biển cả mênh mông. Vẻ đẹp hiện ra trước mắt tôi với cầu tàu chạy thẳng ra biển. Biển nơi đây ra xa vài trăm mét mà vẫn còn khá nông. Làn gió biển lùa vào mát mẻ, những con sóng lấp lánh ánh vàng của ráng chiều dệt thành tấm thảm lung linh rực rỡ một góc trời. <br><br></p>\r\n<p>Đây cũng là địa điểm lý tưởng để bạn mua sắm làm quà. Sẽ thật thiếu sót khi đến làng chài Hàm Ninh mà lại bỏ qua các món hải sản như cầu gai, các loại ốc và đặc biệt là món ghẹ vừa được đánh bắt. Ngoài ra nếu bạn có thời gian thì nên ghé qua bảo tàng Cội Nguồn và chùa Sư Muôn cổ kính cũng nằm trên cung đường này.</p>\r\n<p>Về thị trấn Dương Đông, tôi có cơ hội khám phá một góc khác về đêm của Phú Quốc, một sự khác biệt thú vị.</p>\r\n<p>Đến Phú Quốc lần này, mọi trải nghiệm vượt qua cả sự mong đợi của tôi: được hòa mình với nhịp sống bình yên, được thưởng thức vẻ đẹp quyến rũ của con suối, những bãi biển hoang sơ và cả những món ăn đặc sản.</p>\r\n<p> Phú Quốc - miền đất tôi đã say đắm từ cái nhìn đầu tiên.</p>\r\n</div>', NULL, NULL, 1, '2020-08-18'),
(3, '10 vật dụng cần mang theo khi đi du lịch', '10-vat-dung-can-mang-theo-khi-di-du-lich', 'do_dung.jpg', 1, '<p><em><strong>Chắc hẳn trước mỗi chuyến du lịch, bạn luôn đau đầu về việc nên mang vật dụng gì theo chuyến du lịch. Và nếu như bạn vẫn còn chưa biết mang gì theo chuyến du lịch thì hãy cùng theo dõi bài viết dưới đây của Wend Travel<span> </span>nhé.</strong></em></p>\r\n<h2>1. Giấy tờ tuỳ thân</h2>\r\n<p>Một trong những thứ đầu tiên mà bạn cần chuẩn bị đồ cho chuyến du lịch chính là giấy tờ tùy thân. Một số loại giấy tờ mà bắt buộc bạn cần phải mang theo dù đi bất cứ nơi đâu chính là chứng minh thư, thẻ căn cước công dân, giấy phép lái xe, hộ chiếu…</p>\r\n<p>Ngoài ra, bạn cũng nên chuẩn bị sẵn bản sao chứng minh thư, hộ chiếu, bảo hiểm du lịch hay thẻ ngân hàng cũng là những thứ bạn nên mang theo đề phòng trong trường hợp cần sử dụng nhé.</p>\r\n<p><img class=\"alignnone wp-image-21269\" src=\"https://ezcloud.vn/wp-content/uploads/2019/09/visa-ho-chieu.jpg\" alt=\"10 vật dụng cần mang theo khi đi du lịch\" width=\"650\" height=\"362\" srcset=\"https://ezcloud.vn/wp-content/uploads/2019/09/visa-ho-chieu.jpg 800w, https://ezcloud.vn/wp-content/uploads/2019/09/visa-ho-chieu-500x278.jpg 500w, https://ezcloud.vn/wp-content/uploads/2019/09/visa-ho-chieu-600x334.jpg 600w, https://ezcloud.vn/wp-content/uploads/2019/09/visa-ho-chieu-768x427.jpg 768w\" sizes=\"(max-width: 650px) 100vw, 650px\"></p>\r\n<h2>2. Tiền mặt và thẻ ngân hàng</h2>\r\n<p>Tiền mặt và thẻ ngân hàng cũng là một trong những thứ bạn cần phải chuẩn bị thật kỹ để mang theo trong chuyến du lịch. Để đề phòng những trường hợp xấu có thể xảy ra, bạn nên chuẩn bị một ít tiền mặt. Số tiền còn lại, bạn để trong thẻ ngân hàng, vừa an toàn vừa thuận tiện cho bạn trong chuyến đi.</p>\r\n<h2>3. Vali du lịch</h2>\r\n<p>Chuyến đi của bạn chắc chắn không thể thiếu một chiếc vali du lịch, tuỳ thuộc vào chuyến du lịch của bạn ngắn ngày hay dài ngày mà lựa chọn cho mình một chiếc vali phù hợp. Một chiếc vali du lịch tốt sẽ giúp bạn bảo quản đồ đạc và những thứ cần mang theo trong chuyến đi của mình. Chính vì thế, khi chuẩn bị đồ đi du lịch bạn nên mang theo 1 chiếc vali tốt nhất nhé.</p>\r\n<p>Một chiếc vali tốt là có trọng lượng nhẹ và có khả năng chịu va đập tốt. Bên cạnh đó, bạn hãy quan tâm đến khả năng chứa đồ bên trong. Một chiếc vali du lịch lớn sẽ giúp bạn có thể chứa được nhiều đồ bên trong mà không cần phải mang theo quá nhiều túi đựng đồ du lịch khác<br><br></p>\r\n<p><img class=\"alignnone wp-image-21411\" src=\"https://ezcloud.vn/wp-content/uploads/2019/09/vali-du-lich-1.jpg\" alt=\"10 vật dụng cần thiết mang theo khi đi du lịch\" width=\"650\" height=\"454\" srcset=\"https://ezcloud.vn/wp-content/uploads/2019/09/vali-du-lich-1.jpg 1700w, https://ezcloud.vn/wp-content/uploads/2019/09/vali-du-lich-1-500x349.jpg 500w, https://ezcloud.vn/wp-content/uploads/2019/09/vali-du-lich-1-573x400.jpg 573w, https://ezcloud.vn/wp-content/uploads/2019/09/vali-du-lich-1-768x536.jpg 768w, https://ezcloud.vn/wp-content/uploads/2019/09/vali-du-lich-1-1536x1072.jpg 1536w\" sizes=\"(max-width: 650px) 100vw, 650px\"></p>\r\n<h2>4. Thuốc và vật dụng y tế</h2>\r\n<p>Thuốc và vật dụng y tế chắc chắn là những vật dụng không thể thiếu trong vali du lịch của bạn rồi.</p>\r\n<p>Do vậy, bạn hãy mang theo một số loại thuốc phổ biến như cảm cúm, đau bụng, dị ứng…Cũng đừng quên những dụng cụ y tế cơ bản như kéo, băng gạc, ugo nhé. Để tiết kiệm diện tích vali đựng đồ bạn nên để chúng vào trong một chiếc túi nhỏ.</p>\r\n<h2><span id=\"5_Do_dung_ve_sinh_ca_nhan\"><strong>5. Đồ dùng vệ sinh cá nhân</strong></span></h2>\r\n<p>Khi chuẩn bị đồ đi du lịch bạn đừng quên mang theo những vật dụng vệ sinh cá nhân nhé. Mặc dù ở một số khách sạn cũng đã có sẵn đồ vệ sinh cá nhân như: kem đánh răng, bàn chải. Thế nhưng bạn cũng nên mang theo đề phòng trường hợp bị delay tại sân bay quá lâu.</p>\r\n<p><img class=\"alignnone wp-image-21413\" src=\"https://ezcloud.vn/wp-content/uploads/2019/09/do-vscn-1.jpg\" alt=\"10 vật dụng cần thiết mang theo khi đi du lịch\" width=\"650\" height=\"486\" srcset=\"https://ezcloud.vn/wp-content/uploads/2019/09/do-vscn-1.jpg 787w, https://ezcloud.vn/wp-content/uploads/2019/09/do-vscn-1-500x374.jpg 500w, https://ezcloud.vn/wp-content/uploads/2019/09/do-vscn-1-535x400.jpg 535w, https://ezcloud.vn/wp-content/uploads/2019/09/do-vscn-1-768x574.jpg 768w\" sizes=\"(max-width: 650px) 100vw, 650px\"></p>\r\n<h2><span id=\"6_Quan_ao_di_du_lich\"><strong>6. Quần áo </strong></span></h2>\r\n<p>Tùy thuộc vào ngày đi, điểm đến để lựa chọn những trang phục đi phù hợp nhất bạn nhé. Bạn nên mang quần áo vừa đủ để mặc nhé, tránh việc mang quá nhiều quần áo rồi không mặc đến.</p>\r\n<h2><span id=\"7_Giay_dep\"><strong>7. Giày dép</strong></span></h2>\r\n<p>Cũng giống như quần áo, thì giày dép cũng là một trong những món đồ mà bạn không nên quên khi chuẩn bị đồ đi du lịch. 1 đôi giày thể thao/ giày búp bê + 1 đôi dép để thuận tiện trong việc đi lại sẽ là sự lựa chọn hợp lý.</p>\r\n<h2><span id=\"8_Cac_thiet_bi_dien_tu\"><strong>8. Các thiết bị điện tử</strong></span></h2>\r\n<p>Điện thoại di động, máy chụp hình và laptop là những vật dụng không thể thiếu trong hành lý của bạn. Tuy nhiên, bạn cũng đừng quên mang theo các thiết bị như sạc dự phòng, cục đổi nguồn điện, sạc pin cho máy ảnh, điện thoại và laptop. Ngoài ra, một chiếc túi đựng chống nước là vật nên mang theo để bảo vệ các món đồ này. </p>\r\n<p><img class=\"alignnone wp-image-21419\" src=\"https://ezcloud.vn/wp-content/uploads/2019/09/thiet-bi-dien-tu-mag-di-du-lich-1.jpg\" alt=\"10 vật dụng cần thiết mang theo khi đi du lịch\" width=\"650\" height=\"501\" srcset=\"https://ezcloud.vn/wp-content/uploads/2019/09/thiet-bi-dien-tu-mag-di-du-lich-1.jpg 1500w, https://ezcloud.vn/wp-content/uploads/2019/09/thiet-bi-dien-tu-mag-di-du-lich-1-500x386.jpg 500w, https://ezcloud.vn/wp-content/uploads/2019/09/thiet-bi-dien-tu-mag-di-du-lich-1-519x400.jpg 519w, https://ezcloud.vn/wp-content/uploads/2019/09/thiet-bi-dien-tu-mag-di-du-lich-1-768x592.jpg 768w\" sizes=\"(max-width: 650px) 100vw, 650px\"></p>\r\n<h2><span id=\"9_Do_an_nhe\"><strong>9. Đồ ăn nhẹ</strong></span></h2>\r\n<p>Việc phải ngồi nhiều giờ trên tàu hỏa, ô tô hay máy bay chắc chắn sẽ khiến bạn cảm thấy buồn miệng và thèm nhâm nhi thứ gì đó cho thời gian trôi qua nhanh. Do đó hãy chuẩn bị trong túi xách của mình một vài món ăn nhẹ như bánh ngọt, xúc xích, bánh kẹo…</p>\r\n<h2>10. Đồ dùng cần thiết trên máy bay</h2>\r\n<p>Nếu phải bay trên những chuyến bay dài, bạn cần mang gối cổ, bịt mắt và tai nghe để dễ ngủ và nghỉ ngơi nhé.</p>\r\n<p><img class=\"alignnone wp-image-21420\" src=\"https://ezcloud.vn/wp-content/uploads/2019/09/do-can-thiet-mang-di-may-bay-1.jpg\" alt=\"10 vật dụng cần thiết mang theo khi đi du lịch\" width=\"650\" height=\"407\" srcset=\"https://ezcloud.vn/wp-content/uploads/2019/09/do-can-thiet-mang-di-may-bay-1.jpg 700w, https://ezcloud.vn/wp-content/uploads/2019/09/do-can-thiet-mang-di-may-bay-1-500x313.jpg 500w, https://ezcloud.vn/wp-content/uploads/2019/09/do-can-thiet-mang-di-may-bay-1-600x375.jpg 600w\" sizes=\"(max-width: 650px) 100vw, 650px\"></p>\r\n<p>Trên đây, Wend Travel<span> </span>đã chia sẻ với bạn <em><strong>” 10 món đồ cần thiết mang theo khi đi du lịch”.<span> </span></strong></em>Nếu bạn còn đang đau đầu chưa biết phải mang những vật dụng nào khi đi du lịch, đừng bỏ qua bài viết này nhé.</p>\r\n<p></p>', NULL, NULL, NULL, '2020-08-18'),
(4, 'Thành phố Hà Nội: Một nửa trong tôi', 'thanh-pho-ha-noi-mot-nua-trong-toi', 'hanoi.jpg', 1, '<div itemprop=\"description\" class=\"content-detail__short-desc\">\r\n<p><em><strong>Thành phố Hà Nội rất đẹp. Dù sau này tôi có qua bao miền đất khác thì Hà Nội vẫn là tình yêu lớn trong tôi.</strong></em></p>\r\n</div>\r\n<div itemprop=\"articleBody\" class=\"content-detail__content\">\r\n<p>Tôi có một người bạn Sài Gòn đặc biệt. Tên cậu ấy là Bảo, đang là sinh viên Đại học trong Sài Gòn. Đó là tất cả những gì tôi biết về cậu. Thi thoảng chúng tôi liên lạc qua gmai, điện thoại và facebook. Khi ấy, chúng tôi hay kể về thành phố mình sinh sống. Hà Nội và Sài Gòn. Tôi chưa đặt chân đến Sài Gòn lần nào nhưng qua những bức ảnh cậu ấy gửi cho tôi – tôi thấy nó thật đẹp. Bảo hay hỏi: “Hà Nội có gì đặc biệt?”. Tôi trả lời ngay – Hà Nội là thành phố lớn, nổi tiếng phồn hoa. Nếu chỉ kể riêng những tòa nhà, những trung tâm mua sắm, những con phố tấp nập… cũng mất rất nhiều thời gian. Hà Nội trong tôi đâu đơn thuẩn chỉ có vậy. Tôi là người Hà Nội. Tôi yêu thành phố này, yêu cả những điều bình dị mà ít người chú ý tới.</p>\r\n<p> </p>\r\n<div id=\"attachment_106303\" class=\"wp-caption alignnone\"><a href=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-3.jpg\" class=\"auto_magnific\" rel=\"article_gallery\"><img aria-describedby=\"caption-attachment-106303\" class=\"wp-image-106303 size-medium\" src=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-3-490x310.jpg\" alt=\"thanh pho ha noi 3\" width=\"490\" height=\"310\"></a>\r\n<p id=\"caption-attachment-106303\" class=\"wp-caption-text\">Hà Nội “bình minh” sớm hơn Sài Gòn một nhịp. Chỉ 4, 5h sáng đã thấy nhộn nhịp những người rủ nhau tập thể dục dưỡng sinh, chạy bộ</p>\r\n</div>\r\n<p>Hà Nội của tôi có gì đẹp? Câu hỏi này thật khó trả lời. Vì lẽ, đối với tôi những gì thân quen luôn đẹp, luôn bình yên. Hà Nội “bình minh” sớm hơn Sài Gòn một nhịp. Chỉ 4, 5h sáng đã thấy nhộn nhịp những người rủ nhau tập thể dục dưỡng sinh, chạy bộ. Sau bước khởi động cho ngày mới là một ly cà phê đậm đà trước bữa sáng, rồi mọi người tất bật đi làm. Khoảng thời gian này và giờ tan tầm luôn là ác mộng với tôi. Từ nhà tôi tới trường xe cộ đi lại nườm nượp. Mất cả giờ đồng hồ để thoát khỏi vòng vây của những chiếc xe. Dù mà Đông hay mùa Hè thì tắc đường cũng là nỗi kinh hoàng. Đó là mặt trái của thành phố đang phát triển này. Một bào thai đang chờ sinh luôn làm bà mẹ đau đớn. Nhưng cũng như sự chào đời của đứa trẻ là niềm hạnh phúc của gia đình. Hà Nội tắc đường lại tạo nên nét riêng của thành phố này.</p>\r\n<p> </p>\r\n<div id=\"attachment_106307\" class=\"wp-caption alignnone\"><a href=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-7.jpg\" class=\"auto_magnific\" rel=\"article_gallery\"><img aria-describedby=\"caption-attachment-106307\" class=\"wp-image-106307 size-medium\" src=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-7-490x321.jpg\" alt=\"thanh pho ha noi 7\" width=\"490\" height=\"321\"></a>\r\n<p id=\"caption-attachment-106307\" class=\"wp-caption-text\">Tôi thích đi du lịch quanh Hà Nội. Thành phố này bé tí thôi nhưng nhiều ngóc ngách. Sống ở Hà Nội bao năm mà tôi vẫn lạc đường</p>\r\n</div>\r\n<p>Tôi thích đi du lịch quanh Hà Nội. Thành phố này bé tí thôi nhưng nhiều ngóc ngách. Sống ở Hà Nội bao năm mà tôi vẫn lạc đường. Khi còn chưa có xe máy, phương tiện đi lại chính của tôi là xe bus. Tôi thích đi xe vào những ngày mưa, những hôm vắng người. Nhưng không phải lúc nào cũng được một mình một ghế. Có những hôm xe đông, tôi thậm chí còn phải đứng trên một chân và chân còn lại… dẫm lên chân người khác. Đương nhiên là Hà Nội có “tật xấu” và còn nhiều điều “đáng sợ” ở Hà Nội. Thế nhưng thành phố này vẫn rất khiến tôi say đắm yêu thương.</p>\r\n<p>Nếu ví thành phố Hà Nội như một cô gái đang tuổi yêu liệu có kệch cỡm không nhỉ? Cô ấy xinh đẹp, đỏng đảnh và kiêu kì. Thế nhưng nếu chàng trai nào đó biết kiên nhẫn một chút, chiều chuộng một chút thì sẽ khác. Chinh phục được cô gái ấy anh sẽ thấy chẳng có cô gái nào tuyệt hơn nàng. Đó là lí do vì sao bạn học của tôi vẫn hay nhắn tin cho tôi hỏi “Dạo này Hà Nội có gì khác?”. Đó là những người bạn học cùng tôi ở đại học. Họ đa phần là những người tỉnh lẻ. Tôi là một trong số ít sinh viên trong lớp có hộ khẩu Hà Nội. Và tôi kể cho họ nghe từng chút đổi thay của thành phố này: những con đường đang xây mới, hàng quán mới mở… Mỗi lần nghe họ nói “Mình nhớ Hà Nội” tôi cũng cảm thấy vui sướng, tự hào.</p>\r\n<p> </p>\r\n<div id=\"attachment_106301\" class=\"wp-caption alignnone\"><a href=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-1.jpeg\" class=\"auto_magnific\" rel=\"article_gallery\"><img aria-describedby=\"caption-attachment-106301\" class=\"wp-image-106301 size-medium\" src=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-1-490x416.jpeg\" alt=\"thanh pho ha noi 1\" width=\"490\" height=\"416\"></a>\r\n<p id=\"caption-attachment-106301\" class=\"wp-caption-text\">Một khoảnh khắc bình yên của Hà Nội</p>\r\n</div>\r\n<div id=\"attachment_106306\" class=\"wp-caption alignnone\"><a href=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-6.jpg\" class=\"auto_magnific\" rel=\"article_gallery\"><img aria-describedby=\"caption-attachment-106306\" class=\"wp-image-106306 size-medium\" src=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-6-490x325.jpg\" alt=\"thanh pho ha noi 6\" width=\"490\" height=\"325\"></a>\r\n<p id=\"caption-attachment-106306\" class=\"wp-caption-text\">Hà Nội xinh đẹp, đỏng đảnh và kiêu kì như một cô gái đang tuổi yêu</p>\r\n</div>\r\n<p>Một trong những điều đặc biệt ở thành phố Hà Nội là ẩm thực. Khi còn là sinh viên, tôi hay cùng bạn bè khám phá ẩm thực Hà Nội. Bất cứ món ngon, món lạ nào tôi cũng muốn thử qua. Hà Nội nổi tiếng với tào phớ, phở, bánh tôm Hồ Tây… và cả những món lạ, mới vẫn xuất hiện hàng ngày. Sau này, tôi có dịp đi nhiều thành phố khác, thưởng thức đặc sản ở đó nhưng chẳng thấy nơi nào ngon như nơi này. Chỉ riêng món ẩm thực thôi cũng thấy Hà Nội đặc biệt rồi.</p>\r\n<p> </p>\r\n<div id=\"attachment_106304\" class=\"wp-caption alignnone\"><a href=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-4.jpg\" class=\"auto_magnific\" rel=\"article_gallery\"><img aria-describedby=\"caption-attachment-106304\" class=\"wp-image-106304 size-medium\" src=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-4-490x326.jpg\" alt=\"thanh pho ha noi 4\" width=\"490\" height=\"326\"></a>\r\n<p id=\"caption-attachment-106304\" class=\"wp-caption-text\">Những gánh cốm xanh thơm hương sen của mùa Thu Hà Nội</p>\r\n</div>\r\n<div id=\"attachment_106302\" class=\"wp-caption alignnone\"><a href=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-2.jpg\" class=\"auto_magnific\" rel=\"article_gallery\"><img aria-describedby=\"caption-attachment-106302\" class=\"wp-image-106302 size-medium\" src=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-2-490x302.jpg\" alt=\"thanh pho ha noi 2\" width=\"490\" height=\"302\"></a>\r\n<p id=\"caption-attachment-106302\" class=\"wp-caption-text\">Chỉ riêng món ẩm thực thôi cũng thấy Hà Nội đặc biệt rồi</p>\r\n</div>\r\n<p>Hà Nội đi vào thơ ca nhiều lắm, thi vị lắm. Một trong những nét đẹp đó là phố, những con đường và cây xanh. Tôi thích hàng phượng vĩ trên đường Lý Thường Kiệt. Tôi thích những tán bằng lăng trên phố Thợ Nhuộm. Mùa Xuân hoa sưa nở trắng dốc Ngọc Hà. Mùa Đông lá bàng rụng như trải thảm trên phố cổ. Và bây giờ đây, ngay cách nhà tôi vài trăm mét là cả con đường tím rợp hoa Ban… Hà Nội phố được điểm tô bằng cây xanh cho nét đẹp muôn đời cổ kính.</p>\r\n<p> </p>\r\n<div id=\"attachment_106305\" class=\"wp-caption alignnone\"><a href=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-5.jpg\" class=\"auto_magnific\" rel=\"article_gallery\"><img aria-describedby=\"caption-attachment-106305\" class=\"wp-image-106305 size-medium\" src=\"http://www.elle.vn/wp-content/uploads/2015/11/04/thanh-pho-ha-noi-5-490x310.jpg\" alt=\"thanh pho ha noi 5\" width=\"490\" height=\"310\"></a>\r\n<p id=\"caption-attachment-106305\" class=\"wp-caption-text\">Hà Nội phố được điểm tô bằng cây xanh cho nét đẹp muôn đời cổ kính</p>\r\n</div>\r\n<p>Có một bài hát ca ngợi rằng “Hà Nội đẹp nhất về đêm”. Tôi cũng yêu cái tĩnh lặng của đêm Hà Nội. Trái với dáng vẻ xô bồ của Hà Nội vào ban ngày. Đêm Hà Nôi thường chỉ có tiếng rao bán bánh mì, tiếng xào xạc của lá rơi, tiếng chổi tre đêm khuya trên con đường tĩnh lặng. Thi thoảng tôi vẫn rủ vài người bạn đi ngắm đêm Hà Nội. Vào đầu mùa hoa sữa, chúng tôi dạo qua đường Nguyễn Du hít hà hương thơm hăng hắc của nó. Mùi hoa sữa nồng nàn lan tỏa trong không trung khiến tôi mê đắm. Cậu bạn của tôi bảo cứ thấy hương hoa sữa là nhớ Hà Nội. Loài hoa trắng mọc thành chùm này phải chăng từ lâu đã trở thành đặc trưng của riêng Hà Nội?</p>\r\n<p>Hà Nội rất đẹp. Dù sau này tôi có qua bao miền đất khác thì Hà Nội vẫn là tình yêu lớn trong tôi. Và tôi tự hào nói rằng “Tôi là người Hà Nội”.</p>\r\n</div>', NULL, NULL, 4, '2020-08-18'),
(5, 'Fansipan (Sapa) – Đỉnh cao ai cũng muốn chinh phục', 'fansipan-sapa-–-dinh-cao-ai-cung-muon-chinh-phuc', 'fansipan2.jpg', 1, '<h3 id=\"span_style_color_b22222_b_1_b_b_doi_net_ve_dinh_fansipan_sapa_b_span\"><span><b><span>Fansipan- nóc nhà của Đông Dương - là điểm đến mà không những các nhà leo núi mà ngay cả những tín đồ<span> du lịch Sapa</span></span><span><span> </span>cũng muốn chinh phục và khám phá một lần trong đời. Cảm giác đứng trên đỉnh cao Fansipan, phóng tầm mắt nhìn xuống toàn cảnh Sapa đẹp như tranh vẽ quả là một cảm giác vi diệu vô cùng.</span><br><br>1. </b><b>Đôi nét về đỉnh Fansipan Sapa</b></span></h3>\r\n<p><strong>Fansipan<span> </span></strong>(hay còn được biết tới với cách viết Phan Xi Păng và Phanxipang) là đỉnh núi cao nhất Việt Nam và cao nhất toàn khu vực Đông Dương. Nằm ở độ cao lên tới 3.143m và thuộc dãy núi Hoàng Liên Sơn, Fansipan (chỉ cách thị trấn Sapa chừng 9km về phía Tây Nam) từ lâu đã trở thành điểm đến thu hút đông đảo khách du lịch trong và ngoài nước. Đi<span> </span><b>tour du lịch Sapa</b>, bạn đừng nên bỏ lỡ cơ hội chiêm ngưỡng Fansipan - một tuyệt tác từ bàn tay của tạo hóa nhé!</p>\r\n<p><img alt=\"tour du lịch sapa\" src=\"https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/fansipan-sapa-kynghidongduong.vn%20(03).jpg\"><br><em>Đỉnh Fansipan</em><br> </p>\r\n<h3 id=\"span_style_color_b22222_b_2_b_b_cach_di_chuyen_den_dinh_fansipan_b_span\"><span><b>2. </b><b>Cách di chuyển đến đỉnh Fansipan</b></span></h3>\r\n<p>Trước khi tìm hiểu di chuyển lên Fansipan như nào, bạn có thể cân nhắc đến việc nên đi tự túc hay đi theo tour trước. Đi tự túc thì khá tự do, không ràng buộc thời gian hay điểm đến. Tuy nhiên bạn sẽ phải tự tìm hiểu hết từ a-z, đi như nào, dùng phương tiện gì, mua vé ở đâu…</p>\r\n<p>Đi theo<span> </span><b>tour Sapa từ Hà Nội</b><span> </span>thì không được tự chọn điểm đến (hoặc phải yêu cầu riêng) nhưng lại thích hợp với những người đi theo nhóm đông, không muốn mất thời gian tự tra cứu, tự mua vé, chọn phương tiện đi lại hoặc đặt phòng khách sạn vì công ty lữ hành từ a-z.</p>\r\n<p>Còn một cách khác kết hợp ưu điểm cả 2 cách trên, cũng là xu hướng du lịch mới. Đó là chọn<span> </span><a href=\"https://www.kynghidongduong.vn/tours/combo-du-lich-sapa-sa-pa-tu-ha-noi-tu-hcm-gia-re-dich-vu-chat-luong.html\" target=\"_blank\" class=\"internal-link\">Combo Du lịch Sapa</a>. Theo cách này, công ty lữ hành sẽ mua vé các điểm tham quan bạn muốn, thuê xe, thuê khách sạn và tư vấn điểm đến. Như vậy hành trình của bạn sẽ tự do hơn rất nhiều.</p>\r\n<p><img alt=\"tour sapa giá rẻ\" src=\"https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/cap-treo-fansipan-sapa-kynghidongduong.vn.jpg\"><br><em>Cáp treo lên Fansipan</em></p>\r\n<h4><span><b>Di chuyển bằng cáp treo</b></span></h4>\r\n<p>Từ thị trấn Sapa, bạn có thể bắt taxi hoặc đi bộ khoảng 3km để đến được ga cáp treo Fansipan (thuộc quần thể Khu du lịch Fansipan Legend). Giá đi taxi sẽ dao động từ 50.000 - 100.000 VNĐ tùy vào từng thời điểm và từng mùa lễ hội. Sẽ có rất nhiều biển, bảng chỉ dẫn dọc trên khắp đường đi nên du khách sẽ không cần lo lắng sẽ đi nhầm đường hoặc bị lạc đâu nhé!</p>\r\n<p>Khi đến ga cáp treo, bạn cần mua vé lên đỉnh Fansipan với giá niêm yết là 700.000 VNĐ/ người lớn và 500.000 VNĐ/ trẻ em, miễn phí đi cáp treo với trẻ em dưới 1m. Du khách hãy lưu ý giữ vé thật cẩn thận bởi đây là giá vé đi 2 chiều và cần sử dụng cho lượt về sau đó. Mỗi cabin của cáp treo sẽ chuyên chở khoảng 30 lượt khách/chuyến trong vòng khoảng 15 phút.</p>\r\n<p>Tuy nhiên, nếu không tận dụng hết khoảng thời gian đó thì khả năng cao là bạn có thể bỏ lỡ vô số những cảnh đẹp vạn người mê của Sapa và dãy núi Hoàng Liên Sơn hùng vĩ đầy thơ mộng. Sau khi đi hết quãng đường trên không đầy thú vị đó, du khách<span> </span><b>tour du lịch Sapa<span> </span></b>cần chinh phục thêm 600 bậc thang trong 30 phút để chạm tay vào ‘nóc nhà của Đông Dương’ và ghi lại những cột mốc, những khoảnh khắc đáng nhớ trong cuộc đời mình.</p>\r\n<p>Lưu ý khi chinh phục đỉnh Fansipan:</p>\r\n<ul>\r\n<li>Hãy chuẩn bị sẵn đồ ăn nhẹ và nước uống bởi dịch vụ trên núi khá đắt đỏ.</li>\r\n<li>Tối giản hóa hành trang nhất có thể, mang quá nhiều đồ đạc cồng kềnh có thể khiến chuyến đi của bạn thêm mệt mỏi mà thôi.</li>\r\n<li>Hãy mặc đủ ấm nhé và khí hậu ở trên núi khá thấp, càng lên cao nhiệt độ càng hạ xuống và có nơi chỉ khoảng 8 độ C.</li>\r\n</ul>\r\n<div> </div>\r\n<h4><span><b>Di chuyển bằng đường bộ</b></span></h4>\r\n<p><img alt=\"tour du lịch sapa\" src=\"https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/sapa-kynghidongduong.vn%20(Nguon%20Vagrants%20Of%20The%20World).jpg\"><br><em>Trekking Sapa (Nguồn: Vagrants Of The World)</em></p>\r\n<p>Mặc dù chinh phục đỉnh Fansipan bằng cáp treo đang ngày một phổ biến, nhưng nhiều người vẫn muốn thử một lần leo núi khám phá sự hiểm trở của đỉnh núi cao nhất Việt Nam. Tuy nhiên, hoạt động này chỉ nên dành cho những ai có sức bền, sức khỏe dẻo dai và có kỹ năng leo núi tốt.</p>\r\n<p>Hành trình chinh phục Fansipan thường kéo dài từ 3 đến 6 ngày tùy vào thể trạng của từng cá nhân. Tuy sẽ có nhiều gian lao hiểm trở, nhưng bạn sẽ được cận cảnh chiêm ngưỡng cảnh đẹp ven đường và tận hưởng cảm giác thăng hoa tột đỉnh khi chạm tay được đến đỉnh Fansipan.</p>\r\n<p>Vậy nếu chỉ có ít thời gian mà vẫn muốn đến Fansipan thì bạn có thể đặt <strong>Combo Du lịch Sapa</strong> hoặc 3 ngày 2 đêm để lên đính núi này theo đường cáp treo, dành thời gian tham quan thêm nhiều điểm khác.</p>\r\n<p> </p>\r\n<h3 id=\"span_style_color_b22222_b_3_nhung_diem_den_khong_the_bo_qua_b_span\"><span><b>3. Những điểm đến không thể bỏ qua</b></span></h3>\r\n<h4><span><b>Cổng trời Sapa</b></span></h4>\r\n<p><img alt=\"tour du lịch sapa\" src=\"https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/fansipan-sapa-kynghidongduong.vn%20(14).jpg\"><br><em>Cổng trời Sapa ở Fansipan</em></p>\r\n<p>Đứng ở cổng trời Sapa, bạn mới có thể cảm nhận hết được cái vẻ hùng vĩ, vời vợi giữa mây trời của đỉnh núi Fansipan. Bước qua cổng trời giống như bước qua một thế giới khác - thế giới thần tiên nơi con người và thiên nhiên hòa chung là một. Tại đây, bạn có thể nhìn thấy phía dưới là vực sâu thăm thẳm đầy hiểm nguy, nhưng lại tràn đầy sức sống với những cánh rừng nguyên sinh xanh ngát được lấp đầy bởi sự huyền bí.</p>\r\n<p>Phía xa xa, cả một thung lũng rộng lớn hiện ra dưới nền trời bát ngát một màu xanh thẳm, khiến lòng người thêm phần rạo rực, xuyến xao. Con đường Phong Thổ -<span> </span><a href=\"https://www.kynghidongduong.vn/tours/tour-du-lich-sapa-tu-ha-noi-3-ngay-2-dem-2-ngay-1-dem-tour-sapa-ban-cat-cat-fansipan-thac-bac-ham-rong-tour-sapa-gia-re.html\" target=\"_blank\"><span>Sapa</span></a><span> </span>ngoằn ngoèo, khúc khuỷu như một dải lụa mềm mại uốn lượn theo những sườn đồi thoai thoải.   </p>\r\n<p> </p>\r\n<h4><span><b>Sun World Fansipan Legend (Thành phố trên mây)</b></span></h4>\r\n<p><img alt=\"tour sapa giá rẻ\" src=\"https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/fansipan-sapa-kynghidongduong.vn%20(26).jpg\"><br><em>Ga tàu hỏa lên Fansipan</em></p>\r\n<p>Lại là một thắng cảnh ‘địa đàng’ mà du khách không nên bỏ lỡ trong chuyến<span> </span><b>du lịch Sapa</b><span> </span>- Fansipan sắp tới. Fansipan Legend là một cái tên mới nổi, mang trong mình nét mới lạ đã thu hút được nhiều sự chú ý của đại bộ phận giới trẻ.</p>\r\n<p>‘Thành phố trên mây’ tựu hợp những công trình kiến trúc đẹp xuất sắc, những thắng cảnh thơ mộng giữa núi rừng Tây Bắc và hệ thống cáp treo hiện đại nhất. Hãy dành đôi chút thời gian để khám phá những địa điểm nổi bật nhất Fansipan Legend như chùa Kim Sơn Bảo Thắng, Bích Vân Thiền Tự, Bảo An Thiền Tự, Vườn tre,... các bạn nhé!</p>\r\n<p> </p>\r\n<h4><span><b>Đỉnh Fansipan</b></span></h4>\r\n<p><img alt=\"tour sapa từ Hà Nội\" src=\"https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/fansipan-sapa-kynghidongduong.vn%20(10)%20(Nguon%20Andrey%20Sulitskiy).jpg\"><br><em>Cột mốc trên đỉnh Fansipan (Nguồn: Andrey Sulitskiy)</em></p>\r\n<p>Không thể bỏ quên cảm giác chiến thắng khi chạm tay vào đỉnh Fansipan cao đến hơn 3.000m. Đứng ở vị thế ‘cao nhất’ Việt Nam, bạn có thể trông thấy cả nhân gian ngay trước mắt. Có thể đây sẽ là một trong những khoảnh khắc tuyệt vời nhất cuộc đời mỗi người, đừng quên ghi lại những thước phim tuyệt vời này nhé!</p>\r\n<p> </p>\r\n<h4><span><b>Quần thể chùa trên đỉnh Fansipan</b></span></h4>\r\n<p>Ngay gần ga Fansipan chính là chùa Hạ (Thanh Phong Thiền Tự) - một ngôi chùa nổi tiếng Sapa. Đây là ngôi chùa linh thiêng được nhiều người đến thăm để viết sớ cầu bình an, tài lộc cho bản thân và gia đình. Từ chùa Hạ cho đến chùa Thượng, trong hành trình dài 600 bước bậc thang chinh phục đỉnh Fansipan, bạn sẽ bắt gặp một loạt quần thể những ngôi chùa được xây dựng khang trang, uy nghiêm. Vang vọng đâu đó là tiếng chuông thiền đưa người ta vào cõi Phật đầy an yên.</p>\r\n<p><img alt=\"tour du lịch sapa\" src=\"https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/fansipan-sapa-kynghidongduong.vn%20(16).jpg\"><br><em>Quần thể chùa trên đỉnh Fansipan</em><br> </p>\r\n<p>Đặc biệt, bức tượng A Di Đà được đúc bằng đồng cao nhất Việt Nam sẽ khiến khách đi<span> </span><b>tour du lịch Sapa</b><span> </span>phải choáng ngợp. Bức tượng được coi như biểu tượng của văn hóa tâm linh Fansipan. Cùng với đó, du khách cũng có dịp khám phá những công trình phật giáo điêu khắc đầy điêu luyện, tinh tế như tượng Quan Thế Âm Bồ Tát, Bích Vân Thiền Tự, Tháp Chuông,...</p>\r\n<p> </p>\r\n<h4><span><b>Vân Sơn Trà Quán</b></span></h4>\r\n<p>Trên đường chinh phục đỉnh Fansipan, nếu mệt mỏi quá bạn có thể nghỉ chân tại Vân Sơn Trà Quán. Đây là một quán nước với phong cách trà đạo giống như các vị cao nhân, tiền bối ngày xưa. Còn gì tuyệt vời hơn khi được thưởng thức một tách trà ấm nóng giữa khung cảnh núi rừng thanh bình và ngắm nhìn những bông hoa đỗ quyên đang hé nở, rung rinh trong gió chứ?</p>\r\n<p><img alt=\"du lịch sapa\" src=\"https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/van-son-tra-quan-fansipan-sapa-kynghidongduong.vn.jpg\"><br><em>Vân Sơn Trà Quán</em></p>\r\n<p>Trên đây là thông tin nên chọn đi Sapa như nào, đến Fansipan như nào, ở đây có gì đáng tham quan. Mỗi chuyến đi trong đời người sẽ đều viết lên những câu chuyện rất riêng. Và hi vọng, với những thông tin mà chúng tôi đã cung cấp phía trên, chuyến đi chinh phục đỉnh Fansipan - du lịch Sapa sẽ là những trang ký sự đẹp nhất trong cuộc đời của bạn nhé!</p>', NULL, NULL, 3, '2020-08-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `adult_number` int(11) NOT NULL,
  `children_number` int(11) NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `tour_id`, `status`, `start_date`, `end_date`, `adult_number`, `children_number`, `total_price`, `note`, `hotel_status`, `created_at`) VALUES
(1, 1, 5, 2, '2020-08-27', '2020-08-30', 2, 0, '8,000,000', 'Tôi muốn ở khách sạn tốt', 1, '2020-08-18 04:29:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `customer_id`, `blog_id`, `status`, `content`, `parent_id`, `created_at`) VALUES
(1, 1, 3, 1, 'Bài viết tuyệt vời', NULL, '2020-08-18 09:09:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `content`, `created_at`) VALUES
(1, 'Nguyễn Tuấn Sơn', 'tson@gmail.com', 'Tôi muốn biết thêm thông tin về nhiều tour du lịch khác nhau', '2020-08-18 01:59:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `l_name`, `f_name`, `email`, `email_verified_at`, `password`, `image`, `birthday`, `phone`, `address`, `created_at`) VALUES
(1, 'Nguyễn', 'Tuấn Sơn', 'tieuthantai3112@gmail.com', NULL, '$2y$10$9gnhSTS49Ih3MS5qGaxLZOk2qoD.j.TwiKydSXtyEG/nVUCY9gmle', NULL, '1997-12-31', '0974079806', '458 Minh Khai', '2020-08-17 02:10:09'),
(2, 'Nguyễn', 'Tiến Đạt', 'tiendat@gmail.com', NULL, '$2y$10$89FDq3G3j9gdW9phP0a4UOKqQppDeZxasZcJ6HIHbz9QE15mWa4Su', NULL, '1999-05-21', '0956648823', 'Âu Cơ, Hà Nội', '2020-08-17 02:20:35'),
(3, 'Trần', 'Đức Nam', 'dnam@gmail.com', NULL, '$2y$10$saKsJDHuNRKiJy.TzRTmbeC4UZM2BsGGuCJCnxZjsXejMNJTqUZn6', NULL, '1991-06-19', '0865547896', 'Quận 1, Thành Phố Hồ Chí Minh', '2020-08-17 19:17:24'),
(4, 'Lê', 'Thu Hiền', 'thien@gmail.com', NULL, '$2y$10$xKeDaiu1H.NVZ.WnywmrB.3dLOXKzZInOX6xVF5c3A61DsrP1JyW6', NULL, '1995-09-20', '0856648234', 'Thanh Niên, Hà Nội', '2020-08-17 19:18:10'),
(5, 'Nguyễn', 'Đăng Giang', 'dgiang@gmail.com', NULL, '$2y$10$KFUDaDsSF/wPfLTmCJkjbeQwBxyidSILD1RbiV7K3nmdLWHNLTw1O', NULL, '1999-08-05', '0956647896', 'Hoàng Quốc Việt, Hà Nội', '2020-08-17 19:19:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `meta_keywords` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descriptions` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `slug`, `image`, `status`, `meta_keywords`, `meta_descriptions`, `created_at`) VALUES
(1, 'Phú Quốc', 'phu-quoc', 'phuquoc.jpg', 1, NULL, NULL, '2020-08-17 16:41:56'),
(2, 'Hạ Long', 'ha-long', 'halong.jpg', 1, NULL, NULL, '2020-08-17 16:45:56'),
(3, 'Sapa', 'sapa', 'sapa.jpg', 1, NULL, NULL, '2020-08-17 16:46:08'),
(4, 'Hà Nội', 'ha-noi', 'hanoi.jpg', 1, NULL, NULL, '2020-08-17 16:46:22'),
(5, 'Thành Phố Hồ Chí Minh', 'thanh-pho-ho-chi-minh', 'hochiminh.jpg', 1, NULL, NULL, '2020-08-17 16:46:37'),
(6, 'Quy Nhơn', 'quy-nhon', 'quynhon.jpg', 1, NULL, NULL, '2020-08-17 16:46:53'),
(7, 'Đà Nẵng', 'da-nang', 'danang.jpg', 1, NULL, NULL, '2020-08-17 16:47:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `faq_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `content` text NOT NULL,
  `meta_keywords` varchar(100) DEFAULT NULL,
  `meta_descriptions` varchar(160) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `faqs`
--

INSERT INTO `faqs` (`id`, `faq_category_id`, `name`, `status`, `content`, `meta_keywords`, `meta_descriptions`, `created_at`) VALUES
(1, 1, 'Tôi có cần phải trả thêm bất kỳ khoản phí phát sinh nào khác không?', 1, '<span>Chúng tôi đảm bảo rằng sau khi thanh toán tổng giá tour thành công, bạn sẽ không phải trả bất kỳ một khoản phí nào khác.</span>', NULL, NULL, '2020-08-17 04:05:41'),
(2, 1, 'Tôi có cần phải in hóa đơn để đưa cho hướng dẫn viên không?', 1, 'Bạn không cần phải in ra hóa đơn để đưa cho hướng dẫn viên. Tuy nhiên để phòng trừ một số lỗi không đáng có, bạn cũng nên chuẩn bị trước 1 bản sao hóa đơn của bạn để khi cần chúng tôi có thể kiểm tra.', NULL, NULL, '2020-08-17 04:14:20'),
(3, 2, 'Tôi nên mặc gì?', 1, 'Tùy vào địa điểm mà bạn chọn, bạn nên chọn những bộ đồ để phù hợp với những điểm đến đó. Ngoài ra, việc chọn đồ dựa theo dự báo thời tiết cũng là một lưu ý không thể bỏ qua.', NULL, NULL, '2020-08-17 04:15:34'),
(4, 2, 'Tôi cần mang theo những gì?', 1, 'Bạn nên chuẩn bị giấy tờ tùy thân của bản thân, hành lý phù hợp cho chuyến đi của mình, và những vật dụng cá nhân khác mà bản thân bạn cần mang theo như là thuốc hay bất kì dụng cụ hỗ trợ nào cho bạn.', NULL, NULL, '2020-08-17 04:16:35'),
(5, 3, 'Tôi có thể tự tách khỏi tour và đi những nơi mình thích không?', 1, 'Ngoài những khoảng thời gian tham quan tự do trong lịch trình tour ra, thì chúng tôi không khuyên bạn tự ý tách khỏi tour để tránh những trường hợp thất lạc khỏi đoàn và gây khó khăn trong việc quản lý mọi người của các hướng dẫn viên của chúng tôi.', NULL, NULL, '2020-08-17 04:18:17'),
(6, 4, 'Nếu tôi muốn hủy một tour đã đặt thì có được hoàn trả tiền không?', 1, 'Tùy vào ngày bạn hủy mà chúng tôi sẽ có những chính sách hoàn trả tiền khác nhau. Nếu bạn hủy trong khoảng thời gian 2 tuần trở lên trước ngày khởi hành, bạn sẽ được hoàn tiền 100%. Nếu bạn hủy trong khoảng thời gian từ 1 tới 2 tuần trước ngày khởi hành, bạn sẽ được hoàn trả 50% số tiền. Nếu bạn hủy trong khoảng thời gian dưới 1 tuần, chúng tôi sẽ không hoàn trả lại bất kỳ khoản phí nào khác.', NULL, NULL, '2020-08-17 04:20:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `name`, `image`, `status`, `created_at`) VALUES
(1, 'Thanh Toán', NULL, 1, '2020-08-17 03:19:48'),
(2, 'Chuẩn Bị', NULL, 1, '2020-08-17 03:20:41'),
(3, 'Lịch Trình', NULL, 1, '2020-08-17 03:20:50'),
(4, 'Chính Sách Hoàn Trả Tiền', NULL, 1, '2020-08-17 03:21:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `destination_id`, `image`, `status`, `created_at`) VALUES
(1, 'Cảnh Đêm Đà Nẵng', 7, 'da-nang/da_nang_1.jpg', 1, '2020-08-17 17:33:16'),
(2, 'Chùa Linh Ứng', 7, 'da-nang/da_nang_2.jpg', 1, '2020-08-17 17:33:30'),
(3, 'Lăng chủ tịch Hồ Chí Minh', 4, 'ha-noi/ha_noi_2.jpg', 1, '2020-08-17 17:33:49'),
(4, 'Hồ Tây', 4, 'ha-noi/ha_noi_3.jpg', 1, '2020-08-17 17:33:59'),
(5, 'Đường Phan Đình Phùng', 4, 'ha-noi/ha_noi_4.jpg', 1, '2020-08-17 17:34:13'),
(6, 'Thành Phố Hội An', 7, 'hoi-an.jpg', 1, '2020-08-17 17:34:28'),
(7, 'Thành Phố Hồ Chí Minh', 5, 'hochiminh.jpg', 1, '2020-08-17 17:34:43'),
(8, 'Vịnh Hạ Long', 2, 'ha-long/ha_long_1.jpg', 1, '2020-08-17 17:34:55'),
(9, 'Phố Cổ Hội An', 7, 'da-nang/da_nang_7.jpg', 1, '2020-08-17 17:35:18'),
(10, 'Biển Phú Quốc', 1, 'phuquoc.jpg', 1, '2020-08-17 17:35:34'),
(11, 'Đảo Hòn Thơm', 1, 'hon_thom.jpg', 1, '2020-08-17 17:35:54'),
(12, 'Biển Quy Nhơn', 6, 'quynhon.jpg', 1, '2020-08-17 17:36:08'),
(13, 'Bà Nà Hill', 7, 'da-nang/da_nang_4.jpg', 1, '2020-08-17 17:36:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_receives`
--

CREATE TABLE `info_receives` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info_receives`
--

INSERT INTO `info_receives` (`id`, `email`, `created_at`) VALUES
(1, 'tieuthantai3112@gmail.com', '2020-08-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_13_012914_create_customers_table', 1),
(4, '2020_07_13_013510_create_destinations_table', 1),
(5, '2020_07_13_013546_create_packages_table', 1),
(6, '2020_07_13_013605_create_tours_table', 1),
(7, '2020_07_13_013634_create_tour_depart_dates_table', 1),
(8, '2020_07_13_013659_create_package_details_table', 1),
(9, '2020_07_13_013729_create_tags_table', 1),
(10, '2020_07_13_013730_create_blogs_table', 1),
(11, '2020_07_13_013747_create_tag_details_table', 1),
(12, '2020_07_13_013823_create_bookings_table', 1),
(13, '2020_07_13_014340_create_comments_table', 1),
(14, '2020_07_13_014455_create_faqs_table', 1),
(15, '2020_07_13_014521_create_tour_guides_table', 1),
(16, '2020_07_13_014556_create_galleries_table', 1),
(17, '2020_07_13_015117_create_ratings_table', 1),
(18, '2020_07_13_015143_add_data', 1),
(19, '2020_07_15_074423_create_roles_table', 1),
(20, '2020_07_15_074513_create_user_roles_table', 1),
(21, '2020_07_13_014400_create_faq_categories_table', 2),
(22, '2020_08_18_013625_create_contacts_table', 3),
(23, '2020_08_18_020658_create_info_receives_table', 4),
(24, '2020_08_18_064420_create_settings_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `packages`
--

INSERT INTO `packages` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'Bảo Hiểm Du Lich', 1, '2020-08-17 16:47:46'),
(2, 'Thuê Xe Máy', 1, '2020-08-17 16:47:53'),
(3, 'Xe Đưa Đón', 1, '2020-08-17 16:48:00'),
(4, 'Hướng Dẫn Viên', 1, '2020-08-17 16:48:07'),
(5, 'Khách Sạn', 1, '2020-08-17 16:48:22'),
(6, 'Vé Tham Quan Thắng Cảnh', 1, '2020-08-17 16:48:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `package_details`
--

CREATE TABLE `package_details` (
  `tour_id` int(10) UNSIGNED NOT NULL,
  `package_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `package_details`
--

INSERT INTO `package_details` (`tour_id`, `package_id`) VALUES
(2, 1),
(2, 4),
(2, 3),
(3, 5),
(3, 6),
(3, 3),
(4, 4),
(4, 5),
(4, 2),
(4, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 3),
(8, 4),
(8, 5),
(8, 2),
(8, 3),
(7, 4),
(7, 6),
(7, 3),
(1, 4),
(1, 6),
(1, 3),
(9, 1),
(9, 4),
(9, 5),
(9, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `rating`, `customer_id`, `tour_id`, `comment`, `status`, `created_at`) VALUES
(1, 5, 1, 4, 'Tour rất hay', 1, '2020-08-17 19:19:23'),
(2, 3, 1, 5, 'Tour bình thường', 1, '2020-08-17 19:19:39'),
(3, 5, 1, 8, 'Tour tuyệt vời', 1, '2020-08-17 19:19:55'),
(4, 3, 2, 4, 'Tour không hay lắm', 1, '2020-08-17 19:20:51'),
(5, 4, 2, 3, 'Trải nghiệm ổn', 1, '2020-08-17 19:21:03'),
(6, 5, 2, 5, 'Tour tuyệt vời', 1, '2020-08-17 19:21:16'),
(7, 5, 2, 1, 'Rất ổn, sẽ quay lại', 1, '2020-08-17 19:21:36'),
(8, 3, 2, 2, 'Tôi muốn trải nghiệm tốt hơn', 1, '2020-08-17 19:21:53'),
(9, 5, 3, 4, 'Tour hay lắm', 1, '2020-08-17 19:22:48'),
(10, 2, 3, 7, 'Chuyến đi hơi buồn', 1, '2020-08-17 19:23:02'),
(11, 3, 3, 3, 'Không đặc sắc lắm', 1, '2020-08-17 19:23:16'),
(12, 5, 3, 8, 'Cho tôi đi lại đi', 1, '2020-08-17 19:23:29'),
(13, 3, 3, 1, 'Hơi phí thời gian', 1, '2020-08-17 19:23:41'),
(14, 4, 3, 2, 'Tạm ổn', 1, '2020-08-17 19:23:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`) VALUES
(1, 'Admin', '[\"admin.error\",\"admin.dashboard\",\"admin.file\",\"admin.destination.index\",\"admin.destination.create\",\"admin.destination.store\",\"admin.destination.show\",\"admin.destination.edit\",\"admin.destination.update\",\"admin.destination.destroy\",\"admin.destination.status\",\"admin.package.index\",\"admin.package.create\",\"admin.package.store\",\"admin.package.show\",\"admin.package.edit\",\"admin.package.update\",\"admin.package.destroy\",\"admin.package.status\",\"admin.tour.index\",\"admin.tour.create\",\"admin.tour.store\",\"admin.tour.show\",\"admin.tour.edit\",\"admin.tour.update\",\"admin.tour.destroy\",\"admin.tour.status\",\"admin.booking\",\"admin.booking.destroy\",\"admin.booking.status\",\"admin.role.index\",\"admin.role.create\",\"admin.role.store\",\"admin.role.show\",\"admin.role.edit\",\"admin.role.update\",\"admin.role.destroy\",\"admin.user.index\",\"admin.user.create\",\"admin.user.store\",\"admin.user.show\",\"admin.user.edit\",\"admin.user.update\",\"admin.user.destroy\",\"admin.gallery.index\",\"admin.gallery.create\",\"admin.gallery.store\",\"admin.gallery.show\",\"admin.gallery.edit\",\"admin.gallery.update\",\"admin.gallery.destroy\",\"admin.gallery.status\",\"admin.blog.index\",\"admin.blog.create\",\"admin.blog.store\",\"admin.blog.show\",\"admin.blog.edit\",\"admin.blog.update\",\"admin.blog.destroy\",\"admin.blog.status\",\"admin.tag.index\",\"admin.tag.create\",\"admin.tag.store\",\"admin.tag.show\",\"admin.tag.edit\",\"admin.tag.update\",\"admin.tag.destroy\",\"admin.tag.status\",\"admin.add_account\",\"admin.rating.index\",\"admin.rating.destroy\",\"admin.rating.status\",\"admin.comment.index\",\"admin.comment.destroy\",\"admin.comment.status\",\"admin.faq_category.index\",\"admin.faq_category.create\",\"admin.faq_category.store\",\"admin.faq_category.show\",\"admin.faq_category.edit\",\"admin.faq_category.update\",\"admin.faq_category.destroy\",\"admin.faq_category.status\",\"admin.faq.index\",\"admin.faq.create\",\"admin.faq.store\",\"admin.faq.show\",\"admin.faq.edit\",\"admin.faq.update\",\"admin.faq.destroy\",\"admin.faq.status\",\"admin.tourguide.index\",\"admin.tourguide.create\",\"admin.tourguide.store\",\"admin.tourguide.show\",\"admin.tourguide.edit\",\"admin.tourguide.update\",\"admin.tourguide.destroy\"]', '2020-08-17 02:07:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `status`, `created_at`) VALUES
(1, 'Biển', 'bien', 1, '2020-08-17 17:00:41'),
(2, 'Núi', 'nui', 1, '2020-08-17 17:00:48'),
(3, 'Trải Nghiệm', 'trai-nghiem', 1, '2020-08-17 17:00:55'),
(4, 'Review', 'review', 1, '2020-08-17 17:01:01'),
(5, 'Tham Khảo', 'tham-khao', 1, '2020-08-17 17:01:07'),
(6, 'Tips', 'tips', 1, '2020-08-17 17:09:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag_details`
--

CREATE TABLE `tag_details` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tag_details`
--

INSERT INTO `tag_details` (`blog_id`, `tag_id`) VALUES
(1, 4),
(1, 3),
(2, 2),
(2, 4),
(2, 3),
(3, 5),
(3, 6),
(4, 4),
(4, 5),
(4, 3),
(5, 2),
(5, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_id` int(10) UNSIGNED NOT NULL,
  `summary` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult_price` int(11) NOT NULL,
  `children_price` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descriptions` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`id`, `name`, `slug`, `destination_id`, `summary`, `content`, `image`, `adult_price`, `children_price`, `duration`, `start_date`, `end_date`, `status`, `location`, `meta_keywords`, `meta_descriptions`, `created_at`) VALUES
(1, 'Tour đảo Phú Quốc', 'tour-dao-phu-quoc', 1, 'Tận hưởng vẻ đẹp của biển xanh và cát trắng tại quần đảo An Thới trong 1 ngày', '<p>Yêu thích thiên đường Phú Quốc và mong muốn khám phá các hòn đảo nơi đây? Tour 4 đảo Phú Quốc sẽ là sự lựa chọn tuyệt vời của bạn. Trên chiếc ca-nô tốc độ, bạn sẽ được đưa đến 4 đảo là Hòn Móng Tay, Hòn Dăm Ngang, Hòn Mây Rút Trong, và Hòn Mây Rút Ngoài. Nếu Hòn Móng Tay nhẹ nhàng với màu nước xanh ngọc bích thì Hòn Dăm Ngang gồ ghề với những rặng san hô đẹp chết người. Tiếp theo hãy thử hóa thân thành Robinson để khám phá vẻ hoang sơ của Hòn Mây Rút Trong và Hòn Mây Rút Ngoài. Cuối cùng bạn sẽ đến bè cá và thưởng thức hải sản tại nhà hàng nổi trên biển hơi bị thú vị đó nha!</p>', 'hon_thom.jpg', 1050000, 750000, 1, '2020-09-05', '2020-09-06', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62876.27852762351!2d103.97461381144812!3d9.953300128025063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a7bdfdaee5e1df%3A0x8f4826d84e9af80d!2zSMOybiBUaMahbSwgVHAuIFBow7ogUXXhu5FjLCB04buJbmggS2nDqm4gR2lhbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1594777046780!5m2!1svi!2s', NULL, NULL, '2020-08-17 16:49:56'),
(2, 'Chinh phục đỉnh Fansipan', 'chinh-phuc-dinh-fansipan', 3, 'Chinh phục Fansipan - Nóc nhà Đông Dương', '<p>Đỉnh Fansipan là khao khát chinh phục của những trái tim nồng nhiệt muốn vươn tới đỉnh cao. Với độ cao 3143m, hành trình chinh phục 2 ngày 1 đêm, đỉnh Fansipan còn là nơi để những người trẻ thể hiện sự quyết tâm, sức bền của ý chí và thể lực trước thử thách gian nan. Khoảnh khắc chạm tới đỉnh cao và phá vỡ mọi giới hạn ghi dấu hành trình lên đỉnh cũng là hành trình chiến thắng bản thân. Đăng kí ngay và sẵn sàng trải nghiệm một dấu ấn tuyệt vời thôi nào!</p>', 'phan_xi_pang.jpg', 2650000, 1500000, 2, '2020-09-11', '2020-09-13', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14765.322463905699!2d103.766245227742!3d22.30333271515025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd448786c84543%3A0x98e9595d4892bc5a!2sPhan%20Xi%20P%C4%83ng!5e0!3m2!1svi!2s!4v1594777370427!5m2!1svi!2s', NULL, NULL, '2020-08-17 16:50:58'),
(3, 'Du Lịch Hạ Long', 'du-lich-ha-long', 2, 'Tour du lịch Hà Nội - Hạ Long 2 ngày 1 đêm', '<p>Đến với Hạ Long du khách đừng quên... - Thưởng thức vẻ đẹp của Hạ Long với Hòn Trống Mái, Lục Đỉnh Hương. - Khám phá Động Thiên Cung: hang động rộng và đẹp nổi tiếng của Vịnh Hạ Long, động chia làm nhiều ngăn với vô vàn nhũ đá tạo thành các hình thù kỳ dị và hấp dẫn, nơi có cảnh đẹp được ví như cung điện của nhà trời. - Thưởng thức Nhạc Nước Tuần Châu: Công trình trình diễn nhạc nước được thiết kế trên một lòng hồ rộng lớn có diện tích 2,5ha. Bao quanh là những đồi thông xanh ngắt và bờ biển với những con sóng rì rào vỗ đêm ngày. Công trình biểu diễn nhạc nước Tuần Châu như một con sò lớn chứa đựng bên trong nhiều điều thú vị với khách du lịch Tuần Châu.              </p>', 'halong.jpg', 2100000, 1300000, 2, '2020-09-26', '2020-09-28', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238637.44872022895!2d107.00954146374889!3d20.843408352903833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a5796518cee87%3A0x55c6b0bcc85478db!2zVuG7i25oIEjhuqEgTG9uZw!5e0!3m2!1svi!2s!4v1594777336992!5m2!1svi!2s', NULL, NULL, '2020-08-17 16:51:54'),
(4, 'Tour Đà Nẵng - Hội An', 'tour-da-nang-hoi-an', 7, 'Tour du lịch 4 ngày 3 đêm tại Đà Nẵng - Hội An', '<p>Bạn có biết Hội An được Rough Guides bình chọn là địa danh đẹp nhất Việt Nam? Tạp chí USA Today đã miêu tả Hội An là một trong 10 điểm đến đẹp nhất Đông Nam Á, đem đến cho du khách cảm giác “bình yên và vĩnh cửu”. Hay New York Times của Mỹ đã bình chọn Hội An là một trong 20 điểm đến của thanh xuân? Chưa kể Lonely Planet đã ca ngợi Hội An là thiên đường thức ăn trên thế giới và TripAdvisor đã chọn nơi này là một trong 10 điểm đến ẩm thực Châu Á. Bạn có biết Cù Lao Chàm một trong 15 khu bảo tồn biển của Việt Nam và được UNESCO công nhận là khu dự trữ sinh quyển thế giới? Bạn có biết khu du lịch Bà Nà có hệ thống cáp treo ấn tượng nhất thế giới với khí hậu mát mẻ quanh năm khi được mệnh danh là “Sapa của miền Trung”? Bạn có biết Đà Nẵng chính là “thành phố đáng sống nhất Việt Nam” với “bãi biển quyến rũ nhất thế giới” do Forbes bình chọn? Đi ngay với chúng tôi để đặt chân đến những địa danh đình đám này nhé!</p>', 'hoi-an.jpg', 4950000, 3550000, 4, '2020-10-06', '2020-10-10', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122778.37289261528!2d108.3470323996176!3d15.918280808833847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420dd4e1353a7b%3A0xae336435edfcca3!2zVHAuIEjhu5lpIEFuLCBRdeG6o25nIE5hbSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1597683181044!5m2!1svi!2s', NULL, NULL, '2020-08-17 16:53:27'),
(5, 'Du lịch Hà Nội - Bát Tràng - Ninh Bình', 'du-lich-ha-noi-bat-trang-ninh-binh', 4, 'Trải nghiệm tại Hà Nội - Bát Tràng - Ninh Bình trong 3 ngày, 2 đêm', '<p>- Ngắm cảnh hồ Tây, viếng chùa Trấn Quốc; thăm Văn Miếu Quốc Tử Giám, đi xe điện thăm khu phố cổ “36 phố phường” với những ngành nghề đặc trưng truyền thống của cư dân Thủ đô - Viếng chùa Bái Đính - ngôi chùa của những kỷ lục như: Khu chùa rộng nhất Việt Nam - Tham quan làng gốm Bát Tràng với tuổi đời hơn 500 năm</p>', 'thap-rua.jpg', 4000000, 3000000, 3, '2020-08-27', '2020-08-30', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145941.0715876046!2d105.91237437083632!3d20.957927255858873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1594777205737!5m2!1svi!2s', NULL, NULL, '2020-08-17 16:54:55'),
(6, 'Du lịch Quy Nhơn', 'du-lich-quy-nhon', 6, 'Trải nghiệm Quy Nhơn : Ghềnh Ráng Tiên Sa - Eo Gió-Bay trong 4 ngày.', '<p>Trải nghiệm Eo Gió với nét hoang sơ với những bãi cát trắng uốn cong hình trăng khuyết. Trải nghiệm đi tàu thăm đảo Kỳ Co hoang sơ Khu dã ngoại Trung Lương là địa điểm được ưa thích để tổ chức các hoạt động ngoài trời, dã ngoại vì không khí thanh bình, cảnh sắc hùng vĩ, nên thơ Khu du lịch Hầm Hô - Lâm viên hoang dã và nên thơ</p>', 'quynhon.jpg', 5590000, 4890000, 4, '2020-10-01', '2020-10-05', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247992.8768304223!2d109.0876179584506!3d13.785582417189655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f6c65736eabd9%3A0xd362348e5af3d559!2zVHAuIFF1aSBOaMahbiwgQsOsbmggxJDhu4tuaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1594777177303!5m2!1svi!2s', NULL, NULL, '2020-08-17 16:55:48'),
(7, 'Bà Nà Hill', 'ba-na-hill', 7, 'Tận hưởng một ngày tuyệt vời tại Bà Nà Hill', '<p>            Bà Nà Hills ở đâu, khu du lịch Bà Nà Hills đồng thời cũng là danh thắng nổi tiếng của Đà Nẵng tọa lạc trên đỉnh núi Chúa, thuộc địa phận xã Hòa Ninh, huyện Hà vang, cách trung tâm Đà Nẵng khoảng 25km về phía Tây Nam. Cho đến nay, Sunworld Bà Nà Hills được biết đến là điểm đến du lịch hấp dẫn hàng đầu tại Đà Nẵng, thu hút khách du lịch trong nước và cả quốc tế.</p>\r\n<p>Nằm ở độ cao 1.489m, Bà Nà Hills được ví như thiên đường chốn nhân gian, khung cảnh rừng núi đầy thơ mộng có mây mù phủ kín tạo nên không gian du lịch nghỉ dưỡng đầy sang trọng và cuốn hút. Không chỉ sở hữu tổ hợp vui chơi giải trí hấp dẫn bậc nhất Việt Nam mà còn mang đến trải nghiệm tuyệt vời khi du khách sẽ được ngồi trên cáp treo có độ cao gần 1.400 để ngắm toàn cảnh núi Chúa, bắt trọn khung cảnh thành phố Đà Nẵng hiện đại.</p>', 'ba-na.jpg', 750000, 500000, 1, '2020-08-31', '2020-09-01', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.7496995899633!2d108.03041531451154!3d16.026540088907296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141f60e6b3844c9%3A0x5c53b85f61797909!2sSun%20World%20B%C3%A0%20N%C3%A0%20Hills!5e0!3m2!1svi!2s!4v1594866065106!5m2!1svi!2s', NULL, NULL, '2020-08-17 16:56:50'),
(8, 'Tour Hà Nội – Phú Quốc', 'tour-ha-noi-–-phu-quoc', 1, 'Tận hưởng chuyến du lịch Phú Quốc trọn vẹn.', '<p><strong>NGÀY 1: HÀ NỘI - PHÚ QUỐC</strong><br> 15h30 Quý khách tập trung tại Điểm hẹn nội thành Hà Nội, Xe và Hướng dẫn viên đưa đoàn ra<br> sân bay Nội Bài đáp chuyến bay VN1239 <em>(DKCC 18h00 - 20h15)</em> đi Phú Quốc. Tới sân bay Phú Quốc, xe đón đoàn đưa về khách sạn nhận phòng, nghỉ ngơi. Đoàn ăn tối tại nhà hàng &amp; tự do khám phá Đảo Ngọc về đêm. Nghỉ đêm tại Phú Quốc.</p>\r\n<p><strong>NGÀY 2: THIỀN VIỆN TRÚC LÂM HỘ QUỐC - BÃI SAO</strong><br> Quý khách ăn sáng tại khách sạn. Xe đưa Quý khách đi tham quan Nam Đảo:</p>\r\n<ul>\r\n<li><strong>Thiên Viện Trúc Lâm Hộ Quốc</strong>: ngôi chùa đẹp và lớn nhất đảo ngọc với khung cảnh hoang sơ, yên tĩnh đã tạo nên một bức tranh thiên nhiên đặc sắc đầy vẻ tôn nghiêm và thanh tịnh.</li>\r\n<li><strong>Nhà Tù Phú Quốc</strong>: nơi đây là minh chứng hùng hồn cho công cuộc đấu tranh đầy gian khổ và tinh thần bất khuất của nhân dân ta trong các cuộc đấu tranh chống giặc ngoại xâm.</li>\r\n<li><strong>Bãi Sao</strong>: (đây được bình chọn là một trong những bãi biễn đẹp nhất Việt Nam), tại đây quý khách không những được tắm biển mà có thể tham gia những trò chơi cảm giác mạnh trên biển (Jetky, Ca nô dù kéo, Môtô nước…) <strong>(Chi phí tự túc)</strong><br> Đoàn dùng cơm trưa tại nhà hàng.Buổi chiều. Trên đường về khách sạn nghỉ ngơi, Quý khách ghé tham quan:</li>\r\n<li><strong>Cơ sở nuôi cấy ngọc trai:</strong>chiêm ngưỡng và tự do mua sắm trang sức bằng ngọc trai chính hiệu được nuôi cấy tại Phú Quốc.</li>\r\n<li><strong>Mua sắm đặc sản Phú Quốc nổi tiếng</strong>: nước mắm, rượu sim, vườn tiêu<strong>…(chi phí tự túc).</strong></li>\r\n</ul>\r\n<p>Đoàn dùng bữa tối tại nhà hàng &amp; Nghỉ đêm tại Phú Quốc.</p>\r\n<p><strong>NGÀY 3: KHÁM PHÁ KDL VINPEARLLAND &amp; VINPEARL SAFARI</strong><br> - Quý khách tự do khám phá <strong>Khu vui chơi giải trí Viinwonders</strong> (<strong><u>chi phí tự túc</u></strong>): nơi đây tập hợp các trò chơi trong nhà, ngoài trời như: <strong>đĩa bay, cốc xoay, đĩa quay siêu tốc, cối xay gió, rạp chiếu phim 5D, </strong>Khu công viên nước <strong>với các trò chơi hấp dẫn như: boomerang khổng lồ, đường trượt siêu lòng chảo, dòng sông lười, bể tạo sóng… </strong>Khu Thủy Cung với hàng trăm loài cá và sinh vật biển kỳ thú ….<br> - Ngoài ra, Quý khách có thể tham quan Vinpearl Safari Phú Quốc - Vƣờn Thú Hoang Dã<br> <strong>đầu tiên tại Việt Nam</strong> (<strong><u>chi phí tự túc</u></strong>) : Với quy mô 180 ha và hơn <strong>130 loài động vật quý</strong><br> <strong>hiếm</strong>, du khách tham gia các chương trình biểu diễn, chụp ảnh với động vật</p>\r\n<p><strong>NGÀY 4: PHÚ QUỐC - HÀ NỘI</strong><br> Quý khách ăn sáng và tự do tắm biển, mua sắm. Sau đó, Quý khách quay trở lại khách sạn trả phòng và ăn trưa. Chiều xe và  HDV đón đoàn đưa đoàn đưa đi thăm:</p>\r\n<ul>\r\n<li><strong>Dinh Cậu</strong><em>-</em> biểu tượng văn hoá và tín ngưỡng của đảo Phú Quốc, là nơi cầu may mắn, cầu<br> an lành và là nơi ngư dân địa phương gởi gắm niềm tin cho một chuyến ra khơi đánh bắt đầy<br> ắp cá.</li>\r\n<li><strong>Suối Tranh</strong><em>-</em> dòng suối mát lạnh từ trong khe núi len lỏi chảy qua rừng cây, khe đá để cùng hoà vào dòng chính tạo nên dòng Suối Tranh hiền hoà.</li>\r\n</ul>\r\n<p><strong>Quý khách tự túc ăn tối<em>.</em></strong> Xe đưa đoàn ra sân bay Phú Quốc, đáp chuyến về Hà Nội. Đoàn về đến sân bay Nội Bài, Xe + HDV đón đoàn về lại điểm hẹn ban đầu. Kết thúc chương trình tham quan.</p>', 'phuquoc2.jpg', 6190000, 4500000, 4, '2020-09-08', '2020-09-12', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502580.089208639!2d103.6772224208548!3d10.22872566409145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a78c62b49eda17%3A0x8aa79fbbdd72cdb!2zUGjDuiBRdeG7kWM!5e0!3m2!1svi!2s!4v1597219800232!5m2!1svi!2s', NULL, NULL, '2020-08-17 17:00:13'),
(9, 'Du lịch Hồ Chí Minh - Miền Tây', 'du-lich-ho-chi-minh-mien-tay', 5, 'Trải nghiệm Tour Hồ Chí Minh - Miền Tây với những phong tục đặc biệt', '<p><strong>NGÀY 01: TP. HỒ CHÍ MINH – CẦN THƠ </strong><br>07h00 Hướng dẫn viên và xe của Lữ hành Saigontourist sẽ đón khách tại điểm hẹn trong Tp.HCM&amp; đưa đoàn đến nhà hàng của Khách sạn Continental – khách sạn cổ nhất tại Tp.HCM để thưởng thức bữa điểm tâm sáng ngay tại trung tâm Tp.HCM.<br>Sau bữa sáng, Hướng dẫn viên sẽ hướng dẫn khách tham quan<span> </span><strong>Dinh Thống Nhất, Bảo tàng Tp.HCM.</strong><br>Dừng chân tại<span> </span><strong>Nhà thờ Đức Bà và Bưu điện Thành phố</strong><span> </span>(ngắm nhìn và chụp ảnh lưu niệm từ bên ngoài).<br>10h00 Khởi hành đi Cần Thơ bằng bằng đường cao tốc Sài Gòn - Trung Lương. Đoàn dùng cơm trưa tại Nhà hàng<span> </span><strong>Mekong Reststop</strong><span> </span>và trải nghiệm dịch vụ chụp ảnh gia đình tại Phim trường Mekong trong khuôn viên của nhà hàng. Tiếp tục đi Cần Thơ. Nhận phòng và nghỉ đêm tại khách sạn<span> </span><strong>Azerai Cần Thơ</strong><span> </span>(5 sao).<br>Thưởng thức bữa tối tại nhà hàng của khách sạn trong khung cảnh êm đềm của miền quê sông nước.</p>\r\n<p><strong>NGÀY 02 : CẦN THƠ - CHÂU ĐỐC</strong><br>Buổi sáng, đi thuyền tham quan<span> </span><strong>chợ nổi Cái Răng</strong><span> </span>- một chợ nổi lớn của vùng Đồng Bằng sông Cửu Long. Viếng<span> </span><strong>Thiền viện Trúc Lâm Phương Nam<span> </span></strong>- thiền viện lớn nhất miền Tây. Khởi hành đi Châu Đốc. Buổi chiều Quý khách viếng<span> </span><strong>Miếu Bà Chúa Xứ</strong><span> </span>rất linh thiêng vốn thu hút sự quan tâm tín nhiệm của giới doanh nhân thành đạt khắp cả nước, tham quan<span> </span><strong>Tây An cổ tự, Lăng Thoại Ngọc Hầu</strong><span> </span>- danh nhân có công khai mở đất An Giang.<br>Xe và Hướng dẫn viên đưa khách đến<strong><span> </span>khách sạn Victoria Núi Sam Châu Đốc</strong><span> </span>(5 sao) để nhận phòng và nghỉ ngơi. Ăn tối tại nhà hàng của khách sạ</p>\r\n<p><strong>NGÀY 03: CHÂU ĐỐC - TP. HỒ CHÍ  MINH</strong><br>Quý khách ăn sáng tại khách sạn. Tự do nghỉ dưỡng tại khách sạn đến giờ trả phòng. Sau khi ăn trưa, xe đưa quý khách về điểm đón.<br>Kết thúc chương trình.</p>', 'hochiminh2.jpg', 3300000, 2700000, 3, '2020-09-11', '2020-09-14', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.46046245884!2d106.41502616546924!3d10.754666391981678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zSOG7kyBDaMOtIE1pbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1597691633463!5m2!1svi!2s', NULL, NULL, '2020-08-17 19:15:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_guides`
--

CREATE TABLE `tour_guides` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_guides`
--

INSERT INTO `tour_guides` (`id`, `name`, `image`, `age`, `content`, `facebook_link`, `twitter_link`, `created_at`) VALUES
(1, 'Nguyễn Thành Nam', 'tourguide1.png', 35, '10 năm kinh nghiệm', 'https://www.facebook.com/groups/2230486443661009', 'https://twitter.com/realdonaldtrump', '2020-08-17 09:00:52'),
(2, 'Trần Phương Thảo', 'tourguide5.jpg', 28, '6 năm kinh nghiệm', 'https://www.facebook.com/groups/2230486443661009', 'https://twitter.com/realdonaldtrump', '2020-08-17 09:01:45'),
(3, 'Lê Quỳnh Trang', 'tourguide6.jpg', 30, '8 năm kinh nghiệm', 'https://www.facebook.com/groups/2230486443661009', 'https://twitter.com/realdonaldtrump', '2020-08-17 09:02:28'),
(4, 'Nguyễn Trọng Đức', 'tourguide2.png', 40, '15 năm kinh nghiệm', 'https://www.facebook.com/groups/2230486443661009', 'https://twitter.com/realdonaldtrump', '2020-08-17 09:02:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `avatar_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `status`, `avatar_image`, `remember_token`, `created_at`) VALUES
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$NK3mTZd4bbM6Gd2HI3PJIetSUEjQcK/.boWTzQc.8M54pano/jMKe', '0956648823', 0, NULL, NULL, '2020-08-17 01:58:04'),
(4, 'Taiyo Nguyen', 'taiyo@gmail.com', NULL, '$2y$10$RfIFZiBrGuBuCgbzdH2qLuh4356IU97ix/rQm.nCIYl.XQLmnzspO', '0856641278', 0, NULL, NULL, '2020-08-17 13:36:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(3, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_destination_id_foreign` (`destination_id`);

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_tour_id_foreign` (`tour_id`),
  ADD KEY `bookings_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`),
  ADD KEY `comments_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `destinations_name_unique` (`name`),
  ADD UNIQUE KEY `destinations_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_category_id` (`faq_category_id`);

--
-- Chỉ mục cho bảng `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faq_categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_destination_id_foreign` (`destination_id`);

--
-- Chỉ mục cho bảng `info_receives`
--
ALTER TABLE `info_receives`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `info_receives_email_unique` (`email`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `package_details`
--
ALTER TABLE `package_details`
  ADD KEY `package_details_tour_id_foreign` (`tour_id`),
  ADD KEY `package_details_package_id_foreign` (`package_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_customer_id_foreign` (`customer_id`),
  ADD KEY `ratings_tour_id_foreign` (`tour_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tag_details`
--
ALTER TABLE `tag_details`
  ADD KEY `tag_details_blog_id_foreign` (`blog_id`),
  ADD KEY `tag_details_tag_id_foreign` (`tag_id`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tours_slug_unique` (`slug`),
  ADD KEY `tours_destination_id_foreign` (`destination_id`);

--
-- Chỉ mục cho bảng `tour_guides`
--
ALTER TABLE `tour_guides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `info_receives`
--
ALTER TABLE `info_receives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tour_guides`
--
ALTER TABLE `tour_guides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);

--
-- Các ràng buộc cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_ibfk_1` FOREIGN KEY (`faq_category_id`) REFERENCES `faq_categories` (`id`);

--
-- Các ràng buộc cho bảng `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);

--
-- Các ràng buộc cho bảng `package_details`
--
ALTER TABLE `package_details`
  ADD CONSTRAINT `package_details_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_details_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tag_details`
--
ALTER TABLE `tag_details`
  ADD CONSTRAINT `tag_details_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tag_details_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
