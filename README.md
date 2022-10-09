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
        > insecure-website.com/products?category=**Gifts**
        
    - Câu truy vấn đến Database sẽ như sau:
        ```sql
        SELECT * FROM products WHERE category = 'Gifts' AND released = 1
        ```
    - Attacker cố tình truyền tham số độc hại '-- vào URL:
        > insecure-website.com/products?category=**Gifts' OR 1=1--**
    - Database sẽ hiểu câu truy vấn vừa được gửi đến như sau:
        ```sql
        SELECT * FROM products WHERE category = 'Gifts' OR 1=1--' AND released = 1
        ```


        

