# Môi Trường Hoàng Long — WordPress theme

Theme tĩnh (không cần Node trên hosting), giao diện mirror site Next.js trong repo.

## Yêu cầu

- WordPress 6.x, PHP 8.0+
- Cài theme: copy thư mục `wordpress-theme` vào `wp-content/themes/mtrl` (hoặc tên bạn chọn), kích hoạt trong **Giao diện**.

## Build CSS (trên máy dev)

Sau khi chỉnh class Tailwind trong file `.php`, chạy từ **root repo Next** (nơi có `package.json`):

```bash
npm run build:wp-theme
```

File đầu vào: `wordpress-theme/assets/css/input.css`  
File đầu ra: `wordpress-theme/assets/css/main.css` (đã enqueue trong `inc/enqueue.php`).

## Cấu trúc trang (Pages)

Tạo các **Trang** (Pages) với slug khớp permalink:

| Slug | Mẫu |
|------|-----|
| (Trang chủ) | **Cài đặt → Đọc** → chọn trang tĩnh làm trang chủ, hoặc để mặc định dùng `front-page.php` |
| `gioi-thieu` | `page-gioi-thieu.php` |
| `lien-he` | `page-lien-he.php` |
| `dich-vu` | `page-dich-vu.php` (trang cha) |

**Trang con dịch vụ** (con của `dich-vu`, slug khớp JSON):

- `hut-be-phot`
- `thong-tac-cong`
- `nao-vet-ho-ga`
- `ve-sinh-moi-truong`
- `cho-thue-xe`
- `xu-ly-chat-thai`

Gán **Trang cha** = trang có slug `dich-vu`. Nội dung editor có thể để trống; layout lấy từ `template-parts/pages/service-single.php` qua `page.php`.

## Menu

**Giao diện → Menu** — gán menu vị trí **Primary** (và tùy chọn **Footer**). Nếu chưa gán, theme dùng fallback: Trang chủ, Giới thiệu, Dịch vụ, Liên hệ.

## Logo

**Giao diện → Tùy chỉnh → Nhận diện thương hiệu → Logo**. Nếu không có logo tùy chỉnh, theme dùng `assets/images/logo.png` (và `logo.svg` nếu bạn đổi trong `header.php`/`footer.php`).

## Ảnh

Ảnh mặc định nằm trong `assets/images/` (hero, dịch vụ, giới thiệu, chứng nhận…). Thay file tại đây để đổi nội dung mà không cần sửa PHP.

## JavaScript

`assets/js/main.js`: menu mobile (drawer).

## Form liên hệ & email

Form trang **Liên hệ** gửi POST, theme xử lý trong `inc/contact-form.php` và gọi `wp_mail()`.

- **Email nhận**: mặc định tạm thời là **uynn0603@gmail.com** (trong `inc/contact-form.php`). Đổi bằng filter `mtrl_contact_mail_to` hoặc sửa hằng trong file đó khi production.

```php
add_filter( 'mtrl_contact_mail_to', function () {
	return 'yourcompany@gmail.com';
} );
```

- **Gửi mail trên XAMPP / máy local**: PHP **không** gửi được nếu chưa cấu hình SMTP — đó là lý do hay gặp thông báo “Chưa gửi được yêu cầu”. Có hai hướng:

### Cách 1 — Theme (khuyến nghị cho dev): hằng số trong `wp-config.php`

Thêm **trước** dòng `/* That's all, stop editing! */` (dùng [Mật khẩu ứng dụng Google](https://myaccount.google.com/apppasswords), không dùng mật khẩu đăng nhập Gmail thường):

```php
define( 'MTRL_SMTP_HOST', 'smtp.gmail.com' );
define( 'MTRL_SMTP_PORT', 587 );
define( 'MTRL_SMTP_SECURE', 'tls' );
define( 'MTRL_SMTP_USER', 'uynn0603@gmail.com' );
define( 'MTRL_SMTP_PASS', 'xxxx-xxxx-xxxx-xxxx' ); // mật khẩu ứng dụng 16 ký tự

// Tuỳ chọn (thường trùng USER):
define( 'MTRL_MAIL_FROM', 'uynn0603@gmail.com' );
define( 'MTRL_MAIL_FROM_NAME', 'Hoàng Long Môi Trường' );
```

Bật log lỗi khi thử (xem `php_error.log` của XAMPP):

```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
```

Theme nạp `inc/mail-smtp.php` — khi đủ `MTRL_SMTP_HOST` + `MTRL_SMTP_USER` + `MTRL_SMTP_PASS`, mọi `wp_mail()` (kể cả form liên hệ) sẽ đi qua Gmail SMTP.

### Cách 2 — Plugin trên hosting

Cài **WP Mail SMTP** (Gmail + mật khẩu ứng dụng) hoặc SMTP do hosting cấp; không bắt buộc dùng hằng số trên.

- Trong email có header **Reply-To** trỏ tới email khách (nếu khách điền email hợp lệ), để anh chị bấm “Trả lời” trong Gmail là trả lời thẳng cho khách.

- Giới hạn gửi lại theo IP (khoảng 45 giây) để hạn chế spam.

## Dữ liệu dịch vụ chi tiết

`assets/data/services.json` — nội dung chi tiết từng dịch vụ (benefits, pricing, FAQ…). Có thể chỉnh trực tiếp hoặc sau này chuyển sang Custom Post Type.
