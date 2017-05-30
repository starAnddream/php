
### WAMP配置httpd.conf允许外部访问
###### 在电脑上开启Apache服务后，如何让外部网络访问呢？
##### 一：httpd.conf文件更改
* 路径：D:\wamp1\bin\apache\apache2.4.9\conf\httpd.conf（根据安装目录自行修改）
* 第一个地方
```html
<Directory />  
    AllowOverride none  
    Require all denied  
</Directory> 
```
修改为
```html
<Directory "D:/wamp1/bin/apache/apache2.4.9/cgi-bin">
    AllowOverride None
    Options None
    Require all granted
</Directory>
```
* 第二个地方
```html
#   onlineoffline tag - don't remove  
    Require local  
```
修改为
```html
#   onlineoffline tag - don't remove  
    Require local  
    Require all granted  
```
##### 二、建立WiFi热点，让希望访问本机服务的设备连接
##### 三、关闭本机防火墙
##### 四、通过ipconfig查看本机的ipv4地址
