<style>
red { color: red }
</style>

# **SQL Injection Lab**
- ## Người thực hiện: Đoàn Thái Minh Khang
- ## Thời gian: 10/7/2022
- ## Mục lục:
    - ### Khái niệm SQL Injection
    - ### Thực hành

#### **1. SQL Injection là gì?**


a. 
- Là lỗ hổng Web cho phép Attacker can thiệp vào các câu truy vấn mà Web App truyền đến Database.
- Thông thường lỗ hổng cho phép Attacker view data và trong nhiều trường hợp có thể chỉnh sửa hoặc xóa data.
- Trong một vài tình huống Attacker lợi dụng SQLi làm bàn đạp để tấn công vào server hoặc các cơ sở Back-end hoặc DoS.
- Ví dụ:
    - URL chứa tham số để liệt kê các đơn hàng "Gift":

        > insecure-website.com/products?category=<red>Gifts</red> 
    
    - Câu truy vấn đến Database sẽ như sau:
        ```sql
        SELECT * FROM products WHERE category = 'Gifts' AND released = 1
        ```



