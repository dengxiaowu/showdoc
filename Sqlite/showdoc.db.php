SQLite format 3   @    �    7      [                                                � -�r   �    ����                                                                                                                                                                                                                                                       i	}W indexsqlite_autoindex_sqlitebrowser_rename_column_new_table_1sqlitebrowser_rename_column_new_table       P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�\�tableuseruserCREATE TABLE `user` (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直   2   	0   ,   (                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 � ������d                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              )Wsqlitebrowser_rename_column_new_table� page_historyuser%page_history %page_history �	page �catalog	itemuser   � ����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          j !    MM!sfd454dvfdb3ec2ef78a331ba99b289ef3fe5062364dd0b92a8165633e826677852560101b1471249214W:�7W:�>   �#    M tdhtd5e65td92420151b927360e78fb39e50ec35d000W:�(   �!    MM!ertgtd4fv4218b86c99b78bb909A !    M dengxiaowua89da13684490eb9ec9e613f91d24d000Zـ�[�T�:     M showdoca89da13684490eb9ec9e613f91d24d000W���� � ������    �Q��  7�                             k �                             ]�                             [�    l�    4�    7�    �     c                       �/                          
                                                                                      	�            x/    	�            /                          	�  ^ �'d073ccf76ff855c35d6cf2f720dd3e82e2d6be93f274a45740567ac5901a01e1[�W�192.168.1.102[���  ��%a056a40e60413044e8ac3b4b1ab4341b94fd735c91a142783e2aa2b9b276c0c6[Z�h192.168.1.98Z�Jh  ��'ce6092b246df1741ea161a5b4032c8ef2d18399ae91195f85a1258c8740eec8d[Z��192.168.1.110Z��  T�%8f29e77df995e846ec49537033bb65277549dcd3483cd59305b629d21669e8e7[P3192.168.1.98Zٌ   ��'cbbf0831844bde359f550f4c7457177b0d43fdd946ec6716afba3438bc07adac[P2&192.168.1.100Zً&   ��ace5d6c0322b2d08dd98732a58bb0abddca46df7ec^ �'565f42d679814096034a005859704e5ab5f1510195bc63b358077b2c6602d3d2\2��192.168.1.110[�T�      �??           Q��  � �     (�*                    ��xsqli��*                    V �renam��*    �A?    �A?    6 Lrowse�A?           Q��  h ��   0�*    �A?    �A?    �W in                        tebrowser_rename_column_n   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )'.; indexsqlite_autoindex_page_1page�>/%%�?tablepa�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )    � �A? �                                                                                                                             �v(�OtableitemitemCREATE TABLE "item" (
	`item_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_name`	TEXT,
	`item_description`	TEXT,
	`uid`	INTEGER,
	`username`	TEXT,
	`password`	TEXT,
	`addtime`	INTEGER,
	`last_update_time`	INTEGER DEFAULT 0
, item_domain text NOT NULL DEFAULT '', item_type INT( 1 ) NOT NULL DEFAULT '1', is_archived INT( 1 ) NOT NULL DEFAULT '0')5!I# indexsqlite_autoindex_item_member_1item_member� ##�Etableitem_memberitem_member
CREATE TABLE "item_member" (
	`item_member_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_id`	INTEGER,
	`uid`	INTEGER,
	`username`	TEXT,
	`addtime`	INTEGER DEFAULT 0
, member_group_id INT( 1 ) NOT NULL DEFAULT '1')P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直接下载`	INTEGER
)   & &O��J                     � +�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cook'); indexsqlite_autoindex_item_1item�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)� +�tablecatalogcatalogCREATE TABLE "catalog" (
	`cat_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`cat_name`	TEXT,
	`item_id`	INTEGER,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, parent_cat_id INT( 10 ) NOT NULL DEFAULT '0', level INT( 10 ) NOT NULL DEFAULT '2')-,A indexsqlite_autoindex_catalog_1catalog    �  �5^�                                                                                                                                                                                                                           �G-�qtablepagepageCREATE TABLE "page" (
	`page_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, page_comments text NOT NULL DEFAULT '')'.; indexsqlite_autoindex_page_1page�f/%%�tablepage_historypage_historyCREATE TABLE "page_history" (
	`page_history_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`page_id`	INTEGER,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER,
	`addtime`	INTEGER
, page_comments text NOT NULL DEFAULT '')70K% indexsqlite_autoindex_page_history_1page_history                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
         
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       l�   x�������������������������~ytoje`[VQLGB=83.)$�������������������������zupkfa\WRLF@:4.("
���������jz5L9h2Y9kIe5iJuw/Nued85zvnfifpAYlE8HG1sf/Ar9Ua9U9/TjYTCQiAAL3Dk8aT9/52zV/b82rvAEgkGoff/KPK7K3JFkqAOZjn3MxIUvJyWhwbF5PjI2IynZYotglVsSNpmE+j+0RDnBh0kjAOcwDCNpe/8d07qcV0Idv1azPSzRu3Z2BUzKtV/PWzfvxX2wDAMKv+0nuzFez++P2rGqaAXC4HwXLICOGlYsn  :�  B�  t�  @�  r�  C�  D�  E�  H�  I�  =�  L�  A�  W�
  ;�	  �  +�  %�  �  )�  ,�  2�     #~  !}  |  {  pz  y  x  w  	u   �p   �o  �m  �g  �f  �e  �d  �c  �b  �a  �_  �]  �\  �Z  �Y  �X  �V  �T  �S  �R  yQ  �O  �M  zK  �I  sH  {E  �D  }C   ~B  xA   }@  n?   �=  B<  C;  ^9  Q8  87  76  ,4  $2   1  .  -  ,  +   B*   <)   G'   ]&   N#   O"   Q!   �    �   �   �   �   �   y   �   �   i   h   g   �   \   �
   �   J   �   �   �   �      7 7�                    �=.    @�*                                         �=.    ��*                                         �=.    p�*                                        �=.                                                   �=.    8C?    I                                   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )      0�=    ��=    0X\                  Y       �*�     �*�                    Q       0        �=    ��=    0�=                                            �      Q       �)�     �)�     �=    ��=    ��=                                    1       X       ��=                                  1       �&�     �n5    Y       �                      ��=    X�=    0�=     �=                            1                     ��=                   Y       0                     H�=     �=            ��=                            Y       �      �              ��=    ��=    �=    ��=                            1       �E      ��=                          Y       �E      �              (�=    ��=    �=    ��=                            !       F      :       X�=    �      !       x�=    x�=    H�3                    1       ��=    ��=    H�3                    ��=    @�=    0X\                  Y       �*�     �*�                    Q       0       ��=       � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            :	 !!!!ertgtd4fv4ertgtd4fv4ertgtd4fv4ertgtd4fv4W:�)W<6	 !!!!sfd454dvfdsfd454dvfdsfd454dvfdsfd454dvfdW:�D   �!!!!ertgtd4fv4ertgtd4fv4ertgtd4fv4ertgtd4fv4W:�)0	 %%	 示例文档示例文档shQ 9E!	英菲创新7 %%!	英菲创新英菲创新dengxiaowuZف \J{(    q k7f� qE   7                             i#}W indexsqlite_autoindex_sqlitebrowser_rename_column_�w7�Atableitem_topitem_topCREATE TABLE `item_top` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `uid` int(11) NOT NULL DEFAULT '0' ,
        `addtime` int(11) NOT NULL DEFAULT '0' 
        )�I3�itableoptionsoptionsCREATE TABLE `options` (
        `option_id`  INTEGER PRIMARY KEY ,
        `option_name` CHAR(200) NOT NULL UNIQUE ,
        `option_value` CHAR(200) NOT NULL 
        )-4A indexsqlite_autoindex_options_1options�b5!!�tableitem_tokenitem_tokenCREATE TABLE `item_token` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `api_key` CHAR(200) NOT NULL UNIQUE ,
        `api_token` CHAR(200) NOT NULL ,
        `addtime` int(11) NOT NULL DEFAULT '0' ,
        `last_check_time` int(11) NOT NULL DEFAULT '0' 
        )36G! indexsqlite_autoindex_item_token_1item_token   n�   M�����t��=������������������~yoje`[VQ3LGB8.)$�����������������������zupkfa\W��RMHC>82,& ����������请求方式：**
- POST 

**参数：** 

|参数名|必选|类垄' !	%�dengxiaowu公共说明##统一说明：
1.测试服域名：https://wxtest.firstwisdom.cn 或 http://183.56.160.133
2.正式服域名：http  U�  m�  l�  h�  F�  u�  S�  <�  T�  R�
  Q�	  O�  ?�  >�  .�  &�  $�  "�  �  �   ~  |  {   z  y   �t   �s  �q  �p   �o   �m  �j  �i  �h  �g  �f  �e  �d  *b  va  >X  o^  w  �v  ?Y  �c  <U  ;T  [S  YQ  WO  VM  UL  TK  SJ  PH  OG  NE  MD  GC  6B  5@  0?  1>  /<  .;  +:  (8  "7   C1  6   �   @5  4   D2   A0   9/   8-   6,   ++   ;)   �(   �	   �&   �$   W"   �!   �    �   �   j   �   {   �   �   s   �   c   w   �   '   &   �   �   I   �   �   �         �   (������������������~xrlf`ZTNHB<60*$ ���������������������|vpjd^XRLF@:4.("
��������������������ztnhb\V��PJD>82,$   � � � � � � � � � �~~}}||{{zzyyvvuuttssrrqqppoonnmmllkkjjiihhggffeeccbbaa``^^]]\\xxwwYYXXddVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&%%$$##""!!  		  'DD
                                                                              	�            p:!    	�            H=!                          	�            �8!                                                                    	�            >!    	�            �=!                         	�            89!                                               w =                                                          XL    h8!                                        XL    >!                                        XL    �=!                                       XL    �2!                                        XL    89!                                        XL    �9!                                                                                                                                                                                                                                                                        
   � ����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
		t  ���}W: ����eH.����g�J0 � �                                                                                                                                                                     %	资管系统c\;�� 	2.5版本c[��� 	2.4版本c[��� 	2.3版本c[�5� %	推送消息c[�z� +	2.1版本接口c[�DX +	2.0版本接口c[s��* C	黑名单（股票）管理c[b�� %	用户接口c[b�m +	CMS接口文档c[b�8 +	API接口文档Zف� 	1.4版本c[B�B %	活动相关c[B�$ 	1.3版本c["� %	消息中心cZ��n %	系统接口cZ��b %	用户接口cZ��V$
 7	订单和支付接口cZ��K"	 3	订阅/提醒接口cZ��> 	1.2版本cZ�V %	新闻资讯cZ�4� %	微信模块cZ���� 	+	 	首页Zقn %	数据字典Zف�� 	2.2版本c[�)� +	全局错误码Zف�    	1.3c["�
� ` ��������������������~xrlf`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    

		      �   0�������������������~xrlf`ZTNHB<60*$ ���������������������|vpjd^XRLF@:4.("
����������������������ztnhb\VPJD>82,& se~~}}||{{zzyyxxwwvvuuttssrrqqppoonnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&%%$$##""!!  

		  /AA   � �  	                  	�� 	          �K�    	�            XN�     �                   	��           �L�     �                                         w                                                                                                                                                                                                                                                                                                                                             �      �§��  �§��  	�    	�                                                                                            ��zX                                       �      ؾ���  ؾ���                                                  ���                  8
�             ts3_tok             ��    q      �נ    ؾ���          �l�    �l�    ��                    �l�    �l�            `�    `T 	WU6c372fbef9b72e0a86fac00d171fa3b225799c52e3ef343c8ded273bb516a247264c63218ZنK
   � �                                                                                                                      Q     ؾ���  �ќ                            B                     *                                              "                       %       Y               x�             ��    x�      
       ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 (W	6c372fbef9b72e0a86fac00d171fa3b225799       �                                                                                    �    ���    ؠ�              � �      �3��3�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      00000                    �/                            �/                            `��G                                          �                     ��������                �              �      ��     ��      
          !                                                                                       b  b                                                                                        � !	%�mdengxiaowu默认页面eNq9Vd9P01AUfr9/xU1IfFhoyzYgZqTxReMLoFF4IGK2S3vpblxvu947W0ZJcIk/F5kPggYNgQiEmCgSRaMS98/Ydjz5L9h2Y9kIe5iJuw/Nued85zvnfifpAYlE8HG1sf/Ar9Ua9U9/TjYTCQiAAL3Dk8aT9/52zV/b82rvAEgkGoff/KPK7K3JFkqAOZjn3MxIUvJyWhwbF5PjI2IynZYotglVsSNpmE+j+0RDnBh0kjAOcwDCNpe/8d07qcV0Idv1azPSzRu3Z2BUzKtV/PWzfvxX2wDAMKv+0nuzFez++P2rGqaAXC4HwXLICOGlYsngE4wjXmJNOwNHhjtChC4aZ4EWuKQomLXQnVAVcXQGvRP7o7PctjpI1W7KZCdZN5QiHXeDG5WdYO/Ae/QwfGvvPKIYtDsv0pyFotsOx4yLi8Ri3CZMNXRRoZJZWigQRdIJJcg0BaIjDTMpfD0mAkcLgmZSRTSp1rtiySpcXFA3RRsTh1CxWBQVQw8dkmkZi6SAs9jhV5ASjVnOG+FLkW5OZLMLpCxPlWfL01fnUtPlOWfKluV5HgeZguc5xXIyNTpkYyWPeNbCKrGwwnu3xpdMfKHibezKcF8DS/UzsODDRrC+d7r6NJzc4AamFBztHwdmO+eLDUmIosISI6xtZBm3EMfa0gBlT/cju79f8erHg5Zdo/9ZdrMQqj5AzUf7+jd9rXrP6sHbqre7OTjNi+ye2qfmkhlzRF+BW5iq/SiaOq9obN0FK9Fm6dg4zWXUOPziv16L96Pb9HgvnrvB0U9vq+o2gy5wM0J0IGwZbuva84QpUWPQJZRHV5iU82MwJYd74XTnOIpHfXi7j/3PB63d3KwV7kYYZ2a6UwAAfwEI0qERcZكn   R R �                                                                                                                                                                                                                                                   �R !	%�adengxiaowu公共说明##统一说明：
1.测试服域名：https:/� !	+�kdengxiaowu导航栏接口
**简要描述：** 

- 导航栏接口

**请求URL：** 
- ` http://183.56.160.133/newindex/getNavigationList `
  
**请求方式：**
- GET/POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|platform |是  |string |设备来源 ios， android ， miniapp  (都是小写) |
|appVersion |否  |string | app 版本    |

 **返回示例**

``` 
小程序返回内容：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;name&quot;: &quot;股票内参&quot;,
            &quot;icon&q   �   ~ ~                                                                                                                                                                                                                                                           �p !	=�dengxiaowu首页banner列表接口
    
**简要描述：** 

- 首页banner列表接口

**请求URL：� !	%�;dengxiaowu公共说明##统一说明：
1.测试服域名：https://wxtest.firstwisdom.cn 或 http://183.56.160.133
2.正式服域名：https://wx.firstwisdom.cn
3.cms域名：http://admintest.firstwisdom.cn

###全部接口的公共参数：
公共参数（无则传空字符串）
 &quot;appVersion&quot; 1.0===APP版本
 &quot;systemVersion&quot; 10.===APP系统版本
 &quot;platform&quot; ‘ios’ ===设备来源
 &quot;deviceName&quot; ===‘设备名字’
 &quot;utm&quot; ===‘发布渠道’
 &quot;appNetwork&quot;=== ‘网络环境 -1没有网络 0未知 1wifi 2流量’
 &quot;deviceId&quot; ===设备IDc[k��   �ot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1526572800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1526832000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.34&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1526918400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.34&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1527004800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;cha   ot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1526227200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1526313600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1526400000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1526486400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&qu   5622400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1525708800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1525795200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1525881600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1525968000,
                &quot;signal&quot;: &qu    Pyno9x6QwNgGAcwFjIoFsfTszhxgGIZ/CWFJuf0tSw6XMEL2yj2miFUI53BO9GbA71lngN4wDCEfrXd6QyGoKDCRq+oqDAoqrw80shJzquiJLJ+v9MnwMFQ/7AsCcDDmGVQLRzfR7mYKUfU+vuu3wAaIOBSNhSL4pXfJWr0FS3Oayg/UQxPa/pOFm3OakZ6F68uaIzW7iBP6SPNEX11AM1RniYITuYFoOHVNHlToSJKPkDnzKg4ao0BNLOF0pOFvc+AQgSJU8b8UOA7WcgCc9KWQQrF8x8piQHkY/PLaGNTTx4Uvs+SL2Xw87f6cgpPZegKMx6PBzCPmBLhzMOADC+okIUBlY7bgetsTUiUvHIlUAYHOE5Qy+haKE+qrECpejXGjpKgUi9U2kuylbww2njcdqqck7+kij7pYgvLC16Xy93Kn+faanNXc0gid19iR4T6LGhpBa0lfoajx5D+lTAiD4kPLJSmtrbm867Wc03NrfYk2S9IIl9Pkm8NOQKugO9K9/1QX09HqLVnsFOCcu81V0vXMalJe9sq+TqCXS1K923B5e71cl09/OWrAzfuDXjHQrK9UoAI/SFjD63vjZOQvoDIC38DtCZua7LHKUKQVfjfue/cNePjzHipgxkc/0S7uvb0MCOnrX3a2v9Xa1d7qgqBIrRuBo58QPGEVbFK4WQJChK0V63CzF60KEdTKPMZTy2imRf0ci5kMyics8tVFfIrImcp0e12n8xRBVKlZZXQxGP6E6PkWz2ZQ3MTP8LLJ8uwpfWzqswbu/tGeoUcC4Xsamkcfalvp/DOVmEvjNcOik+fkRm0NIe/pVAkQZKhvammwt47nJg6ykWoSl2+caZ+VDl7qrcs9QnUFVidg61lcJQdA/EMFa9w3EMo5T4BGqso7JjpAOqPPbQdRzM7lZsfJZ+S6bLJwhu7KLlOyywurxnpdCH7Wt+KEC+kJ2aLb+LFl1/19Se1IerTGGIZ3r8y8guFwzzJdX1YDnbKHFmhXzStp8U=cZ��   #p://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)   $     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    ��：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


W:��                                                      C8Tw4XdFYCI2Fav96XtPmPQnYdrua4yBQViwrIHwcp6EEAopKyL//xayhaOKvWDMixCIEXaB6d8FH9whhSISRpNgsNAEfLB7URAUMQiMIM0cx2hSPkSzKIwDcWEwIq0j1ocxjJk3GVEFROCYkJC1RBlCZiej8leQtEIZVs2g2GiDiXKenMC5M87XJXRlyCWgDHPbcyUjbvCojDdBHUFUtZNuFjZzBhUQ9lQxkScqUuwhrJdZXPLUA0lXQ51k/9wUK6jbHUGzI8Cmg+Ms3oGx6RudROIyYHSvTirz1A/KGo5WNn2ADCXA4opxvYNsB8U5sq218D15ratbP8T3KyYrWx/GpzLwYmyDYRwU7Jc2QZPMCceiinGBlw4J57TPlRsqBjbvuGMPqfPFJcpxlEDQNeQ9aFiQ8U44AI3g+T0meIyxThUBdZLUNxnissU4yAfoMfBlZ20BHN3GVd2EhZsyRoxZSeV4ZSPM2VHyeHsI67sqD/cCEX6THGZYrxeAowJOX2muEwxXmkC1/GJPlR8qBgv0oGbE0N9prhMMV7eBGeb8z5TPKZYLwyDm+ZzbGVvdANrKG4re+MeGJPtxDv7YXTfbxFHaXP5kUJ3vt5UOp31vM7CtR74KX/K2xZGxrkwGkdHlI4o+kgUa2R3PJJ9A5EkWnFIEol2BJJeH5kkqguzlCoWwxtm7e3t2tWZ4MXT+tKV4Mp84/yl6vpsMPPH1sb1RuVu9dWT+r1rZnTgpr54sXZ+w2pdfYODO2tSKlgod+Yh77Sem4lQov1Yom1OV6LMO0rSEexip1BRJJh2pIvLT+oX16JIF63oKu2DPDtptqXrz8uNp8tRdIamtNmOgSGl2kFTwnLdfBwsvKuvrDde3mq8eBDMXw6Ww/KjrY3F6quZ6Jm8xvI6uoiiqdRWLgf/rraC1gRLz2sri1HTbc7dbZTL1TcP639ON8ovZc1tPp7fXH4hK67zURT3xjCM4O8HjcqN6ttKfW71uCzfsUJ6a2P6P2vGQsQ=c[W   � �                                                                                                                                                                                                                                                                                                                      �5 !	%�%dengxiaowu资讯列表
    
**简要描述：** 

- 资讯�e !	%�dengxiaowu资讯列表
    
**简要描述：** 

- 资讯列表接口

**请求URL：** 
- `https://wxtest.firstwisdom.cn/news/query `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|page |是  |int |页数   |
|page_size |是  |int | 每页条数   20 |


 **返回示例**

``` 
{
    &quot;data&quot;: {
        &quot;total&quot;: 1212,
        &quot;result&quot;: {
            &quot;1524844800&quot;: [
                {
                    &quot;id&quot;: &quot;4084&quot;,
                    &quot;content&quot;: &quot;【迟  �   � �                                                                                                                                                                                                                                                    � !	1�-dengxiaowu最新增加条数
    
**简要描述：** 

- 最新增加条数接口

**请求URL：** 
- ` https://wxtest.firstwisdom.c�h !	1�dengxiaowu最新增加条数
    
**简要描述：** 

- 最新增加条数接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/news/getLastestNum `
  
**请求方式：**
- GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|last_time     |否  |string |例子： 2018-04-01 12:12:12    |

 **返回示例**

``` 
{
    &quot;data&quot;: &quot;2150&quot;,
    &quot;info&quot;: &quot;OK&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�6�   %ph/LXNtZiFz+OH74z+ZYea12QvB7+2ClKLL2s2ZUq1yafP81VL92Zva/WulRvl5sHCjZJSOJuQnRGl+iy4TZinRui0litnTJ7ywBMlc5qRZChbK8rbnF3P5UbMkIeuPVr89Fol6U8Mn0B4ZMzOWnChksmYkNDme8kcKxQmzeb1LNFfwtjaup/KZYiGXkd/MiVw+l5qcjNIapqSvzNWW7tdX1qvvrkl0Y2hoyDTMX41Q4svTUwX/60zKT0XfjrbudzyLirL38Y5I+lQqP9pDYkfKz571t2WivwlGLMf+Iro40iNZujBeKHanw5lUhuHoe1eqc0d6li45mS2ms3k/6aKDF/Qrm1s2PnhBs8OU0uGPLmhyb0kalVsuCu48irQoWFutvb60X7GieyPjqdGkd6pwpjsT1DuFlxvNp8Z3NRPuLS81p93wmBHKbCEQ2k+ymPWnivlksSPBARoAWYxC139HCd9T88Htmerbe8HcWn3pt9714hf81Hgys50F6S0zti1D963fseR4zmsX5cQe9r112KtxsCOQ6+xunI9t/g82bkvVLIT2qf992uDAMCHLgWHQp8jCMWNEFxZiY0cXFkqENjpmY9vWhYUhJHRh4WE3dmCWT7JP5sJ2tNExt/nj14JFIOzqMr4IjJgu44ugjq2NjtkMa6NjjHJtDGWXEKGLkrkUa2Mou4xrY5C5jqONQeZym2ujY4JSXQZLNzRh9GAhSJqXRBcW4uhikBFEw+FFExabClsXFkZ0MZQJ4mGzaMIiONJGx1zm6KJjWP74dRlfMCauLuMLpkJoo2M2Z9roGHOwNjrWnFPShIVTXXxkIh0YXXwxQkJvXxcW7OiyaEEIYbosWhBCqTY+MmGuNr4YccTH+GL4k2ThXJdFCyINfqoPi9DG5qfNtSRNWGyH6NKP7btV8TNd5CNUIG2Mfircwzf6MQFhkT7yYQ/8CdkwNgiMw7g21qUj6OHP9BMBw+Liw7cuKQVh4Qgd/kw/68nSdefkezbt/1+btGNVw    tate=do_login/#/module_product?type=xnjg&amp;from=app&quot;,
            &quot;ztds&quot;: &quot;https://wx.firstwisdom.cn/?code=1&amp;state=do_login/#/module_product?type=ztds&amp;from=app&quot;,
            &quot;t0&quot;: &quot;https://wx.firstwisdom.cn/#/module_product?type=t0&amp;from=app&quot;,
            &quot;dk&quot;: &quot;https://wx.firstwisdom.cn/#/module_product?type=dk&amp;from=app&quot;,
            &quot;user_agreement&quot;: &quot;https://wx.firstwisdom.cn/#/agreement?0=u&amp;1=s&amp;2=e&amp;3=r&amp;from=app&quot;,
            &quot;buy_agreement&quot;: &quot;https://wx.firstwisdom.cn/#/agreement?from=app&quot;
        },
        &quot;check_status&quot;: &quot;2&quot;
    },
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
| check_status | string | 1 提交审核, 2审核通过

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


c[[}    iqARpeUDCTSJyCQ+EQsQQodA/0730ib/g7G7pzZJsQpyXmZ3vO98538zmjH3w060UqhcVZ2l/eAxnH2LpqpznABtcJOIcTrt7ebtYdCtHV+W1SARwXBS4hVOruFybXXAuDquVLTtfsgu7VnGbYwi3dGofz7x4/qSeHgVJMEapRgbi8ewEhYTGUkgnNIuIjJWYpMZFTYunIX2A1RRKgyTnEwdl7OU/VrnoV2KFnj0dHgEmePxoxCOyijP2t4YoM/i0FhdMqzJbm54zneNza3PedEsn9krB5MyBKBteW/4q+IwCM1rfZhlaRqQprCvAtFdKbIdQHalpYLqHl9bOZ/v7rn22CBAmV+WvQFRlHSMZeGsFqYg1AcDd2ocLBrWOitan1XteSbb9EuoEYRWY1uJeS1HgIZy5L/bGgS+K4wDrurJkrW86O2fVy3nWMpdMJgH33r+MnncGpoOySMVgNQCC/WZM8g9QGA/4rrOCuS+WiCWCZW8HTNSQMIYJbQc0r6zjuroXMTSmDApIpVAfFzPttfq7YzQxJ9CcBq+TXzXiLeIyiKV14pvxLEQTqK6pEX7dyZSFo+MIZgVDz5B/T6+Zl5t8kw55DPEhCcuQ7+sRFW2QUNY8L2Mhg9NIjd+JK1g2MlDQdDZLdMjrkp9QWXEvO6VjhWe3f3NXk1Qm/02HXzycDpoIq6I7FcOHI5Lf3o6I4cMRGQTqgpjWIVSgSsOTNiBDCd7wufr44BTv89Cf+3k9pIZRI3c7Ce0UDYYpfzXV22IXSE3hdgZiSBIkpFVdPcD+HaPx1yW4Kc98Wkwp8NfATTsdt6vVRutOy7z22mNvGsz8PCLPZH/t198Ye/3E2lkLuGtLq26pVD3fdn7k2cPgbMzX9pZrW7+dtY+toeCZYrX+Aou0ifY=cZ���                                                                                                             � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �/+ !	I�udengxiaowu多空模式下的个股价格
    
**简要描述：** 

- 多空模式下的个股价格接口

**请求URL：** 
- ` http://dev.wxtest.firstwisdom.cn/Stocks/getDKStock `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   F�c* !	=�idengxiaowu股票关联板块列表
    
**简要描述：** 

- 股票关联板块列表接口

**请求URL：** 
- ` http://dev.wxtest.firstwisdom.cn/theme/getStockTheme `
  
**请求方式：**
- POST 

**参数：*   -             {
                &quot;date&quot;: 1523980800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1524153600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1524672000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1525363200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 152    * 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;theme_id&quot;: &quot;434&quot;,
            &quot;theme_name&quot;: &quot;石墨烯&quot;,
            &quot;top_symbol&quot;: &quot;002484&quot;,
            &quot;top_name&quot;: &quot;江海股份&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-0.15%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;top_change&quot;: {
                &quot;text&quot;: &quot;+2.16%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            }
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[X�   ,ate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1523462400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1523548800,
                &quot;signal&quot;: &quot;-1&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1523808000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1523894400,
                &quot;signal&quot;: &quot;1&quot;,
                &quot;return_rate&quot;: &quot;-0.17&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
      .&quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1522771200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1523203200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1523289600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1523376000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_r    kQB4ISZtIoAhSiTOQhGIUlkDoJRyIJMHAShUAAgbxCEwh92ExT+aisLJ2TEQRAKXiJzEIwC+MMKgsJHIQCFjCsQCpEnM1OMQvYbBUHho1BkljgIQqGKEnGQAAUH+80WxhUM140sOF4lAwuEAigK8RCEQpBbWbvpSgcRJfJVAUYRLP4TFD4KGbSyotedrxBVJYs3CAXvr20SFAEKTmrls4JudBCeF8lnBRgFAGRJD6MQVbJ4g1FIClm8wShkmXxWgD+25llAUGAUCpmlYxTBtyYEhY9CkHjyBkEoRKGVtZuunI8BhSXT9Cb7dW53EsKwIU7uRBaCLLZ/vAn4TkQhiTKZkGEUCmj/v+lA6EgUKvcfOEhHopBZtf2zECARFJ3dKtC2qfaiEMSORCGA9v+bLt7WG+TSlXu9Dfd0h9MxIxJLWWGVvfkeZ9+Am29xHgmO625xrjGzyUZntPHeOdi2P8w23ug8ktBGw+aYPnn9LePjYbzZPzWifwqT+WNyWL/aSFhekcTmpNATUlrySi2XfvnDOzuDRSuenDbPIW3EI012qjerSV4IqddpirW1yUW1qMhd3yMx0Xi5BdzUUjgYV7k2WmpG9HSLUBkQEsGdW7CVqp9CZ7gkSLe6weLyTEQiMdOstqrc/jRrwiwLs9RDP4pEVXQJFDUDxci4GkejbgANBsfPYJhK5IxGB1RBfk5nNMPwL9D26Qv7yYKzv+uuPXYeL3tTs8XjrLPw23n+qVd4VTzacV/P06hDdlcf2VP5EE59yTkvD6CUs5KrzgNewfdpxpeo3IZFK00XUOZVllT1OBdGoQgmle5mbsd9dIC6GxwVpNLRX+iUpd29nLe7jqIwBNJ0pSOCUpVgH75dz7aclTN349g7fO7tv3WW55x13372PL9aPFpA92Cag2mUQFFA7I05559tHGzFWduzN1ZR1ZWWXnm5XPHknfv7tJc7hORKW8ul9X0IrvoWitdCUZTz11uvsFg8LbhL2wPQvrt65Dw//RFGV/2Ac[�W   /quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1522252800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1522339200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1522598400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1522684800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;:    10,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1521734400,
                &quot;signal&quot;: &quot;-1&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1521993600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1522080000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1522166400,
                &quot;signal&quot;: &quot;1&   2   {
                &quot;date&quot;: 1521129600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1521388800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1521475200,
                &quot;signal&quot;: &quot;1&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1521561600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 152164800   3uot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1520784000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1520870400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1520956800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1521043200,
                &quot;signal&quot;: &quot;-1&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            4;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1520265600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1520352000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1520438400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1520524800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&q    M  M                                                                   �0, !	=�dengxiaowu检查购买服务接口
    
**简要描述：** 

- 检查购买服务接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/v1.2.0/order/serviceIsBuy `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|service_id |是  |string |service_id : 1=一智金股，2=涨停大师  |


 **返回示例**

``` 
{
    &quot;data&quot;: {
        &quot;isbuy&quot;: 1,
        &quot;now&quot;: 1528082391,
        &quot;start_date&quot;: 1522339200,
        &quot;end_date&quot;: 1530288000
    },
    &quot;info&quot;: &quot;&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|isbuy |int   |0-未购买 1-已购买且未过期  |
|now |int   |当前时间  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[��   �8GxPTS/BWPPCSxr7hyityPff/dVWdBF9vd87Q7eUfQerxryaHeVoBIk+4kSsCWMlt7BbKwkj8W//eb6DTJCfvnFjSIcjI2gXytGI9YjfDQXgbmxQnQqYrzNwCczEXMnhVbmI0Sk14WvotulO+vRRUZc5ddYQr8fUMgIWtnBTyE9qPoHyIiZi8P1JxYWtuUZdPsHlKvoIAnfjcHJcXj08Fp3aFANBLD0aXbSGnk+s5g/njvNTnXrg8qQUnw/OY6WD+D6ibE2ih7n4ONltHJiJNJY5jQ7W5Lqs7ArIDA7AqeTRRDS+h7SNc+dq5Y2nFw2N5Pwl1lzZNPYSlqP10rDwKFBe0k0WgxbcUTYIhxLFh4mYTRLwthOPrOVP4rmj16jySWYWMM3VqyxH9i2EU+aM2/R0kQhugxjh9jvwloczu1hRewKTgNB4uRYQUmk8yczxVf9/f0kURsTbJr4mSgG+5Mfw5r+WUh36+GQdd9Lgu6aT6r/tnb2oSwc9niUUFm6VtTr1t1nohZ69ZsVvOavVYlwoN4MI9B0rY166WI+6+V5zl7aq93z10sLTBm8Iv2AsH4fEER9lbzvUJ2Vq1OwsL5Sb+pqPjONlrdIuRcAEq2n0NLuNYfwaSFVV7WGoDCgrNHTYw0eZtLm9nYLfV3VfQ0OGE//QBtP4fhYeXokRvPpeeNVGiZScO5ZPruCosNwOmfvk+rXg5o37Gn2q4x4vAin5sz9XYySP0rXQuO5UZiImQ+PUfwEC+NHM7fA4nCY+6OFiQUjk0Kzw3Aiivbxb/qv6Ei73J9N7ved+1qmccq/Jad6602yQLYPr6Xidw815C1/NIX+XLXXs5zpCyhBj+LXWztVY0X5Sa/H/1SgAHulFX6NDc2nBevVlFssy95qyFMpSw5OhgKK0hATQEmM/eCGVH+4cSbRPCNzoiByoJNg9jWP2IpoeRmZmYJzEw7lZrPw9H6IwnOquFo7dsnXAkojo0iSTMlShVZgNlpi1kMbhEAQV79PCzWkhJGBW    o  o                                                                                                     �- !	%�?dengxiaowu实时信号欢迎使用ShowDoc！
    
**简要描述：** 

- 实时信号接口

**请求URL：** 
- ` /Market/getAllSign `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type | 否  |string |类型：user, all  说明：发现页的时候传空字符串，全部信号页面：自选传user，全部传all |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;isLogin&quot;: &quot;1&quot;,
        &quot;date&quot;: &quot;1528958897&quot;,
        &quot;list&quot;: [
            {
                &quot;symbol&quot;: &quot;002290&quot;,
                &quot;name&quot;: &quot;中科新材&quot;,
                &quot;signal&quot;: &quot;b&quot;,
                &quot;time&quot;: &quot;1528958100&quot;,
                &q   =   $ �$ '                         �N0 !	%�Wdengxiaowu登录接口
    
**简要描述：** 

- 登录接口

**请求URL：** 
- ` /user/login `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|account |是  |string |用户名   |
|password |是  |string | 密码    |
|login_device     |否  |string | 设备类型  1-iOS  2-android  |
|login_deviceId     |否  |string | 设备ID   |

 **返回示例**

``` 
密码错误：
{
    &quot;status&quot;: 4,
    &quot;in�?/ !	=�!dengxiaowu股票板块搜索接口
    
**简要描述：** 

- 股票板块搜索接口

**请求URL：** 
- ` /market/s `
  
**请求方式：**
- POST | GET

**参数：** 

|参  �o. !	1�dengxiaowu大盘相关接口
    
**简要描述：** 

- 大盘相关接口

**请求URL：** 
- `/Market/discoverer `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |      MyZOec7l5nz5ZDcklacUI+LNJ7t6Ap8aQu4TgtDHIKPs1jo1qC2OkSiUa24fVpIWiyI46wIby2S6T21mMbRfTKRwdFlDnS1/D7ZCb193W4oWpET2V7wwU+CZPMI0jOfr8Pr8SMnV0Zm2iRxiAvRsgHov3rZ8QbpUDgaIlNVhzITcWxcxsVwafCHTHeO8OKorOV3ycyEzMmtVvj0kMsrJlqRbDW2QUPq6xGQjHBsFURRCnr9HmTAgJteUQg2IN7nQ4hhwh6OTtKJ7VL6L01+g2zx4KxaSNF1BW9O09yqevD7tDCGw9nScJYVAjRLC0tgqEU2IEZQ1lHPlAopHV/mOA5B9sU4nlukK4p6Mgqpc06nE3H95ao//NwbkJ6KEi/1imzdiuwNpiOv/2OgcmAo97pcgmhom1XdvMRXVBm6CUZsD3i8/lqkRjNGDY5Qp+hoam5xNDe3PLnYwucVpYrFu+qZ/vXXSKaM+7o7A75aL3Z7U1OLvd5DrZ2f766LTT3YpGuTJLFNFmJX24rwIPk6n51Xm0je7otL0Wi/JlBXF+/3CB96hKBL8Evnr+UCX8JXqdaX9fEjx5MHl/kx+Qr4AsG6MN2822Hc7znLgcvTlXx1+ZLpDP4eprmcqsRJLq0ebuNwhvXA1QVwC6LrHBRVilRZwyO/cESBfqPzo3glydBwDPpwjLkzTqtODxTtZBj+ODZSGgxBi7IwyLyiFpLX36BYG4fjgrIMVKX3HJMHOGh/1rn3uFnPsgVSMpEVI2FGjzotI/34DlUB2WxkJg8ET2eP8PEUsgMVk/kNQ2oEiS1vXi0deRqe1s//z3HgSgulaSb7vO2W6Q48s66joUOoVblg0IkIOtBaLt66AkvU2QqNpm+KrXg8cVscqd/AXhYfhu8hWZbf7QmMAvqckYqUlmbuCH2a4mJdf2M+hdSY4+rL0nPMpYFHrqXaCvnglQj5kzUGTzK3C+kxPirFZ7V8Xj1apqkhGCYh89Jqgo1r5iM2u8LU9Q/+iydzc["�   � �                                                           ��O) !	%��Wdengxiaowu个股多空
    
**简要描述：** 

- 个股多空模式接口

**请求URL：** 
- ` http://wxtest.firstwisdom.cn/Stocks/ `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|req[stock_id] |是  |string |股票ID   |
|sub[0] |是  |string | dk_mode    |
|platfo��) !	%��Gdengxiaowu个股多空
    
**简要描述：** 

- 个股多空模式接口

**请求URL：** 
- ` http://wxtest.firstwisdom.cn/Stocks/ `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|req[stock_id] |是  |string |股票ID   |
|sub[0] |是 ��&) !	%��dengxiaowu个股多空
    
**简要描述：** 

- 个股多空模式接口

**请求URL：** 
- ` http://wxtest.firstwisdom.cn/Stocks/getDKMode `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:--   P   � j�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �I) !	1�=.dengxiaowu大盘相关接口eNrtWVtT20YUftev0Es6CcVidZfoazt9aaedJn3qZMCxFdDEWK4tJ83UmTGE+82huNxzoTGJk6ZAirnENvjH1LuSn/gLXVvGd8mG0iSdqR6MLud85+w5Z789yxIkvoiuLmM7ar4YRrGYmds9za51dZEE4SJh4qWxvmKsH   7�( !	%�M-dengxiaowu实时信号eNrdVltPGkEUft9fMS/tA5GCNqRqn5r40sSmTW2fmqassEVSBMuuaY1roliKjRcwQVS8FFQULYq21suK8md2ZpYn/0LPMgsueIsPNcZ92   :   >uot;change_percent&quot;: {
                    &quot;text&quot;: &quot;-3.57%&quot;,
                    &quot;color&quot;: &quot;1dad51&quot;
                },
                &quot;title&quot;: &quot;日内第五次买入信号&quot;,
                &quot;desc&quot;: &quot;日线级别出现看多信号后，日内出现第五次为较为合适的买入机会&quot;,
                &quot;times&quot;: &quot;5&quot;
            }
        ],
		 &quot;fav&quot;: &quot;1&quot;
    }
}
空返回 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;isLogin&quot;: &quot;1&quot;,
        &quot;date&quot;: &quot;1528958897&quot;,
        &quot;list&quot;: []
    }
}
```

 **返回参数说明** 
 ```
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;isLogin&quot;: &quot;1&quot;, //是否登录 0：未登录 1：登录
        &quot;date&quot;: &quot;1528958897&quot;, //日期
        &quot;list    &quot;: [
            {
                &quot;symbol&quot;: &quot;002290&quot;, //股票ID
                &quot;name&quot;: &quot;中科新材&quot;,
                &quot;signal&quot;: &quot;b&quot;, //信号点： 1：多 ，-1：空， b:买 ，s:卖
                &quot;time&quot;: &quot;1528958100&quot;,
                &quot;change_percent&quot;: { //涨幅
                    &quot;text&quot;: &quot;-3.57%&quot;,
                    &quot;color&quot;: &quot;1dad51&quot;
                },
                &quot;title&quot;: &quot;日内第五次买入信号&quot;, //显示的标题
                &quot;desc&quot;: &quot;日线级别出现看多信号后，日内出现第五次为较为合适的买入机会&quot;,//显示的说明
                &quot;times&quot;: &quot;5&quot; //出现信号点的次数
            }
        ],
		 &quot;fav&quot;: &quot;1&quot; //返回说明 0：没有自选，1：有
    }
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


c[")2    {
            &quot;type&quot;: &quot;2&quot;,//板块
            &quot;search_id&quot;: &quot;302&quot;,
            &quot;search_name&quot;: &quot;中国电子集团&quot;,
            &quot;is_favor&quot;: &quot;0&quot;
        },
        {
            &quot;type&quot;: &quot;1&quot;,//股票
            &quot;search_id&quot;: &quot;000009&quot;,
            &quot;search_name&quot;: &quot;中国宝安&quot;,
            &quot;is_favor&quot;: &quot;0&quot;//是否添加了自选
        }
    ]
}
空返回
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}

{
    &quot;status&quot;: 2,
    &quot;info&quot;: &quot;请登录&quot;,
    &quot;data&quot;: []
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|type |string   |类型，1-股票 2-板块  |
|is_favor |string   |1-已自选 0-没有  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[4yW    �  �求URL：** 
- ` /market/s `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|key |是  |string | 关键字   |


 **返回�05 !	-�dengxiaowuapp-微信登录
    
**简要描述：** 

- app-微信登录接口

**请求URL：** 
- `/user/wxLogin`
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|code |是  |string |微信code   |


 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;参数为空&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 11,
    &quot;info&quot;: &quot;无关联&quot;,
    &quot;data&quot;: []
}

成功返回：

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[4�V�  3  3�                                       �N0 !	%�Wdengxiaowu登录接口
    
**简要描述：** 

- 登录接口

**请求URL：** 
- ` /user/login `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|account |是  |string |用户名   |
|password |是  |string | 密码    |
|login_device     |否  |string | 设备类型  1-iOS  2-android  |
|login_deviceId     |否  |string | 设备ID   |

 **返回示例**

``` 
密码错误：
{
    &quot;status&quot;: 4,
    &quot;info&quot;: &quot;密码错误&quot;,
    &quot;data&quot;: []
}

手机号未注册
{
      E  t !	%�dengxiaowu注册接口
    
**简要描述：** 

- 注册接口

**请求URL：** 
- ` /user/register `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|mobile |是  |string | 手机号   |
|smscode |是  |string | 验证码   |
|password |是  |string | 密码   |
|inviter |�   A                                                                                                                                                                                                                                                                        �o* !	%�1dengxiaowu注册接口eNqtlE1v0zAYx+/+FD5xqIgmDryN6xCahDQE44QQKUtWRdqaEafjgJHaClZN3Zoduqnrqo1pXTWQtrBRaGmn5cvEjnPiK+DESRUoqyoVX+KXX/y3Hz/PH0DeQCrlneVZq0Atizlff13WUykIgATptxOytkErx8Q6ApxidoeeF58/fRwhEpThVA6pxpShZjRkqgaUQbifIOnOT3JphTBnn8w9m4cYPno4H+xFrCLdHmhhMSRbm5g4H/38OvbO+2S/jJndprUKBnha4i04bdgTQwliKZrmxLL+WltSIaY1m4+RaWjZDNej62Xa6BGrIyi0jBZ0ZRjzv2wwu+B9KghsJY3QW91Qhjhirw0gLbuqBZfGZKv1x17FPA/AAFvSM1r2laKuagvqEMvOrkizJG47jM8q1/wwOxPCAEAebKdK9va9Zs+9KvNIA1mWIXgHgmDdeJPTzQfITJs5JPrT8NbNxJKWXdTjBfEVL+F2e97nnphJ8kraTMf8i5fg/Qid26N1BgH/D1J3xpTyq7vMtieSujumFOlcMKdEGwcTqd0brRYVaJzhbrfCi5VWf3gHp65zmJjfdLt5VmpPdJb7o8/C7ONIsHPh9S1yWiONkzEEg3RNpLFIP1H2f1vDPz1BiiyBm0JsBtc1HOrw6uFxiy1ur02adSEtssPtH/HnC+q3UfZbO/7hd6/+IbkkXJKX3m/5vCwnc[0�1                                                                                                                                                                                                                                                                                               �X2 !	1�_dengxiaowu上报搜索数据
    
**简要描述：** 

- 上报搜索数据接口

**请求URL：** 
- ` /Market/addHistory `
  
**请求方式：**
- POST 

**参数：** 
	必须登录
|参数名|必选|类型|说明|
|:----    |:�V1 !	%�gdengxiaowu注册接口
    
**简要描述：** 

- 注册接口

**请求URL：** 
- ` /user/register `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|mobile |是  |string | 手机号   |
|smscode |是  |string | 验证码   |
|password |是  |string | 密码   |
|inviter |否  |string | 邀请码   |
|login_device |否  |string | 设备类型   |
|login_deviceId |否  |string | 设  #   % %ring | 邀请码   |
|login_device |否  |string | 设备类型   |
|login_deviceId |否  |string | 设备ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;参数为空&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 5,
    &quot;i�X2 !	1�_dengxiaowu上报搜索数据
    
**简要描述：** 

- 上报搜索数据接口

**请求URL：** 
- ` /Market/addHistory `
  
**请求方式：**
- POST 

**参数：** 
	必须登录
|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |1-股票 2-板块   |
|search_id |是  |string | id    |
|search_name     |是  |string | 名称    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[4�s     &quot;status&quot;: 3,
    &quot;info&quot;: &quot;手机号未注册&quot;,
    &quot;data&quot;: []
}
成功：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;avatar&quot;: &quot;http://dev.wxtest.firstwisdom.cn/Misc/d?sign=5b163ff605cfb&quot;,
        &quot;nickname&quot;: &quot;DXWu&quot;,
        &quot;name&quot;: &quot;DXWu&quot;,
        &quot;mobile&quot;: &quot;13760628603&quot;,
        &quot;openid&quot;: &quot;oXb-u0mepG-Gm_zQa3H32rQDSI_s&quot;,
        &quot;miniopenid&quot;: &quot;ogAwE5i5eMvGVpflxGmxUVu3zYRw&quot;,
        &quot;unionid&quot;: &quot;&quot;,
        &quot;status&quot;: &quot;&quot;,
        &quot;guide&quot;: &quot;&quot;,
        &quot;id&quot;: &quot;118&quot;,
        &quot;rewards&quot;: []
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |


 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[0�       |
|symbol |是  |string |股票ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;symbol&quot;: &quot;002828&quot;,
        &quot;stock_name&quot;: &quot;贝肯能源&quot;,
        &quot;status&quot;: &quot;2&quot;,
        &quot;price&quot;: {
            &quot;text&quot;: &quot;19.33&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        &quot;diff&quot;: {
            &quot;text&quot;: &quot;-2.15&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        &quot;scope&quot;: {
            &quot;text&quot;: &quot;-10.01%&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        }
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|status |string   |股票状态：0=停牌 ，别的先不用处理  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[b�    v  v                                                                                                            �' !	%�5)dengxiaowu个股多空eNrtnFtT20YUgN/1K/SSPlBkJK2udPqWl850pp3SPjEZI2wDHmzLkcSQTp0ZYMKQlICThhICmbQkQCnTwc2UW8DgP2Nd/MRfyEq7NgZfAu7getzVi7XSOauz3+5Z7a61h6LhQfX0uLtT3ta0k816hb/P86s9PTRFMXTxaMebWbc3Vt0/j53tdTufdRY37ew7Cmp4uUPn/cwP332NxRl6iB6zrHR/X9/kAytmWqGRuGFak3EzqidDkVTfgKVHxs0+eogKnoj0neUPMNcgC5jDt98MfE/7mdvZGefXiiEZlLSfLWTswmxp6knGfX9iv5nPeLk9Z2UxQ2X6GXj4RQnOUJKhMwy+DCWM2P1B07cgHI/eozPOSg5eNi0jnhqlM7CQ7ub2V3eRqDkxPMjWyNDR8XBSj8ZoJJROaNaIbiTpIH1FNK6b5/mnWipq6PEoPKOT8VRcS6eRLkXD0heW7LU37sZx8WweFp0aGhqiqZ8oX+Cz+xO69UVUszR01k+j61X3kCW1ty9EImNaarSBxIWUFXtglWXQ7+dqSFHuoPPeBloRPaEbl9ViwwCAYXR+Sethbx3jzPhoSktczoGr98wKikpJOJEHiioILFtP0ohZE0YqbFQp3KDobEhkb7voVRaGa03wCs9V1nm56bxYKJ6+dpYO3LWfG3OxdEtLhKPlLITGMuNlGVCX73g4ETcrpgzWlL2WYaPK4WRe4KSrlfPp2mcbYW9at1g3xF5DHTlEU/Ua7Ye9/woF4BWWoAhQCFyty/5PUYgsqxAUAQoZ9hQERYBCESTiIAiFGvSbBIXIKSyn8gRFgIJjRTKuQCiAJBAHQSgEkSMOglCIQCYOEqBQeV5pwUG4b   0    
**请求URL：** 
- `https://wxtest.firstwisdom.cn/Miniapp/saveWxInfo `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|code | 否  |string |code   |
|iv |否  |string | iv    |
|encryptedData     |否  |string | 加密数据    |
|rawData |是  |string | 原始数据字符串    |
|userInfo     |是  |json string | 用户数据    |
|signature     |否  |String | 使用 sha1( rawData + sessionkey ) 得到字符串    |


 **返回示例**
成功返回
``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```
错误返回
```
{
    &quot;status&quot;: -4,
    &quot;info&quot;: &quot;code解析数据失败&quot;,
    &quot;data&quot;: []
}
```
 **返回参数说明** 

|参数名|类型|说明|


 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ��Z                                                                                           � �                                                                                                 � !	1�Sdengxiaowu微信登录授权
    
**简要描述：** 

- 微信登录授权接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/Miniapp/wxLogin `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |�q !	S�odengxiaowu小程序-微信授权获取unionID
    
**简要描述：** 

- 小程序-微信授权获取unionID接口

**请求URL：** 
- ` /Miniapp/getUnionInfo `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|code |是  |string |code   |
|encryptedData |是  |string |包括敏感数据在内的完整用户信息的加密数据   |
|iv |是  |string |iv加密算法的初始向量   |
|userInfo |是  |string |用户信息对象，不包含 openid 等敏感信息   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&      �  �                                                                                                                                                                                                                      � !	1�edengxiaowu保存用户信息eNp9U01v00AQve+v2BOCgBsqcQrXIoQEAtEiDgjJluM2BmEH76ZphZGaio/QqHEOoQ0ppC1J0x7auIGgAg3xn/GunVP/AmuvU4JB2dPOzJt5b2dmAWQHJBJeZ8VvF6hl+c7xWb+eSEAABOg6n8hRjQw6rrPrVQ9o8YRdaMGm5T1iNQHL8+0T2l19cP92lCRAMYNxFqWSyfwSVhCemlcNhPMqSuvPpmQteUfVVCmbTSJpUXm4dEub16EIQgm8FN34QfpWWI0Vu3d3dg6a8OaNuYCMWKv0/bk8k5uksm4S5/Vw5Z3pdU9Jo2T6do/WyiYwUwI7wQPDGzcFaAqRmyFkPa1Ak9ZsZiFsqNoC5L4wqi7GY5C5eEzRZGM5i5X0jIQlGDpjULK2Q+w3TCFd70RJhpQP4f9Ay9tkv8Sh5GjTO2y7379EOTmkGGGbxjieIF1jaXwkfzEgdUGTcM5Q/gN3fzksA6KMNH0RjqRchkhBSNW1p8oyvATJYJMUj2MaAIBsPE6VbDW81k93UGKzocUKWdvmTiCKIgQvQIC+8Dyn4+sIMxGI31Pw6pWxkMreMgpE4JwsMw3cGIemmcARdBq8DGjAsPrBt+0/vBNohWuTeYNB+/tN2qhEnW91/d7eZBmPHkc6zjvCt5DvXHwvYwsZ9pG03tKvB9EHo1s90qrzQvxl7mnT2ymwv+B9LA3bG8Pdb1791XiI/1FWix5+9p0yH+psRs/P6PJZv/AbDoS1tg==cZ��    ot;top_change&quot;: {
                &quot;text&quot;: &quot;+8.33%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            }
        },
        {
            &quot;theme_id&quot;: &quot;272&quot;,
            &quot;theme_name&quot;: &quot;中字头&quot;,
            &quot;top_symbol&quot;: &quot;600536&quot;,
            &quot;top_name&quot;: &quot;中国软件&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-1.34%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;top_change&quot;: {
                &quot;text&quot;: &quot;+8.33%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            }
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�   K33b&quot;
            }
        },
        {
            &quot;theme_id&quot;: &quot;429&quot;,
            &quot;theme_name&quot;: &quot;云计算&quot;,
            &quot;top_symbol&quot;: &quot;600536&quot;,
            &quot;top_name&quot;: &quot;中国软件&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-0.45%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;top_change&quot;: {
                &quot;text&quot;: &quot;+8.33%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            }
        },
        {
            &quot;theme_id&quot;: &quot;289&quot;,
            &quot;theme_name&quot;: &quot;举牌&quot;,
            &quot;top_symbol&quot;: &quot;600536&quot;,
            &quot;top_name&quot;: &quot;中国软件&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-1.25%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &qu   Lt;中国电子集团&quot;,
            &quot;top_symbol&quot;: &quot;600536&quot;,
            &quot;top_name&quot;: &quot;中国软件&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;+0.96%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;top_change&quot;: {
                &quot;text&quot;: &quot;+8.33%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            }
        },
        {
            &quot;theme_id&quot;: &quot;340&quot;,
            &quot;theme_name&quot;: &quot;网络安全&quot;,
            &quot;top_symbol&quot;: &quot;600536&quot;,
            &quot;top_name&quot;: &quot;中国软件&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-0.05%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;top_change&quot;: {
                &quot;text&quot;: &quot;+8.33%&quot;,
                &quot;color&quot;: &quot;eb3    s  s                                                                                                         �
# !	+�Edengxiaowu自选股接口eNq1lV1v0lAYx+/PpzhXXpBRWsq7txpvTDSyXRkDWCoQtxZpyTTrEkZUNERwCSMbkGVzuOGiY9MpTt6+DOe0XO0r2BdAIAEDC+emT8/5/5/T/nr6PACqA5hM8llCOd7C2azSPr9uFEwmCIAZKqnTbuK9kjzEmc8oewRUoVKt4YvkyqP7PZUZ+mFYFKMei4Vy0YTdQVAOkqBo2sKx6xEuyL60hFhxRWBjXpFnngvQD/QNjTw4f4UaWT2VmunhA+8ylOC9u8vaTiibxDuDh4GqpZ1DxX25/KfTSqt64Pf7IdgA2hvcehHnxduCGBDjghF7ILk0tBThnvH9hZ44zjCs0FMPS4MBMdCXPtbntbExiIaSBkdT0iQ9nG5ULLxae8qvjhtIm9sxxaMh83GBNXbU1/n9TT7ZRu+KSqs1zT2Mw7iSk+WrAUH0RWMRZmwz2kU4nJNtTDjAhVhflI0xLCeOWq2Ew2VEA+Pm0oxIrbMhJUmre+pnmIAUnaXkTFU9cDhzsnCkNoqg5yNqthP2GyOlZj6ldtI2B9Lyl25yW60enXpz8Uhpgp7zlDrVqnUzpFane3akNvccP35jF7Vq8vcWqr5dOFLKRbhccx5TmrDR40z16AnY1Ao3wKVTea+OmjtGVdfnJtdy6/RarjYTI9l/qnl/80EzMXqMUr3Euxm9zUjGDPr4QZIv6mg/LRmLEpA8Zm1A2Auk3u3EoVr+kYWSIMYiXEibh7iUwPnzTr2GDxq6bhTlqPZXBV290VTaU6NyCv+o9LozLl6icsF4kW5uT6lWO/Uj+WBLo1FKd4/z3cOfcuH18JLR4AEA+OsnpZ3pNNtyruIN8+t3eOa6sfUX7Iq3Hg==c[��    _  _                                                                                     �" !	+�mdengxiaowu自选股接口eNq1VVtvEkEUfp9fMU8+kLIsLHdfNb6YaKR9MgbWZQViuyC7pGq3CSVWNESwCSUtkKZYbLHR0moVK7c/w8wuT/0L7gUQSMBAw7zs2XO+883Mt2fPAVBZwGCQzuLy8RbOZOT2+XUjbzBAAIxQTp524+/lRAmnP6PMEVCAcrWGLxIrj+73UEbog0FBiLhNJrOTImx2wmwnCTNFmTh2PcT52ZemACus8GzUI4SZ5zz0AW1DnQfnrlAjo1EpTA8feJahCO/dXVZ3QpkE3u0fJkIHWIja291SXbO9fOj1wAGgwtfOosKBVP7TaaUUMuDz+SDYAOr1br2IhYXbvEALMV633ZBcGgqFuGfhfqAHjjEMy/fQw1A/LdB96GPNr66NgTVE6h+lpEhqmG4UzL9aexpeHU8grS77lBxVTy9Hr7GjeZ3f36STHfSuILda07KH5dCf5GT4Ks0L3kg0xIxtRjkJu2NyGhOkOeVjRdgow3LCaKqFsDt1a5C4uTSjpJbZJCVJi2vqZ5ggKTpLSumqUo04fbJwSa1mgppPUaONsN1YUvPMVWojrXNIWv7STeworaVTby5eUoqg5qxSh9LSbiapxeGaXVKra44fv7GHWjXpewtV3y5cUrOTcDrnLFOKsFLjmmrWE7CpNm6Ai6fSfh01d/Wurvkm93LL9F6uTBqd7D/dvL/5YJjoA0iuXuK9tDYQRd2DPn4QpYs6OkiJelAEotuoLgh7hth7nbiUlH/KQpEXoiEuoPohLsZx7rxTr+HDhoYblXIU+6uCrrZVlHpqVE7iH5Xe6MaFS1TO6xfpZvflarVTP5IOt1Q1iqnuca5b+inl3wyH9OkPAMBfP8ntdKfZlrIVTzC8fifMXDe2/gIIacWic[��   R-|:----- |-----   |
|symbol |是  |string |股票ID   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;change&quot;: {
            &quot;text&quot;: &quot;+13.54%&quot;,
            &quot;color&quot;: &quot;eb333b&quot;
        },
        &quot;signal&quot;: &quot;1&quot;,
        &quot;date&quot;: 1523894400,
        &quot;return_rate&quot;: {
            &quot;text&quot;: &quot;+0.50%&quot;,
            &quot;color&quot;: &quot;eb333b&quot;
        },
        &quot;return_rate_text&quot;: &quot;近90日操作收益&quot;,
        &quot;total_d&quot;: 4,
        &quot;total_k&quot;: 3,
        &quot;dk_list&quot;: [
            {
                &quot;date&quot;: 1515945600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516032000,
        [  [                                                                                 �"! !	+�udengxiaowu自选股接口eNq1lV1P01AYx+/PpzhXXiys69ZtbHir8cZEI3BlDKulbovQ4VqChpJsCy8a4iYJIGwLGTIBiVJQdGL38mV6TtsrvoJ9G3ZLNrMRzk2fnvN//qf99fR5ADQG8HjU04x2mMWFgtY6u6oXPR4IgBdqayd65p2W28f5z6hwAAyhJtXweW7yyUNH5YUxmBCEuTGfzx+hiFCY8IdJwk9RPo5dSHLT7GtfnBUmeTY9LqSYlzyMAWtD2wdvX6J6wbIynB4/Gp+AInxwf8LcCRVyeKv9MPhjBSqNVbwjodaKvi+ruzJqbAEADafWJirtqdU/SnPdsAGxWAyCRWC+2J1X8ynhLi/Qwjxvx2OQHHEtJbkXqfaCI55nGJZ31G7pNC3QbelTa94ci9eRy3S605IiKbddp5h/M/s8NdOdQAaj4T45Jskpjp5lO/OU39/Uow30tqQ1m/2y3TjsK9lbPkPzwtRcOsl0bUZFiPBo7zQmQXNxdmqOTTMsJ3SmBohwxI6uE5dGBkQaGAwpSQaifT9DD6TodE3NS8Y5xPmjW0ca9BPUcES9ISJ0Y6T+gU9piAwOgbT6Rc9tGEVFkRu3j5QiqCFP6ahRzG6GNDAaHRxpMDrEj1/fQc2a+r2JpNVbR+qPEJHIkMeUIoJUN1MregaWzMINcPnELu12VbfmetfyQP9abvQY2+w/1by9+XUzsVuPJl3gnbzVCkV7Bn14L6rnMtpbF+1FEYhjXnNA6ASic9tzGCn/yEKRF9JJLm7OQ1zO4O0zRa7hSt3SdaLs1P46Rpcrpsp8alRdwz+OnaaNSxeoWrRfRN/c1SRJkQ/UStakUV7XD7f1/Z9qcdm9ZPd9AAD++klr5ZVGS908Hk+kFu6lmKt69i9zX8aZcZِ�   S            &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516118400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516204800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516291200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516550400,
                &quot;signal&quot;: &quot;0&quot;,
    X               &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516636800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516723200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516809600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1516896000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.    uot;: &quot;11.09&quot;,
        &quot;earnings_30_text&quot;: &quot;30天累计收益率&quot;,
        &quot;odds&quot;: &quot;81.82&quot;,
        &quot;odds_text&quot;: &quot;胜率&quot;,
        &quot;name&quot;: &quot;涨停大师&quot;,
        &quot;description&quot;: &quot;根据公司公告、财报以及市场热点等多方面消息，甄选出有望冲刺涨停个股&quot;,
        &quot;tags&quot;: [
            &quot;超短线&quot;,
            &quot;擅长抓涨停&quot;
        ],
        &quot;hot&quot;: &quot;1&quot;,
        &quot;free&quot;: &quot;1&quot;,
        &quot;type&quot;: &quot;ztds&quot;,
        &quot;owner_day&quot;: &quot;1&quot;,
        &quot;owner_text&quot;: &quot;建议持股天数&quot;,
        &quot;stock_line&quot;: []
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|stock_line |arr   |   |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ��   T.33&quot;,
        &quot;earnings_text&quot;: &quot;个股平均收益&quot;,
        &quot;earnings_30&quot;: &quot;11.09&quot;,
        &quot;earnings_30_text&quot;: &quot;30天累计收益率&quot;,
        &quot;odds&quot;: &quot;81.82&quot;,
        &quot;odds_text&quot;: &quot;胜率&quot;,
        &quot;name&quot;: &quot;一智金股&quot;,
        &quot;description&quot;: &quot;通过大数据和量化模型筛选后、再结合专家知识优选标的，收益稳健、胜率高&quot;,
        &quot;tags&quot;: [
            &quot;胜率高&quot;,
            &quot;稳健收益&quot;
        ],
        &quot;hot&quot;: &quot;1&quot;,
        &quot;free&quot;: &quot;1&quot;,
        &quot;type&quot;: &quot;yzjg&quot;,
        &quot;stock_line&quot;: []
    }
}
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;earnings&quot;: &quot;1.33&quot;,
        &quot;earnings_text&quot;: &quot;持股1天平均收益&quot;,
        &quot;earnings_30&q   U,
        &quot;earnings_text&quot;: &quot;持股3天平均收益&quot;,
        &quot;earnings_30&quot;: &quot;11.09&quot;,
        &quot;earnings_30_text&quot;: &quot;30天累计收益率&quot;,
        &quot;odds&quot;: &quot;81.82&quot;,
        &quot;odds_text&quot;: &quot;胜率&quot;,
        &quot;name&quot;: &quot;主力雷达&quot;,
        &quot;description&quot;: &quot;每日监控沪深A股主力资金的进出情况、通过异动的资金流入，提前潜伏待涨个股&quot;,
        &quot;tags&quot;: [
            &quot;资金监控&quot;,
            &quot;抓主力&quot;
        ],
        &quot;hot&quot;: &quot;0&quot;,
        &quot;free&quot;: &quot;1&quot;,
        &quot;type&quot;: &quot;zlld&quot;,
        &quot;owner_day&quot;: &quot;3&quot;,
        &quot;owner_text&quot;: &quot;建议持股天数&quot;,
        &quot;stock_line&quot;: []
    }
}
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;earnings&quot;: &quot;1    u  u                                                                                                           �" !	+�Edengxiaowu	股票池订阅
    
**简要描述：** 

- 股票池订阅接口

**请求URL：** 
- ` https://wx.firstwisdom.cn/Select/updatesubscribe `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|pool_id |是  |int |股票池类型：1-金股、2-技术掘金（主力雷达）、3-热点追击、4-综合、5-涨停大师,6-收益通知，7-版本更新   |
|subscribe |是  |int | 1，订阅， 0 取消订阅    |

 **返回示例**

``` 
{
	&quot;data&quot;:[],
	&quot;info&quot;:&quot;success&quot;,
	&quot;status&quot;:0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[���   Y00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1517155200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1517241600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1517328000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1517414400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot   Z;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1517500800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1517760000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1517846400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1517932800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {   [
                &quot;date&quot;: 1518019200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1518105600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1518364800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1518451200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1518537600,
    ^               &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1519228800,
                &quot;signal&quot;: &quot;1&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1519315200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1519574400,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1519660800,
                &quot;signal&quot;: &quot;0&quot;    X  X                                                                            �5 !	1�dengxiaowu最新增加条数eNp1kl1vEkEUhu/nV8yVF8Qtu0QTg7caL9po4se1Swqlm8huZYZg4ppA0/qFspggaaGS0lLsRQs0VhvL6v4ZZmb3ir/g2R02wa/JZnPmzDPnPfPmIAwLJRJiWPEHVe44vjeeue1EAiOkYL5X4a0xO+iyt/v8U49/HPP6EXMOEdzwRxf8bPPR/ZU5rmAdr1O6QdLJZPkZzRG6tGYUCS0bJGsVllbNpJkrk2Q+R1cyJDy+WypgHUXqshZvfWeuE5WDanduPwxlmLMJsnFLttyyxnubedtB5Y0tziasW7P90TnfqdvITiuwwkdFkdwq2FbmaSCegPxjahRyOMJYYwB/QouGmcf29GeNnTZADqdU7YaiXlNUDWupdPRFPEIYGvaarNMV/UvgoVuk6zpGz1EIXHlasujNbIZmZJSeZ1LadVVGVxc4w1yzfufuLf9NEZqhJRJzKnoRCi40Il2RHvzp0z8NUub+gEOxM/9bcCVftEobRhbbhknDjGge89cXYrJlZGfuOw3c8r9ti8vPYtgTjZfsw87M7aQgy3eHQaUt6dg51n/FvxzH89U5Z/22fEPQ3PVHo+nkUOxXYR7EXi0YtILeV9HeWjySI4oQ4icHvlef/vCg/oN1q3zLWp251V8LiD4lcZ�6�e !	1�u	dengxiaowu趋势看多接口eNrFV1tPE0EUft9fMU8+ELZM99rFV4gPkGi8PBlDa1lhE9hidwkqa0IbDREoFa0XLnIHMVGKEdFSoH+mM7v75F9wtlNgt9ZGhJR52Zk53zln5pw5O98wgDSmpcXeHnM2UzibdUo7vw7mWloAw7DA2ZtEEyV7YRKtz+HpDZRdYwjWyf/AX9N3bnZXgSyI9   �   � ;��                                                                                                                                                                                                                                                                                                                                                                                                 �/& !	%�)dengxiaowu个股多空eNrtnU9vE0cUwO/7KfbSHlK8mT87O7NUvXGpVKlVaU8IOY7tBCuJHbwbQVUjEQQCCiEg0hASRBsIKEUVLioECAF/GXvtnPIVOut1HDuJYYP6MjCyL/HuvpnMb+Z55r35s88w5ccYGKg/Pd94PB3MzjYq/2xtLA4MmIaRMKuvnjQuLNdWFut/rQery7WN2eDGo9rsQ0OmaJRfBs8u/Pzjdy3xhDlknvL9yaODg2fO+lnPt0ZyRc8/k/MyhQkrnR887hfSY96gOWQ0/2OUP   (�y% !	1�dengxiaowu获取配置信息eNq1VVtPE0EYfd9fMYkJ0YZekDfIhgc1vphoBH0xZrvsTstod2fdmaUUl4S   *�:$ !	+�%dengxiaowu自选股接口eNrVmFtPGkEUx9/3U8xL+6Blmd3lIvbVpg9t0qbqU9MAwopEBMuuUeOaKGmrrQqaqPUWqxWvaQWrLVUQvgwzuzz5FboXUNaI7RK16zwNZ/7nzGH2l9mzhwDyIBoaxP0RaWsUJxJSIX2WW2poAARhA   �   5,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1519747200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1519833600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1519920000,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.00&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1520179200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot          $   #   "   #   $��方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	    awRilEtlggaykkZVyETLgIbwUYxBmEHBzDUJkGwa1sgJPRnpmdGT/yF9GhkI3QZa1BLI01GD4lE9znTc/T56PTpntMBCr8CN2/qhzPG67iWTBrFo4v85s2bVCAwRKknM9pGrrSwZjx+dZF/or07QPEttLuPThbxR/XkDC2lS+mscX5OaSt7KLkTwKqMTFY7fvzlP/9W0TNEDVNjijIRu33r1oPvlFBMAd+EJ2PKg3BsNHofBCO37oTGQ0HlVkwZmVSo4UB5QJYW7dkpyifLirCef/z9zhfUNHUvpJjXQcnH2k8fBjttfUSrT6dRca40k5jWj8/Qy+VpI/NGe74yHZi+PYRf5u2W31kfh6jpocqfcQ/l+4kQNa09z+BPMWUyHLlHVbRQ+DKBGzduDMTu4zHeHR0Jj38/QH3+yT3lM2qg2kr65g/mf/cOtOPtgcEAVfWqyAbHRiL3Qs2E1bMlbX3POJpVz35sLD8WjinRyQ9Xr9OAVuZR8n9Y9nK4D8KRSGgy1uyaeiKN32CJsogSnagdY/X3/pExmtJXrVMj3NQ6pmTtQGtkrVv7MNw68RrTNBa3BmDZx7rhUHCs7hu9JHsgEAhQmMdiCqVf6rs59XwZwxgYHh6mAg/LY/jk26mo8hmmV5mKWe9vU/RgVVM48k30fUOl81QwGIpVeld3HR1RRt53ffjhDq2/VN1ifZdmA7H+z1Vf6Wr3cayxsbqqK4fvh+6OhyOh9x3/VdfRfDGQhaIMWZoebNousCxv084LIha3aYcSFOzaeVlmbdsZVrJrZyBnq58uD7BpOydLtJ1+TpJ53rbdFLdph7xkq58XbO3LcSK+Pbqu+avBJl99YyDr+13qtmfEfD1s2lJNcTT477uRkfuhqyRjH689PdROMo2ItlMVHr2qSKA5SWJa1xKOBMenRkN3JybDwZox8TTgoXNN5r+q94ouzdeKhm+nwkqduN0330C80X0wgHZgkVgwOhGyZ6OBKwl9p1y96qcM4KS/tHLZSy3B6Hh08q   bqa0Nccx31tvbfV8qhp66PBjiCLf4D02QP8i2vMFtqllqOxA6KJUMtBAGkPUMvxQOa7Tu0QAyABapnRkVHItEdtw5avBj/irC3Dd9ZZ42jcWNhB8T2Uy7ZLPk2zMiMT89cEyHeIbq243S95i/6aBjJ0xV8LXvbX2rvXpdkCnieoZwUS1LIcGWoFIHiCWgi47kcZQywQxX7215bh/6z+WiYQXztEt1bcbmbWcnzt5HeHnL9maC/7a31/zfjxhVHIqGfvSMTXAhl/zQmAlTxALUsDie2+v8YxWl/7a8vwnfXXmHwzu5kuoMU0AfIhS2ZmyfKA49sn3yG6deI2mbYWyceRitB9f80DRvZ0PmQho+Zfk4mvMbUiA4lQC7HHYb1ArQxo1g1qacbL1KonCTWXUnP/MeIpAtTSkEzumWEAlD1ALb4PQew+tTQQPO1r1fyStriIjlJEEhksmcAYG533hqNlu59+G+IB5Ps6MC4bvrOBsRHf1ONFNJfQU29JhBi0RIp8JwFlU/KdoVsrbrdE3eKSCwNE6EaIAT2dyEC5LMrnMLLo91UC/pohlH5jRABZD1DLSIBxIf3GAa5HqL2ev7YM31l/rZ6uGvvzemGNgLNmaJ5M1hkIBNJ3DrGtEbfdbtQa9TSgXYAeAlnyZ4NuzAZ53of22p6agZ5e2N5a11fSavGVFs8QgJaVyETFLAQs7UN77dW9XvG01wovKnbvbHhR+qmIsi/0/TVtaYbECiGhCMMZME24dwpurbjdhufWuBdEwAhuLBCyPZIH6dBsMPNEn9lE54ckiGU4n9jqmaCzOIncnlFO9jSy6YK5JE0GWZH1ka1yshKQuO4TC4HI9HGyuWL4Du+a60FH7dTDNePeIbi14nZPW/X2TFAWvTwT7NGA2GEk6UNbMxMkERD38PLIk3Uzd5FbJUAsB8lEFwJgfC97/RmcAL0cDuvzG0bymFi+DRLKt3GcowfmfGivQIuNB/s5Irbs3uGIGHvq3G9oNa39vkMi0cz2UvbCIb    h14jYFCnqb+17Zjz/4p1mC9oFtC1jo6egCHe6ouU2ULpQ25ohkHlifWbeZFQDb38FF2e4dDi6Kc2gxTS534WTbeee5dwZurbhddaReTl2wDBA8/fSI9nbDLANTWNOeHbVfuYgWZR/aHkgSe7wOxnFCX1km42jxJI4TWJ9Z1x0t4Dy9xU1/8yuaS+Cg2FjKEGCW5mWfWfeZZbh+3uFm2b3DQXG6oB2ZjlrbIpFqpsVeii8cglsrbldStDXuGRbwrhRGFLy9oDc3r63vEZvJ4dv0oa2ClgO84MoqNO3tmVwWZV8Qq+YpEqq54hFoORrIghtlACDr6f0+Oy9Lp0ViJVcEAfrQur++wXH9nCu27N7pgoYJtLtfmtlUi69I7MAglHZjWQAJ7MBwSG6tuAglvj/3uUE/V9z9XDHDO6or5UNbs9dN5ry8Gq3NbqODOLFksURurxvN+dBeE1oWG8/T0PbmXM7hJMiHtuaRJbqf62NVTkjqcL2Vky209TO5zBsk9NSS+bhZ2+DbnjH1cfChSLdb4p4RACO5sVAiyx5PvemJ09KvzwkExubiHqFtxQwDJE9Qi3/uRTeoZfu5PlblxLsO5zHOs0Yipz1bIFPoW+CJFfomcCSJ7ZmBLZAvSYzQdqFviXajnqEk+VnnrmedzbLuoheoFdyoP/spmQdBOuevA/b9Lj9Z7x4FHpmHuVYd8mqdJGydG1w+W1j7/4H2g3kKsXXIsXmKbbmjtn2qPT20upvn6FpHBVeUZE5RLoX/ah1YaR6XfPozSmbUsz20u6me/NcSU09mjLdZNb99kV/ETcbyMXbypZl1lMyixfnSZuoinygPDe0u4GFUzmXW0m+wEutCpdSGkcFqd/TtuJHJ6lvLpdfPSq/e4ktXN1lHOwfwzfz2i1FcUQtFPXVwZyz64K/R4EU+/geaGp4zcZ�;                                                                                     �  �                                                                                                                                                                �K !	1�Edengxiaowu获取配置信息欢迎使用ShowDoc！
    
**简要描述：** 

- 获取配置信息接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/app/getConfig `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|platform |是  |string |设备来源 ios， android ， miniapp  (都是小写) |
|appVersion |否  |string | app 版本    |

 **返回示例**

``` 
{
    &quot;data&quot;: {
        &quot;config_version&quot;: &quot;1.0.0&quot;,
        &quot;api_host&quot;: &quot;https://wx.firstwisdom.cn&quot;,
        &quot;update_interval&quot;: &quot;3&quot;,
        &quot;pay_type&quot;: [
            &quot;weixin&quot;
        ],
        &quot;webview_urls&quot;: {
            &quot;yzjg&quot;: &quot;https://wx.firstwisdom.cn/?code=1&amp;s   )   z
- ` /newindex/getUserStocks `
  
**请求方式：**
- POST | GET

**参数：** 

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;1175&quot;,
            &quot;symbol&quot;: &quot;603286&quot;,
            &quot;stock_name&quot;: &quot;日盈电子&quot;,
            &quot;sig&quot;: &quot;0&quot;,
            &quot;last_price&quot;: {
                &quot;text&quot;: &quot;15.39&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-1.79%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;finance&quot;: &quot;暂无评级&quot;
        },
		{
            &quot;id&quot;: &quot;1175&quot;,
            &quot;symbol&quot;: &quot;603286&quot;,
            &quot;stock_name&quot;: &quot;日盈电子&quot;,
            &quot;sig&quot;: &quot;0&quot;,
        },
            {
                &quot;id&quot;: &quot;1&quot;,
                &quot;date&quot;: &quot;2018-05-14&quot;,
                &quot;cs_value&quot;: &quot;23.21&quot;,
                &quot;strategy_value&quot;: &quot;21.21&quot;,
                &quot;time&quot;: 1526227200
            }
        ],
        &quot;today&quot;: {
            &quot;id&quot;: &quot;1&quot;,
            &quot;date&quot;: &quot;2018-05-14&quot;,
            &quot;cs_value&quot;: {
                &quot;text&quot;: &quot;+23.21%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;strategy_value&quot;: &quot;21.21&quot;,
            &quot;cs_value_text&quot;: &quot;泸深300&quot;,
            &quot;strategy_value_text&quot;: &quot;本策略&quot;
        }
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�^3    KEJDlgIQvicpHOBAWAoYIC/tn6Mee+AtO22W/XJImxLnMdN73fZ7nnWmecfZ/eeWFq4uyu7TXP4xzj7F8XZrkABtcLOYeTHi7k06h4JUPr0trsRjguDhgqc7MqXO8Z0/POws7dmGLY7le8dQ5mnr18lk1MQ5SYJhSnfTwfG6UQkITaWQQmkNEwWpC1nhJ1/kMpI+wlkYZkOICyhDGWf5jlwoBEgN68bx/AFjg6ZMBn8guTDnfanKs8NNe/GrZ5c+ViVnLPTq3N+csr3jirCxYnNUTZ8NvKFiFn3FgxavbLEPPSjSNDRVYzkqR7RBqIC0DLO/g0t7+4nzfcc4WAcLkujQPJE0xMFKAv1aRhlgTANyvfLxgpfZhwZ5efeBDsu3X0CAIa8CyF3cbQIFf4c7OOBv7gSiOA6zr8pK9vulun11dzrGWuVQqBbgPwTV0vDcx7VUkKoWrHhDu12NycIDiSMh3kxXOXYlkIhkuO1vKJB2Jw5jQ5oL6lbVcV3sQU2fKoIg0Co0RKduM1d2+RpfyIs3r8CZ5sBZvEJdFLK21vh7PQTSKqppq4TetTDk4NIJgTjSNLPn39Op5+bG3mYjHwPfJWIFCV4ek6r2EsuYFBYtZnEEaf49XsWJmoagbbJZpn9+lMKoxcD87bWBVYLd/e1djVCH/TUcAHk0HTUZV0Z6K1UcjUt7djYjVRyMyCTREKWNAqEKNRietlfQlBTPg6hLCU3wowGDuFoyIGobM/N0kNFPUGMaD1Xhng10gLY2bGYgpy5CQRnXVAPt3zNpfl+TGffNpMKXQX0M3bXXctlYbrzot89obj71tMPPziXyTPd6rvi7O+om9vRZyV5ZWvWLx6nzL/THJHgZ3Y66yu1z5+dtd+9QYCh8ohvUXCeeFmA==cZ��D                                                                                                                     � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 �" !	%�}dengxiaowu公共说明eNpt0E9LAkEYBvD7foqFhW6NbqZE4SHo4kU8dRddaal1N3fMumkmKqGrhPmHDS0zDDTLEkS3Pow4M3ryKzSySiod3+H3vPPMcBwZVsf96KTzhUvZmVFheIB7t5NOAesZVK2iXIYenkCoqPsWS+QSCioEATGkwoio+mUJ+IIsTt2zc0EBv2cDdgfgHVbA22zMDsDtOjK0/3dt7GEYhuM4lGhO402cbSCtTio3KNFCiQ+kXePC+7zd+pzCxRpKlcdGjbwOULtIWi/jfndmpBl26zwswwOvohwLIVWUg+bM8sDqdDoPPR6STmG9tXTqlQoFaYNawYJ+DuknrQeUMy8MyCFpYUfRkiiro2iZpZHJ2w96TuKHBh7klt4vXIg+we2VhEWCOhoyKf0YWp6mlzoMpTWGtDzqx3G/No3drTD6OrcAI3Lo1Jwpnjch33ky1Em2g57i7DaPu49YT5uH7G5EDIisHfdi06S2ssrs5/L/XWtWcx39AghDCqM=cZ�KF   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                         �: !	%�-dengxiaowu默认页面eNpVUstKw0AU3c9XDAhFF1ojuEkp4he4cCtIaMY22mRiMrEVR1AR3fhclNai0GqpRcQKrQ/U/o15rfwFJ7mJj7u5r3POvXeYseBlEIzu3ePT4OEBIYSFoUmMtYXF7LyhWlRT/yMMQtQyLWpGXgraPb/zFrafwqtrAIWXO0F31794d0c1xDZNkq9WAZX0924+X++AgQrUYMRg+a3MukNZbo1sQiCD21DKDoFw+59GzE4mNffd0z2v9ogQj8bxoD/0GiccilwlOuWIy5PCosMg+pvg31xUEJdiD4P80bmYBR2bOlYhugZzDDuVHK3oUDmbXXV0cy6+Vcooupn780Bx/nPmEhBBKknkxJcYM4XWimbZrKLZKtWnCkY2aW6Dw6mJPWcwh1cW+/C0aCq2XaGWivmGYhVKijU+Oz2BuXvWjfoYu/0Dv7WbgA1FJ0BMwdKsAHuNPoCx13jybx9TbYsUl5kmKFwz2LgkTUDjR9sb9NyDI6/+HNaHEUH8IbdzKKpfH02v3hI/6xuAnQoZcZ�%   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                             �6 !	%�%dengxiaowu跳转协议eNpVUstKw0AU3c9XzKrURY0R3FSK+AUu3AoSkrGNNpmYTLTFEbSIbnwuSqso+KIWkVbwidq/Ma+Vv+AkN6n1bu7rnHPvHQYhLAwVMNbn5qVZU7OproVvT+HgwTs4Cns9hExCtCot62ZJDq+6we1HdPUSXVwDKDrfCjvbwemnN2giVrdIqVYDVNpv3Hy/3wMDqdRkxGSljdyqS9n0CqlDUAS3plRdAuHmP42EnU462/GOGn7zESEej+Nh/9lvH3Ioco0YlCNeLAiLD4NoNMF/uaggLiceBgWDEzELOg51bTW+BnMMO1VcvezSoiQtu4Y1k9wq5xTDmh55oCQfnrkARJBKk2LqK4xZQmtJtx22rjsaNcZVU0qbm+BwZmLPSczhlcU+PCtaiuOsU1vDfE2x1Ypi56cmxjD3jjtxH2OvvxtcbqdgUzEIEDOwPCXAfrsPYOy3X4K7x0zbJuVFpgsK102Wl+UxaAy1/aeut7vvt16j1nNMEH/Iu90T1Z+vM791iRD6BctBAQQ=cZ�%"   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                � !	7�Sdengxiaowu选股的收益曲线
    
**简要描述：** 

- 选股收益曲线接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/Select/netValue `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |----   k� !	I��dengxiaowu行情页的股票涨幅列表


**请求URL：** 
- ` http://wxtest.firstwisdom.cn/Market/stockList `
  
**请求方式：**
- GET


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
           x   e-
|type |是  |string |smart : 一智金股，top: 涨停大师，tech：主力雷达   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;title&quot;: &quot;股票池净值曲线图&quot;,
        &quot;desc&quot;: &quot;股票池回测基于卖出信号出现时卖出获取胜率与策略总收益计算&quot;,
        &quot;list&quot;: [
            {
                &quot;id&quot;: &quot;1&quot;,
                &quot;date&quot;: &quot;2018-05-11&quot;,
                &quot;cs_value&quot;: &quot;23.21&quot;,
                &quot;strategy_value&quot;: &quot;21.21&quot;,
                &quot;time&quot;: 1525968000
            },
            {
                &quot;id&quot;: &quot;1&quot;,
                &quot;date&quot;: &quot;2018-05-12&quot;,
                &quot;cs_value&quot;: &quot;23.21&quot;,
                &quot;strategy_value&quot;: &quot;21.21&quot;,
                &quot;time&quot;: 1526054400
            t;: {
                &quot;text&quot;: &quot;-9.32%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;20.56%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300585&quot;,
            &quot;stock_name&quot;: &quot;奥联电子&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;16.98&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.20%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;16.50%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        }
    ]
}
```


 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�i�   l&quot;: &quot;37.33%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002725&quot;,
            &quot;stock_name&quot;: &quot;跃岭股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;9.50&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.35%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;13.03%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300553&quot;,
            &quot;stock_name&quot;: &quot;集智股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;42.72&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quo   mstock_name&quot;: &quot;新宏泽&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;20.13&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.93%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;27.91%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300703&quot;,
            &quot;stock_name&quot;: &quot;创源文化&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;32.55&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.43%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text   n     },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.97%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;0.19%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300515&quot;,
            &quot;stock_name&quot;: &quot;三德科技&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;13.82&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.97%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;23.49%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002836&quot;,
            &quot;   oquot;: {
                &quot;text&quot;: &quot;25.91%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002802&quot;,
            &quot;stock_name&quot;: &quot;洪汇新材&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;29.64&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.99%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;24.41%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002357&quot;,
            &quot;stock_name&quot;: &quot;富临运业&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;9.03&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
          p300611&quot;,
            &quot;stock_name&quot;: &quot;美力科技&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;17.11&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.99%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;26.96%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;000014&quot;,
            &quot;stock_name&quot;: &quot;沙河股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;15.40&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.99%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&   qt;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.00%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;3.41%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002871&quot;,
            &quot;stock_name&quot;: &quot;伟隆股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;43.67&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.00%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;46.75%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;   
 
 E                                                         ��E !	K��dengxiaowu策略选股-股票列表接口
    
**简要描述：** 

- 一智金股，涨停大师，主力雷达 接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/Select/start `
  
**请求方式：**
- POST | get

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |类型 ：
			'smart_daily' =&gt; '一智金股的股票池',
            'smart_change' =&gt; '一智金股的今日调仓',
            'smart_history' =&gt;  '一智金股的历史',
			'smart_winners' =&gt; '一智金股的牛股',

			'top_change' =&gt; '涨停大师的今日调仓',
            'top_daily' =&gt; '涨停大师的股票池',
           m�g !	=�qdengxiaowu板块主力资金流入
    
**简要描述：** 

- 板块主力资金流入接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/Theme/getInflowList `
  
**请求方式：**
- GET 

**参数：** 

 **返�   u    ot;-6.146&quot;
        },
        {
            &quot;theme_id&quot;: &quot;429&quot;,
            &quot;theme_name&quot;: &quot;云计算&quot;,
            &quot;net_inflow&quot;: &quot;-305740560.53&quot;,
            &quot;net_inflow_app&quot;: &quot;-3.057&quot;
        },
        {
            &quot;theme_id&quot;: &quot;268&quot;,
            &quot;theme_name&quot;: &quot;电子元件&quot;,
            &quot;net_inflow&quot;: &quot;-298407920.74&quot;,
            &quot;net_inflow_app&quot;: &quot;-2.984&quot;
        }
    ],
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

说明：交易日 9:15-9:25 小程序返回 - -  ，APP 返回空字符串

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|net_inflow |string   |小程序用 （旧） 单位（元） |
|net_inflow_app |string   |APP 用 单位（亿）  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�5   t�示例**

``` 
{
    &quot;data&quot;: [
        {
            &quot;theme_id&quot;: &quot;410&quot;,
            &quot;theme_name&quot;: &quot;医药&quot;,
            &quot;net_inflow&quot;: &quot;1132576832.25&quot;,
            &quot;net_inflow_app&quot;: &quot;11.326&quot;
        },
        {
            &quot;theme_id&quot;: &quot;399&quot;,
            &quot;theme_name&quot;: &quot;乙肝疫苗&quot;,
            &quot;net_inflow&quot;: &quot;837555408.22&quot;,
            &quot;net_inflow_app&quot;: &quot;8.376&quot;
        },
        {
            &quot;theme_id&quot;: &quot;425&quot;,
            &quot;theme_name&quot;: &quot;抗癌&quot;,
            &quot;net_inflow&quot;: &quot;472484534.23&quot;,
            &quot;net_inflow_app&quot;: &quot;4.725&quot;
        },
        {
            &quot;theme_id&quot;: &quot;277&quot;,
            &quot;theme_name&quot;: &quot;次新股&quot;,
            &quot;net_inflow&quot;: &quot;-614592335.05&quot;,
            &quot;net_inflow_app&quot;: &qu   r,
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;7.63%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300633&quot;,
            &quot;stock_name&quot;: &quot;开立医疗&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;42.20&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.00%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;12.91%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;000710&quot;,
            &quot;stock_name&quot;: &quot;贝瑞基因&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;60.95&quot;,
                &quot;color&quo   � �                                                                                                                                                                                                                                                                       � !	1�Odengxiaowu获取配置信息欢迎使用ShowDoc！
    
**简要描述：** 

- 用户注   ��| !	7�!dengxiaowu小程序审核接口
    
**简要描述：** 

- 小程序审核接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/miniapp/getStart `
  
**请求方式：**
- POST | GET

**参数：** 

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;start&quot;: 1
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|start |int   |1 审核中 2 审核通过  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�	�   v    &quot;stock_id&quot;: &quot;600666&quot;,
            &quot;stock_name&quot;: &quot;奥瑞德&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;9.24&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.03%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;0.20%&quot;,
                &quot;color&quot;: &quot;ffffff&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002265&quot;,
            &quot;stock_name&quot;: &quot;西仪股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;14.10&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.02%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }    b  � b                                                                                      �q !	1�dengxiaowu获取配置信息eNq1VU1P1EAYvvdXTGJCdMNuF7lBGg5qvJhoBL0Q0y3t7DK67dTOlGWxJIC   f�- !	1�dengxiaowu获取配置信息eNp1U09vEkEUv8+nmJMHUkpBJIpHNV5MNLZ6hQ27bCeBHdwdgolrAqStbUDABBsKtbGWVg4N2IA2ApYvw84sJ76CswwopXQ2m3nz3u/9ze/R82/2oDD8M2DlxvomTj3GkXE/AyA/wOVizbR9lqHFoj34Me5XXS4IgBtyKN29pO2GtZOnhVOreAI41m5d0ovsq5fPpkA3DMNNQhJG0ONJvSWKQVajSDdIChkyjq9GNI+USHhUhTzCWhSpMAwmKUUYuv/b6hcnkXigF8/XN6AJnz7ZcBJZxSz9/K8cUzyt0kfTGmyP0nsmu+hZRznTbnVopWACM+jmx2loIomnG5ruqZojEjGJRLEehyattLjGIDrSVGjazSur/oF+OaXdEkTYGPfzUNJkHSMZOnIcaYg3IYJw4bWiGwhri2Ggg2F7u/TwfFIGAJD3OShbtSNW7w6vcrxJEA6HIZ/Au8no77xJYvJQ0XWshyJYVsQ7CNdW5syyRKSZQbjNLEkkzwzi9opr5TrKUHRNiisLUJ/3np9/yzxuoq1Sh7V7NJ9dBld1nEz8L8UHr5t1RQ0RdCO//27gfsDvDTxYFjImGSQUwyrSlriuzXu8B87Ppzo3bUEVQYxF8ixljXtKGk6bGV1uO9xl2i80kUYcjdgT1ttCMmeLlzPW/rXNut9Z85iVdqxPlXG/5uNaetAcpasCPaOHw7t2Y7pwtNax6lXRw6h8YLdaw94J+5rhu8IOc6Oz/dHxT1bdmjeJnQUA/AXJw5y9cZ���                &quot;last_price&quot;: {
                &quot;text&quot;: &quot;15.39&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-1.79%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;finance&quot;: &quot;3.5&quot;
        }
    ]
}
```
未登录返回
```
{
    &quot;status&quot;: 2,
    &quot;info&quot;: &quot;请登录&quot;,
    &quot;data&quot;: []
}
```
 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|last_price |string   | 最新价格  |
|change_percent |string   | 涨幅  |
|finance |string   | 财务评价  |
|sig |string   | dk 信号 1-多头 D点， -1 空头 K点， 0-无信号, -- 是停牌 |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[���                                                                                           �  �                                                                                                                                                                                                                                                �[ !	��{dengxiaowu榜单
    
**简要描述：** 

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/Market/stockTopList`
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |类型 change ： 涨幅， 换手率：turnover  |
|order |是  |string | desc 降序， asc : 升序   |
|page     |是  |int | 页数    |
|page_size     |是  |int | 每页数量    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;stock_id&quot;: &quot;600666&quot;,
            &quot;stock_name&quot;: &quot;奥瑞德&quot;,
            &quot;price&quot;: {
                &quot;text&qu   �    CDvTXWxTkpGKyfr17fONPIRtpktvSxz0Q7apTCnGj+Wzs8Rb+F8Rt2c34zGysk7xMUuwrXjRUfP5TAcPdHm26cufowVukFr1RSY50KrphifBbNvpcAZmIv31nfbeVfb1NRgu/+6rJY2VOMM7RTGtaCSDoMwsS8Wl+BmUCMqU79QOdhJ1sFwDi24wOyMWEjp8tZwv3CNeQRPc7qPQwVnF6sr5WoK+WxLIypzv1BN0k6PJlCVUg74SjCXB6cfbtpVLT0Pu8WyZshUhJtGqPwSbu5kuDF/puHG8iXc/F/CjeV64UY1T2OeWx2M296a5aATRsPwr7BYnJGyRUJ9ebQFHT0Bp/GgKO3uunbdXdnbZquTmWScal5RDS7lMDj3XTdwagyeV5BXF2ra7WYEt2bYh8FKYRcuH4nxuf7C7uh9SKgsy/UJq76f6NlL+kdY7DP0DD8S9DlOym8BX6H3ltjDcdSn4Ct6LWNcujDDjUCNpjeD+VbI2itN0JMi9I+uTat1Rlj0Fj6dxUhgIARmDu96hJVx23lOYDkPK0zpBB/Lwui0WPwH+nZ1gLfcBnXVM0E9WWD/iItttuKdcki78xbTaIcEqc1rJbR3gbkycHaC0Y4bZ0M3hJu6DdKqJvp6kvz+cbZusrX3u7/6dvEWHu1gBBiNDseZPwVhMWr+KeOiBfnbswbGFmO1h7W+u+gG/rUexhJdPhx1kqbhrtMPIBOpLh1JyShcyVfOlhpVh/weSOTAceaiFFW+mVRO5uF6GHUqs1iwfSAlk6hTmSvAN5mqbx11wkShJpM9BaEjmHgHN9LKyFwpb6B9CfrfS7t+6JsGhZ36jBkQmcerCLZRtrmAv22BjbD8eFTfBKXyH//6/Jc1j9UwMgmXj9qB00LbGpsp08gg9c0gNXypH8/D1Rz8M43MuqpAoawGydWJSrm2w6p8pLOyjtbZR4dHKNPVhQpZr5Ot2FXtZQsC/76sVbYIuJ+SyguVs7K4vDc6zj97wNsvStP/ARPwbSk=c[�X�    O  O                                                                     �.@ !	+�dengxiaowu自选股接口eNrtVU1PGkEYPju/Yi7tgbjASkClV5se2qRN1VPTyHZZkai7lh2jjWsixMZaLXhAVCBGFK01bdEUaxQsf4aZWU7+hc5+gCxRmzbpzTm9+77P88zXu88AyAZwuej3Bf0gTlIpvXZ8Vc26XBAADupLR42FZT1RIMl9nNoDDKiXzshJYvjlMxvFwRAcQ2gq6PHwfT63P+DmA1437/N5ZGkmKoelWU9EQsOqFBtEijiuwhAwJ7R0SOYcV1OmFFN68XxwCGrwyeMhYyacSpD11mIgo9TSOLdNixf1XysMD0KhEARzwNjBw7fTCnqkIgFNq1YchN7utlJUHlWaBRs8LYqSaqPboWEBCU3oKzNvjLlW1CYadkryfK+/Xc+JVt9NvlEmnIyA19fTF7iDY5zZiCxMSk4e2dinuQ80fYq/rd3BjkacNO/t2AlBRSNTsajYmsm542skkmZRx779bl//TdLXJFGZUGIdrLAQ9vNW7GDN37Q+cUyQI9LIlBQTJRn9/Ro53t3b/+A/L3I0Kguy2HlX2QTZ2NFLi/Tic4cQE+nquu+s+876t85idtvZUGb0Gswb5ghI/ohuVfDluuWcZu52v+y52y+ZYVtif3DM5uQtw7Z8XC+VyWbStHLNyuC1Txo9qeDtFc0qakALcsaA0A40+/PWwSjX7QU1FcWicsTIQ5JfIJnjeuWM7FRNnPOandifh/j8vYmyz9lR1su7+GOB/cBMzQSx7ncAwuOwXivg1BnkOVzM4mIZDtDE+VV1FXI8pF8ujMxTO+PlmBtY8G7INkc2Sziep8urTNk4NFxcIj8O7QeY5MpM0DrHRnpLL5XqlT26EzcuI7/SOMg0Cqc0u9hest5wAAD5uqvXkvXLGk0fDo4pMwOKeFWN/waFVrcYc[���   ~ ~                                                                                                                                                                                                                                                                                                                                                                                    �wB !	=�\dengxiaowu公司财务评级详情eNrtWV1v2lYYvvev8NUuoiYYErSsu60mTZq0admupoq4YBqrxO6wSRuVSkBIgJRAtnwsDSQZWT5o1UHSkC8g8Y8Z59hc5S/swAHHfAQSOzTZVAuBfXjfc57nvI/f89qHINFB9PXJGZ+y44fxuCLtXRRX+/pIgugn5cU0DB/DgzSYicLYNoj/RSBbJXsM9wM///hdzbCfHCVN37AczdkZ01NGHBF5+7PaNTlKVPvHPnD5FBTjVTfk9cP3Iz+RlQ5BPACX1GG9+BLMz3mBNF32RbzyfgGsv/Eq2RxciXkJ78N+dFSAV8/wZT/p7a81IwthcvwJ7yK9cCWLrgXRzXJPSa8SSMnb6W8fVW0IgkSwpEWQWJe38qXzNwgTMTo6ShKviErfX/zq4cWvBZEWPQI+f0hSDzR/sZyTr/9RM/bY7YxQs9aaOmiRrpvi3q8aAf9StS5MJjOaFfgxBZORi2KUqlwkI6SS2wSzKSUblPO7Tb058bQ3dmcesKodwpUN9Gnyol0um5vmnqFZUmGaTGA6XZ5Kw9jvKBSqgwY443I2jmMZoqxa8i2DNJoPDg4N4jPV+vWDJmQs5  t                  &quot;text&quot;: &quot;20.56%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300585&quot;,
            &quot;stock_name&quot;: &quot;奥联电子&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;16.98&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.20%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;16.50%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|scope |string   | 涨幅  |
|turnover |string   | 换手率  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�a�   t;,
            &quot;stock_name&quot;: &quot;跃岭股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;9.50&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.35%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;13.03%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300553&quot;,
            &quot;stock_name&quot;: &quot;集智股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;42.72&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.32%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
     �;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.93%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;27.91%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300703&quot;,
            &quot;stock_name&quot;: &quot;创源文化&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;32.55&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.43%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;37.33%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002725&quo   �         &quot;turnover&quot;: {
                &quot;text&quot;: &quot;0.19%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300515&quot;,
            &quot;stock_name&quot;: &quot;三德科技&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;13.82&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.97%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;23.49%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002836&quot;,
            &quot;stock_name&quot;: &quot;新宏泽&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;20.13&quot;,
                &quot;color&quot;: &quot   �ot;stock_id&quot;: &quot;002802&quot;,
            &quot;stock_name&quot;: &quot;洪汇新材&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;29.64&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.99%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;24.41%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002357&quot;,
            &quot;stock_name&quot;: &quot;富临运业&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;9.03&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.97%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
       �  �                                                                                                                                                                                     �> !	3�%dengxiaowu行情-大盘指数eNrVVstu00AU3c9XeAOLiDh2HbtJ2LJBAoEorBCqXT+oRWpDPHlIVRepkBoI1F2EUhJAUKKqC5BbtSgthORn7LGz6i8wdpLWRqmEERVhVqN7zzlzZnSkuYDAC4BEwrM6aH/13p0bJ91mIkGAJMEvQvg4l0pJcoksV6BsQFJRCwYsq4akL5GilropFB7JMKVreVWTr2uSXCF4gOXGamjz2OmagSDWu31r7m5wlGOuold7o3MAIDC833Ba7932N7tXx1jA8zwBloHv7fKTog6vGlCARWO4zxHUlVBL1RR93BiBi6IoGyN0GCoJUBhD7wd1fy2f7s6Qoi7JUVHKX3RYM8rQhKVfGPbRc8+qohdr+LLn80pCvnhKjFo5A0G5AqPiDM0x5Aw3STd8i7xeiPLkBYZhFob7CGtlkjlJVZT43pI0TdJsbGu0JEgsHcfafEGAf/B2SYpk2EsX7E8QoVqS55W88HAsMwMmMH4vfUw2GzN9qLPvp6+2gQP419NHUxyTJhlqOuOXZcn07FTHL5P9D+PHxYmfU2vZR033We1C4pfB6ZvNTGf6GIpkM1OcPprk0v82fcHuAVjxv/nQ9z8cCzzrEG2t+5OBHyo8JKCtHh4MnI2XzpfXIAgMLuK/dfBu220+xQy/7j9IUK7jstPZ8XrH0WbwWjliBDAPIgDfg9NeQwe7wUSSJFDr0Gk3h7YGjTeeZdnfP7kfqniscd/WBzubg49fMT3cQqbp9ffwOIM+b3v9dftH323szi3q5Wu6eNKt/gSudOilcZ�@�   �      &quot;value&quot;: {
                &quot;text&quot;: &quot;3163.26&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;diff&quot;: {
                &quot;text&quot;: &quot;-11.15&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;diff_rate&quot;: {
                &quot;text&quot;: &quot;-0.35%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;active_flag&quot;: 2
        },
        {
            &quot;code&quot;: &quot;399001&quot;,
            &quot;name&quot;: &quot;深证成指&quot;,
            &quot;value&quot;: {
                &quot;text&quot;: &quot;10634.30&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;diff&quot;: {
                &quot;text&quot;: &quot;-95.47&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;diff_rate&quot;: {
                &quot;text&quot;: &quo    t;-0.89%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;active_flag&quot;: 2
        },
        {
            &quot;code&quot;: &quot;399006&quot;,
            &quot;name&quot;: &quot;创业版指&quot;,
            &quot;value&quot;: {
                &quot;text&quot;: &quot;1834.78&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;diff&quot;: {
                &quot;text&quot;: &quot;-30.58&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;diff_rate&quot;: {
                &quot;text&quot;: &quot;-1.64%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;active_flag&quot;: 2
        }
    ]
}
```

 **返回参数说明** 
name：显示名字
value：上面的数字
diff：下面左边的数字
diff_rate: 下面右边的数字

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�L�   �ot;: &quot;9.24&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.03%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;0.20%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002265&quot;,
            &quot;stock_name&quot;: &quot;西仪股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;14.10&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.02%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;7.63%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
           �},
        {
            &quot;stock_id&quot;: &quot;300633&quot;,
            &quot;stock_name&quot;: &quot;开立医疗&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;42.20&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.00%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;12.91%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;000710&quot;,
            &quot;stock_name&quot;: &quot;贝瑞基因&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;60.95&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.00%&quot;,
                &quot;color&quot;: &quot;   �1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;3.41%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;002871&quot;,
            &quot;stock_name&quot;: &quot;伟隆股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;43.67&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-10.00%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;46.75%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;300611&quot;,
            &quot;stock_name&quot;: &quot;美力科技&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;17.11&quot;,
        �           &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.99%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;26.96%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &quot;stock_id&quot;: &quot;000014&quot;,
            &quot;stock_name&quot;: &quot;沙河股份&quot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;15.40&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-9.99%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;turnover&quot;: {
                &quot;text&quot;: &quot;25.91%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        },
        {
            &qu   �\�                                                                                                                                                                                                                                                                                       �# !	7�odengxiaowu大盘涨跌幅分布
    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://wxtest.firstwisdom.cn/Market/onlineScopeCount `
  
**请求方式：**
- �g !	7�wdengxiaowu大盘涨跌幅分布
    
**简要描述：** 

- 用户注册接口

**请求   �  � !	3�Wdengxiaowu行情-大盘指数
    

**请求URL：** 
- `https://wxtest.firstwisdom.cn/Market/onlineIndex `
  
**请求方式：**
- POST 

**参数：** 


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;code&quot;: &quot;000001&quot;,
            &quot;name&quot;: &quot;上证指数&quot;,
         �    �  �                                                                                                                                                                                                                      � !	1�edengxiaowu保存用户信息eNp9U8Fu00AQve9X7AlBwA2VOIVrK4QEApEiDgjJluM2BmEH76ZphZGaCkpo1DiHtA0ppC1J0x7auIGgAg3xz3jXzqm/wNrrlBCk7Gln5s28tzOzALIDYjGvveK38tSyfOf0oleLxSAAAnSdz+SkSvpt19n3Kke0cMYuNG/T0gGxGoDl+fYZ7aw+fnQvShKgmMY4gxLxeG4JKwhPzasGwjkVpfSXU7IWv69qqpTJxJG0qDxZuqvN61AEoQReim79JD0rrMaKPXyQnIMmvDM7F5ARa5VuXsozuUnKGyZx3g1WPphe55zUi6Zvd2m1ZAIzIbATPDC8cVOAphC5GULWUwo0adVmFsKGqi1A7guj6uJ4DDIXjymabCxnsJKakbAEQ+cYlKzvEXuNKaQb7SjJkHIh/D9oaZccFjmUnGx7xy33x9coJ4sUI2zTCMdzpGssjY/kHwakLmgSzhrKKDw55HF/OywHorQ0fRUOxVyHSEFI1bUXyjK8Bkl/mxROx1QAANmAnArZqXvNX26/yKZDC2WyvsudQBRFCF6DAH3lVVbHtxFmMhC/J+DNGyMhlb1mGIjAWVlmGrgxCk0xgUPoNHgT0IBB5aNv2395J9AKtybzBqP2Dxu0Xo563+z43YPJMp4+i3RcdoTvId+68c0cW8mwj6T5nn47ir4Y3emSZo0X4i9zzxveXp79Bu9TcdDaGux/92pvR0P8l7Ja9PiL75T4UJNpPTejyxe9/B8jlrZzcZ��    ot;image&quot;: &quot;https://wx.firstwisdom.cn/public/images/timing__banner2.png&quot;,
            &quot;url&quot;: &quot;https://wx.firstwisdom.cn/?code=1&amp;state=do_login/#/module_product?type=ztds&quot;,
            &quot;remark&quot;: &quot;&quot;
        },
        {
            &quot;id&quot;: &quot;4&quot;,
            &quot;image&quot;: &quot;https://wx.firstwisdom.cn/public/images/timing__banner3.png&quot;,
            &quot;url&quot;: &quot;https://wx.firstwisdom.cn/#/module_product?type=t0&quot;,
            &quot;remark&quot;: &quot;&quot;
        },
        {
            &quot;id&quot;: &quot;5&quot;,
            &quot;image&quot;: &quot;https://wx.firstwisdom.cn/public/images/timing__banner4.png&quot;,
            &quot;url&quot;: &quot;https://wx.firstwisdom.cn/#/module_product?type=dk&quot;,
            &quot;remark&quot;: &quot;&quot;
        }
    ]
}
```

 **返回参数说明** 

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZٍ�    ot;: &quot;创投&quot;,
                &quot;top_symbol&quot;: &quot;300110&quot;,
                &quot;top_name&quot;: &quot;华仁药业&quot;,
                &quot;top_change&quot;: &quot;1.48&quot;
            },
            {
                &quot;theme_id&quot;: &quot;435&quot;,
                &quot;theme_name&quot;: &quot;铜&quot;,
                &quot;top_symbol&quot;: &quot;000630&quot;,
                &quot;top_name&quot;: &quot;铜陵有色&quot;,
                &quot;top_change&quot;: &quot;-0.38&quot;
            },
            {
                &quot;theme_id&quot;: &quot;445&quot;,
                &quot;theme_name&quot;: &quot;旅游&quot;,
                &quot;top_symbol&quot;: &quot;600258&quot;,
                &quot;top_name&quot;: &quot;首旅酒店&quot;,
                &quot;top_change&quot;: &quot;2.18&quot;
            }
        ]
    }
}
```

 **返回参数说明** 

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZُ�   �;,
                &quot;theme_name&quot;: &quot;养老金&quot;,
                &quot;top_symbol&quot;: &quot;600723&quot;,
                &quot;top_name&quot;: &quot;首商股份&quot;,
                &quot;top_change&quot;: &quot;-1.75&quot;
            },
            {
                &quot;theme_id&quot;: &quot;355&quot;,
                &quot;theme_name&quot;: &quot;一带一路&quot;,
                &quot;top_symbol&quot;: &quot;002302&quot;,
                &quot;top_name&quot;: &quot;西部建设&quot;,
                &quot;top_change&quot;: &quot;2.67&quot;
            },
            {
                &quot;theme_id&quot;: &quot;391&quot;,
                &quot;theme_name&quot;: &quot;光伏&quot;,
                &quot;top_symbol&quot;: &quot;300376&quot;,
                &quot;top_name&quot;: &quot;易事特&quot;,
                &quot;top_change&quot;: &quot;1.83&quot;
            },
            {
                &quot;theme_id&quot;: &quot;427&quot;,
                &quot;theme_name&qu   �URL：** 
- ` http://wxtest.firstwisdom.cn/Market/onlineScopeCount `
  
**请求方式：**
- GET

**参数：** 
无
 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;涨停&quot;,
            &quot;num&quot;: &quot;30&quot;,
            &quot;color&quot;: &quot;eb333b&quot;
        },
        {
            &quot;name&quot;: &quot;&gt;7%&quot;,
            &quot;num&quot;: &quot;9&quot;,
            &quot;color&quot;: &quot;eb333b&quot;
        },
        {
            &quot;name&quot;: &quot;5%~7%&quot;,
            &quot;num&quot;: &quot;26&quot;,
            &quot;color&quot;: &quot;eb333b&quot;
        },
        {
            &quot;name&quot;: &quot;3%~5%&quot;,
            &quot;num&quot;: &quot;68&quot;,
            &quot;color&quot;: &quot;eb333b&quot;
        },
        {
            &quot;name&quot;: &quot;0%~3%&quot;,
            &quot;num&quot;: &quot;655&quot;,
            &quo    �  �                                                                                                                           �x !	7�dengxiaowu大盘涨跌幅分布eNrNl19v0lAYxu/PpzhXXpAxWmph4KUab/TG6TWwUhxxa5G2wcQuEWLcFKUm4kC2LHNjZCZGnM5sbji+THtarvYVPP3DYFmMh9gmnIty2uft+3taet6cF0A8QChkfn1udcpI06z+t/NeKxSCAIShWd9Ha0fox77x8g2q7RnaLsCxVvcIHVQe3r/rBYZhGi7KciEZiZSeyrwkz+byRUku5aWsuDzLCZF7meJjXo6IwlJe4Oc5scDfFBVBhmngsN18aP2X0dOclDjjndsPbJShVdCHoSHU2AYQh/frxsaW2T7Rz6o4FqTTaQieAftBrj1RRPmGJGdkRXLnSUjNjEl5IScOBS9Y4The8qLHQ7MZOTMMdbOPNKVAU1e1kS4oy0OZ8fiXAzhxSSxeNsIvMAyz4M4v7liZuUKOp4jZCZ/RbCpOSI7GfEYzKZYQHZvzGU2lGFI0y/rKzoolgZxOJ2IMIZ7OZrIsTYInf+/X6bjvdPIPbi7mO3yChRalfKcTs+n/YwP3uAKAftJGzfeosQdR47N+/DqRpKhwIhllIWqe4XJrdCr6cRXX4ukttu5vODwO+Od7yTnD18IbqA/yRRGoDfLKEKgN8voYoI3JCnXARqbij5msegdsZDpW7kRV3UcfFxUeb5TBaAPtbq2t7iFq1pztvupeMd69Vc2DU2OrqrqiCtRk2B4QehPVO/3rwLfgZ4GqJBfzwiP7Ak48WNUcxTE+rg12Nq1X323Ndme0V3HD4TUgaOPQaLdcw4P6R6vb1U93ze0ybhnMzeqgsz749NNsvRiX3B4GAIC+7Fj9mv67j7uY+UWxdEvkznvlPzEr520=cZ�GI    # � #                       � !	+�5dengxiaowu自选股接口eNq1Vd1v0lAUf79/xX3ygYzSUj4Kvmp8MdHI9mQMYKmMuJVJS6ZZlzCyDw0RXLIhg2UZDjc0um46nbN8/DO9t+Vp/4IthVlIWALL7ktP7/n9zr3n19NzADQWcDi044x+uIILBb19ctkoOxwQACfUN752Mu/0bBXnP6PCATCAunyOT7MzTx72UE4YgbOiuBB0uSiGJrw+gvKRBEXTLp5bTPAx7rUrzokzApcKiUn2pQAjoHugFQcXL1Cj0A1lRHr8KDQNJfjg/rR5Eipk8Xb/MvjjPlSb67gko/Zap6poOwpqbgMAjUjtLVTZ02p/1VbOCAMikQgES8BM7M6rdFK8K4hRMS1YdhCSUzZXgn+R7Dt64DTLckIPbYfGomK0D33a3TfX0pVlCxobDEmTtD3cIFh4M/88OTdMID0B3zUcU8kwH53nBnnqn+/a0SZ6W9FbrevYdjmsJzkaPhcVxPBCKsEOHUYzhM8/msbORvk4F17gUizHi4NUN+FjLOuKuDw1pqTu8SQlSXfg2s8wQlJ0vKHlZaMOcf7o1iX1UAQ9maJOL+G9saTU2FXqJT0TSFr70sluGk1FVZq3LylN0BNWqd9oZjeT1O0PjC+pJzDBj98ooda59qOF5PVbl5RiCIaZsExpwkMPa9q1noFls3HbGrrV/nX5DJfy3XEkWTvow3tJO1XQXk6ynBKQgk5zQdgzpN7ryGVQ/mcHJUFMJfi4uQ/xbgYXT1TlHO83urjBdAaxv+voYs1EmbdGtQ38s94bnLhyhmplK5HO1o4uy6pyoO2vGFNP2811Doud6i+tvGp3WbMXAIC/fdLbebXZ1rbqodnk4r0ke9lY+QfPxpZacZِ~V 	!	udengxiaowu说明eNoBGwDk/yPoi7Hoj7LliJvmlrDmjqXlj6PmlofmoaMKCvtGERY=cZق�   �t;color&quot;: &quot;eb333b&quot;
        },
        {
            &quot;name&quot;: &quot;0%~3%&quot;,
            &quot;num&quot;: &quot;1963&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        {
            &quot;name&quot;: &quot;3%~5%&quot;,
            &quot;num&quot;: &quot;417&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        {
            &quot;name&quot;: &quot;5%~7%&quot;,
            &quot;num&quot;: &quot;86&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        {
            &quot;name&quot;: &quot;&gt;7%&quot;,
            &quot;num&quot;: &quot;20&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        {
            &quot;name&quot;: &quot;跌停&quot;,
            &quot;num&quot;: &quot;10&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        }
    ]
}

交易日 早上9:00-9:25 显示如下：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [   � �                                                                                                                                                                                                                                                                                                                                                                                                       �l !	7�}dengxiaowu小程序审核接口eNp1UstOwkAU3c9XzMoFsSIucatxY6IR3Zfw0C6kSIdg4pAA0RglUhdoFA0BQcNCrUZ8AdqfYWbalb/gtNMqGr2re3tOzj1zegHkBQIBdluwropU1y3z7mNQCwQgABIkdzrrlElPJ7dN2nihlUuitwCnW8YzvS+tLM17XAnKcA2htBYOBnObKKGhiaSS0VBO0eLq+kQsFVxXUko0nQ6uJlAERTMIysBdLJTo8SsZ6K4Y11pciCxDDOdml51dRC/Roy9TWIzk8AATc8cu7GF23yf1MraMLj2pYIDDEi/nWW4nRgliyfvMGZprANMTg49Kirds/4kWii4KIDdlVslZnbV7w/cydwRkWYZgCziiYxtZFU1zBZTVRB+Gk+MjkJJKqj7gkbOxWELz2KPUeBRFfapQ/7Ehg3ww5IJ5kHecjDgUWYiX/07nz1gkLxWei5/Hf/Wdk5MQn0NQXMHw5QZOeb1dqFnmrh8bae/Sh453O/SsS9o14dOunlqGMey3WKPIfzg7L9tXx3bzkdW2RyFxfgAAen1hmZXhm8mqnciamptRYx+D4idJmCYwcZ��   � �                                                                                                                                                                                                                                                                                                                                                                                                                                �S !	=�Idengxiaowu获取注册礼包信息
    
**简要描述：** 

- 获取注册礼包信息接口

**请求URL：** 
- ` http://wxtest.firstwisdom.cn/newindex/getWelcomeRegister `
  
**请求方式：**
- POST 

**参数：** 

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;img&quot;: &quot;https://wxtest.firstwisdom.cn/public/images/register.png&quot;
    }
}
```

 **返回参数说明** 

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�"    S  S                                                                       �:
 !	C�dengxiaowu获取微信手机号登录eNrtVu9P00AY/t6/4j75gTg2MCDDGIOBYAgGRA0aY7LSdqMq7WxvbMSSbFOQ30MCkx8Log5djDpRdMCG+190d+0+8S94621uq4XoRxP66Xrv8zzv27u3dw8DyMM0NOgfw8abCI7Fj   !�e	 !	1�udengxiaowu微信登录授权eNp9U89PE0EUvs9fMScPjUs56IF6ktAQTYmk1IMxJNvsbsuasFO70xTjkLQooaSx66EtUH4IUkkPhoWIMdLC/jOd2e2Jf8HZnS2tRpjTzPvefO9775sBkC8QibinJe+kzCzLc85ueq1IBAIgQXp92neO3J0uvWqwWoXtf2C1b9Q6BvyGZ/9i52svk4kwXYIyXMI4Z8ai0eIK1kw8kdHzJi7qpoqWJxQjOqcbejqX42gCZXUDyiAoLYhY8zftWQEXp5p/sZCCBM7GU34paq2xxq0sIo708ydCnfVBaZO45116UCWefcG2awSQmMSX31iwE0cJEikM8wwFqRokbNvmJxPndSMLRcxHAYBclVOnuwdu+7J/XeWSgCzLELwHPuuDtwWEn5g4jQum2Mfg5MMxSDcyaAiEyQVF0cwwezxVTeP0MFWwj7BlPi+U0wxd/ZsMZZ8W44/zs6+0yalERok/V6fnkqk3ycy7lbBsQLQKVn3VYFDf8Wxb9BME7u5CenR/G2LynrPB9r6wStMrrbOtQ9ao3N/X68VQyWiuIVFg2L+m/tdNKTST2zm08a7Fr4wmd2svj9Mzy+1U6aXlQ89mAqu5ItreYD864Ytnuxe03RIixeD63WP3sMwfqbtXHZw0B0c/3dbHcUh8Gv5q2PevnlPrXzluvbOwhIozSLnplf8ArehpuA==cZ��~         &quot;theme_id&quot;: &quot;236&quot;,
            &quot;theme_name&quot;: &quot;生态园林&quot;,
            &quot;change_percent&quot;: &quot;-0.21&quot;,
            &quot;top_symbol&quot;: &quot;000010&quot;,
            &quot;top_name&quot;: &quot;美丽生态&quot;,
            &quot;top_change&quot;: &quot;1.88&quot;
        },
        {
            &quot;theme_id&quot;: &quot;235&quot;,
            &quot;theme_name&quot;: &quot;租售同权&quot;,
            &quot;change_percent&quot;: &quot;-0.78&quot;,
            &quot;top_symbol&quot;: &quot;000560&quot;,
            &quot;top_name&quot;: &quot;昆百大Ａ&quot;,
            &quot;top_change&quot;: &quot;3.76&quot;
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|change_percent |string   |板块涨幅  |
|top_change |string   |板块领涨股的涨幅  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ��X   �heme_name&quot;: &quot;共享汽车&quot;,
            &quot;change_percent&quot;: &quot;0.72&quot;,
            &quot;top_symbol&quot;: &quot;000572&quot;,
            &quot;top_name&quot;: &quot;海马汽车&quot;,
            &quot;top_change&quot;: &quot;1.06&quot;
        },
        {
            &quot;theme_id&quot;: &quot;263&quot;,
            &quot;theme_name&quot;: &quot;电动物流车&quot;,
            &quot;change_percent&quot;: &quot;0.81&quot;,
            &quot;top_symbol&quot;: &quot;600418&quot;,
            &quot;top_name&quot;: &quot;江淮汽车&quot;,
            &quot;top_change&quot;: &quot;5.11&quot;
        },
        {
            &quot;theme_id&quot;: &quot;261&quot;,
            &quot;theme_name&quot;: &quot;无线充电&quot;,
            &quot;change_percent&quot;: &quot;0.69&quot;,
            &quot;top_symbol&quot;: &quot;300207&quot;,
            &quot;top_name&quot;: &quot;欣旺达&quot;,
            &quot;top_change&quot;: &quot;4.48&quot;
        },
        {
           pvmkNHe1jbyyFQNM/RASxrmiGb0JgZDcb1NV0c0vVd91Nanmh1d3ZphgihTcUtN4bcFdJCtWCPGbly/dRtY4Frnbc8Zyqbxm5MlWXSIXmYsVHrurhQt+2sRLU5aTn4Xv5+2GKudJc3bVKVHhyyw2Oo07RBcvD+m96k9Q2oyruomsNDLTSI1zKSm9wEL722hwnOC71WNOHBnM2g/C2KkC1Bm3OsTC0nVHE7qPcmYqdaqAwXidxsdXXa6gF9nyocLOLdnz080sOcZHIr1qaCydGpN89YF3JXvZMeVaQrpMbQndXA4n6VQdzxL0QwgAS7l0Pyivb5fPpok0WWi0ShgRhkPcOXhcMK8apgxc9ig/XYAW30iTX+QOBZUwcPxuGpU0X5ob8yMHUOp9YBMDZrhYDjCQoENKwAq7RD67fn0SKiCeni5gDPbZH/l4g/n+w45mujVFJ4Ywwt5dLiKx1J4asYde2EvfcELS/6za889c9Ir9sZWfU8D5EQee7p7IvPaaGDki9rjwfuJgeDqJAjlMFfr4d9iwbM8bKzpO21BAywMQb6xrh4brFFCmXdoO2XPHjm7HxvrBs8H/XY2VhlKavEaf3JIEhorBesxqE12KERgGCoyr/CSQicDdp62/nfaIIQRKDc9bTDEwbNmrbw/477+QE5yuXjYnKxFlHNljVdETpSUsKQoEhQvNm+k3Dieu4S8Qe6seXPHZ9zCTvPyJoVk+Xx548WILEckTlREgbvoeuM46TLqDZ653tzZN2j9k/1sD+/kmlNv4XOljeOhKMiiCAWe4yIXnrawBC/ldlPOfLv9/NnU/6QUOt/lFhY4iYeyIEQERaj7mzwZ3WPo+KnH5HwMj/JiyoJrmXJdisxWGTIhw1WKzFheJE9ILJFTzgT+ILuniL/x3DoE+1TpmFxThorWx/G3reqDA8/vErpGt+TmZp18vlxcs5dT5J1AmJy7+ZZQXELm/CL6ZmEYBn9edUrT5cOSndu61Z8Y6UjEfx2kfgOUdDxJcZٓY   �
        {
            &quot;name&quot;: &quot;涨停&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot;name&quot;: &quot;&gt;7%&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot;name&quot;: &quot;5%~7%&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot;name&quot;: &quot;3%~5%&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot;name&quot;: &quot;0%~3%&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot;name&quot;: &quot;0%~3%&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot    ;name&quot;: &quot;3%~5%&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot;name&quot;: &quot;5%~7%&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot;name&quot;: &quot;&gt;7%&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        {
            &quot;name&quot;: &quot;跌停&quot;,
            &quot;num&quot;: &quot;--&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|num |string   |数量  |
|color |string   |颜色  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�Kb                                                                                                                   �nge_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1527091200,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.36&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1527177600,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.45&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            },
            {
                &quot;date&quot;: 1527436800,
                &quot;signal&quot;: &quot;0&quot;,
                &quot;return_rate&quot;: &quot;0.50&quot;,
                &quot;change_rate&quot;: &quot;0.00&quot;
            }
        ],
        &quot;kline_list&quot;: {
            &quot;data&quot;: {
                &quot;1515945600&quot;: {
                    &quot;open_price&quot;: 22.35,
                    &quot;high_price&quot;: 22.35,
                    &qu   �ot;low_price&quot;: 21.67,
                    &quot;close_price&quot;: 22.2,
                    &quot;change_percent&quot;: -0.4484,
                    &quot;volume&quot;: 1218400,
                    &quot;date&quot;: &quot;2018-01-15&quot;
                },
                &quot;1516032000&quot;: {
                    &quot;open_price&quot;: 22.15,
                    &quot;high_price&quot;: 23.38,
                    &quot;low_price&quot;: 21.82,
                    &quot;close_price&quot;: 22.8,
                    &quot;change_percent&quot;: 2.7027,
                    &quot;volume&quot;: 3000103,
                    &quot;date&quot;: &quot;2018-01-16&quot;
                },
                &quot;1516118400&quot;: {
                    &quot;open_price&quot;: 22.66,
                    &quot;high_price&quot;: 22.96,
                    &quot;low_price&quot;: 22.16,
                    &quot;close_price&quot;: 22.79,
                    &quot;change_percent&quot;: -0.0439,
                    &qu    hoaaIqy0ORimpzIaH6dbB3g5V0k7VCAJfIVPpv6+uVzGWih3UM8P8q5rNbgD57l+KYB7zjHB71cv3+kqc9n9bFBzjoWYMd/0m6qFM6kwGs3qCiVWICks6Ormxbo9o/dRhAkTeFoRYpgbtFKWEDKjC4uCNpZAaWXBCLncGxZoASXBT4jmdLK3FpowVI+BsSoZ5ClBRyTYef18bSgb10AZ9XYy3l/1SJoLEsGamPLBDpsgKUoGhJQIiiZ1rJ59W4J1FNut5umJihDwPuxgJ//0O/hPebKRZvnVRvv5z3DT0a7w+5orAOMs1xgmH/pXkXYmx2Mk2GcNtsT6lsNyvgmXpxU/b39T37mf8bmZMxV43+8+vw+nvXxta4P4gpRNrU9CafX4b60Yv5eTJFF+V7c0JOz6vVfJIVxLKPmZ7XIpprfx+I+ToXR4pZ6nVCvd/W5MC6k0cryg7iqXos4nkfKEbw6BqfmHU68vgvrx+Jvgyd5+1icxxdXKAyBFnDkRt84RNIqOotqmYh2eKnHt42/qFLRA+8W7ghUgSSToRIahTPtbZ1YjhgCYnKzvanlnRHn9hWZgK2sTQ8UziHpD04tMO/Q1R6SzsGVKHF0egZcZiSU3Sci6A6jYl5LTIMTdBhKZrRcRr1ZglQfxCk8v6oWjg3rUUw7gk671MUMBIEiQgWBE4dWsBitq6PJrxZ2IW3In5zckROQltfv4iibA7a3Cj0FdwOlJDPgKJPctlaALlx4+/5HA9957whbe/8Om91psTEWh5O2t7iYVpej9W0mzh8Y76sjAiEkFNGyd2+7B1nv4FDdOyx3wguvyZqTnspusr7rjNR6h70+9vWWqrZc5binnsIYI5XGfs1YmjEVBPVMR7kvfQP+2rQ6Pj0vR7l6vIcPcE84GzVpzJ9nc8mcluZsLM1Pw4Syc/j8oDzZcTKHsgkTrUfiRJbVwo6WCcFg1lJL+t4ajD3jWT4zmT8OwIWPt4myrN4qWuSga8gfbPP3PRZD/wCxAtA6cZ�5�   M NM                                                                                                                                                                                                                                                                                                                                 �~ !	%�5dengxiaowu公共说明eNpt0E1LAkEYB/D7foqFhY6jmyRReAi6eBFP3UVHWmrdbWfMulkmrYQvEeYLipIZBpq9gujWhxFnRk9+hUZWSaXjM/z+z/PMI0lsUBv14uPuJy1mplZZkAH9uhl387SSJrUayaX54yHGOtpxOGJnGCIMwoqBcExBIU0FwYhIzXtxJjiQt11gyw1ktxPILpewCWinQazs/73W+giCIEkSSbYmiRbNNEm2wcpXJNkmyTeSvaT519l2q7VJC3VilkZWnT33SafA2k+j3vvUSgnixklUw7sBXT+ABlK0iF2LMnB6PJ49v5+lTFppLxw6Rxiqa9QJ5vRjwI+0GtCPAzisGercDuNFRUPDeEnkkfHLD3m8ptUm7ecWPgRPlSD0BVQ4T3DHQzblh+HL8/RCR7G6wmivPrm4WwL8Xz6IY5pxZNeczXZg37dsUGGZLnlILGl7uDf019Oe693/BdwO9sc=cZٌ׉' !	%�dengxiaowu资讯列表eNqFVUtP20AQvvtX+NIeECEPGYjSKxWHVgIVeqoQScFAJEgAO0pbjOQg3jQYpATyIgQIr0IxiPBKAv4v4F2vT/yFjuOQkICKhcTuzjfffDO7M6Fo+KiGBu1EJHshLElEOX0sJ   �  �OMGzyWYYjFpJ2QGh/JhSPi4JSFgkkKBwLQNhtwQg7HxP6OV5Cf+ha4sJxgbKxassa3KD4ns3XO0u/5xfPbs6izDkhdz86a5O2q9jhtzc1Z+7zS7cvMmyzBdrH44aixnCpML1uP10+wT4/0Ojq/izW18OEXe6ofHeDpZSKatkxPWmN3CcxsMUWWl0sb+46///Y+Sni62m+3TtMHY7Vu3HvyghWMa+C4yFNMeRGK90fsgNHDrTrg/HNJuxbSeIY3tZooNcrQYz49wdq6oiOj51z/vfMWOsPfCmn0fPPfYePaxsSPOWzz/dATnxwujiRFz/xi/mhmxUu+MF7MjzMjtLvKyu1u8ct52sSNdpY9JDe3HwTA7YrxIkXcxbSgycI8taWHJbZgbN250xO6TNt7t7Yn0/9jBfvnZPe0LtqN8lMyVn+x/t3aM/bWOToYte5VkQ309A/fCtYT142ljacvaG9OPf75Yvi8S06JDH+9epQHPTuC5t0T2rLkPIgMD4aFYrXuaiSS5IBJFES06WNnG8u/9E220pc+PToVwzdGxJSsbWiHrdO1jc6vEK4bmYnGnAc74OB0Oh/qqvtEzsjsYhmEJj/lFnHxlbmb0kxkCI9Pd3c0yD4tt+Oz74aj2BaFXG44517dZrrOsKDLwXfRDQanycCgUjpVql1ft7dF6PlR9+LGHzidlXayuUqshzv9C+Z3OV+8nGi9WV3bnyP3w3f7IQPhDxf9UVbRfEPFIVhHPcZ01yyWeF13KRUkm4i7lSEGSW7moqrxrOeQVt3KIBFf9XLGBNcsFVeHc9AuKKoqu5ba4SzkSFVf9ouQ6voIgk+5xVcXfdNb46i8GsrremW53RuzXw5ol5RRHQ/+9O9BzP3yeZGLjjae7xmHqIqLdVEV6zyuSOEFRYP1aIgOh/uHe8N3BoUiook0iB0TkXZP9V/VB0dnw1aPh++GIViXu9s1fIH5RPyDgPIxILBQdDLuzcYEpCf+gnb/r5xAIyt/que2ZllC0Pzp0Xk34W   �ot;volume&quot;: 1973423,
                    &quot;date&quot;: &quot;2018-01-17&quot;
                },
                &quot;1516204800&quot;: {
                    &quot;open_price&quot;: 22.61,
                    &quot;high_price&quot;: 22.78,
                    &quot;low_price&quot;: 22.38,
                    &quot;close_price&quot;: 22.54,
                    &quot;change_percent&quot;: -1.097,
                    &quot;volume&quot;: 1044302,
                    &quot;date&quot;: &quot;2018-01-18&quot;
                },
                &quot;1516291200&quot;: {
                    &quot;open_price&quot;: 22.43,
                    &quot;high_price&quot;: 23.3,
                    &quot;low_price&quot;: 22.43,
                    &quot;close_price&quot;: 22.85,
                    &quot;change_percent&quot;: 1.3753,
                    &quot;volume&quot;: 1945610,
                    &quot;date&quot;: &quot;2018-01-19&quot;
                },
                &quot;1516550400&quot;: {
              �         &quot;open_price&quot;: 22.95,
                    &quot;high_price&quot;: 23.31,
                    &quot;low_price&quot;: 22.7,
                    &quot;close_price&quot;: 22.9,
                    &quot;change_percent&quot;: 0.2188,
                    &quot;volume&quot;: 1943205,
                    &quot;date&quot;: &quot;2018-01-22&quot;
                },
                &quot;1516636800&quot;: {
                    &quot;open_price&quot;: 22.92,
                    &quot;high_price&quot;: 23,
                    &quot;low_price&quot;: 22.68,
                    &quot;close_price&quot;: 22.79,
                    &quot;change_percent&quot;: -0.4803,
                    &quot;volume&quot;: 1121407,
                    &quot;date&quot;: &quot;2018-01-23&quot;
                },
                &quot;1516723200&quot;: {
                    &quot;open_price&quot;: 22.79,
                    &quot;high_price&quot;: 23.04,
                    &quot;low_price&quot;: 22.2,
                    &q   �uot;close_price&quot;: 22.87,
                    &quot;change_percent&quot;: 0.351,
                    &quot;volume&quot;: 1409324,
                    &quot;date&quot;: &quot;2018-01-24&quot;
                },
                &quot;1516809600&quot;: {
                    &quot;open_price&quot;: 22.76,
                    &quot;high_price&quot;: 22.95,
                    &quot;low_price&quot;: 22.6,
                    &quot;close_price&quot;: 22.88,
                    &quot;change_percent&quot;: 0.0437,
                    &quot;volume&quot;: 1261328,
                    &quot;date&quot;: &quot;2018-01-25&quot;
                },
                &quot;1516896000&quot;: {
                    &quot;open_price&quot;: 22.76,
                    &quot;high_price&quot;: 23.59,
                    &quot;low_price&quot;: 22.54,
                    &quot;close_price&quot;: 23.25,
                    &quot;change_percent&quot;: 1.6171,
                    &quot;volume&quot;: 1941254,
                    &quot    �  �                                                                                                                                           �h !	O�]
dengxiaowu第一次进入首页显示文案eNq1U0tvElEU3t9fMSsXRIp1B241blxVjQtjAsKUTtIylbmEJk6TAcvD8BhqgPBKLZVSVAKSYqEwhf9i5j5Y8Re886jQRZeezOLec75z5jv3Owd3z+g8r9/MSbHzckeMPhX9Sy0GOGbA4SA9hbZjWFXp/NdSqzkcHABOjnS7+ljB3Sad11HifNEuL5q/cWVGWhNcTuFmGrBU2h/hQfz11gs7z8l5uR0I9yWPyxU9gLwEN7aFsASjghQQ9zb8IVeIjwqhAH/gCvLwDb/rF/f4LT4oSJAPc15g8rGK4vI10lSzLiv7/Nkr439IjePSP5IAcAw9L6L6CWOlzzIMCrxeLwc+mr09+BAR4RMJ+mBEss4e7tHDtZAQ2hZvAzY44vfzko1ehwZ80HcLtaqvYlCAu/zdOmjW0+dNUp2imxJOl6mSwJ8zuDGhwzZSR5YfFfJLLUt+ZlDukuZHSC3r0xFSNLfbjRKfSO0IX3ZQMotaF6SloWzij1JEiRwdXtN+iQmpTyvGOd4k5x08ODXEqk4WqWPmQV+y+KqDYg2Wi8bpTX38AzfSTPL1vlb830cgFEN3G1goX43vLMloWR4z6RAcGi8M9HEOV/prM2KK8H1iBv/v6799Z3NYqW+NBe0PcSVvToZseVAhJ5PBFJ1kZCsoA9njNIzj7INsX+81lhIMi5F9IcDJQggaHvb4OD0i0yMhwATcZONIrxJkckF6TVJIouPKUqs/Zl5c7S2UmoU2ChmEUSvFZLV3DNeHqFWzelgUq7Tf16ffyGmMbQBpZKyVY3OwHrLWlI3+XxXs0jI=cZ��c   �;date&quot;: &quot;2018-01-26&quot;
                },
                &quot;1517155200&quot;: {
                    &quot;open_price&quot;: 23,
                    &quot;high_price&quot;: 25.3,
                    &quot;low_price&quot;: 23,
                    &quot;close_price&quot;: 23.35,
                    &quot;change_percent&quot;: 0.4301,
                    &quot;volume&quot;: 4568519,
                    &quot;date&quot;: &quot;2018-01-29&quot;
                },
                &quot;1517241600&quot;: {
                    &quot;open_price&quot;: 23.05,
                    &quot;high_price&quot;: 23.35,
                    &quot;low_price&quot;: 22.5,
                    &quot;close_price&quot;: 22.6,
                    &quot;change_percent&quot;: -3.212,
                    &quot;volume&quot;: 2433108,
                    &quot;date&quot;: &quot;2018-01-30&quot;
                },
                &quot;1517328000&quot;: {
                    &quot;open_price&quot;: 22.5,
                       �&quot;high_price&quot;: 22.5,
                    &quot;low_price&quot;: 20.81,
                    &quot;close_price&quot;: 22,
                    &quot;change_percent&quot;: -2.6549,
                    &quot;volume&quot;: 2714100,
                    &quot;date&quot;: &quot;2018-01-31&quot;
                },
                &quot;1517414400&quot;: {
                    &quot;open_price&quot;: 21.66,
                    &quot;high_price&quot;: 21.7,
                    &quot;low_price&quot;: 20.85,
                    &quot;close_price&quot;: 21.48,
                    &quot;change_percent&quot;: -2.3636,
                    &quot;volume&quot;: 1503608,
                    &quot;date&quot;: &quot;2018-02-01&quot;
                },
                &quot;1517500800&quot;: {
                    &quot;open_price&quot;: 21.29,
                    &quot;high_price&quot;: 21.53,
                    &quot;low_price&quot;: 20.55,
                    &quot;close_price&quot;: 21.43,
                    &quot;ch   �ange_percent&quot;: -0.2328,
                    &quot;volume&quot;: 1399300,
                    &quot;date&quot;: &quot;2018-02-02&quot;
                },
                &quot;1517760000&quot;: {
                    &quot;open_price&quot;: 21.3,
                    &quot;high_price&quot;: 21.49,
                    &quot;low_price&quot;: 20.5,
                    &quot;close_price&quot;: 21.38,
                    &quot;change_percent&quot;: -0.2333,
                    &quot;volume&quot;: 1959000,
                    &quot;date&quot;: &quot;2018-02-05&quot;
                },
                &quot;1517846400&quot;: {
                    &quot;open_price&quot;: 21,
                    &quot;high_price&quot;: 21.24,
                    &quot;low_price&quot;: 20.21,
                    &quot;close_price&quot;: 20.74,
                    &quot;change_percent&quot;: -2.9935,
                    &quot;volume&quot;: 2741653,
                    &quot;date&quot;: &quot;2018-02-06&quot;
                },
       0.00%&quot;,
                    &quot;color&quot;: &quot;ffffff&quot;
                },
                &quot;sig&quot;: &quot;-1&quot;,
                &quot;stock_name&quot;: &quot;完美世界&quot;
            },
            {
                &quot;symbol&quot;: &quot;002625&quot;,
                &quot;return_rate&quot;: {
                    &quot;text&quot;: &quot;0.00%&quot;,
                    &quot;color&quot;: &quot;ffffff&quot;
                },
                &quot;sig&quot;: &quot;1&quot;,
                &quot;stock_name&quot;: &quot;光启技术&quot;
            }
        ]
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|----- |
|name |string   |股票  |
|return_rate |string   |90日DK点操作收益  |
|change_percent |string   |涨幅  |
|favorite_list |array   |自选股Dk列表  |
|sig |string   |Dk信号：1-多头 D点， -1 空头 K点 |



 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[e�    R � R                                                                      �e !	7�sdengxiaowu资讯分享页接口
    
**简要描述：** 

- 资讯分享页面接口

**请求URL：** 
- ` http://dev.wxtest.firstwisdom.cn/news/share `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |int |资讯ID   |


 **返回示例**

``` 
{
    &quot;status&quo   ��+ !	W�_dengxiaowu股票池-三个模块的头部信息
    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://dev.wxtest.firstwisdom.cn/Select/header?type=tech `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |smart : 一智金股，top: 涨停大师，tech：主力雷达  |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;earnings&quot;: &quot;1.33&quot;   V    '                                                                                                                                                                                                                                                                           �  !	1�5	dengxiaowu趋势看多接口eNrFV1tP20gUfp9fMU99QHWY+Bqzr1R9aKVWvTxVK5INLlgqDo2N6MWVCGoXLRBStqFsgOUOpVJLqEppQ0jzZzJj+4m/0HEmoTabjZYFhXnxzJzvnDNzzhzPNwDSBrq6nN0xdztDcjm3und8tNDVBQHgoHswhSerztIU3lwgM1s4twEo1i1+JZ/G79+52QByMD5oWcNmT3f36BNLM63IQz1tWqO62   ��V !	%�edengxiaowu跳转协议eNrj4lIAAi5dBYVM/2B9x7yUovzMlBfbN7/Yu+Zpb/+Ldeu4uPJSU1Ny8tMz82wNXyxc8XzJrpcLt76cuwii6OWchhfLGp/P3P1071SuksqCVNuKCogqqHzT4ic7VkF0cCXn55Wk5pXYVqsVluaXWGenVkIYVhCqLDGnNBXCrEUxA6wbatOslqf9Tc+mbuDiqgFZV/Ni/ZZnM/pqIII1Kam5+TVcNVa6QADyGISFzFFA8IEiXDWGYBpi0fO9E4F2QWSK80uLkkG+UahRgLjJLbOouKQ8szglP9dKXz+rNLfAHuxhQ7XE3AJrpFAC8+F+jYHohpgH5VhB6YySkgKgWWkIk/WS8/ShkrUQSgEGgI41UqiBBDXQUTVAoUcNc3C5ygjVFXDDari4gLH9dEn7s80r3u+Z9Wz6AqAAAJQ24K8=cZ�(@   ���技术形态挑选短期趋势看多的股票&quot;,
        &quot;list&quot;: [
            {
                &quot;symbol&quot;: &quot;603999&quot;,
                &quot;date&quot;: &quot;2018-05-21&quot;,
                &quot;return_rate&quot;: {
                    &quot;text&quot;: &quot;+110.00%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                },
                &quot;name&quot;: &quot;读者传媒&quot;,
                &quot;price&quot;: {
                    &quot;text&quot;: &quot;7.61&quot;,
                    &quot;color&quot;: &quot;1dad51&quot;
                },
                &quot;change_percent&quot;: {
                    &quot;text&quot;: &quot;-0.13%&quot;,
                    &quot;color&quot;: &quot;1dad51&quot;
                }
            }
        ],
        &quot;favorite_list&quot;: [
            {
                &quot;symbol&quot;: &quot;002624&quot;,
                &quot;return_rate&quot;: {
                    &quot;text&quot;: &quot;    ps://wxtest.firstwisdom.cn/app/updateAndroid `
  
**请求方式：**
- GET 

**参数：** 



 **返回示例**

``` 
{
    &quot;data&quot;: {
        &quot;name&quot;: &quot;一智腾飞&quot;,
        &quot;version&quot;: &quot;1.0.0&quot;,
        &quot;isForceUpdate&quot;: 0,
        &quot;build&quot;: 13,
        &quot;time&quot;: &quot;2018-04-24&quot;,
        &quot;packageUrl&quot;: &quot;https://wx.firstwisdom.cn/firstwisdom_android.apk&quot;,
        &quot;packageSize&quot;: &quot;8.7MB&quot;,
        &quot;intro&quot;: &quot;修复各种已知问题，优化细节体验等&quot;
    },
    &quot;info&quot;: &quot;ok&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|version |string   |最新版本号  |
|isForceUpdate |int   |是否强制更新 0：否，1：是  |
|intro |string   |更新文案  |
 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�   6 |6                                                                                                                                                                                                                                                                                                          �3( !	U�qdengxiaowu个股详情中的股票关联板块
    
**简要描述：** 

- 个股详情中的股票板块接口

**请求URL：** 
- ` http://wxtest.firstwisdom.cn/theme/getStockTheme `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;theme_id&quot;: &quot;302&quot;,
            &quot;theme_name&quot;: &quo   M�y' !	3�dengxiaowuAndroid版本更新
    
**简要描述：** 

- Android版本更新接口

**请求URL：** 
- ` htt   �    Z8aiiSNbkMb1Y1+7Un3gGb13ripmxaMg7pbZoq8LeGjXN0aNXb71t170IbXr93zneHcOJlrLonMr8Ljo+la5XdcfeWtlZ1CGVfmgM1A+HXWZvO286mMl6dst7hP/pqxgd3D0eZvtd5jQw7aXGOadSguOZgwBrS+YS2d1AwL2vj1NpWaVlo3BqBNDnZw6RXF92tmEnqFLD7MwQTtQpyd8PvUQlqzRtJGXzphaafVoYrI/FbvDWe8RN5ka5Ulkj9wFifb2PMNDicGNFhfOrOm++uC3toXuuP6NIP0mfqzFjhSzDGoN5FjaABp2Kt5vLjsbB7Wvk/RmIN4PA7Bc+ADrjweSVm/mFbCGjFZvweiqwGRbjxMNQUN8EgyqZkNdBDan7ASTSizHpJpYTM8isY4JHJRFSK1B6GgvYAeDVVYj6yWSHaX7q9W/up+2aMHFv85TSbHyFIRV9bJWIZMz3pjfzgrH8nSSvBEOwsv3fE1Z2untadH9Jw2PT04kfnteWgUiNrTod9Sj8KrkxFSovxpD/8tFgInoPaagdMWNsChCBLa6xqJoVNKODuPdzNO4bu7/669bvh8sO+19irDaT15yp8SkcX2SuF6DGvTHYoxFEWqIqiCrLLJkJ0XV/932hBCMaR0PG0owqOzZq12OOu9+Zue5Fq50pmsxdRzZU1QJV6S1aisqjKSLjZvtNx4gb+EvCH+rHnzJma90l7n8iZHFOV8eROkmKLEZF5SJZG/6Hrjefky6g2dud68whzefO+8PCB7+c7UW/RcaeMFJImKJCFR4PnYhactKqNLud3UM99u37519D8pR853uUVFXhaQIooxURVb/iZPRr8CNn7hM7kAw2O8mLHgOqUPMOWWFJlrMGRKhhsUGdh+JE9ILJUzzgT/QXZ/Iv6N57Yg2D+VmuSaMVS8OUE+7zSeIWRxn9I1tiUvX3CLxVp5w1nN0NcDZXLe9ltKcSmZC4rYSwYAQD6su9WZWqXq5HfuDqZGe1PJ46PMD7B+S8Q=cZ��    股&quot;,
            &quot;icon&quot;: &quot;https://wxtest.firstwisdom.cn/public/miniapp-images/infei-tab-gnxg.png&quot;,
            &quot;jump_url&quot;: {
                &quot;type&quot;: &quot;4&quot;,
                &quot;needlogin&quot;: &quot;0&quot;,
                &quot;param&quot;: &quot;&quot;
            }
        },
        {
            &quot;name&quot;: &quot;趋势看多&quot;,
            &quot;icon&quot;: &quot;https://wxtest.firstwisdom.cn/public/miniapp-images/infei-tab-qskd.png&quot;,
            &quot;jump_url&quot;: {
                &quot;type&quot;: &quot;5&quot;,
                &quot;needlogin&quot;: &quot;1&quot;,
                &quot;param&quot;: &quot;&quot;
            }
        }
    ]
}

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|type |int   | 1=h5， 2=内页 ，3=策略选股，4=概念选股，5= 趋势看多|
|param |string   | json字符串|

 **备注** 

- 说明： type : 1=h5 2=内页


cZ�ʱ    t;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;5821&quot;,
        &quot;title&quot;: &quot;百度向阿里出售所持饿了么股权：套现4.88亿美元&quot;,
        &quot;content&quot;: &quot;【百度向阿里出售所持饿了么股权：套现4.88亿美元】一智快讯5月10日讯，百度日前向美国SEC递交文件，文件显示，百度已经与阿里巴巴签署正式协议，同意将百度香港持有的饿了么股权转让给阿里巴巴，总金额为4.88亿美元。据计算，阿里巴巴和蚂蚁金服收购饿了么前，百度持有饿了么的股权为5.13%。（雷帝触网）&quot;,
        &quot;pubtime&quot;: &quot;2018-05-10 17:46:28&quot;,
        &quot;source&quot;: &quot;财联社&quot;,
        &quot;weight&quot;: &quot;0&quot;,
        &quot;time_line&quot;: 1525945588
    }
}
```

 **返回参数说明** 


 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�2'    M1jTw9aSaL4gT2MeyjgU/WwtwJDUxIrsAIHBCAzrGRXh4PqwGBfIKh6muwzPMULVfsb0cLvDsPwafdawkgiQ9F1MPnjeadhaGF/Q3HRrCRKNAA0x7KUWCVsFM1gCrQBqq6tNKAFu9HXrpKMINqJ3fa5Kz4xYvu56VNDFfkfmjCba6lG0x3SW8dR5ihOtuOUmqrWdLev767mC1eLmxV5gedlAJwUW5Oe9dfF8ZQkdGBcrRotcQovMc5Wy33koHbPfqZ1tA6IjJN77dcEmHiFUlvmxGszdQRn052BOcYMUJx0LpgWVE4LlEi3WBHqadX+zc1WBFzboFt984da9Uv7h3+BgmWJoQTeeQG24V0WMDQlA2fdJrLFvMTLIifQEsvLHH1+spU4ShadjdozLE2xfDuHm2mV4WgG4AWCBoJESW1GXKVTgemETGmG5TphU+mDkKksspQkXYxMeV6SGAH8AzKlecmhwuzZlBVpqQM2tY+Vc8w6oVmGp9tRWnuqxX1EITpsHr/pHMqp2W3P/Ofv7Dvt9F0MBaQrndh37Pxpr9vLO/G8zQSxr5u6JbUcqYtkrkWvX0lfc7vfCXaJ8/ucJ/X5CrYB//7QLc3XSOqAk8RO01TFaq5dc/ExWl00Xi6g6ej58S5afm03nDSgALhyHocuthO1rcu2Ug+630eWAUNfRpaL/xF58c6cHkG7qY8py7ij/D/JgOWYy0nyq8LiAdpIG/H9jyfJlzuRb5eu/1qOBdyWAnAZOUa7R+ZUGm948pnjjyfHeGtIX2KSO+4ezpFkR4mbhL1e8eSl5kTGOgOzTrwaT8VaHoe5yqdhLlflHMzuwioDQS0cUL1kRPXrxTdGPIkmD43MqOo9zc7SeF9rHowZ6ZfG9qbxaBwurJxm1xn8Fq1uF6JrlnTphAo7DBMTaC9ZPi9E6ymYWLPGUIivmjs7+cxz49mwuXNobMwUXiwVNveNtdHaT9aRI0EQ6M1vZm4+f5zD+NdxG/a55jnNDv8N+sqYTA==c[)��    c  c                                                                                         �! !	=�Wdengxiaowu	检查用户是否订阅
    
**简要描述：** 

- 检查用户是否订阅接口

**请求URL：** 
- ` https://wx.firstwisdom.cn/stocks/isSubscribe `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票代码   |
|type |是  |int | type: 服务类型: 1- T+0提醒 2-多空提醒     |

 **返回示例**

``` 
{
    &quot;data&quot;: 0,
    &quot;info&quot;: &quot;未订阅&quot;,
    &quot;status&quot;: 0
}
{
    &quot;data&quot;: 1,
    &quot;info&quot;: &quot;已订阅&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ��    A  A�                                                     �N# !	C�9dengxiaowu	判断股票池是否订阅
    
**简要描述：** 

- 判断股票池是否订阅接口

**请求URL：** 
- ` https://wx.firstwisdom.cn/Select/isSubscribe `
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|pool_id |是  |int |股票池类型：1-金股、2-技术掘金(主力雷达)、3-热点追击、4-综合、5-涨停大师,6-收益通知，7-版本更新   |

 **返回示例**

``` 
    {
	&quot;data&quot;:0/1,
	&quot;info&quot;:&quot;success&quot;,
	&quot;status&quot;:0
	}

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|data |int   |1：已经订阅；0：未订阅  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[����$ !	�qdengxiaowu错误码欢迎使用ShowDoc！

    const OK = '0';  //处理成功

    /***   9    yVSEizCScbsEUXJnsrLwyfl7MlBOZvPKxRXCNVxVTEwG0XfEQMxYtFzxGWwCCBs2wqevOY7fmxOWPvyi0vKVxfGLsHIGfdrweP2frzWlM8/9Hjj7u6tWS/c+psv1b3mxh/B0zkPeCOSGFCMmGpNJehJCVtI2CXEJizHhF7wdENwXOYQakCvuf6GL/8Q/LQSbM9DYrlvdx5ARHXHIjqMaJNQgmwbwhO7d/4RqnzT5/eefRaZFOwr2HFFbNDj86spozDSCGfvB4u/xpsCAIqgG4/486VwefvfN3URMSgWixAIc+FanW/7rVV+7y5ffy3iBjdApHl8qmyx0y5DrOy26BE4OJBaInTC2ltIhMuaht1EOi2qI4b2RL+O+dG40aZSRvVOk9m0sU5RikzcKdysvQhX1qJA/NrBekSzaKdedJZccZgqVYZdJk8Qx2UV4uqWKWtUscvjJaIpCRoSMZGBXUVEj4nE0Lhk2FSTbWoc7LHslPZ3aNpyBZMqofLUlKxZpmAotmNNkBIu4Co7g7To+KqTlogUmfbpQmGczKjnZy7PjJ69mhuduVo9X1HVayxedDV8jVGsZnNDxypYm0Ss4GCdOFhjB2+NTdt434y3ZW8O9ARYrhfAwt+ehI9XxK0SyPUPMK1UNQ4JWKXa7eyYgigqTbvEbRMFcRcRw8Z0H9Oe7yXtwWqNN171O+0G/Z/THtVZ3MecD/VUm/6s8x8b4WKdLy/0L+dT7rd6jzlX7NhG9JWYg6neS0Zz3RmNqevgJgDkwhj8PHndkvdo4ftP49E5OoXpm7JpF1KQdUbzIWT2LRCpFGCslyyDdMUz+GEtGznI7NToOgDvD8F/uGBHp1IdHoehI4nDp1q9Do/D8KFwyH5kHN6XR/FLnvpVb3UdrR6juw/ZtwGRkv5DdCB7ncdBQ6hE6YAeoSyawqw6ORz1GzlVlOPdF6+i5iOvpkugYAyp6bsoGMMqTJ+KVqMR9TO/ryWdXGuHorjD2N9I7KjtBQDwDqxlueY=cZ���   �uot;: &quot;https://wxtest.firstwisdom.cn/public/miniapp-images/infei-tab-gpnc.png&quot;,
            &quot;url&quot;: &quot;https://mp.weixin.qq.com/mp/profile_ext?action=home&amp;__biz=MzUzNDY2NzYxMw==\t&amp;sce\tne=124#wechat_redirect&quot;,
            &quot;type&quot;: &quot;1&quot;
        },
        {
            &quot;id&quot;: &quot;2&quot;,
            &quot;name&quot;: &quot;策略选股&quot;,
            &quot;icon&quot;: &quot;https://wxtest.firstwisdom.cn/public/miniapp-images/infei-tab-clxg.png&quot;,
            &quot;url&quot;: &quot;https://wx.firstwisdom.cn/#/analysis/analysis_strategy&quot;,
            &quot;type&quot;: &quot;1&quot;
        },
        {
            &quot;id&quot;: &quot;3&quot;,
            &quot;name&quot;: &quot;概念选股&quot;,
            &quot;icon&quot;: &quot;https://wxtest.firstwisdom.cn/public/miniapp-images/infei-tab-gnxg.png&quot;,
            &quot;url&quot;: &quot;https://wx.firstwisdom.cn/#/analysis/analysis_plate&quot;,
            &quot;type&quot;   �: &quot;1&quot;
        },
        {
            &quot;id&quot;: &quot;4&quot;,
            &quot;name&quot;: &quot;趋势看多&quot;,
            &quot;icon&quot;: &quot;https://wxtest.firstwisdom.cn/public/miniapp-images/infei-tab-qskd.png&quot;,
            &quot;url&quot;: &quot;/pages/page-trend&quot;,
            &quot;type&quot;: &quot;2&quot;
        }
    ]
}

iOS Android 返回的内容：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;策略选股&quot;,
            &quot;icon&quot;: &quot;https://wxtest.firstwisdom.cn/public/miniapp-images/infei-tab-clxg.png&quot;,
            &quot;jump_url&quot;: {
                &quot;type&quot;: &quot;3&quot;,
                &quot;needlogin&quot;: &quot;0&quot;,
                &quot;param&quot;: &quot;{&quot;key1&quot;:&quot;value1&quot;,&quot;key2&quot;:&quot;value2&quot;}&quot;
            }
        },
        {
            &quot;name&quot;: &quot;概念选   � �                                                                                                                                                                                                                                                                                                                                                                                                                               � !	+�Edengxiaowu自选股接口
    
**简要描述：** 

- 自选股接口

**请求URL：**    d�X !	=�Sdengxiaowu首页今日板块列表
    
**简要描述：** 

- 首页今日板块列表

**请求URL：** 
- ` http://183.56.160.133/newindex/getTodayThemeList `
  
**请求方式：**
- POST | GET

**参数：** 

无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;hot&quot;: [],
        &quot;chance&quot;: [
            {
                &quot;theme_id&quot;: &quot;234&quot   �    txDTl/nZ79Fw9IXPo/kYSMX+smQ6+3hYHRlKS098PcthckRBiH/4nxQXJgPRYN9O9YLrPsXn5sZjM7kWkaBoH84kg0Lczx28IIDYacLYxceGXsYxhKf9bRe0PZOtJ22fJ7vtVMz2O502nvt9XfxBD1tkGaDlBJqcRVUGNumBQdTkVpNPeoqK8dkM2d44dlpbKq20iSzoe3UB4CzTieolGKLPD5SkwfKUYnWoIwFLb9KXjRBIrc6hqWABZsZOlclO5s0tc3iYiwwuZLPafG8UnxC/4gzld0uXMW9LCvZU/J2m6Vkn+mntF1Ru6/V8qVaPgCVHWMHxmZKa81BSu/iyds3UJQ8UlQc3kPMuhtey0OSu4PZ8uTY5LONST78vyEc3CNQQlLoqCvrjB8Oh7Nfp3VyWASt3O3XyTkLKuCNFl//+DoJn65O9v+sTgHftUUKc7Mzt++PfhXPj/C93dO6bNbbx3B6P5sEJACVnK5xYotLwZ/Dv16LjvG0c2YcRoS9v9zgItwlJFVQLy8/gMpfKskLoCrJNFAM4TnjSGBkBWUshvR0Fq81lXRVvqgCnZnXWET2BcZ4YD4B943R3UnL8xkI3QsPg4pRr9cvitaMRmWAuWX9MbY80uxRVyt1upc2fhwxJiHbWzGl1iLPN2JMGeNiLl5vCJmDmDl9bwMXnaIoFghJ+lSfuBD7xDBsJPDa2hO4T5CNp2clktiHa4ecp5Cd/+FzjKZ5cphX/moaUJYzPECk+6/VSoshQtJWOxTzRCIetKSbmSL4usBzxqz726sfB13OflbNopJ9QXfPtN1638D0M/Rk9TEpX/Q1bGtBiXmWB6yGNP6GwcDCOCQuxC5MufVKeZlA8JWTm2lYHsNUGydq580VJhwNgDRdoApKsdpX+gK6hhcQOJOt3BXnkSECQltEMaPI5HCNnpTMryQt1GE/Wd217DO1UmEpwZ9P2d/QjnPawamSX7Gq2G+U4zj65k+1m5Y7XUj/+/vhxa/D3l478Q/VqwOKcZ��_    e�                                                                                                                                                                                                                                                        �f !	+�}dengxiaowu导航栏接口eNrVV/9v00YU//3+ipOQEItqu0lahIosNIlpv0CZKCChgZKrfXVvi8+ufVnSYiQIg9EF6v4ACEpXDa2tKrT1izY20XXkn9nZ6U/8C5wdNzhRi5aKRfR+sN69e1/uvc/dOz+QyYTrt5qrtwPfbzY23+4sZDIQAAnyjZ3m/ZfBz34wt8L9XwDIZJobfwVbtcsXz   ��y !	1�dengxiaowu获取配置信息eNq1VVtPE0EYfd9fMYkJ0YZekDfIhgc1vphoBH0xZrvsTstod2fdmaUUl4S   �� !	I�5dengxiaowu获取用户消息中心数据eNrVVl1TGlcYvt9fca56Yd14FkSF3rW9bG/6cdXJCAVimBZI2WWsE5wBYhSrgnEIGnCS2KjQTMJHRVE+5Mdkz9ndK/5C392z4KKkMslkOj0355z343nfc97nfHAIGjcxoZTj6nGCZjJqt9pr5ycmEMfxSE03SCanZEs01aBnKZqoyOdvSfcRfVqlW2WaPiKZVxx4q5UGrSV//O4b05VHbnRfkh6Irqmpxd/v3AtERGkxIPrCwTve0FRU9EemFvzSt+LCV/6Q5I8gN2ckwWBo7oK0MwYSAIGdHoFkkhDUhKe7L3vtTbmzSvcqeta1pPKsRTpPOQ4BSDdLCs+Vw6Z8uQEInNvtR   �    01012）、新和成（002001）、皖通科技（002331）、华微电子（600360）、启迪设计（300500）移出股票池。&quot;,
            &quot;status&quot;: &quot;1&quot;,
			&quot;url&quot;:&quot;&quot;
        },
        {
            &quot;time&quot;: &quot;2018-05-14 09:00:01&quot;,
            &quot;msg&quot;: &quot;星宇股份（601799）、合兴包装（002228）、北方稀土（600111）、汉王科技（002362）移入股票池。&quot;,
            &quot;status&quot;: &quot;1&quot;,
			&quot;url&quot;:&quot;&quot;
        }
    ],
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|

       time：消息产生时间
       msg：消息内容
       status：0-未读 1-已读
       symbol: 股票代码 用于T+0消息跳转
       stock： 股票名称
       di： -1 T+0卖点信号  1 T+0买点信号

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�    UOKb/FJGsd1nNtD2o7AQqlex9XE/Tu3nDgRBMATRZmV/UND8y+uPQ7Pycp8WJ6MTF8LzgxF5dDc0FRIuRudkINz4YnQbXkKBAS7CZ4JF05RS7OTsVzMVQWzEVmxSiEtgT+4/an8Fy0vqaidNGOLKu9RpXoNr+VUQfWLbFkT2jv+KwJVdMzMQ3k5GwIqXtPZX3hGAbaBFQB8Sp4QSKKZek8T28Aj4pMyim+g3RL6kQZe8d5VCIZFtFskXxo84+z4VH9GAMjBAUptmdvHrsMjOfzqkhfWNebB5jFTmuXHFmCUtPNo/RPZbRjnGcaHEAgEgPBasGa68jwaUW5MjivjfOcHD2y7tV67uwtPJTwd6nryrwdK10U4IkojAPr8EPqhxIHBP4RPy1P90bi2bq4dmSst40ex00qPQq/P5+20Fn/G4vi4jhp1VI7T0gKDIPQMSyMcQtUq3WuTt/soW7Cj4NgwdKClHNIy5krNTTjm8zGIlJooucfoJ3tlXN3qtNbN4gLabDCL0TyzPSUoeZzShUO0ksXpZV4XQonbSbFgxoqk9B6/i3HI65Uu6p5XSP4YfVvmLXlHuy0t67T9lVbOaWWbQV4IRyB0Wko13JZ+xhJ/J05WxpWo3M+dw7Pr/WbwX49u+J+Obm0TVVK9/HGm7YnTKFlD2STdSXKePJ7rDpRdZXeTlGNoY5PzJEkOhbi6SHKZPnZHPb8f3f/zZO8eDvZcgPDM40h/kBwNBkOy3FvpTxWg8Ma6Tj3XjOsJV4/LCnNJWrodWSfD5IKrhdEokfwmXj0xV2tdB8a9i6OFJKqcdhHeDQOhiDe+Ur3JZAbVv7ON6/FyeiLyzA84f0Zzh2zFAcmXjUaO6Q7PSetH9OzgImck+NSSLx7CGielwy44GbYQUQIsGC0VSOLUaG8jrQ6AbTJOD12TTQraTeGjsvMU4PUaUznOk5n/SHWd98M0m2xkzP0CEy/2OPRC/DVhOoYPPtN2zjhrs97vPonM34wEO634L+ez/MI=cZ���   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                � !	=�)dengxiaowu设置消息全部已读
**简要描述：** 

- 设置消息全部已读接口

**请求URL：** 
- `https://wx.firstwisdom.cn/user/setReadedMsg `
  
**请求方式：**
- GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |int |1 |

 **返回示例**

``` 
{
    &quot;data&quot;: 1,
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

 **备注** 

- 说明： type : 1=h5 2=内页


cZ���    iqARpeUDCTSJyCQ+EQsQQodA/0730ib/g7G7pzZJsQpyXmZ3vO98538zmjH3w060UqhcVZ2l/eAxnH2LpqpznABtcJOIcTrt7ebtYdCtHV+W1SARwXBS4hVOruFybXXAuDquVLTtfsgu7VnGbYwi3dGofz7x4/qSeHgVJMEapRgbi8ewEhYTGUkgnNIuIjJWYpMZFTYunIX2A1RRKgyTnEwdl7OU/VrnoV2KFnj0dHgEmePxoxCOyijP2t4YoM/i0FhdMqzJbm54zneNza3PedEsn9krB5MyBKBteW/4q+IwCM1rfZhlaRqQprCvAtFdKbIdQHalpYLqHl9bOZ/v7rn22CBAmV+WvQFRlHSMZeGsFqYg1AcDd2ocLBrWOitan1XteSbb9EuoEYRWY1uJeS1HgIZy5L/bGgS+K4wDrurJkrW86O2fVy3nWMpdMJgH33r+MnncGpoOySMVgNQCC/WZM8g9QGA/4rrOCuS+WiCWCZW8HTNSQMIYJbQc0r6zjuroXMTSmDApIpVAfFzPttfq7YzQxJ9CcBq+TXzXiLeIyiKV14pvxLEQTqK6pEX7dyZSFo+MIZgVDz5B/T6+Zl5t8kw55DPEhCcuQ7+sRFW2QUNY8L2Mhg9NIjd+JK1g2MlDQdDZLdMjrkp9QWXEvO6VjhWe3f3NXk1Qm/02HXzycDpoIq6I7FcOHI5Lf3o6I4cMRGQTqgpjWIVSgSsOTNiBDCd7wufr44BTv89Cf+3k9pIZRI3c7Ce0UDYYpfzXV22IXSE3hdgZiSBIkpFVdPcD+HaPx1yW4Kc98Wkwp8NfATTsdt6vVRutOy7z22mNvGsz8PCLPZH/t198Ye/3E2lkLuGtLq26pVD3fdn7k2cPgbMzX9pZrW7+dtY+toeCZYrX+Aou0ifY=cZ�/                                                                                                             �             &quot;1517932800&quot;: {
                    &quot;open_price&quot;: 20.9,
                    &quot;high_price&quot;: 22.81,
                    &quot;low_price&quot;: 18.67,
                    &quot;close_price&quot;: 18.67,
                    &quot;change_percent&quot;: -9.9807,
                    &quot;volume&quot;: 8275716,
                    &quot;date&quot;: &quot;2018-02-07&quot;
                },
                &quot;1518019200&quot;: {
                    &quot;open_price&quot;: 17.47,
                    &quot;high_price&quot;: 18,
                    &quot;low_price&quot;: 16.8,
                    &quot;close_price&quot;: 16.8,
                    &quot;change_percent&quot;: -10.0161,
                    &quot;volume&quot;: 7221302,
                    &quot;date&quot;: &quot;2018-02-08&quot;
                },
                &quot;1518105600&quot;: {
                    &quot;open_price&quot;: 15.98,
                    &quot;high_price&quot;: 16,
                    &qu   �ot;low_price&quot;: 15.14,
                    &quot;close_price&quot;: 15.14,
                    &quot;change_percent&quot;: -9.881,
                    &quot;volume&quot;: 3093465,
                    &quot;date&quot;: &quot;2018-02-09&quot;
                },
                &quot;1518364800&quot;: {
                    &quot;open_price&quot;: 15.31,
                    &quot;high_price&quot;: 15.75,
                    &quot;low_price&quot;: 15.3,
                    &quot;close_price&quot;: 15.52,
                    &quot;change_percent&quot;: 2.5099,
                    &quot;volume&quot;: 1949978,
                    &quot;date&quot;: &quot;2018-02-12&quot;
                },
                &quot;1518451200&quot;: {
                    &quot;open_price&quot;: 15.56,
                    &quot;high_price&quot;: 15.63,
                    &quot;low_price&quot;: 15.26,
                    &quot;close_price&quot;: 15.26,
                    &quot;change_percent&quot;: -1.6753,
                    &qu    ：** 
- ` https://wxtest.firstwisdom.cn/app/updateIOS `
  
**请求方式：**
- POST 

**参数：** 
无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;name&quot;: &quot;一智腾飞&quot;,
        &quot;version&quot;: &quot;1.0.0&quot;,
        &quot;isForceUpdate&quot;: 0,
        &quot;build&quot;: 13,
        &quot;time&quot;: &quot;2018-04-24&quot;,
        &quot;packageUrl&quot;: &quot;&quot;,
        &quot;packageSize&quot;: &quot;&quot;,
        &quot;intro&quot;: &quot;修复各种已知问题，优化细节体验等&quot;
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|version |string   |最新版本号  |
|isForceUpdate |int   |是否强制更新 0：否，1：是  |
|intro |string   |更新文案  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�U                                       ~  � ~                                                                                                                  �@& !	+�5dengxiaowuIOS版本更新
    
**简要描述：** 

- IOS版本更新接口

**请求URL   ��% !	5�Mdengxiaowu小程序获取token
    
**简要描述：** 

- 小程序获取token接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/miniapp/getAccessToken `
  
**请求方式：**
- GET

**参数：** 

无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;access_token&quot;: &quot;9_fasHjhkvPoyjsIq1l8D3Mcpi4WajjvbvF8p_fFrRBObJdSxFndFy6p28Gxt5ivUkmePD5kKySnRoV9AzNuZzlw_WPJf0nZsivXdu-9ClQIEtUYf36JggTGwr2pMTVTcAHACEC&quot;
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|access_token |string   |token |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZ�%    �  �<  <  =  >  ?  @  A  B  CM-DD',
  `cs_value` decimal(10,2) DEFAULT NULL COMMENT '沪深300净值百分比',
  `strategy_value` decimal(10,2) DEFAULT NULL CO�N= !	+�MXdengxiaowu好公司列表eNq9VF1v0lAYvj+/4tzoBVmhsC3BeWU08cZE4/TKGKmlbk2gRVrcJiUZywgzRDoNssnIPhwgF4tsEd0QJn+Gc1qu9hc8/QBaCIve+KYX5z3v8zzv0/a8B0ASwOPRvq3rtTRWVb17etUpeTwQAAqi6iXKnCD1Am3t6Ed1nK8i9RgQuN44x2cbTx8/sLEUDME3AS/tpX0Ct8ILYW7Vt8TJ90UxfFeMxhhhDYaA2chi4mILdVSTTLiPHi4+gYYsUjfwp2F/xUrR9nsFdTP99XeKdtZG+zlFbzTxbl4BygJFwngDc2WlFFQoe5sgYswSBxW0XSMZL8hQ6R/9IJqj4guJf+tGQNxQLVQ/q5riAEBivFtAe/ta5Vfvd464BqFQCIIkMAA3XydE+bYkM3JCstYLkJ5xlHjhlTgo2OAEy3KSjXZCw4zMDKCW+qgW4SV5UHs2rBmRdGUOT2vRl2LE3Zo2IuDsPMkTmCjnZvUustrXD3eupxHzY7QA7Q9SdJDyz13PlMS47Gb6bYLPh/MfyRmYQmSXGYH8xRgXZzlhKJEkrJ911MpMsEZMmVsda0mR83vrxjSjjp5iRIyPuQ0z4Xnb8gQzNe2tY3Ge5Ryee+1zfNj5J8+BgHeW/o+WySkf05n1zlsL8s13D4zHnBwXPzXMns+AvzkzqNWkg7i85Z/DO9Wh/F4TF0/JBi4fAEs2ZcyhOZ+oksXf6/bFRZCoUrJGtl/4rDcavfaxdpgmt49WzvVrRTLgWmnTWbLuPgAAPvmid/O9y65WqC8uiyv3RPaqk/4DihDMtA==c[s֎    �  �                                                                                                                                                                                                                          �  !	C�?dengxiaowu获取指定类型的消息
    
**简要描述：** 

- 获取指定类型的消息接口

**请求URL：** 
- ` https://wx.firstwisdom.cn/user/getSubscribeMsg `
  
**请求方式：**
- get| post

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |int |type： 消息类型 1-金股 2-涨停大师 3-T+0 4-多空，5=主力，6=收益通知   |
|page |是  |int |  第几页  |
|page_size |是  |int | 每页数量  |



 **返回示例**

``` 
{
    &quot;data&quot;: [
        {
            &quot;time&quot;: &quot;2018-05-15 09:00:01&quot;,
            &quot;msg&quot;: &quot;洛阳钼业（603993）、海康威视（002415）、山西焦化（600740）、华友钴业（603799）移入股票池；隆基股份（6   �    nyr76tm2vzznR5l9Y1DfbWmnmYuavF+bHc67Re1uU+RKD0uk0qZ7Ee13AywMLb1SQ7OIqWStttg03tkMW1q4YE+bLGWEiS5oK8etQwOOJ3AYrkqeb2rxbbZ7j4tQRmzemaGbFWAolbrpqSEJZvlOl0kq4s0vsz9YixxOsuk9UiG5VbofISz7Hbp0u95nqWOycEyD8ne3wxpuaA1Pmj5cy2/DSw7xg6MrZBmK62QPkVi9ydQVkaUkHw1h5hvN7SmrlCetW5T3R2Dz9Yh+PD/BnDQR6CEJFvXpuc4PhwOZ7NOc2QnB1y10ayTcwBYgBs9Mvfv6yQ9Xp3s/1mdvO5rj5QGB/rvz4/Riodu0b1fs/3ZfLd3oHQ3miQkAZScrk58y5O+nwMvrnnHuM/Z3wkiAqO/3MAi9BISz2rn5w+A8pcsdgZQJckyCiM8aH4SGLUb5SiG8AwUz1ZYoqieFQHOXKsjILu9HfxgHgX7T548oD9IWJRsVkX7nA9IqtZYoZtb7CDN1nZp6oRl5zuhdAD44DXc3D2meP3PPV5xLOR1e3rGFd+Lx/grPOtuG0zAYeCqshwaHfXIcrvn2zxhYcoYc9rGHz4uaYUjupEwZ7kwp5DlpTArVcnbhTBnhoWwSzQWQtYhbF3vXKBifPwo7PUrxtW4uBAfD7ltJIn67Ap0amQT6ck+iW5CQyencWQXf/gcoz6R7GTYn5Vux1P1tErms3q2bH4li/1PeR2FcFvTbDmimx+0QpU7greYkVhyKDwSDI6gSUPMIsGsCPMDl25m30CrQeejbCXHUlt0/URfP2oKWHomn8y8JvmzJodnHJhY5HHAI0n5Lzi0JMyu5EL8D6VW37N3UQSzs1pJwKu5Ta18qNU/XtqEXgQmLRUoDssVm0y31+CIEgJlspS+bDLIJEEHaSOFzdqTnVl6uG/N7jR7BGnmcNBTb7RCgYcEQzbbXND30vr2MctMt7P4+C8IAv34h9ZIqPUGhP/9eGDi68DoRS36Nw6bhrs=c[��    6  6                                            ��J !	K��'dengxiaowu策略选股-股票列表接口
    
**简要描述：** 

- 一智金股，涨停大师，主力雷达 接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/Select/start `
  
**请求方式：**
- POST | get

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |类型 ：
			'smart_daily' =&gt; '一智金股的股票池',
            'smart_change' =&gt; '一智金股的今日调仓',
            'smart_history' =&gt;  '一智金股的历史',
			'smart_winners' =&gt; '一智金股的牛股',

			'top_change' =&gt; '涨停大师的今日调仓',
            'top_daily' =&gt; '涨停大师的股票池',
            'top_winners' =&gt; '涨停大师的历史牛股',
            'top_history' =&gt; '涨停大师的历史股票',
			
			'tech_daily' =&gt; '主力雷达的股票池'
			'tech_change' =&gt; '主力雷达的今日调仓',
            'tech_history' =&gt;  '�  �   �ot;volume&quot;: 1823878,
                    &quot;date&quot;: &quot;2018-02-13&quot;
                },
                &quot;1518537600&quot;: {
                    &quot;open_price&quot;: 15.25,
                    &quot;high_price&quot;: 16.45,
                    &quot;low_price&quot;: 15.15,
                    &quot;close_price&quot;: 16.1,
                    &quot;change_percent&quot;: 5.5046,
                    &quot;volume&quot;: 2700835,
                    &quot;date&quot;: &quot;2018-02-14&quot;
                },
                &quot;1519228800&quot;: {
                    &quot;open_price&quot;: 16.01,
                    &quot;high_price&quot;: 16.97,
                    &quot;low_price&quot;: 15.99,
                    &quot;close_price&quot;: 16.41,
                    &quot;change_percent&quot;: 1.9255,
                    &quot;volume&quot;: 3294981,
                    &quot;date&quot;: &quot;2018-02-22&quot;
                },
                &quot;1519315200&quot;: {
              �         &quot;open_price&quot;: 16.03,
                    &quot;high_price&quot;: 16.28,
                    &quot;low_price&quot;: 16.02,
                    &quot;close_price&quot;: 16.2,
                    &quot;change_percent&quot;: -1.2797,
                    &quot;volume&quot;: 2160235,
                    &quot;date&quot;: &quot;2018-02-23&quot;
                },
                &quot;1519574400&quot;: {
                    &quot;open_price&quot;: 16.3,
                    &quot;high_price&quot;: 16.72,
                    &quot;low_price&quot;: 16.25,
                    &quot;close_price&quot;: 16.7,
                    &quot;change_percent&quot;: 3.0864,
                    &quot;volume&quot;: 2470481,
                    &quot;date&quot;: &quot;2018-02-26&quot;
                },
                &quot;1519660800&quot;: {
                    &quot;open_price&quot;: 16.73,
                    &quot;high_price&quot;: 16.88,
                    &quot;low_price&quot;: 16.54,
                       _  _                                                                                     � !	+�mdengxiaowu导航栏接口eNq9Vd9P01AUfr9/xU1IfFhoyzYgZqTxReMLoFF4IGK2S3vpblxvu947W0ZJcIk/F5kPggYNgQiEmCgSRaMS98/Ydjz5L9h2Y9kIe5iJuw/Nued85zvnfifpAYlE8HG1sf/Ar9Ua9U9/TjYTCQiAAL3Dk8aT9/52zV/b82rvAEgkGoff/KPK7K3JFkqAOZjn3MxIUvJyWhwbF5PjI2IynZYotglVsSNpmE+j+0RDnBh0kjAOcwDCNpe/8d07qcV0Idv1azPSzRu3Z2BUzKtV/PWzfvxX2wDAMKv+0nuzFez++P2rGqaAXC4HwXLICOGlYsngE4wjXmJNOwNHhjtChC4aZ4EWuKQomLXQnVAVcXQGvRP7o7PctjpI1W7KZCdZN5QiHXeDG5WdYO/Ae/QwfGvvPKIYtDsv0pyFotsOx4yLi8Ri3CZMNXRRoZJZWigQRdIJJcg0BaIjDTMpfD0mAkcLgmZSRTSp1rtiySpcXFA3RRsTh1CxWBQVQw8dkmkZi6SAs9jhV5ASjVnOG+FLkW5OZLMLpCxPlWfL01fnUtPlOWfKluV5HgeZguc5xXIyNTpkYyWPeNbCKrGwwnu3xpdMfKHibezKcF8DS/UzsODDRrC+d7r6NJzc4AamFBztHwdmO+eLDUmIosISI6xtZBm3EMfa0gBlT/cju79f8erHg5Zdo/9ZdrMQqj5AzUf7+jd9rXrP6sHbqre7OTjNi+ye2qfmkhlzRF+BW5iq/SiaOq9obN0FK9Fm6dg4zWXUOPziv16L96Pb9HgvnrvB0U9vq+o2gy5wM0J0IGwZbuva84QpUWPQJZRHV5iU82MwJYd74XTnOIpHfXi7j/3PB63d3KwV7kYYZ2a6UwAAfwEI0qERcZك�    � � �                                                                                                                                                 �m !	7�9dengxiaowu收益通知详情页
    
**简要描述：** 

- 收益通知详情页接口
  Չl !	%�Adengxiaowu参数列表
    
**简要描述：** 

- 参数列表接口

**请求URL：** 
- ` http://admintest.firstwisdo  ̄bk !	%�dengxiaowu图片上传
    
**简要描述：** 

- 图片上传接口

**请求URL：** 
- ` /Upload/upload `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|name |是  |file | 值=file 上传的文件 |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: &quot;http://wxtest.firstwisdom.cn/upload/20181016/d46f14121f0dd3a876eb9c4aa9750ef9.png&quot;
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[ł�    � A �qp !	+�dengxiaowu个股的研报
    
**�?p !	+�3dengxiaowu个股的研报
    
**简要描述：** 

- 个股的研报接口

**请求URL：** 
- ` v2.4.0/Nstock/stock_research`
  
**请求方式：**
- POST 

**参数：** 

|参数名|   Ё5o !	-�dengxiaowuAPP 推送列表
1. 版本更新通知：
	ＵＲＬ带公参：platform，appVersion
	
	
2. 收益通知：
	ＵＲＬ带公参：platform，appVersion
c[�y��2n !	a�cdengxiaowu收益通知跳转次数（立即体验）
    
**简要描述：** 

- 收益通知跳转次数（立即体验）接口

**请求URL：** 
- ` /market/incomeTrans `
  
**请求方式：**
- GET 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�?�   �。其中，管理费用8,270.99万元，较上年同期增长11.02%;销售费用2,357.54万元，较上年同期下降2.24%,管理费用增加主要是由于报告期内正在推进的有棵树重组项目支付的相关中介机构费用所致，销售费用减少主要是本期合并范围较上年同期减少了2家子公司；财务费用-408.59万元，较上年同期减少51.96%,主要是由于子公司商友集团汇兑损益增加导致的财务费用减少。 \r\n　　报告期末，公司总资产为261,356.06万元，较期初下降3.69%;归属于上市公司股东的净资产为205,640.66万元，较期初下降1.39%;每股净资产为7.04元，较期初下降1.39%,主要是本期回购股份所致。 \r\n　　报告期内，公司经营活动产生的现金流量净额为-9,339.68万元，较上年同期下降1,224.11%,主要是由于本期购买商品、接受劳务支付的现金增加所致；投资活动产生的现金流量净额696.93万元，较上年同期增长113.64%,主要是由    �  �                                                                                                                                                                                                                                       � !	O�%
dengxiaowu第一次进入首页显示文案eNq1U89vEkEUvs9fsScPxBY9Uq8aL56qxoMxAZdpu0m7q90hNDFNFpSC4cdWA4Rf0VIpopKuTVEobNn/xeybGU78Cw67VKjx6mYPk/e+75v35n2Pdo+5U3AvHVbsPNzS4nc1eWonkCQ+FAiwU4O3E9Q0ufN9atcCAQmhFYl1u+7AoN0md+qQOpm0y5PmD1oZs9aQltO0mUGCyq0+PUs+Xn8w561IYWmLkBf6WjAY3yNYJ6sbyq5O4ooe1XZWZTWo4riiRvFecBOTJ3hb1nbwOt5UdIJ3pTDy6vFFafkCbNPTFbL37z2a3Qdmkpb+FImQJNBOEeofRFXuOCugKBwOS+iV19uNlzGN3NFJhMR0/7wm3bq5lFLUDe0qMQfHZBnrc/QyNBohkSuor77IEYVs4+s69LwDBzlofWYtG3KpZb0FT9ZUglVynQnjU9dpsuoILks0U+ZGir7N0saQ99pg9v04HBamdo59y0L+nBf6YJbdUR8MOxQKQeo1q7356/pfRhFSed674FZJWMAdVWbnZJOddOjZ0WzM1eEk/U5E4H2O/uxAoiG4MMjcdgdfaSMjzPLvDp7HCNHU6w1MjI+z//hAlOVHPNI+2p/NBrmDPK1YS+7yxvdl6CX/79yePpvXsPCNbyhu9Wil4HtKpKCVFg843wNa70Gr5qMnxSq3LHf0iR0lhEtZI+uvhXjx5ZS/SkLrN3kqpbw=cZ�Ǽ    wK1kIIt2LxQiEWpbTYH2NnL0/8BWc7Le5WXNMmkJg4D82ezvfNnD3flz0HQLKAy6XtTeg7UTWR0Mv7p6W0ywUBYGDl6IMe29DSk9p6Up3JqAsZnNgCBK7nvqkHsQf3btWwDPTDMW97V7u747aMRPZxR/XXJ3EyF5DYUT+o3kJp6nIBlxJVJiHevTNwH5pn4kRMXTq7XKEhXpxXcDluTLxWtIMiXptV9FxeTS0oQOllyDLTrz7RkIEKU/ubIOTIkyFRgIqaypFYRhIfHIGK+UaZ7M1+ikGREAcVvLhjQUBt95hwcDxrvMySJNT5vdPSnInsk7iQKCF4lRYET7/VN7KkPnhmXT85uQbpmaHACAerz/RcPojIoZZNn8w/PxehAABJmcpJvLKmbR9Xvs+SGgG/3w/BODDxV56GRXRDRgEUlulzL3S3Wbb44COxvlEDh1mWk2toK3Q4gAJ1KD3dfgMvI571SQHE1VEPz1DmGrdFFm617PYk3ObyWHP4nRfiJF4ctvM6iQXV1Wn8Ku7MZcVwENmp3i5nisCNcQ1ZVgr7OJ5xpg2FI3aSp8eZMCoKDS/ldiaQ2keaI3CCcC7Bhn/RdunqdbeuXqf7ctTzev+r9wf1PEQ9XMi3pF73JanX9Y+odxYNtjV8aest0kdbS3OfWr5Rsr8k26I7EI8ErkGuo7RW3MXFr1rxs/ExhTfXjKUy6ZL64WTl+L2ezxpTCXUuSnYrpRSeW3a+gBQhLKDmDSGLYYltyAwXyjjxRs9F8fSRM3vY0tpqfnJ7ehiPm/FedxYR0PgFALTzqyt5vJ2mQwEZB2gD/zERq04XfZBKCy64h/+yjN0uTVilFZtcqEVasUfr1mjaFtQSg8QIZEYzRze8PaV+ydbGZ+oKagYj+U7P5SrFLW09SsZgbXXW2Fk2Ng6JW6xbdAIHAKifNvXyQuWkrCWzA6Pis36RPS1FfwJ3/emwc[��b                                                    ˿� \r\n　　公司围绕董事会的战略部署，以业绩增长为中心，积极开展各项工作，逐步构筑领域、产品多元化的业务结构，实现\&quot;内生+外延\&quot;增长。公司在报告期内的总体经营情况如下： \r\n　　1、经营业绩和财务状况分析 \r\n　　2018年上半年度，公司实现营业总收入32,864.87万元，较上年同期增长7.97%;营业利润671.50万元，较上年同期下降61.65%;利润总额657.72万元，较上年同期下降67.21%;归属于上市公司股东的净利润为704.15万元，较上年同期下降63.68%;基本每股收益0.02元，同比下降71.43%。公司2018年半年度营业收入较上年同期略有上升，本报告期的净利润与去年同期相比有所下降，主要原因是子公司人工和外包成本增加，以及公司正在推进的有棵树重组项目所支付的相关中介费用较去年同期大幅增加。 \r\n　　2018年上半年度，公司期间费用比上年同期增长627.14万元�  �  �%�                                                                                                                                                        �tr !	I�dengxiaowu公司高管和增减持详情
    
**简要描述：** 

- 公司高管和增减持详情接口

**请求URL：** 
- ` /v2.4.0/Nstock/get_manager_info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |


 **返回示例**

``` 
{
    &quot;status&qu   ��>s !	C��dengxiaowu经营评述列表和详情
    
**简要描述：** 

- 经营评述列表和   �  m !	I�[dengxiaowu公司高管和增减持详情
    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` /v2.4.0/Nstock/get_manager_info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |�?t !	1�-dengxiaowu个股简介接口
    
**简要描述：** 

- 个股简介接口

**请求URL   �   �详情接口

**请求URL：** 
- ` /v2.4.0/Nstock/get_manage_comment `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID。获取列表的时候必须，获取详情的时候非必须   |
|id     |否  |string | ID   获取详情的时候必须，获取列表的时候非必须 |

 **返回示例**

``` 
//返回列表时，参数是symbol。没有ID
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;symbol&quot;: &quot;000001&quot;,
            &quot;date&quot;: &quot;2018半年报&quot;
        }
    ]
}

//详情
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;symbol&quot;: &quot;000001&quot;,
        &quot;date&quot;: &quot;2018半年报&quot;,
        &quot;manage_data&quot;: &quot;一、概�   � ��                                             �8 !	�/ !	W�gdengxiaowu小程序-获取微信手机号登录
    
**简要描述：** 

- 小程序-获取手机号注册登录接口

**请求URL：** 
- ` /Miniapp/getWxPhone `
  
**请求方式：**
- POST | get

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|code |是  |string |code   |
|iv |是  |string | 加密串    |
|encryptedData     |是  |string | 加密数据    |
|unionid | 是 | string | unionid|
|inviter | 否 | string | 邀请码|

 **返回示例**

旧用户登录
``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;avatar&quot;: &quot;http://dev.wxtest.firstwisdom.cn/Misc/d?sign=5adef0096d7c8&quot;,
        &quot;nickname&quot;: &quot;咕噜。&quot;,
        &quot;name&quot;: &quot;咕噜。&quot;,
        &quot;mo� !	W�Cdengxiaowu小程序-获取微信手机号登录
    
**简要描述：** 

- 小程序-�  %    x/fOZn5ACQDaDRywqPseXEwqBSOzvNRjQYCoIVS+qvi25KjM/JmCM/F8FIMBXcAgSvJn/jY9+LZozJWC81w0tjd263XPeYFzvpaV/o1ORmesTitE2ZQOoXScDiD8sESkxCfPhl+DosxUdCHV6qHi3SJlhdFVPCrnk+ifJxDG/OikkzhyJIIxAEtGcX0SzO61EJRW/5MELz7zShngyKOJMmaF5ysfRyKxX8Uiz8cohjB7WCgiJb3ahBQPsgSDvLH1Q9xkgReTJznF4rIQSfj4JwCvEsLggKrylac1AfNbSpnZ/cgjemwjDOwNKdxWbtAgtZsmnj2/aUIEQBIylQIobUNeTcr/ZonNQJmsxmCKVDE33nr4oQHvGARXDydD0B9V80Wa3/FVTbKYJfVyvBldC10zCJYKlAavf4ElhdYq8lpEZgK6mUVVRxTdasabqns9Unoi8NQm8PfPAfjZLmxel4PsSBeD6CP/jJXp8Orp+pqCidOmoSxci67UB/F2HvB9uRQ4pSI2oRtYyaZhtylzBHyx6oR5FweLQeU5Iyc3W8SZNTlrg9h6K/SabQmxAnO1lAAfZWItjfwgrdZzQWLuxlRSh9iT7NUecZmu5RIDlwMo9lsHW+669Yd0NfogOvL3qNvTblK6+uqazS2JjRXtW0121XxX6tnIOqhTKoj9fpuSb3e/0S96mqkq+G2rjyzJvo8tXdds42SXZFsh+4QWMHGNMiVjsq5A5Q7lXOH6rcIueDUlQJ5aZWTGSm7r6Ti6myQXHlkV8pH0EK49QGkCC6b0L4heM7ltDZkhjIFFPysJL0okG7NHqt5Hst+0hv6tQa91ni/tYiArqcBoN0DXkuh3ShtLEhLQZuA3x5fqUMZhFRacMN9wIVl6u3ShlU6scmNWqQTe3RujbZtQS0xQoxA+rxi+4d2Z/GPeLkFp66gZlBDX5RkUsrtyJte0krL6/PqXljdOiFuqd2iXTwAAH/fVgpL0llBDsWHJ7h3Q5z1PO/9A7HIE0w=c[׷�   � �                                                                                                                                                                                                                                                                                                                         �: !	%�1dengxiaowu跳转协议

    
-  iOS/Android跳转协议

needlogin=1表示页面跳转需要登录
type=xx表礄; !	%�3dengx�& !	%�	dengxiaowu跳转协议

    
-  iOS/Android跳转协议

1.needlogin=1表示页面跳转需要登录,needlogin=0 表示不需要登录
2.type=xx表示跳转那个页面
3.param={&quot;key&quot;:&quot;value&quot;}表示跳转页面需要的参数

|type|说明|
|:----    |:-------
|1    |跳转网页     |
|2	 |登录 |
|3	 |策略选股 |
|4 	|概念选股 |
|5	 |趋势看多 |
|6	 |大盘行情 |
|7	 |财务评级 |
|8	 |点赞活动涨停大师 |
|9	 |智能盯盘 |
|10	 |首页 |
|11	 |一智金股 |
|12	 |主力雷达 |


c[�A�    mCBqcOvmm9ZDQ2pS9NkdJ1MruPAKqBwLfKT7PmeP32YxVqgA/bZq2qrrNWPZCRyr6ozn+0SL/NOiet2gMwujEZmj3AikGFS4pPHrc9gOiYO+MhMfnOFTfHUhIKTft3zSVH34nhxTNEiURKcVIDSZKEjnX7miU0tULFkv6YIuf91h+iCCglG6FxGktDTBZX0L1oPP2hhGNTfy0MFT20YEFDdilEO9of1D2GaBJnYOUmMp5HNEt8rSgjeZgXBI3PacpjWB48uacfHdyCL2evs4mHmmcUVehANalhsl4X35yIUACAtU3Iazy+qa7HUrzFaI+BwOCAYAGn8rTduEd2TkRO5ZfbcBK2VhiWh56WYW8iC3RzHy1m0EdrpRM4clEU37yDISODaJSfic6gXeVR6DJhmBm6m7OYkrOlhM+ZwltfLS4LYaebVUAuShRH80Z/lVleTuQN9Lkp29ouE4UR3DzJHsdeesj1xvHNARS3CdvF9fEHuqaNd7F/PR1DjCTw1okWG1NhmkSAd7n5zCFtDns6iFSF2i66CAljzRLyySMa9xWqOnP3FiKnDbeIplqrMu1znEumGE7N4OGbiDVbeuAPqCx1wedlrrKUpF2l9WXXt9tKE4qqWrWa5Kv5t9WxUPXwUvZJ69TekXu1/ol5+1lZZcFrnrtl2dj2Vd1wLhZJdkOwV3YEE5OIL5DoMqfEtHD9Q49v6tyA94PSZJL1ptf2hVGxTi4b14QA98uhqKhHE47OlN6BFcLvQ2QutIA3+HSrfNJzoEiUz7X5jnbXu7sX/MkPlRLfEFZQAHyVx4LMW8eKRw9IpdBru4axxrbYGi81qsTeWdgtg80EAWJtC5qN4LcQ6GNq7sG7jt8eXaYWaIfMQuOaG49SbZqXK8ORV/HitXvynfXh1D5btP+a9Nuo42rmmG1q8Nkx+hLMvFcx+zHX69BctEknFV9UlL305UBfG9I1ZfXmf2tK4xN5LAADk+4qWnEwdJ9XpcGu3+LZF5E4S3j/BPkaWc[�    6ivV/e82raPBINadv80s1xfDwGwQCX5VfNvqMtj6nqITEXJXBQHtwB11+I/yYH/xbNHRV8LdMIhR2Nzo836WEIC89paePaIrMS6RGbACQqr6DASPsaZYAFJgU+fdD2H+Zg46CcLpcVl3cTzszLOjue8H2X1II3XpmUtniBLczKQ2y105NMvvOmmBcqW4s/UQxp+0yvwUCZLcWpLSOTc/VDO7ygae9ip+wy6+llYiILnt+mTcyMoUxNHdpTUnB1q2RBeWYNkJYEjyzgwkds4pPWgmZHZvVKAHon7cGkUGQBIt12IoUZSyq9pumfgdDohGAF5/7q3HgF1SMiFPJL+3g5tDWVTnPuVcDZRdPYwDCsVvctd+1zIdeaqRzeuwEmIY3pEF2LPvF6WvPJjxGCVYQtlNCZhyw97eQ4XcYOsyAl9RlwTlRRZDeCJ8SLWaiWLR7nFBNk7NAnDCB43MkZxNJ+jvWm8d0T5MEHz7BBbkbtyvI/Ho6UIajqD5wNafExN7ZgE6fUMG0PYW0twPZoJcEDgKwpgKwHx5hqZ8ZnVHLmGzYBKcpd4zVKVWJ6/FEgXnA3jyZQBN9pw5wq4V6mA69PeZKsOuYrr67LrcFQHmLNaM5u1svi32bNT9vBx4kbs3bsj9pr/E/ZKVndDxWl9dm3S+3NQEFFtxzVXSdkVyd5QHYhDPFtBV3JZTX/B6SM1vZv7tkQPuNxC9jQzox2OKakdLRHLTQbpkUdnlcwSnglXX4AWwcOjixdaRRrse1S7aBiBF0Qj7EFbi63l/tX/srLKCR6RqSgBPs7i4Cct7sOBZPUU+sru4aJwbfZWi91mcbRVVwvQ7VEA8NS6dnKi9yZ6i0Z7E73b+O31uwZpa1PXjzqgHdxyu3GuTCNPNSjyJmq8VSX+0yq8uQJrVp+uvG6qN9q35ttZHJkkP2LFTwRdfLrmcqHPWjyupLfUdR9t9dXV6dx2WG+Yy6f0rwwAAPm+qWXnlJOsGop1DQjvOgXmNOP7Ayf9L/U=c[�&F    AzUHJOlKr8/L5UDmT+am4Hi2dZGyBOMs84plW3C80LuPVrxNd+JLqrLLdhmdXEV6ndk6nNuZUTFAo30qipqnYxt0Gsf9TfI2HVqHu200AynLmT1oqSBe/7HVzrYbKV3no50E6gN/bOd8vTZPzu22sP/TST+w/7ZTmH77J93rWb4FJs1rpiuCcpJT7C2MdpZaZ90Ovn8l43DN44ftt09aQwGjd7Y+FBv40ylbvjO1hiNTZsBymbrDlgCmey03Xy7OOW3T9snZGfx3Pl1Pix9DMCBFI6iaCdRXCvotQZjT+tFmOoaaQDsPNiyO2Gd4xRj/ZXirCxT8VSdDsdzODGNwz6BX2krxhqEyWIIIqVlmDBueVtU3WMfSp81h3EsR6nac8MALLtfDxsKDtMc7XCycrtete76sVjOIRMUM06rLTeg72kWRmWaUw4V8KaPJJoHT5NQsVMMNV4TJkprVPxjU0wniXqZgHOyY24L3TgdNVt++1ch7aQw6XgHH2dxYqM1+CdWdWkhLe8KuQUIjtZYOZWocn4MWr3t1kgXZaPU9aJ/YEA79CV4Vlu2G6kXsDIhU/WNE0QaRDqajUCk/Yv2KCYvoL9GhTbs0STdGroJhTZAtaHXqmBy9CtVInwAafRRxW6tCp6FtbGqDE2b+/r6zJ2fyG7yjNVytwQbjO25UePMraSAGneSLxtFPgI9spSZlgrHxKc6Tte5vQykXRan1aFu4r3QWuN9PxAcdg4zV14Ye8tXR+9ORX5NCXEhH4MGHc9timupYuBAvPwTCqTAy+2/yP+uFEghm4NjGCoE4JX4PoMTPpT3opM1FJ0Gn4YmXriMw6uiN4qPUlDQxKPl4s4M2toCBkrzjPZiKBhA4XXQpTTmIr8CkoBC6YS4dDxcvsyYCYqrWw/Q3jriz26elThcef1l8vED2A20XKrfIA7kvbxwuaJYBAeCaOYvtO8XsgvX+Zi6LhPK9xv5npsg8OGOVFgSLgvi6sHTCfaXJ6zlOu/7G99Ljvs=c[۲�   �于本期购买理财产品较上年同期下降所致；筹资活动产生的现金流量净额-4,941.97万元，较上年同期下降217%,主要是本期子公司归还借款金额及回购股份支出增加所致。 \r\n　　2、深挖技术潜能，拓展行业应用 \r\n　　报告期内，公司积极推进物联网、大数据技术在各行业应用生态体系的构建工作，凭借多年深耕于物联网、产业互联网领域的行业经验及品牌优势，围绕主营业务纵向完善技术链条、横向扩展行业应用。通过深度挖掘行业客户需求，根据用户多样化的需求，结合相关硬件设备，利用公司在物联网以及大数据行业积累的经验与技术，打造更为贴切的适用于每个不同行业领域的解决方案，帮助企业更好的利用数字化技术实现业务转型与效率提升。 \r\n　　3、重视迭代更新，推进产品升级 \r\n　　公司高度重视技术研发，进行产品升级与服务优化。报告期内，   �持续加大研发投入，在云计算、大数据和机器学习等方面深入开展技术研究与实践；同时，通过满足并引导客户的深层次需求，持续不断地推进产品和技术升级，着力实现硬件终端的多样性。报告期内，公司面向物联网领域研发的大数据处理产品——TIZA STAR企业级物联网大数据平台在继续提升数据的接入、存储、处理、交换和管理等功能的基础上，在数据分析算法模型的建立和应用方面的能力不断加强，同时将机器学习技术中的分类算法、回归算法、异常检测算法、神经网络等与该平台已有的海量数据处理能力和公司长期积累的丰富的行业应用领域知识相结合，提供了故障预测模型、风险评估模型、用户画像模型、市场行情评估模型等一系列更加智能化和具有前瞻性的服务，提供的IOT闭环服务进一步完善，可以快速构建多类物联网、产业互联网应用。 \r\n　　4、   �打造产品全生命周期管理，提高客户效能 \r\n　　公司基于TIZA STAR企业级物联网大数据平台以及丰富的物联网相关行业经验打造的全生命周期管理解决方案和制造执行系统(MES),通过优化生产线的生产配置、辅助调试自动化管控，提升生产效率，输出营销服务决策，并且实现供应链下游之间信息的共享和传递，建立快速反应的供应链，可以帮助客户实现产品过程的精细化、可视化管理，提升工厂内部的协同效率、规范产品仓储管理、保障产品质量，提升了客户整体管理效能。 \r\n　　5、创造学习氛围，注重员工综合能力提升 \r\n　　随着公司业务领域的逐步拓展、经营规模的不断扩大，企业对于员工的综合业务能力要求越来越高。除新员工培训等常规培训外，还通过中高管理层综合素质提升培训项目、关键岗位业务专项讲座培训项目、内部交流讲座项目等形式，在�    �  �                                                                                                                      �} !	1�%	dengxiaowu趋势看多接口eNp9VM9PE0EUvs9fMScPDaUtIhG8YjxAohE8t5vuuN0EduvuNCW6JtCAGErZGitCS4jIDzkYKgFLoMX+M52Z3VP/Bd92Wi1Qnc1m3sz73jdv3n5vEYaBQiFxsugdLXHX9Zo/2o1yKIQRCmOvlmdrTbGTZwdlvnHI3H0EWK96wU9zL55Pd4FhnEhRmrYnIpHsAiU2HX6pWzbN6rZqzg8njYhBsrqhkoWIRujk1LRuU5xAnWMlFd+8ZA23wwZkz57OzGIHP3k8GxzG3Bz/9CclRy5ZseCw5oq/V3fEaZ3t5h2ves63NhzkTIRhBJfqWHIZxk64uy0NwCVTiqGReJpYSWJQ7LDiEXhtaumGhh1eO2aXK4BXiZ3E/naBXblYAROzwmpgA4NFaMYy4pZCye1wPB7lnw8np0Tukn8stK53eKkmKmv/4QsI04pGcCd1yaYHeWF/7yfcuLMtIXFbfz0Ax6uuhPqrrkQjDAVullhlVxxctX7lobookUhgKP0bFEDuvcqY9BGxLNOKJ02VyPUEjg71uVWFKj2HDOt5Mrrac8g5JqehmyibWIYyT25BR2IPRuEZFHEXzYrn4qzO13OD4JplZtJ/UxnBN90W0eJUv3P+6P2xh2OjsbHxQZRzik3jc6amGwNCo/0Rb1HwQlX7qi01KhV5W7UD5RruqhWE2dPpvwaEdO8rvzvsiNIxf38h6su62m6sx6BVvNqKuPomTvZE8R37sNVuVEZgl2+f+Itlie7Jgx2s8rPjbrfzyjn0ubyDX9r2qtVWfV98WYImhV+Af7QJ+hLl5X6X/GEghPj3r15zo3XdBP6ZlJmdNJPtxtJv3YnTyg==cZْ�   ܬ司内部创造积极向上的学习氛围，促进全体员工综合能力提升。 \r\n\r\n　　二、公司面临的风险和应对措施 \r\n　　1、规模扩大带来的整合和管理风险 \r\n　　随着公司业务领域的逐步拓展、经营规模的不断扩大，通过收购、新设等方式下辖的子公司不断增多，目前公司已发展成为拥有国内外多家子公司的产业集团构架体系，呈现出显著的集团化特征。对集团在经营管理、内部控制、资源配置以及文化融合等多方面的治理能力都提出了更高的要求。因此，能否通过有效的整合既保证上市公司对子公司的控制力，又保持子公司原有竞争优势并充分发挥产业并购产生的协同效应，提高整体的运营效能，是今后公司发展将持续面临的风险因素之一。 \r\n　　针对以上风险，公司已根据集团化发展需求，调整管理架构，实施精细化管理。一方面，在公司内部参照集团下辖�    ��各子公司进行独立运营、单独核算的方式，通过实施事业合伙人制度，将公司内部的各事业部作为虚拟独立核算部门，集团上下形成趋于统一、高效的资金、团队、运营模式。另一方面，全面深化事业合伙人制度，将范围从事业部扩展到各支撑中心，通过不断提升母公司各支撑中心的服务、管理、信息化水平，逐步建立起与集团化发展相适应的内部运营管理机制，实现资源互通，数据共享，业务协同，从而提升集团整体运营效能。在此基础上定期开展内控评价工作，从而形成良性和有效的内控管理体系，合理保证经营目标的实现。 &quot;
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[ڴ�             ot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;introduce&quot;: [ //高管介绍
            {
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;name&quot;: &quot;谢永林&quot;,
                &quot;job&quot;: &quot;董事长&quot;,
                &quot;hold&quot;: &quot;暂无&quot;,
                &quot;salary&quot;: &quot;466.97万&quot;
            }
        ],
        &quot;hold_data&quot;: [ //增减持详情
            {
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;name&quot;: &quot;项有志&quot;,
                &quot;date&quot;: &quot;2018-11-01&quot;,
                &quot;type&quot;: &quot;1&quot;,
                &quot;change&quot;: {
                    &quot;text&quot;: &quot;+0.15万&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                },
                &quot;price&quot;: &quot;10.12&quot;
            }
        ]
    }
}
```

欢迎使用ShowDoc！c[ڴ�   � &quot;64&quot;,
                &quot;odds_text&quot;: &quot;近30日胜率&quot;,
                &quot;name&quot;: &quot;涨停大师&quot;,
                &quot;description&quot;: &quot;根据公司公告、财报以及市场热点等多方面消息，甄选出有望冲刺涨停个股&quot;,
                &quot;tags&quot;: [
                    &quot;超短线&quot;,
                    &quot;擅长抓涨停&quot;
                ],
                &quot;hot&quot;: &quot;0&quot;,
                &quot;is_new&quot;: &quot;0&quot;,
                &quot;free&quot;: &quot;0&quot;,
                &quot;type&quot;: &quot;ztds&quot;,
                &quot;owner_day&quot;: &quot;1&quot;,
                &quot;owner_text&quot;: &quot;建议持股天数&quot;,
                &quot;service_id&quot;: &quot;2&quot;,
                &quot;url&quot;: &quot;/pages/firstWisdom?query=ztds&quot;,
                &quot;show_activity&quot;: &quot;1&quot;
            }
        ],
        &quot;theme&quot;: [
           އ�情况、通过异动的资金流入，提前潜伏待涨个股&quot;,
                &quot;tags&quot;: [
                    &quot;资金监控&quot;,
                    &quot;抓主力&quot;
                ],
                &quot;hot&quot;: &quot;1&quot;,
                &quot;is_new&quot;: &quot;0&quot;,
                &quot;free&quot;: &quot;0&quot;,
                &quot;type&quot;: &quot;zlld&quot;,
                &quot;url&quot;: &quot;/pages/firstWisdom?query=zlld&quot;,
                &quot;show_activity&quot;: &quot;0&quot;
            },
            {
                &quot;earnings_list&quot;: &quot;39.69&quot;,
                &quot;earnings_list_text&quot;: &quot;30日累计收益&quot;,
                &quot;earnings&quot;: &quot;1.59&quot;,
                &quot;earnings_text&quot;: &quot;个股平均收益&quot;,
                &quot;earnings_30&quot;: &quot;39.69&quot;,
                &quot;earnings_30_text&quot;: &quot;30日累计收益&quot;,
                &quot;odds&quot;:    �  � &quot;value&quot;: &quot;其他建材&quot;
            },
            {
                &quot;name&quot;: &quot;公司名字&quot;,
                &quot;value&quot;: &�-t !	1�	dengxiaowu个股简介接口
    
**简要描述：** 

- 个股简介接口

**请求URL：** 
- ` v2.4.0/Nstock/briefing `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;symbol&quot;: &quot;000001&quot;,
        &quot;import_index&quot;: { //主要指标
            &quot;date&quot;: &quot;2018年中报&quot;,
            &quot;ttm&quot;: &quot;22.96&quot;,
            &quot;pb&quot;: &quot;22.96&quot;,
            &quot;eps&quot;: &quot;0.96&quot;,
            &quot;bvps&quot;: &quot;22.96&quot;,
            &quot;taking&quot;: &quot;22.96亿&quot;,
            &quot;taking   �  �    {
                &quot;name&quot;: &quot;股票回购&quot;,
                &quot;description&quot;: &quot;回购制度完善，公司回购预案对股价短期正向刺激&quot;,
                &quot;tags&quot;: [
                    &quot;短期&quot;,
                    &quot;消息&quot;
                ],
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;stock_name&quot;: &quot;平安银行&quot;,
                &quot;change_percent&quot;: {
                    &quot;text&quot;: &quot;+2.12%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                },
                &quot;change_text&quot;: &quot;入选后最高涨幅&quot;,
                &quot;date_text&quot;: &quot;入选时间&quot;,
                &quot;select_date&quot;: &quot;2018.11.19&quot;,
                &quot;type&quot;: &quot;gphg&quot;,
                &quot;url&quot;: &quot;/pages/firstWisdom?query=gphg&quot;
            },
            {
                &quot;name&quot;:    �;is_new&quot;: &quot;0&quot;,
                &quot;free&quot;: &quot;0&quot;,
                &quot;type&quot;: &quot;yzjg&quot;,
                &quot;service_id&quot;: &quot;1&quot;,
                &quot;url&quot;: &quot;/pages/firstWisdom?query=yzjg&quot;,
                &quot;show_activity&quot;: &quot;1&quot;
            },
            {
                &quot;earnings_list&quot;: &quot;9.65&quot;,
                &quot;earnings_list_text&quot;: &quot;30日累计收益&quot;,
                &quot;earnings&quot;: &quot;1.16&quot;,
                &quot;earnings_text&quot;: &quot;个股平均收益&quot;,
                &quot;earnings_30&quot;: &quot;9.65&quot;,
                &quot;earnings_30_text&quot;: &quot;30日累计收益&quot;,
                &quot;odds&quot;: &quot;74&quot;,
                &quot;odds_text&quot;: &quot;近30日胜率&quot;,
                &quot;name&quot;: &quot;主力雷达&quot;,
                &quot;description&quot;: &quot;每日监控沪深A股主力资金的进�   � &quot;data&quot;: {
        &quot;select&quot;: [
            {
                &quot;earnings_list&quot;: &quot;13.60&quot;,
                &quot;earnings_list_text&quot;: &quot;30日累计收益&quot;,
                &quot;earnings&quot;: &quot;1.63&quot;,
                &quot;earnings_text&quot;: &quot;个股平均收益&quot;,
                &quot;earnings_30&quot;: &quot;13.60&quot;,
                &quot;earnings_30_text&quot;: &quot;30日累计收益&quot;,
                &quot;odds&quot;: &quot;59&quot;,
                &quot;odds_text&quot;: &quot;近30日胜率&quot;,
                &quot;name&quot;: &quot;一智金股&quot;,
                &quot;description&quot;: &quot;通过大数据和量化模型筛选后、再结合专家知识优选标的，收益稳健、胜率高&quot;,
                &quot;tags&quot;: [
                    &quot;胜率高&quot;,
                    &quot;稳健收益&quot;
                ],
                &quot;hot&quot;: &quot;1&quot;,
                &quot   �_up&quot;: &quot;22.96%&quot;,
            &quot;net_income&quot;: &quot;22.96亿&quot;,
            &quot;net_income_up&quot;: &quot;2.96%&quot;
        },
        &quot;company&quot;: [ //公司信息
            {
                &quot;name&quot;: &quot;所属行业&quot;,
                &quot;value&quot;: &quot;其他建材&quot;
            },
            {
                &quot;name&quot;: &quot;公司名字&quot;,
                &quot;value&quot;: &quot;北京嘉寓门窗幕墙股份有限公司&quot;
            },
            {
                &quot;name&quot;: &quot;上市日期&quot;,
                &quot;value&quot;: &quot;2010-09-12&quot;
            },
            {
                &quot;name&quot;: &quot;发行价&quot;,
                &quot;value&quot;: &quot;20.22&quot;
            },
            {
                &quot;name&quot;: &quot;所属地区&quot;,
                &quot;value&quot;: &quot;北京&quot;
            },
            {
                &quot;name&quot;: &quot;主营    H  H                                                              �-p !	1�tdengxiaowu个股简介接口eNrtWNtTGlcYf9+/Yl/sgwlXjdX0NS+d6bSdpnmKDi64URrYpbDY2JAZLuIFUXC8hlAUFWNTBe1YRRbDH+Oes8uT/0K/ZRFh5R47nU7DA3B2v9/5fud8t/MdgoQP0dsrpr3Svg9HIlLh+Dof6+0lCUJDCtkPkj8J7wR+AS+lUGSXAFkpc45P/M9++KYsqCFHyUmjtl+r133r4ljLS53ZaaVfWJlxcpQoza4g8PoFykdKIMB8/93TH0l5OhTx47WKUo8yRNFFDyoEi955j3jCo8SCR8qc4s0lD+F5rIGPTLv0TxlqSI+m/BgkXFN2M2sjPXgzA2MX55SpeOSVpA6+flKSIQgSaBVW0buEuJcTPi4AJ2J0dJQkXhPy3F/87Ga5r1wcxbldyv/HpP5h1Ssr84K9eVEWdlsstKssXS06RnHUjagye5WGEtXaifTyx1A9T5Vau4N1ciYrM0a/qsxJ6nRClpftF57F27MVSA0FulaJUW8YRBenQvYIh1JqXbdAjrOrcEbt0EBjeYe5I3Ha4VKtvam4eVIt32J+jnoJtq8DEXKFViiT21EH2NMYxtCyYSysne5U4S3yrtJbnRXgG7VXANJBMVM3yOfgECh4iCJZoZDEvkyNxtc1oyoOlJo3nveik4SUDAvZWD3ut9hJyuZWgVHwTODXEZ/Dv0VV9FVL6IyUsi5ID+hoo3NS4Q0hd4g251FmpbhxIH7YQBdraOctpAaBv8Tx+eLbqKLgPikL2RDK+vFGCse3OqYMcarX6Ic0BuO97mJkWbYrf94FH63xXqkoXobixyic69Kg92ssXoqmwONRKNkxHSnklwKX1Z4lxqbF7VV5u9MfpXTyyusTV7fwXBSFttF5CoYoPS/tBlEkhOOLFZW1S6mMRtRxb3a7r   �    29&quot;
                }
            ],
            &quot;total&quot;: &quot;1&quot;
        }
    }
}

加载更多研报的返回。apge &gt; 1

{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
            &quot;list&quot;: [
                {
                    &quot;id&quot;: &quot;1&quot;,
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;title&quot;: &quot;业绩延续高增长，资产质量持续优化&quot;,
                    &quot;result&quot;: {
                        &quot;text&quot;: &quot;买入&quot;,
                        &quot;color&quot;: &quot;E95057&quot;
                    },
                    &quot;source&quot;: &quot;广发证券&quot;,
                    &quot;date&quot;: &quot;2018-10-29&quot;
                }
            ],
            &quot;total&quot;: &quot;1&quot;
        }
}
```
 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�bj   � �                         �N !	a�dengxiaowu行情首页的板块主题和快速涨跌
    
**简要描述：** 

- 行情首页的板块主题和快速涨跌接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/newindex/getSelectThemeList`
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |类型 normal ：板块主题  speed：快速涨跌|


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;theme_id&quot;: &quot;265&quot;,
            &quot;theme_name&quot;: &quot;增强现实&quot;,
            &quot;change_percent&quot;: &quot;-0.10&quot;,
            &quot;top_symbol&quot;: &quot;002450&quot;,
            &quot;top_name&quot;: &quot;康得新&quot;,
            &quot;top_change&quot;: &q� !	1�Edengxiaowu保存用户信息
    
**简要描述：** 

- 保存微信用户信息接口
   H    RBhnDIoF86/QvWcQ0fYrl+7cRPogIBtNZTL4tXTEnV6i5YXddSYaaYf6Walhjbndat8iNeWdEYfZMllP6Szorcs0Fl3myB4RRCBjtfK5E6DqiTHAN1zotKkNwbQ3BYqPzCOXgIKEWVenYpDURjiIAecTd8MUihePHCTErKkyJJAgjZWB6dYN2BLy5MSFFU7f3mvHdLMpslBmVsZnWEAObTGCnqyaRaPjTfz5MQY/Mu+uVLCs1X6pphIJAKYHxlb+JMfEgr8TIMcTGh0PQiC59pCkhxVTgIuOMHzouai26ECedoTKGVvxbhJElQ7ieyeIC0hiJO9Z7WFxgeELzQpJn/exwliNBgM9wsX+YF27ZaGLPF3ZW5C7FRBj1fReuHvdPaMpH+bMKHclu55UkIDA+cvBvs/DZ3v909S4iJ5hZ1Jyje32UQwEfvyyt3UtZFLqf6RW0MyVEa/CvYNnyFNPhNfptil5HCfeuVbMRgejfLDI8Llq2M374xFp1KKP5PbU500/tDO3uiGjCUkQfwQoFd4IOSPU8Ukpwqn2t9978SnmWm7gxmcf0G7un0KOZGPrf2xtf9frd3qqRYEStD7MnDmN5QveBlbKbwiQ1GG/qwtmNOLHuZsCVVf4tllNPcr/ckbtSpK1/20WkRxVeI9JYbD4e45mkiq9JwSmrlPP2JU3DeLdbQw81d6pTsNZ5+fl2XROnxllVfJWDBqa/Y6u23ulnBlyzhK4/Xj5sOfyQ56vID/LKFMgYiho9mQcfQMF2bf1jOUpUNvmulcncwe9ObAaGzT/7e1v4M3l1GxYh3uvmf8sKFQ9wH0T8bus4iMxOkueu9Ro16pubJulcv/SYe90F2IzubQBz+RfYotI0PLpAbOa/J83R3rmjti705s3VkXSXE/RaBzqspNOWat88+CdvNormJj7ZpQ8SHZdv0wfnKIihu0THqORm2H+DDbjRXmm3v55vYf5sZP7SFqqRniyp4/tRpLxusG0boxriSHFJ404Tt8+E6zc[9�   �uot;: &quot;000001&quot;,
                &quot;period&quot;: &quot;1个年内&quot;,
                &quot;count&quot;: &quot;36&quot;,
                &quot;level&quot;: &quot;买入&quot;,
                &quot;buy&quot;: &quot;24&quot;,
                &quot;hold&quot;: &quot;0&quot;,
                &quot;stay&quot;: &quot;0&quot;,
                &quot;sell&quot;: &quot;0&quot;
            }
        ],
        &quot;research_report&quot;: {
            &quot;list&quot;: [
                {
                    &quot;id&quot;: &quot;1&quot;,
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;title&quot;: &quot;业绩延续高增长，资产质量持续优化&quot;,
                    &quot;result&quot;: {
                        &quot;text&quot;: &quot;买入&quot;,
                        &quot;color&quot;: &quot;E95057&quot;
                    },
                    &quot;source&quot;: &quot;广发证券&quot;,
                    &quot;date&quot;: &quot;2018-10-   % �%                                                                                                                                                                                                                                                                                         �j !	3�}dengxiaowu行情-大盘指数eNrtlr9Lw0AUx/f7KzI5FNuIY11dBEWxOok0R3K1wTRXk+sPKB1aBIdCu1TRVsQfRToIrVgRtdp/prmkU/8Fk7RpE8jgZsG86eXe577vXeALDzBmABAKGZ03+lze390c9xuhEAPCDJckJB1lWQFlI7k8QSqJJERFJTlRFXAqwsvsFlSOEWGxLIky2pAFlGc4YMo5avTiXevXbEFTb2c7tme30mplet6d9gGAMfFBXWve6K2P4XfFZAHHcQwoAGu2pZMMJmsqgSSjTvIos7LsKolyAjuFKZzheaROaTcqQAId9MA+t6Iwy+YkjwXkFXWreVkZpn7NZqGUmcHexnOIoDzxCobDfpLucSWseK8k7JjknltFv7kE0WEXbqy4Aski/jLIEzGL4gkJHjkyq35cWkFxXsIqiouWQ/74JcDnTYEBAgMEBggMEBjgfxnAzg5B0Vq3XGvYZD0zOj16WZ1taFrrjL607c8wQ5s9rdWY0KP6ldHpDD8f9NuSufXp15XR48Xo7lVvnLpLtFYzBl1Tiz7dG4Pq8Gug19uxJM6tY37cL/0AuxML2A==cZ�7��
 !	K�%dengxiaowu策略选股-股票列表接口eNrtnVtTG0cWgJ+tXzEvG6ocaM+t5+JU3vZxq3ZrnTxtpQ   `   �c_rate&quot;: [
            {
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;period&quot;: &quot;3个月内&quot;,//时间段
                &quot;count&quot;: &quot;24&quot;,//总家数
                &quot;level&quot;: &quot;买入&quot;,//综合评级
                &quot;buy&quot;: &quot;18&quot;,//买入
                &quot;hold&quot;: &quot;0&quot;,//增持
                &quot;stay&quot;: &quot;0&quot;,//中性
                &quot;sell&quot;: &quot;0&quot;//卖出
            },
            {
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;period&quot;: &quot;6个月内&quot;,
                &quot;count&quot;: &quot;30&quot;,
                &quot;level&quot;: &quot;买入&quot;,
                &quot;buy&quot;: &quot;22&quot;,
                &quot;hold&quot;: &quot;0&quot;,
                &quot;stay&quot;: &quot;0&quot;,
                &quot;sell&quot;: &quot;0&quot;
            },
            {
                &quot;symbol&q    / W /                                   �%o !	I�]rdengxiaowu公司高管和增减持详情eNq9lE1vEkEYx+/zKebkAVmWhVq1XnsxMWqsnhoDy7ICCkzdXVTSbVIwfQstq0lrSTVEqG1INIVGk76A7pdhZpdTv4Kzu0B2ocLN5zTPzv/3zH/mmR0AaQCfzzhZNY8LRNNMvXXVOfD5IAAMNHYbZPOM/Gzg9W1SPsLaIaBas3lGTovPnjzoCxkYheybUGAmEGQfygoSXrEJUYlk+CyfEKVIKvsCwSiwl3FQ8ukCdzSbpvDjRwtPoVUXa0WyN1xddVL8YUfF+lpvdUs1Ttu4WlLN5i9SKatAnWNoWP7tkZMyUGX6n6lCzmdiKA1VUmnSXFakVDYBVbNYM44a9+dtDQCQ2tJ38eeq8e2y+6dEPYFoNArBMrBq33idQ8o9WeGVnOyM52DQ75qytjeY6ItzgiDKfbVbGucVfiB1qrvLKBKK5wRxIFiELNv7XjFOat12yWjvDPVWLHsyl097w147QSs4t5txLstnRC9ltuqkdU6q+5PBlyg2wn087F6Wenv6ZC6J0nEvSA6KZP/rZErm07yU93Izs7OBu7e75xtO6iFXhtlzPxg3EHE3xDpvXK/iDY1sF8zmMXm/9p+PvFe7IF+2sD7lyKnpETAU5O4wHMdMW1LJL42QUwAhyWcT4viVvaa0+E7xlr4ZDHC3hm3xT2AFlEaSFxZj4XA4dk1H7a7+y+6SlBJGN0hdhCbfDODkK9ZfDwD5UTf1cve3Tt++hSR6O4+Eq07hL+H/q6k=c[ڰ��n !	+�mpdengxiaowu个股的研报eNrVV1tPGkEUfp9fMU8+GJGL2np5tQ9Nmrap7VNjBNetbrpl7e5ga10TIF6oN2yCaNUYL6D0omiKFgHLj+nO7PLkX+jAIrLoopho23nY7GHOd+bM+T5mzgJIB   �  �业务&quot;,
                &quot;value&quot;: &quot;节能门窗幕墙的研发设计、生成加工、安装及服务&quot;
            }
        ],
        &quot;business_cate&quot;: [ //业务分类
            {
                &quot;category&quot;: &quot;按产品&quot;,
                &quot;date&quot;: &quot;2018年中报&quot;,
                &quot;list&quot;: [
                    {
                        &quot;name&quot;: &quot;门窗&quot;,
                        &quot;income&quot;: &quot;10.54亿&quot;,
                        &quot;percent&quot;: &quot;0.2&quot;
                    },
                    {
                        &quot;name&quot;: &quot;门窗&quot;,
                        &quot;income&quot;: &quot;10.54亿&quot;,
                        &quot;percent&quot;: &quot;0.8&quot;
                    }
                ]
            },
            {
                &quot;category&quot;: &quot;按行业&quot;,
                &quot;date&quot;: &quot;2018年中报&quot;,
           
                    &quot;change_percent&quot;: &quot;36.41&quot;
                }
            ]
        },
        {
            &quot;theme_id&quot;: &quot;226&quot;,
            &quot;theme_name&quot;: &quot;工业互联网&quot;,
            &quot;recommend_text&quot;: &quot;&quot;,
            &quot;date&quot;: &quot;03-06&quot;,
            &quot;stock_list&quot;: [
                {
                    &quot;symbol&quot;: &quot;300315&quot;,
                    &quot;date&quot;: &quot;03-06&quot;,
                    &quot;change_percent&quot;: &quot;5.02&quot;
                }
            ]
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|theme_id |string   |板块ID  |
|theme_name |string   |板块名称 |
|recommend_text |string   |推荐理由 |
|date |string   |推荐日期 |
|stock_list |array   |股票列表 |
 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！cZّ�   � &quot;独角兽&quot;,
            &quot;recommend_text&quot;: &quot;&quot;,
            &quot;date&quot;: &quot;03-06&quot;,
            &quot;stock_list&quot;: [
                {
                    &quot;symbol&quot;: &quot;300216&quot;,
                    &quot;date&quot;: &quot;03-06&quot;,
                    &quot;change_percent&quot;: &quot;9.44&quot;
                },
                {
                    &quot;symbol&quot;: &quot;300033&quot;,
                    &quot;date&quot;: &quot;03-06&quot;,
                    &quot;change_percent&quot;: &quot;48.25&quot;
                }
            ]
        },
        {
            &quot;theme_id&quot;: &quot;227&quot;,
            &quot;theme_name&quot;: &quot;小米&quot;,
            &quot;recommend_text&quot;: &quot;&quot;,
            &quot;date&quot;: &quot;03-06&quot;,
            &quot;stock_list&quot;: [
                {
                    &quot;symbol&quot;: &quot;603660&quot;,
                    &quot;date&quot;: &quot;03-06&quot;,   �      },
                &quot;1520870400&quot;: {
                    &quot;open_price&quot;: 18.5,
                    &quot;high_price&quot;: 18.93,
                    &quot;low_price&quot;: 18.41,
                    &quot;close_price&quot;: 18.84,
                    &quot;change_percent&quot;: 1.454,
                    &quot;volume&quot;: 2670966,
                    &quot;date&quot;: &quot;2018-03-13&quot;
                },
                &quot;1520956800&quot;: {
                    &quot;open_price&quot;: 18.66,
                    &quot;high_price&quot;: 18.97,
                    &quot;low_price&quot;: 18.57,
                    &quot;close_price&quot;: 18.93,
                    &quot;change_percent&quot;: 0.4777,
                    &quot;volume&quot;: 2315908,
                    &quot;date&quot;: &quot;2018-03-14&quot;
                },
                &quot;1521043200&quot;: {
                    &quot;open_price&quot;: 18.72,
                    &quot;high_price&quot;: 18.91,
          � &quot;close_price&quot;: 16.71,
                    &quot;change_percent&quot;: 0.0599,
                    &quot;volume&quot;: 2343832,
                    &quot;date&quot;: &quot;2018-02-27&quot;
                },
                &quot;1519747200&quot;: {
                    &quot;open_price&quot;: 16.69,
                    &quot;high_price&quot;: 16.95,
                    &quot;low_price&quot;: 16.56,
                    &quot;close_price&quot;: 16.61,
                    &quot;change_percent&quot;: -0.5984,
                    &quot;volume&quot;: 1975710,
                    &quot;date&quot;: &quot;2018-02-28&quot;
                },
                &quot;1519833600&quot;: {
                    &quot;open_price&quot;: 16.5,
                    &quot;high_price&quot;: 16.93,
                    &quot;low_price&quot;: 16.46,
                    &quot;close_price&quot;: 16.92,
                    &quot;change_percent&quot;: 1.8663,
                    &quot;volume&quot;: 2066583,
                       �&quot;date&quot;: &quot;2018-03-01&quot;
                },
                &quot;1519920000&quot;: {
                    &quot;open_price&quot;: 16.8,
                    &quot;high_price&quot;: 16.94,
                    &quot;low_price&quot;: 16.58,
                    &quot;close_price&quot;: 16.66,
                    &quot;change_percent&quot;: -1.5366,
                    &quot;volume&quot;: 1627086,
                    &quot;date&quot;: &quot;2018-03-02&quot;
                },
                &quot;1520179200&quot;: {
                    &quot;open_price&quot;: 16.72,
                    &quot;high_price&quot;: 17,
                    &quot;low_price&quot;: 16.71,
                    &quot;close_price&quot;: 16.95,
                    &quot;change_percent&quot;: 1.7407,
                    &quot;volume&quot;: 1489324,
                    &quot;date&quot;: &quot;2018-03-05&quot;
                },
                &quot;1520265600&quot;: {
                    &quot;open_price&quot;: 17.03,
            � � �                                                                                                                                                                                      �j !	C�mdengxiaowu获取微信手机号登录eNrtVt9P01AUfu9fcZ98II5tGpBhjNFANASjokaNMVltu1GVdrZ3bMSSbFMU+TU0MAEXBBmyGGVO0SGb7n/R3tvuyX/Bu97NbbVMfTSxT7f3fN93TntPTz8GkIvp6DC2Y+bLOE4mzfLb76WVjg7AMC5gzhVQMoUfTeP0HkoW8PssejBjLBfR50U8t   �F !	%�Edengxiaowu跳转协议eNp1UktLAlEU3t9fcVeiC7MJ2igSbdq2aBvE4Nx0ynk0c31EV9CI2lTWQjQx0BKLiBTUiso/E83DVX+hO57RctHZnPf3fedyEcLcUBhjeX0jsqpKhiZL7kvfHT1aZ2X36QkhlRAprSVlNS64rXun/TZuDcfXNzA0bhTdTsm5erdGFUT3dRLP52HK7x/efr0+wAZKaColKo0fBPYyGo3tkn0IouCyYjpDICzMYUy2fab6kVU+tCs9hJhHx9zuwK6dMygyiSgaQywa5uYdBtHfBP/mvIKYMPFA5IwuORd0TC1jJLxrMMOgaU02TJqTTUlTopHITkbRVyYHCwFR0WN/XmmSz27dhG3A85Oo71OU6hxr+xd5IaFG/GYBHJ4aF7uEGTw1F8V46bPY+E/V0ryKGRhH0UXTzGmGhFlWNBIp0QguL4Ywsy46HgvGVvfYaZZ8SlVUCNBPh4VlPmzXujCM7drQuetNFRokuUVlvsJklQYFIQSNGbbdv7eOT+3q87g68Bb4z7PaJ7z6/VG3q02E0A+3NBZkcZ�(4    4mSGwyhmrkCzicuDQ3WeC7gB8MQhtRetzsShYIKOwOiosKIqPLySCcnuc+IksiGQu6gAC9Hzw3LkgD8jFUG1cKpT6iUtOSI2rmzFy4CDRBwNRtKJvDizxI1eovmZzVUnqjEHmlGvohWpzUzt4OX5jRG63WRq/qQ1oreuoDmqm0TBCfzAtDwUo7cqVARpSCge1ZUHLXHAJpaQ7kH+u47QCGCxCljISjwfSxkgbXpyCCF4tltSmIAedjyAnq2amT29C/T5EkZ/HTLWMjiyQJ9w4zf7wfMXaZKOHAnLMOjKmRhWKXrXuA52BQSpYBcD9TAYY4T1Bq6GcqTKutQqt6IsaMkqLQKVc+SHCUvjHbud5wq5+aPq2JQOtbF8kLA4/F180e4nubcjRySyN2S2BGhNQt6soiW099iiX1If0sYkW+It20Ub0/PoSOe7sPeQ93OJDkkSCLfSpKv3HCFPeHg6VO3omcHTkS7By73SVAePO/p6t8nNWlvR6XgiUh/l3LqquDxDQa4/gH+5JmhizeHAmNR2VkpTIR+kXGGtvZGO2QwLPLCnwDtiXu8zjhFiLAK/zP3tetWfJwZr3Ywg1NvaVc3Tw8r8r+1/7f2v9XajZ5qQKAI7YeB429QKm1XbFA4WYKCBJ1VGzCrF23KiSwqvMOT82jqOf0568UCipWccjWEQorI2Ur0+XztOapAqrS9JTRxj37EKLNlZEpoZuJrbKG9DFt9f3aVWXPnk5lbJGNBLy5V14l1YzOL82v6bgwv71UePiY76MkM/phF8TRJhnYnvfruK5ye/F6KU5WWfONM66o+e9CXbb28Tv+75tYGXp1Hmby5s/mb8ePyetsPoF8V288iMhJpQY3fPjUu1KbYrYyjh3HVLAwxMXXzst9FKLXGBRqrKOyYZUla5zDaTKGpfN2KoMxDsl1zffjZDsqs0DIrC8tmLqcXN4y1ODFnRnq68jJVWf9grNxvDlHjyBAP8/qFWZ7TP5dJrgvDcqRP5siR/QBnEuVjcZ��   �            &quot;high_price&quot;: 17.48,
                    &quot;low_price&quot;: 16.83,
                    &quot;close_price&quot;: 17.09,
                    &quot;change_percent&quot;: 0.826,
                    &quot;volume&quot;: 2752935,
                    &quot;date&quot;: &quot;2018-03-06&quot;
                },
                &quot;1520352000&quot;: {
                    &quot;open_price&quot;: 16.83,
                    &quot;high_price&quot;: 17.46,
                    &quot;low_price&quot;: 16.83,
                    &quot;close_price&quot;: 17.38,
                    &quot;change_percent&quot;: 1.6969,
                    &quot;volume&quot;: 2384578,
                    &quot;date&quot;: &quot;2018-03-07&quot;
                },
                &quot;1520438400&quot;: {
                    &quot;open_price&quot;: 17.39,
                    &quot;high_price&quot;: 18.57,
                    &quot;low_price&quot;: 17.3,
                    &quot;close_price&quot;: 18.5,
                    dLYXmnkoxRbx/FNlNggZKGUyuCDWPur52WVBXhAF8/3NlutVBND2h0k5YAkxTDWMNsfDPvZAWuA5ds5NtrKR3zdHPAQ6oZaHDx/jHIJNZQc6eWL1jYggKdP2pSdUCKG586TAbJLYRYtr4rJk2J+QtYTHo8HEEOE8g8evu2L8I853sv3cdq8GcBHVUvBcGekslAW9/l8LFdWV0v9Xt5bkb5W7coYOp9VBfXrQ9qc9upwejE32NMRCekdHBBSLsc1PsqRucPeHlbvh5JTeOELmsxKU6na3h19g26ODYXcXDAQ9l7a+rpMgwG9FtbWhrwc7+6NBn3nGeoP6kLJswP8peOykTR1VegLJ18kFInqvdgOhmE6tLnOa/iq/Hxd3nCAdfeyUR8b5o3n2EiRNvjgBpMkrkj3n9iyO42xBSF0uqBxtvBhGk2Po9FNdJKpky34/9myWAw/s0513BVYN5pgvVAxziajUNEumjYOVTH3CY+Po/Ts/SWKdpI2xuy3FUO6THFbMZAxBhYDoa2eN2Hx93dxewaNL0v5/P1li7GT0G52tiBpc5mDLdr4pXUtj7WqrP0xMZ6Sa1Ac376/bNkhCR1mZ4smqSZzsEUZZstB2+qp4HdLsRn5y6qYPb0DtqhbureUrz3zV/B22gxs0U5XHWzZ6ym2FlA+I/7Io9SHe1xv2UjoMv+9Rd/SO1GdvSGGlS4HgVf2xMUsOp3TWiCqrXbjg76+8SGlMlqwv7Q+Kpufd160hoyUOsILcbUnI2gWND0liAdZtDohaIsCITRblAFAeSKUf9YcsssFLEDg+GgwHFDsAK+M4Pl0MZvBazlVp39oeu2vHXT8XlVdwlsna2uEoFhYR4mMKpUVumV/d2WVsqDkEkoegRYxdnyWmwQWCoi7J4rlWdkCLfjzWlkuqG0qlBzDhzvlDhpePpJDaOdXml2UUqlidkNcG1UewspEaWu+tP5TXHpXvaQ14QiCwN++SoV48bQgzu60dkX6WyK+s9zoH+mJ9Q0=c[�?� � � � � +                �U !	+��
 !	O�5dengxiaowu第一次进入首页显示文案欢迎使用ShowDoc！
    
�&	 !	1�{dengxiaowu趋势看多接口
    
**简要描述：** 

- 趋势看多接口

**请求URL：** 
- `https://wxtest.firstwisdom.cn/newindex/getDKList `
  
**请求方式：**
- POST | GET

**参数：** 
无 ，但必须登录
|参数名|必须|类型|说明|
|:----    |:---|:----- |-----   |-   [�G !	C�+dengxiaowu中长线机会板块接口
    
**简要描述：** 

- 中长线机会板块接口

**请求URL：** 
- `https://wxtest.firstwisdom.cn/newindex/getLongChanceList `
  
**请求方式：**
- POST | GET

**参数：** 
无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;theme_id&quot;: &quot;225&quot;,
            &quot;theme_name&quot;:   �   n !	+�Wdengxiaowu自选股接口
    
**简要描述：** 

- 自选股接口

**请求URL：**    �     ?                                                   �K !	%�Sdengxiaowu默认页面
    
**简要描述：** 

- 首页今日板块列表

**请求URL：** 
- ` http://183.56.160.133/newindex/getTodayThemeList `
  
**请求方式：**
- POST |�p !	=�dengxiaowu首页banner列表接口
    
**简要描述：** 

- 首页banner列表接口

**请求URL：** 
- ` http://183.56.160.133/newindex/getBannerList `
  
**请求方式：**
- POST 或 GET

**参数：** 

无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;2&quot;,
            &quot;image&quot;: &quot;https://wx.firstwisdom.cn/public/images/timing__banner1.png&quot;,
            &quot;url&quot;: &quot;https://wx.firstwisdom.cn/?code=1&amp;state=do_login/#/module_product?type=xnjg&quot;,
            &quot;remark&quot;: &quot;&quot;
        },
        {
            &quot;id&quot;: &quot;3&quot;,
            &qu   �                                                                                                                                                                                                                                                     �v !	I�dengxiaowu获取用户消息中心数据
    
**简要描述：** 

- 获取用户消息中心数据接口

**请求URL：** 
- ` https://wx.firstwisdom.cn/user/getMsgCenter `
  
**请求方式：**
- get

**参数：** 
无，但是要求登录

 **返回示例**

``` 
{
    &quot;data&quot;: [
        {
            &quot;type&quot;: 1,
            &quot;new_msg_num&quot;: &quot;1&quot;,
            &quot;new_msg&quot;: [
                {
                    &quot;time&quot;: &quot;2018-05-15 09:00:01&quot;,
             �P !	I�7dengxiaowu获取用户消息中心数据
    
**简要描述：** 

- 获取用户消息中心数据接口

**请求URL：** 
- ` https://wx.firstwisdom.cn/user/getMsgCenter `
  
**请求方式：**
- get

  �   �    &quot;change_percent&quot;: 6.4442,
                    &quot;volume&quot;: 3940478,
                    &quot;date&quot;: &quot;2018-03-08&quot;
                },
                &quot;1520524800&quot;: {
                    &quot;open_price&quot;: 18.34,
                    &quot;high_price&quot;: 18.45,
                    &quot;low_price&quot;: 18.02,
                    &quot;close_price&quot;: 18.2,
                    &quot;change_percent&quot;: -1.6216,
                    &quot;volume&quot;: 2913094,
                    &quot;date&quot;: &quot;2018-03-09&quot;
                },
                &quot;1520784000&quot;: {
                    &quot;open_price&quot;: 18.23,
                    &quot;high_price&quot;: 18.98,
                    &quot;low_price&quot;: 18.2,
                    &quot;close_price&quot;: 18.57,
                    &quot;change_percent&quot;: 2.033,
                    &quot;volume&quot;: 3528743,
                    &quot;date&quot;: &quot;2018-03-12&quot;
              �  �                                                             �6
 !	O�}dengxiaowu第一次� !	1�Sdengxiaowu微信登录授权
    
**简要描述：** 

- 微信登录授权接口

**请求URL：** 
- ` https://wxtest.firs�x	 !	1�dengxiaowu趋势看多接口
    
**简要描述：** 

- 趋势看多接口

**请求URL：** 
- `https://wxtest.firstwisdom.cn/newindex/getDKList `
  
**请求方式：**
- POST | GET

**参数：** 
无 ，但必须登录
|参数名|必须|类型|说明|
|:----    |:---|:----- |-----   |-----|
|change_percent |否  |string |涨幅   desc 降序 asc  升序 |
|return_rate |否  |string | 90日DK点操作收益   desc 降序 asc  升序  |
|page     |否  |int | 页数    |
|page_size     |否  |int | 每页数量    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;date&quot;: &quot;2018-05-21 20:00&quot;,
        &quot;desc&quot;: &quot;根据量价走势�   �    #  #uot;unionid&quot;: &quot;�N !	a�dengxiaowu行情首页的板块主题和快速涨跌
    
**简要描述：** 

- 行情首页的板块主题和快速涨跌接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/newindex/getSelectThemeList`
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |类型 normal ：板块主题  speed：快速涨跌|


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;theme_id&quot;: &quot;265&quot;,
            &quot;theme_name&quot;: &quot;增强现实&quot;,
            &quot;change_percent&quot;: &quot;-0.10&quot;,
            &quot;top_symbol&quot;: &quot;002450&quot;,
            &quot;top_name&quot;: &quot;康得新&quot;,
            &quot;top_change&quot;: &quot;4.35&quot;
        },
        {
            &quot;theme_id&quot;: &quot;246&quot;,
            &quot;t   �   �             &quot;low_price&quot;: 17.62,
                    &quot;close_price&quot;: 17.94,
                    &quot;change_percent&quot;: -5.2298,
                    &quot;volume&quot;: 3221757,
                    &quot;date&quot;: &quot;2018-03-15&quot;
                },
                &quot;1521129600&quot;: {
                    &quot;open_price&quot;: 17.88,
                    &quot;high_price&quot;: 18.2,
                    &quot;low_price&quot;: 17.7,
                    &quot;close_price&quot;: 17.94,
                    &quot;change_percent&quot;: 0,
                    &quot;volume&quot;: 1591251,
                    &quot;date&quot;: &quot;2018-03-16&quot;
                },
                &quot;1521388800&quot;: {
                    &quot;open_price&quot;: 17.92,
                    &quot;high_price&quot;: 18.71,
                    &quot;low_price&quot;: 17.92,
                    &quot;close_price&quot;: 18.5,
                    &quot;change_percent&quot;: 3.1215,
                 �      &quot;volume&quot;: 2031373,
                    &quot;date&quot;: &quot;2018-03-19&quot;
                },
                &quot;1521475200&quot;: {
                    &quot;open_price&quot;: 18.36,
                    &quot;high_price&quot;: 19.04,
                    &quot;low_price&quot;: 18.32,
                    &quot;close_price&quot;: 19,
                    &quot;change_percent&quot;: 2.7027,
                    &quot;volume&quot;: 2572624,
                    &quot;date&quot;: &quot;2018-03-20&quot;
                },
                &quot;1521561600&quot;: {
                    &quot;open_price&quot;: 19.01,
                    &quot;high_price&quot;: 19.53,
                    &quot;low_price&quot;: 18.61,
                    &quot;close_price&quot;: 18.7,
                    &quot;change_percent&quot;: -1.5789,
                    &quot;volume&quot;: 3079475,
                    &quot;date&quot;: &quot;2018-03-21&quot;
                },
                &quot;1521648000&quot;: {
                       &quot;open_price&quot;: 18.84,
                    &quot;high_price&quot;: 19.25,
                    &quot;low_price&quot;: 18.75,
                    &quot;close_price&quot;: 19.2,
                    &quot;change_percent&quot;: 2.6738,
                    &quot;volume&quot;: 1895108,
                    &quot;date&quot;: &quot;2018-03-22&quot;
                },
                &quot;1521734400&quot;: {
                    &quot;open_price&quot;: 18.8,
                    &quot;high_price&quot;: 18.8,
                    &quot;low_price&quot;: 17.31,
                    &quot;close_price&quot;: 17.71,
                    &quot;change_percent&quot;: -7.7604,
                    &quot;volume&quot;: 2408669,
                    &quot;date&quot;: &quot;2018-03-23&quot;
                },
                &quot;1521993600&quot;: {
                    &quot;open_price&quot;: 16.26,
                    &quot;high_price&quot;: 17.44,
                    &quot;low_price&quot;: 16.15,
                      &quot;close_price&quot;: 17.36,
                    &quot;change_percent&quot;: -1.9763,
                    &quot;volume&quot;: 2084869,
                    &quot;date&quot;: &quot;2018-03-26&quot;
                },
                &quot;1522080000&quot;: {
                    &quot;open_price&quot;: 17.43,
                    &quot;high_price&quot;: 18.07,
                    &quot;low_price&quot;: 17.43,
                    &quot;close_price&quot;: 17.77,
                    &quot;change_percent&quot;: 2.3618,
                    &quot;volume&quot;: 1691856,
                    &quot;date&quot;: &quot;2018-03-27&quot;
                },
                &quot;1522166400&quot;: {
                    &quot;open_price&quot;: 17.5,
                    &quot;high_price&quot;: 18.81,
                    &quot;low_price&quot;: 17.36,
                    &quot;close_price&quot;: 18.81,
                    &quot;change_percent&quot;: 5.8526,
                    &quot;volume&quot;: 3333210,
                      &quot;date&quot;: &quot;2018-03-28&quot;
                },
                &quot;1522252800&quot;: {
                    &quot;open_price&quot;: 18.56,
                    &quot;high_price&quot;: 18.99,
                    &quot;low_price&quot;: 18.45,
                    &quot;close_price&quot;: 18.75,
                    &quot;change_percent&quot;: -0.319,
                    &quot;volume&quot;: 2223429,
                    &quot;date&quot;: &quot;2018-03-29&quot;
                },
                &quot;1522339200&quot;: {
                    &quot;open_price&quot;: 18.95,
                    &quot;high_price&quot;: 19.6,
                    &quot;low_price&quot;: 18.64,
                    &quot;close_price&quot;: 19.17,
                    &quot;change_percent&quot;: 2.24,
                    &quot;volume&quot;: 3508826,
                    &quot;date&quot;: &quot;2018-03-30&quot;
                },
                &quot;1522598400&quot;: {
                    &quot;open_price&quot;: 21.09,
                      &quot;high_price&quot;: 21.09,
                    &quot;low_price&quot;: 19.5,
                    &quot;close_price&quot;: 19.91,
                    &quot;change_percent&quot;: 3.8602,
                    &quot;volume&quot;: 5534262,
                    &quot;date&quot;: &quot;2018-04-02&quot;
                },
                &quot;1522684800&quot;: {
                    &quot;open_price&quot;: 19.48,
                    &quot;high_price&quot;: 21.9,
                    &quot;low_price&quot;: 19.02,
                    &quot;close_price&quot;: 21.9,
                    &quot;change_percent&quot;: 9.995,
                    &quot;volume&quot;: 7665621,
                    &quot;date&quot;: &quot;2018-04-03&quot;
                },
                &quot;1522771200&quot;: {
                    &quot;open_price&quot;: 23.45,
                    &quot;high_price&quot;: 24.09,
                    &quot;low_price&quot;: 21.91,
                    &quot;close_price&quot;: 24.09,
                      &quot;change_percent&quot;: 10,
                    &quot;volume&quot;: 14586954,
                    &quot;date&quot;: &quot;2018-04-04&quot;
                },
                &quot;1523203200&quot;: {
                    &quot;open_price&quot;: 26.5,
                    &quot;high_price&quot;: 26.5,
                    &quot;low_price&quot;: 26.18,
                    &quot;close_price&quot;: 26.5,
                    &quot;change_percent&quot;: 10.0042,
                    &quot;volume&quot;: 6756160,
                    &quot;date&quot;: &quot;2018-04-09&quot;
                },
                &quot;1523289600&quot;: {
                    &quot;open_price&quot;: 29.15,
                    &quot;high_price&quot;: 29.15,
                    &quot;low_price&quot;: 25.4,
                    &quot;close_price&quot;: 25.71,
                    &quot;change_percent&quot;: -2.9811,
                    &quot;volume&quot;: 21698483,
                    &quot;date&quot;: &quot;2018-04-10&quot;
                  },
                &quot;1523376000&quot;: {
                    &quot;open_price&quot;: 24.5,
                    &quot;high_price&quot;: 25.95,
                    &quot;low_price&quot;: 23.97,
                    &quot;close_price&quot;: 24.42,
                    &quot;change_percent&quot;: -5.0175,
                    &quot;volume&quot;: 14387731,
                    &quot;date&quot;: &quot;2018-04-11&quot;
                },
                &quot;1523462400&quot;: {
                    &quot;open_price&quot;: 24.43,
                    &quot;high_price&quot;: 26.3,
                    &quot;low_price&quot;: 23.6,
                    &quot;close_price&quot;: 25.38,
                    &quot;change_percent&quot;: 3.9312,
                    &quot;volume&quot;: 13846936,
                    &quot;date&quot;: &quot;2018-04-12&quot;
                },
                &quot;1523548800&quot;: {
                    &quot;open_price&quot;: 24.39,
                    &quot;high_price&quot;: 24.5,
                      &quot;low_price&quot;: 22.84,
                    &quot;close_price&quot;: 22.84,
                    &quot;change_percent&quot;: -10.0079,
                    &quot;volume&quot;: 9173211,
                    &quot;date&quot;: &quot;2018-04-13&quot;
                },
                &quot;1523808000&quot;: {
                    &quot;open_price&quot;: 25.12,
                    &quot;high_price&quot;: 25.12,
                    &quot;low_price&quot;: 25.12,
                    &quot;close_price&quot;: 25.12,
                    &quot;change_percent&quot;: 9.9825,
                    &quot;volume&quot;: 2200654,
                    &quot;date&quot;: &quot;2018-04-16&quot;
                },
                &quot;1523894400&quot;: {
                    &quot;open_price&quot;: 27.57,
                    &quot;high_price&quot;: 27.63,
                    &quot;low_price&quot;: 26.3,
                    &quot;close_price&quot;: 27.63,
                    &quot;change_percent&quot;: 9.992,
                      &quot;volume&quot;: 17430935,
                    &quot;date&quot;: &quot;2018-04-17&quot;
                },
                &quot;1523980800&quot;: {
                    &quot;open_price&quot;: 24.87,
                    &quot;high_price&quot;: 26.66,
                    &quot;low_price&quot;: 24.87,
                    &quot;close_price&quot;: 25.55,
                    &quot;change_percent&quot;: -7.528,
                    &quot;volume&quot;: 16800778,
                    &quot;date&quot;: &quot;2018-04-18&quot;
                },
                &quot;1524153600&quot;: {
                    &quot;open_price&quot;: 24.91,
                    &quot;high_price&quot;: 24.95,
                    &quot;low_price&quot;: 23.44,
                    &quot;close_price&quot;: 23.44,
                    &quot;change_percent&quot;: -9.9846,
                    &quot;volume&quot;: 10743300,
                    &quot;date&quot;: &quot;2018-04-20&quot;
                },
                &quot;15246  72000&quot;: {
                    &quot;open_price&quot;: 22.4,
                    &quot;high_price&quot;: 22.68,
                    &quot;low_price&quot;: 20.91,
                    &quot;close_price&quot;: 20.97,
                    &quot;change_percent&quot;: -8.4679,
                    &quot;volume&quot;: 7538846,
                    &quot;date&quot;: &quot;2018-04-26&quot;
                },
                &quot;1525363200&quot;: {
                    &quot;open_price&quot;: 21,
                    &quot;high_price&quot;: 21.29,
                    &quot;low_price&quot;: 20.1,
                    &quot;close_price&quot;: 20.1,
                    &quot;change_percent&quot;: -4.4223,
                    &quot;volume&quot;: 6018291,
                    &quot;date&quot;: &quot;2018-05-04&quot;
                },
                &quot;1525622400&quot;: {
                    &quot;open_price&quot;: 20.23,
                    &quot;high_price&quot;: 20.64,
                    &quot;low_price&quot;: 20  	.23,
                    &quot;close_price&quot;: 20.38,
                    &quot;change_percent&quot;: 1.393,
                    &quot;volume&quot;: 5668204,
                    &quot;date&quot;: &quot;2018-05-07&quot;
                },
                &quot;1525708800&quot;: {
                    &quot;open_price&quot;: 20.42,
                    &quot;high_price&quot;: 21.8,
                    &quot;low_price&quot;: 20.42,
                    &quot;close_price&quot;: 21.67,
                    &quot;change_percent&quot;: 6.3297,
                    &quot;volume&quot;: 8311555,
                    &quot;date&quot;: &quot;2018-05-08&quot;
                },
                &quot;1525795200&quot;: {
                    &quot;open_price&quot;: 21.2,
                    &quot;high_price&quot;: 22.71,
                    &quot;low_price&quot;: 21.14,
                    &quot;close_price&quot;: 21.74,
                    &quot;change_percent&quot;: 0.323,
                    &quot;volume&quot;: 9720578,
  
                    &quot;date&quot;: &quot;2018-05-09&quot;
                },
                &quot;1525881600&quot;: {
                    &quot;open_price&quot;: 22.2,
                    &quot;high_price&quot;: 23.2,
                    &quot;low_price&quot;: 22.2,
                    &quot;close_price&quot;: 22.69,
                    &quot;change_percent&quot;: 4.3698,
                    &quot;volume&quot;: 10932858,
                    &quot;date&quot;: &quot;2018-05-10&quot;
                },
                &quot;1525968000&quot;: {
                    &quot;open_price&quot;: 22,
                    &quot;high_price&quot;: 22.21,
                    &quot;low_price&quot;: 21.06,
                    &quot;close_price&quot;: 21.17,
                    &quot;change_percent&quot;: -5.9529,
                    &quot;volume&quot;: 7761631,
                    &quot;date&quot;: &quot;2018-05-11&quot;
                },
                &quot;1526227200&quot;: {
                    &quot;open_price&quo  t;: 21.03,
                    &quot;high_price&quot;: 21.57,
                    &quot;low_price&quot;: 20.56,
                    &quot;close_price&quot;: 20.6,
                    &quot;change_percent&quot;: -2.6925,
                    &quot;volume&quot;: 4381523,
                    &quot;date&quot;: &quot;2018-05-14&quot;
                },
                &quot;1526313600&quot;: {
                    &quot;open_price&quot;: 20.76,
                    &quot;high_price&quot;: 22.16,
                    &quot;low_price&quot;: 20.76,
                    &quot;close_price&quot;: 21.63,
                    &quot;change_percent&quot;: 5,
                    &quot;volume&quot;: 6222046,
                    &quot;date&quot;: &quot;2018-05-15&quot;
                },
                &quot;1526400000&quot;: {
                    &quot;open_price&quot;: 21.62,
                    &quot;high_price&quot;: 22.47,
                    &quot;low_price&quot;: 21.33,
                    &quot;close_price&quot;: 21.99,  
                    &quot;change_percent&quot;: 1.6644,
                    &quot;volume&quot;: 8241678,
                    &quot;date&quot;: &quot;2018-05-16&quot;
                },
                &quot;1526486400&quot;: {
                    &quot;open_price&quot;: 21.6,
                    &quot;high_price&quot;: 22.58,
                    &quot;low_price&quot;: 21.5,
                    &quot;close_price&quot;: 21.65,
                    &quot;change_percent&quot;: -1.5462,
                    &quot;volume&quot;: 6834365,
                    &quot;date&quot;: &quot;2018-05-17&quot;
                },
                &quot;1526572800&quot;: {
                    &quot;open_price&quot;: 21.32,
                    &quot;high_price&quot;: 23.82,
                    &quot;low_price&quot;: 21.32,
                    &quot;close_price&quot;: 23.82,
                    &quot;change_percent&quot;: 10.0231,
                    &quot;volume&quot;: 14042845,
                    &quot;date&quot;: &quot;2018-05  -18&quot;
                },
                &quot;1526832000&quot;: {
                    &quot;open_price&quot;: 24.4,
                    &quot;high_price&quot;: 25.69,
                    &quot;low_price&quot;: 23.22,
                    &quot;close_price&quot;: 24.95,
                    &quot;change_percent&quot;: 4.7439,
                    &quot;volume&quot;: 16190012,
                    &quot;date&quot;: &quot;2018-05-21&quot;
                },
                &quot;1526918400&quot;: {
                    &quot;open_price&quot;: 24.38,
                    &quot;high_price&quot;: 25.18,
                    &quot;low_price&quot;: 23.81,
                    &quot;close_price&quot;: 25.1,
                    &quot;change_percent&quot;: 0.6012,
                    &quot;volume&quot;: 10623966,
                    &quot;date&quot;: &quot;2018-05-22&quot;
                },
                &quot;1527004800&quot;: {
                    &quot;open_price&quot;: 24.8,
                    &quot;high_price&  quot;: 26.63,
                    &quot;low_price&quot;: 24.33,
                    &quot;close_price&quot;: 25.03,
                    &quot;change_percent&quot;: -0.2789,
                    &quot;volume&quot;: 13195199,
                    &quot;date&quot;: &quot;2018-05-23&quot;
                },
                &quot;1527091200&quot;: {
                    &quot;open_price&quot;: 24.35,
                    &quot;high_price&quot;: 27.53,
                    &quot;low_price&quot;: 24.02,
                    &quot;close_price&quot;: 27.53,
                    &quot;change_percent&quot;: 9.988,
                    &quot;volume&quot;: 18221616,
                    &quot;date&quot;: &quot;2018-05-24&quot;
                },
                &quot;1527177600&quot;: {
                    &quot;open_price&quot;: 26.7,
                    &quot;high_price&quot;: 30.28,
                    &quot;low_price&quot;: 26.18,
                    &quot;close_price&quot;: 27.8,
                    &quot;change_percent&q  uot;: 0.9807,
                    &quot;volume&quot;: 19879649,
                    &quot;date&quot;: &quot;2018-05-25&quot;
                },
                &quot;1527436800&quot;: {
                    &quot;open_price&quot;: 27.8,
                    &quot;high_price&quot;: 27.88,
                    &quot;low_price&quot;: 25.05,
                    &quot;close_price&quot;: 25.81,
                    &quot;change_percent&quot;: -7.1583,
                    &quot;volume&quot;: 13457070,
                    &quot;date&quot;: &quot;2018-05-28&quot;
                }
            }
        },
        &quot;change_percent_90&quot;: {
            &quot;text&quot;: &quot;0.00%&quot;,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        &quot;change_percent_90_text&quot;: &quot;近90日股票涨幅&quot;,
        &quot;flag_show&quot;: &quot;1&quot;,
        &quot;dk_stock_info&quot;: {
            &quot;symbol&quot;: &quot;002865&quot;,
            &quot;stock_name&quot;: &quot;钧达股份&q    uot;,
            &quot;price&quot;: {
                &quot;text&quot;: &quot;23.89&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;diff&quot;: {
                &quot;text&quot;: &quot;-1.92&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;scope&quot;: {
                &quot;text&quot;: &quot;-7.44%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        }
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|change |arr   | 当前浮盈或者亏损，这个看 signal的值. signal=1时，是当前浮盈，signal= -1时是当前回避亏损  |
|change_percent_90 |arr   | 个股近90日自然涨幅  |
|return_rate |arr   | 近90日累计收益  |
| flag_show | string | 是否显示跑赢文案，0：不显示，1：显示|

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[@e  string |返回类型：change(涨幅分布),shipping（大盘仓位）,theme（分时图的板块显示），theme_change（大盘异动）, theme_stock(板块列表和股票列表)   |

**注意：type的全部值 可以一个或多个请求，（用英文逗号分隔即可）**

 **返回示例**

``` 
涨幅分布：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;change&quot;: {
            &quot;up&quot;: &quot;2611&quot;,
            &quot;ping&quot;: &quot;54&quot;,
            &quot;down&quot;: &quot;621&quot;
        }
    }
}

大盘仓位：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;shipping&quot;: {
            &quot;date&quot;: &quot;(今日 9:00 更新)&quot;,
            &quot;position&quot;: &quot;20&quot;,//仓位建议
            &quot;title&quot;: &quot;短期内大盘处于空头占优态势&quot;,
            &quot;introduction&quot;: &quot;大盘当前走  势为空头占优，量能放大，近3日资金维持净流出。&quot;
        }
    }
}

大盘异动：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;theme_change&quot;: {
            &quot;theme_id&quot;: &quot;309&quot;,
            &quot;theme_name&quot;: &quot;三沙&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;+6.03%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;change_speed&quot;: &quot;0.82&quot;,
            &quot;minute&quot;: &quot;1529476740&quot;,
            &quot;theme_name_text&quot;: &quot;三沙板块拉升&quot;
        }
    }
}

分时图的板块显示:
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;theme&quot;: {
            &quot;info&quot;: {
                &quot;open&quot;: &quot;2889.98&quot;,//开盘价
                &quot;pre_close&quot;: &quot;2907.82&qu  ot;,//昨收价
                &quot;amplitude&quot;: 1.8363640609238,
                &quot;high_price&quot;: &quot;2925.56&quot;,//最高价
                &quot;low_price&quot;: &quot;2872.16&quot;,//最低价
                &quot;amount&quot;: &quot;138781001433.70&quot;,//总量
                &quot;up&quot;: 1016,
                &quot;down&quot;: 267,
                &quot;flat&quot;: 27
            },
            &quot;list&quot;: [
                {
                    &quot;last_price&quot;: &quot;2894.49&quot;,
                    &quot;total_volume&quot;: 375655900,
                    &quot;change_percent&quot;: &quot;-45.86&quot;,
                    &quot;time&quot;: 1529458200,
                    &quot;theme_show&quot;: {
                        &quot;theme_id&quot;: &quot;372&quot;,
                        &quot;theme_name&quot;: &quot;天津自贸区&quot;,
                        &quot;change_percent&quot;: &quot;-0.48&quot;,
                        &quot;change_speed&quot;: &quot;  16.71&quot;
                    }
                }
            ]
        }
    }
}

股票列表返回：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;theme_stock&quot;: {
            &quot;info&quot;: {
                &quot;open&quot;: &quot;2982.65&quot;,
                &quot;pre_close&quot;: &quot;3021.90&quot;,
                &quot;amplitude&quot;: 3.7597461835941,
                &quot;high_price&quot;: &quot;2984.97&quot;,
                &quot;low_price&quot;: &quot;2871.35&quot;,
                &quot;amount&quot;: &quot;241203641068.80&quot;,
                &quot;up&quot;: 62,
                &quot;down&quot;: 1234,
                &quot;flat&quot;: 8
            },
            &quot;list&quot;: [
                {
                    &quot;last_price&quot;: &quot;2973.88&quot;,
                    &quot;total_volume&quot;: 558826000,
                    &quot;change_percent&quot;: &quot;-158.90&quot;,
                    &quot  ;time&quot;: 1529371800,
                    &quot;theme&quot;: [
                        {
                            &quot;theme_id&quot;: &quot;251&quot;,
                            &quot;theme_name&quot;: &quot;高送转&quot;,
                            &quot;change_speed&quot;: &quot;0.72&quot;,
                            &quot;change_percent&quot;: {
                                &quot;text&quot;: &quot;-2.08%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            },
                            &quot;time_show&quot;: &quot;0&quot;,//是否加色显示左边时间
                            &quot;theme_name_text&quot;: &quot;高送转板块拉升&quot;,
                            &quot;stock_list&quot;: [
                                {
                                    &quot;symbol&quot;: &quot;300487&quot;,
                                    &quot;name&quot;: &quot;蓝晓科技&quot;,
                                    &quot;change_pe  rcent&quot;: {
                                        &quot;text&quot;: &quot;+10.00%&quot;,
                                        &quot;color&quot;: &quot;eb333b&quot;
                                    }
                                },
                                {
                                    &quot;symbol&quot;: &quot;300021&quot;,
                                    &quot;name&quot;: &quot;大禹节水&quot;,
                                    &quot;change_percent&quot;: {
                                        &quot;text&quot;: &quot;+1.48%&quot;,
                                        &quot;color&quot;: &quot;eb333b&quot;
                                    }
                                },
                                {
                                    &quot;symbol&quot;: &quot;300342&quot;,
                                    &quot;name&quot;: &quot;天银机电&quot;,
                                    &quot;change_percent&quot;: {
                                            &quot;text&quot;: &quot;0.00%&quot;,
                                        &quot;color&quot;: &quot;ffffff&quot;
                                    }
                                },
                                {
                                    &quot;symbol&quot;: &quot;603600&quot;,
                                    &quot;name&quot;: &quot;永艺股份&quot;,
                                    &quot;change_percent&quot;: {
                                        &quot;text&quot;: &quot;-0.10%&quot;,
                                        &quot;color&quot;: &quot;1dad51&quot;
                                    }
                                }
                            ]
                        }

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[)��     �                                                                                                                    �34 !	1�dengxiaowu清空搜索历史
    
**简要描述：** 

- 清空搜索历史接口

**请求URL：** 
- ` /Market/clearHistory `
  
**请求方式：**
- POST 

**参数：** 
必须登录

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 2,
    &quot;info&quot;: &quot;请登录&quot;,
    &quot;data&quot;: []
}
```

 **返回参数说明** 


 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[4zD�@3 !	%�;dengxiaowu搜索历史
    
**简要描述：** 

- 搜索历史接口

**请求URL：** 
- ` /v1.3.1/Market/sHistory `
  
**请求方式：**
- POST 

**参数：** 
	必须登录

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
           ?    �  �                                                                                                                                                                                                                                        �+ !	=�5/dengxiaowu股票板块搜索接口eNqVU8FO20AQve9X7KmHCMsIpB7otVUvlagKPVUVdoMpUZpYjZ1WCCORqAjaCDsHl0ACEYEkjaoWlxIa0YT6Z7K79olf6NprxzECJOZiz+zMm5mnNwBSA4kEOVl32gVsGI7962pQTSQgABx0ig3S6uADGx1UcHmfdI+w3kLGMaAVjtXDp8WXL54F6RwUIJ8Rc2lJ5RUoAB+WJeGdCzQw/Dya9nx2bh5q8OmTeQ8GGUX8ddRSYy4qb2vI3nDXP2vktI/qJc2xunhX14A2w1Hzhvb/mMtBjQvCNCMtrUAN71rUUdRcKvuWNkMbZ655gn5W/BQAIB3NNlGtTpp/h/9KdC4gCAIEq8CDfvA+L6uPFkVVZH8zkMWjN0WVk+nw8RXPM6LQVsVpdEapnq3GvAggK2aksJ590bbuFEysf6NYLDJxS62yknkjv4tXT1Kbfnh3XUpZWBI/yLmwcpLnKU2o3Ea936Rv4F4ffTl0Nr9T2mMIaxHg64lrRKjLUrQIJYJp5R5E+AALqcX4OlPTU3fvwspuYLF2Scxz0qpTOlF5C138YfH4QtE+YGzBgKXskhzHVPLJpKQo4wOFKhDVvDKiE6x5IhoTFxMzk+51ed+oay6QNRV2KOjbTPP7oOYmPusE14prXdSsstauuedY1rB/TA4L9AjJfslt77iNc1L9NP7EDp4eBP5x5Nj68NImZmduWf74WE5eDQr/AYh7llg=c[)��    数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|key |是  |string | 关键字   |


 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;关键字为空&quot;,
    &quot;data&quot;: []
}

{
    &quot;data&quot;: {
        &quot;stock&quot;: [//股票列表
            {
                &quot;name&quot;: &quot;华联控股&quot;,
                &quot;symbol&quot;: &quot;000036&quot;,
                &quot;is_favor&quot;: 0//是否已经添加自选
            },
        ],
        &quot;theme&quot;: [//板块列表
            {
                &quot;theme_id&quot;: &quot;232&quot;,
                &quot;theme_name&quot;: &quot;国电神华合并&quot;
            }
        ]
    },
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[4�k    �  �                                                                                                                                                                                                                       �6 !	=�[dengxiaowu检查微信绑定状态
    
**简要描述：** 

- 检查微信绑定状态接口

**请求URL：** 
- ` /user/checkBind `
  
**请求方式：**
- POST 

**参数：** 

必须登录

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;0&quot; // 0 未绑定， 1 绑定
    }
}
{
    &quot;status&quot;: 2,
    &quot;info&quot;: &quot;请登录&quot;,
    &quot;data&quot;: []
}

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[4�1   � �                                                                                                                                                                                                                                                                                                                                                                                                                  �a, !	1�m2dengxiaowu上报搜索数据eNp1kklPwkAUx+/zKebkgdi4HPHqwYNG43IyxjalSmOk2pYY4pgA0RglUg6IiEtcADkYChHjAtov05kpJ7+CA1OSavSd5r33m7f8ZwBkBkIhWk961RSxLM9pfHVKoRAEQIDu6zE5rpDcJW3dkdMGOamTbAVb94Dd8OwX0kwvzU/7uABFODIj6RuKOSJFIlOqYWp6AoqgX5/TpPCGO1b/AuPnZhcWYa8UttKs+qAt4i7OnSDsHHSTR4g22/g6gzy7RYpZBFBYYNYbvH/irgCR4IcZYSa2FIhI0WaeYepqbB2iMcFL39JKDY4L5MrBV2ccNRRJl6OrauQ3D1noBxKTNhXYD+FcNQiyUelDg8MAsmWdPL64puV39zPDNgWiKEKwC3rA0HZcMycMUzLjBj+H4ehwIKXG1rRBwofjsqwYPh1EI5IpDdDlFbDX6xPoz2Xkov0W9k9FBV9QJulAyv+M74nLh+Sp5v8VctHC5RJv3c2fe7bttu/pTYq9PL3MdKuF7u0zLe0HU/y7AQDI453nZN0Ph+ZrC1FtZ1KTvzqpb1kLIOg=c[4x(   � �                                                                                                                                                                                                                                                                                                                                                                                                                      �]- !	1�e2dengxiaowu上报搜索数据eNp1kstKw0AUhvfzFLNyUQxelnXrwoWiWF2JmJBGLWKjSYoUR7BFES02LuqtarFXuxBTseKtmpfJzCQrX8FpJoFa9KzmnPPNufwzADIDkQh92HUbGWKart367hQjEQiAAJ3XI3JUJyfXtF0hpy1y/EDydWxWAbvhWi/kMTs/OxngAhTh0JSkrSnGkBSPTyR0Q9XSUAR+fU6TszfcMf0LjJ+Zjs3BbilsZln1sC3iLj45Rtje93YPEX38wKUccq02ucgjgKICs+7g/om7AkRCEGaEkd5QICIXFvN0Q0skVyAaEdxsmdabcFQgNza+OeeorkiavLqUiPfzkIV+IUlpXYF+qA9ko9K7FocBZMvaBXxVorV35yvHNgWiKEKwDbrAwGZKNcZ0QzJSOj9H4fBgTyqRXFbDRACnZFnRA7oXjUuGFKILi2Cn26enP5eRi9Yv7J+KCoGgTNJQyv+M74lrB+SpGfwVctXGtSJv7RUuXctyPqr0NsNenl7nvMaZV36mxb3eFP9uAAByX3HtvPNp00IztqpujavydyfzA3IdIPo=c[4�M                                                                                                                                                                                                                                                                                  �e. !	1�udengxiaowu微信登录授权eNp9U89PE0EUvs9fMScPjUvhwMF60tAQSYmm1IMxJtvsbsuasFO60xTjkLQooaaxy6EtUBD5UUkPhoWIMdLC/jOd2e2Jf8HZnS2tRpjTzPvefO9775sBkC8QibinJe+kzCzLc85ueq1IBAIgQXp92ncO3Z0uvWqwWoV9+cBq36h1DPgNz/7FztdeJhNhugRluIhxzoxFo8UVrJl4IqPnTVzUTRUtTShGdF439HQux9EEyuoGlEFQWhCx5m/aswIuTvXi+UIKEjgbT/mlqLXGGreyiDjSzc+EOuuD0ifinnfpfpV49gXbrhFAYhJffmPBThwlSKQwzDMUpGqQsG2bn0yc140sFDEfBQByVU6d7u677cv+dZVLArIsQ/Ae+KwPlgsIPzZxGhdMsY/ByYdjkG5k0BAIkwuKoplh9niqmsbpYapgH2FLfF4opxm6+jcZyj4pxqfzs6+0yUeJjBKfU5/OJ1Nvk5l3K2HZgGgVrPqqwaC+49m26CcI3N2FNDV1fx9i9J6zwfa+skrTK62zrQPWqNzf2Os3oZTRYEOiwLF/Xf2vnVLoJvdz6ONdi18Zje7WXx6nZ5bbqdJLy4eezQRec0W0vcF+dMInz3YvaLslRIrJ9bvH7kGZv1J3rzo4aQ4Of7qtj+OQ+DX82bDvR55T6185br2zsIiKM0i56ZX/ALj+aeY=cZ��X    quot;: &quot;success&quot;,
    &quot;data&quot;: {//用户信息包括头像等
        &quot;unionid&quot;: &quot;ogAwE5rGYe09LfcEJdBMRTjRfyxo&quot;,
		&quot;nickname&quot;: &quot;xx&quot;
    }
}
```
错误返回
```
{
    &quot;status&quot;: 11,
    &quot;info&quot;: &quot;无关联&quot;,
    &quot;data&quot;: {
        &quot;unionid&quot;: &quot;ogAwE5rGYe09LfcEJdBMRTjRfyxo&quot;
    }
}

{
    &quot;status&quot;: -11,
    &quot;info&quot;: &quot;code解析数据失败&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;参数错误&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: -11,
    &quot;info&quot;: &quot;unionid获取失败&quot;,
    &quot;data&quot;: []
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|unionid |string   |unionid 下一步获取微信手机号的接口回传  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[9��    PsTSQQ11BuRVA0lJE1UJnoF2X9NkiU+FvNHIbqdvDGuyBCEOScNxkVyb3At69BRthvXb94COqBgOxrOZsjqaYo6m+LlRR3XZxqpJ7pZruLNed0qHZK1JZ3TB330sT/SGbGpD+i+5jJFCIoIgU7WSnSmIVWSo4CtOVZp0m0DeG4Llx4ZR68Bg0BZUKdiCIpDPOKBs+jpQRMliwdNJ0melBBUbePyHn2fYhuZFN0Fcyutc4BuSH0FP9s0C8fGu3m6Gxz5dd9cKZLZCjsFLhwOA+5Hzib94oe4gi5qiEdxjY0HQeDLNpMkR5QTQxMcFwSoNdHtUJF+yQmUsbds/CQ1qp1E9nnT4xbhZO9ZR64JfvErTYrKl/p4EUYCgVC/eEEYaI/diiFLwgOZn4CdUfDTVbye/zuVOcPp/zpMKPelhy6X4MDAuQuB/vPBc/3eTkoMypLY6aTcue+LB+LRq1ceJK+PXE72j9wekpEy+k2gb/iM0PQX8GSKXk4M96lX7sJAaDQiDI+IX18bu/X9WGQqqXgzxSnRRzTe0M7a6IaMxiUR/hegO/BA0BunwgSviqex733n2Ke5abuCOZJ7xaq6vcM4ls+l/bm0P63SbtVUC4Ik5D4Mkv4d5/JuxpaLoMgIysibtQVzatHFnCniymsyu4znnrML3KhWcKrmFatFFFMlwZViKBTq7qNBmqVrl/DMT+wnxoV9s1DDCzPvUyvdaXh7/9wsi9bhG6u0StuCUV2zx5ltc7dIylvGUYqsHzce/0JX8NMF8lcRp/M0GD6aDRpHL0h+9kMtzVg64k1znaOT3oPfHRj1bXY3W/s7ZHMZF8rW4e6/tB9fMNi9AX3M2L0X0ZbIEmpd+0zcMCnjljueOsfXlDlU6JwInLMe6tIsXKDzqspPObKlsw/j3RyeK9tYOydceEyXm8qQPDvEhQ2WZmNl3SqVjOoOFS22dMnPN/Zyje0/zY2f201MXHJUw7z8zaovGW/rNNbNcSUxpAj0yP4BxLf2gw==cZ�|�    7 �� 7                                         �P1 !	W�%dengxiaowu小程序-获取微信手机号登录eNrtVlFP21YUfvevuE97QDNJukEJUzV1AnVCVG1pp26aJsW1neB12Jl9Q4JqpCQbLSWAaQUZ0IjBCBBNGyEdWyhJm/+y+V47T/0Lu841JPFM2mlPk+qn63u+833H18fHHwPIxfT1WYdpez+DDcNuHL2ub/b1AYZhAToyrFIOnRqsvVxFRh4/zuHCKTKq+LcSerhobdTQyzW8vIeMXYaQ2OUqrmQ/mxh3GVgQAYHrkixx8XggJsK7qZuTiiyCCNPSpHCcf4HqRiuDJNy8cfsO0  !�B0 !	C�dengxiaowu获取微信手机号登录eNrtVt9P21YUfvdfcZ/2gGqSdIUSpmlqBeqEqNrRTt00TYprO8FtsTP7hgTNSEk6WsqvsAoyoBGDEiCqOtJ0bKEkbf6Xzffaeeq/0GtfQxLPpJ32NKl+ur7nO993fH18/DGAXExPj3mQtvYyOJezGi/e1jd6egDDsMBaqqJcHj+ax4VjlKvi30vowYK5XkOvV/HSLsrtMCTVKldxJfv12Kibx4IIGIcwrg0GAskUFDXYG5VUDSYlTVAmenk5cFWSJS4eD8REeCt1fVyRR   �/ !	C�Edengxiaowu获取微信手机号登录eNrtVu9P20YY/u6/4j7tA1pI0gpKqKqpE6gVompHO7VVNSmufQlei53ZFxI0IyXZaCm/wirIgEYURoCo6kjTsYWStPlfOt/Z+dR/YWdfIIlrsu1jpfqDdXfv8z7v67vX7z0coA/X02MepKy9NMlmrfqrD7WNnh7AcT5gLVVwNkeezJP8Mc5WyB9F/GjBXK/it6tkaRdndzjqapUqpJz5dmy06ecDYTCOUEwb9      AEBO4TIyOK183p0eotWlnTUmGumH+tWpYa2crpdPsbryzqjD7Pkcp6otaK3LNBZd5sgeEUQgY7Xy+ROg6okxwDda0WlaW8MoIVtVH5onjwHFCLKvDoTh6IwwkEOtDZ9M0iheOnQTUrIkiJLAgk6WB2cY92AIy1PS1BUnfyV/U5IM5smB2VtZ3SGAeTQGqvo2ZZVPDVf5ciJMfiHA2u1hOer9GUwkUgEMA8YR/i9bxMK/EiDHExodD0Mgu93hCQ5qpwFXHCC50XNRXdCBfK0Z1DK3o5x0ySodhNNQhgfDgQEcbo/mYKiBvujkqrBpKQJylQ/L5O20PiA8LEmxeQrA5wgRoPB8KBwmR/q1G5ryBJ/X+amxG4V9HQNbRT+SmcvSPq3CVPKPekbT0poaOjS5eDgB6FLg/5JSlwkr7A7Sfn8HpsIJmKfXrufujF2NTU4dndEhsr4reDA6AXS5DPxZYpdTY4OqNe+EIPh8Sg/OiZ8cn3iztcT0ZmU4s/k9lQ3jT+0uzd6IWMJSRDfBugVHgr541QxyanCufaXX7Xis8ys08EMzh/Rru4cNK3Iu9Z+19r/r9Zu91QbAiXofRk48yvKF7yM7RRekaEoQ3/WNqzVix7mbAlVn+P5FbTwI/2Pm7UqStf9tNpEcVXiPSWGw+HeOZpIqvScEpr7jn7EqHhgFetoce7P9GpvGs45Py/Lkn38wi6vkbFg1taddXbH2ivhyrZ5ksYbp81HT8gOerqI/yihTIGIoZP5kHnyMy7Mv65nKEuX3izTvTqbPejVodnYof9v+2AXb62gYsU+3nvD+GFDod4D6J+MvWcRGYmzPfTeoEa9UnN1wy6X/5MO+2FvITqbQ2/9RM4pto0MLZMaOK/J83V3rGvuiL07s3UXXSTF/RSBzqkqN9Mya91/FrSXRwsVB+vUhIqPyLZrfvGzY1TcpGXSczRru8SHOW6skGvu55s7v1ub33eGqH9miCv75Se7sWy+bBCt25NKckThSRP+De9QSeo=c[9�/   + +                                                                                                                                                                                                                                                                                                 �R7 !	1�Sdengxiaowu绑定微信接口
    
**简要描述：** 

- 绑定微信接口

**请求URL：** 
- ` /user/bindWechat`
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|code |是  |string |用户名   |
|encryptedData |否  |string | 小程序必须，APP 非必须    |
|iv     |否  |string | 小程序必须，APP 非必须    |

 **返回示例**

``` 

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[9�u    备ID   |
|activity_type | 否 | string | 活动类型 code, like|
|type | 否 | string | 埋点类型：fx, yzjg,ztds|

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;参数为空&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 5,
    &quot;info&quot;: &quot;验证码不存在&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 6,
    &quot;info&quot;: &quot;验证码错误&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 7,
    &quot;info&quot;: &quot;验证码已过期&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 8,
    &quot;info&quot;: &quot;注册手机号与接收短信手机号不一致&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 9,
    &quot;info&quot;: &quot;该手机已经存在&quot;,
    &quot;data&quot;: []
}

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


c[??�   
 
                                                                                                                                                                                                                                                                �s2 !	%�1dengxiaowu注册接口eNqllE1v0zAYx+/+FD5xqIgmDuNlXEFo0qQhGCeESLeEKtLWjDgdB4zUVrBq6trsUKbSVRvTumogbWGj0NJOy5eJHefEV8CJkypQVlWqL/HLL/7bj5/nDyBvIJXyzvKsXaCWxZxvvy8bqRQEQIL0+wnZ3KbVY2IdAU4xu0vPi8+eLESIBGU4k0OqMWOoGQ2ZqgFlEO4nSLr7i1xaIczZx4tPlyCGjx4uBXsRq0g/DrWwGJKdCibOBz+/hb3zAdkvY2Z3aL2KAZ6TeAtOG/bEUIJYiqY5saYva6sqxLRu8zEyDS2b4Xp0q0ybfWJ1BYXW0IqujGL+121mF7zPBYGtpxF6oxvKCEfszSGkZTe04NKY7LT/2quY5wEYYqt6Rsu+VNQNbUUdYdnZFWmVxG1H8Xnlmh/mH4QwAJAH26mRvX2v1XevyjzSQJZlCN6CIFg3Xud08z4y02YOif4cvHUzsaRlX+nxgviKl3B7fe9LX8wkeSVtpmP++QvwbozO7HidYcDdXoWc1knzZCq12xOq+bVPzLankrozoRTpXjCnRJsHU6ndHa8W1Wic5G6vyuuV1n56B6euc5iYr7i9PCt1pjrLvfFnYfZxJNi98AbWxK8aZGwik0UGisr/1x3+awtS5ArcF2I/uK7hUIcXEI9b7HJ7HdJqCGmRHe7giD9fUMLNst/e9Q9/eI33ySVhlLz6/gAynC4Dc[0�A  &�取手机号注册登录接口

**请求URL：** 
- ` /Miniapp/getWxPhone `
  
**请求方式：**
- POST | get

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|code |是  |string |code   |
|iv |是  |string | 加密串    |
|encryptedData     |是  |string | 加密数据    |
|unionid | 是 | string | unionid|
|inviter | 否 | string | 邀请码|
|activity_type | 否 | string | 活动类型 code, like|
|type | 否 | string | 埋点类型：fx, yzjg,ztds|

 **返回示例**

旧用户登录
``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;avatar&quot;: &quot;http://dev.wxtest.firstwisdom.cn/Misc/d?sign=5adef0096d7c8&quot;,
        &quot;nickname&quot;: &quot;咕噜。&quot;,
        &quot;name&quot;: &quot;咕噜。&quot;,
        &quot;mobile&quot;: &quot;18827063126&quot;,
        &quot;openid&quot;: &quot;oXb-u0ugHGkxOJAx6JWDntoLQ05E&quot;,
        &quot;miniopenid&quot;: &quot;ogAwE5rGYe09LfcEJdBMRTj  'Rfyxo&quot;,
        &quot;unionid&quot;: &quot;&quot;,
        &quot;status&quot;: &quot;&quot;,
        &quot;guide&quot;: &quot;&quot;,
        &quot;id&quot;: &quot;81&quot;,
        &quot;rewards&quot;: []
    }
}
```
新用户注册登录
```
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;avatar&quot;: &quot;http://dev.wxtest.firstwisdom.cn/Misc/d?sign=5adef0096d7c8&quot;,
        &quot;nickname&quot;: &quot;咕噜。&quot;,
        &quot;name&quot;: &quot;咕噜。&quot;,
        &quot;mobile&quot;: &quot;18827063126&quot;,
        &quot;openid&quot;: &quot;oXb-u0ugHGkxOJAx6JWDntoLQ05E&quot;,
        &quot;miniopenid&quot;: &quot;ogAwE5rGYe09LfcEJdBMRTjRfyxo&quot;,
        &quot;unionid&quot;: &quot;&quot;,
        &quot;status&quot;: &quot;&quot;,
        &quot;guide&quot;: &quot;&quot;,
        &quot;id&quot;: &quot;81&quot;,
        &quot;rewards&quot;: {
            &quot;title&quot;: &quot;恭喜&quot;,
            &quot;content&qu    ot;: {
                &quot;first&quot;: &quot;您已成功获取价值&quot;,
                &quot;price&quot;: &quot;999&quot;,
                &quot;second&quot;: &quot;元注册大礼包—&quot;,
                &quot;award&quot;: &quot;免费试用付费股票池一智金股和涨停大师1个月！&quot;
            }
        }
    }
}
```
微信数据解析失败
```
{
    &quot;status&quot;: -11,
    &quot;info&quot;: &quot;数据解析失败&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;参数错误&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: -4,
    &quot;info&quot;: &quot;登录1失败&quot;,
    &quot;data&quot;: []
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|rewards |array   |新用户注册奖励  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[??�                                                                 0 0 �                                                                                                                                                                                      �>9 !	=�dengxiaowu股票池的活动状态
    
**简要描述：** 

- 股票池的活动状态�  )�M8 !	%�Udengxiaowu埋点上报
    
**简要描述：** 

- 埋点上报接口

**请求URL：** 
- `  /Buriedpoint/report`
  
**请求方式：**
- POST | GET

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|activity_type |是  |string | 活动类型 code，like  |
|type |是  |string | 埋点入口： yzjg, ztds,fx（发现页）    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;成功&quot;,
    &quot;data&quot;: []
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |


 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[B�,    90cc&quot;
        },
        &quot;activity_info&quot;: {//活动信息
            &quot;user_id&quot;: &quot;241&quot;,
            &quot;type&quot;: &quot;like&quot;,
            &quot;extend_type&quot;: &quot;yzjg&quot;,
            &quot;id&quot;: &quot;9&quot;
        },
        &quot;like_count&quot;: &quot;1&quot;,//点赞数量
        &quot;like_text&quot;: &quot;距离免费续费90天只差14个赞了~&quot;,
        &quot;friend_list&quot;: [//点赞列表
            {
                &quot;avatar&quot;: &quot;https://dev.wxtest.firstwisdom.cn/Misc/d?sign=5b4ee99bae50a&quot;
            }
        ],
        &quot;code&quot;: &quot;https://wxtest.firstwisdom.cn/qrcode/jSxbT.png&quot;//分享小程序码
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[N�n    service_status&quot;: &quot;1&quot;,//服务是否过期
            &quot;subsc�#b !	1�udengxiaowu版本更新历史
    
**简要描述：** 

- 版本更新历史接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/app/getUpdateInfo `
 �mb !	1�	dengxiaowu版本更新历史
    
**简要描述：** 

- 版本更新历史接口

**请求URL：** 
- ` https://wxtest.firstwisdom.cn/app/getUpdateInfo `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|platform |是  |string |平台   |
|appVersion |是  |string | 版本号    |

 **返回示例**

``` 
{
    &quot;data&quot;: {
        &quot;url&quot;: &quot;&quot;, //是否显示下载按钮，客户端用
        &quot;list&quot;: [
            {
                &quot;id&quot;: &quot;3&quot;,
                &quot;version&quot;: &quot;2.0.0&quot;,
                &quot;intro&quot;: &quot;2.0.0 审核通过了&quot;,
                &quot;ctime&quot;: &quot;2  ��  u  uy                                                                                                         �9 !	=�Ydengxiaowu股票池的活动状态
    
**简要描述：** 

- 股票池的活动状态接口

**请求URL：** 
- ` /Activity/info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |li  -  � !	C�Qdengxiaowu服务付费和订阅接口
    
**简要描述：** 

- 服务付费和订阅接口

**请求URL：** 
- ` /user/services `
  
**请求方式：**
- POST 

**参数：** 
必须登录
|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;service_id&quot;: &quot;1&quot;,//服务购买ID
�x: !	C�dengxiaowu服务付费和订阅接口
    
**简要描述：** 

- 服务付费和订阅接口

**请求URL：** 
  �    p  � p                                                                                                    �w4 !	E�=dengxiaowu点赞页接口-信息接口eNp9VM9T00AUvuev2JOHDiGt40Hx5AwXZ5zRET23NQklCkltN  3�3 !	=�]9dengxiaowu股票池的活动状态eNp9U01vEkEYvs+vmJNR0smWFg/Wk3cTjR9nIMtaV8mi7GClbhMgkgrYYgwlCIa0KVR6sCtKJbAE/gwzs5z4C87uLGYh6Jzemfd53q95XgD5AYEAu8rYF1laLtuTH/NRPRCAACBo585Yu0O7p6z+nvYsUuyw4m+aydLjNimfA86zzT7t5p4+uu+REIxA6Z6M1TcqTkuq9iwBI8DNIJC0OiCjsgvm2IcPHj+BThhSztGTv4kNcSWfjgwyyc8yBYN1LdIsGbbZo7VjAxg7iB+ndNcSVwQN5D1zBE6/UqBBaya/6TiparvQiKsvFcRyA/u6KUDKW6xosfA6LEzvv9idjz7u45gO56MPon1auCTdE1HNfFRwKwAA8u4mFdJostZwOi7x1kAkEoHgHXAAN16nEviujqM4pQt7B25u+FzOlBYOD5ySZUX30H5oLIqjC6iI7svwPLEXjsp4OZQXQ5K8BmpjXiRpjFnhcIWfVPaiydiCHdyAkkTaVVLsinbXosOYj3A5Ien/ZNZ3uzfYJq1LfwfLDYexiuPKMpV9M2nlM8kfcbaIcWfz/0HkhMZ/cKWCm1MrT/pXXE3B0HQ4vLWen0rG103KRR2AA+cHfT8rFCn0t6rRteJEnja5Oheq/NfhFDFNaKgadh6CyBkeV98WCm4JaxuFbgsrhNypLJRHWof0V8dbWNrokVZdlDyrfLFNc2qds9MsXz72tTS7qM7Orvku+11i58EfQsi5qA==c[H^�    ke-点赞   |
|extend_type |是  |string | yzjg，ztds （活动扩展类型）    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;mini_type&quot;: &quot;2&quot;,//小程序环境0-online,2-preview
        &quot;show_act&quot;: &quot;&quot;,//活动广告
        &quot;reward&quot;: 0,//奖品 奖励类型 1-3天，2-12天，3-45天，4-90天
        &quot;reward_text&quot;: &quot;&quot;,//奖品文案
        &quot;info_title&quot;: &quot;集赞免费续费90天&quot;,//
        &quot;info_content&quot;: &quot;(仅差：14人)&quot;,//
        &quot;url&quot;: &quot;/pages/activity-index?type=yzjg&amp;cookie=ps1uhojhkqrh4gqmi3kn255ei23ft456&quot;//跳转小程序URL
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|reward |string   |1-3天，2-12天，3-45天，4-90天  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述
c[N�5   O O                                                                                                                                                                                                                                                                                                                                     �&; !	O�]dengxiaowu发起活动或者是活动详情
    
**简要描述：** 

- 发起活动或者是活动详情

**请求URL：** 
- `/Activity/index `
  
**请求方式：**
- POST 

**参数：** 

**必须登录**

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |like |
|extend_type |是  |string | yzjg，ztds    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;user_info&quot;: {//发起人信息
            &quot;user_id&quot;: &quot;241&quot;,
            &quot;avatar&quot;: &quot;https://dev.wxtest.firstwisdom.cn/Misc/d?sign=5b4dc2e33  )    3  3                                         �J< !	C�1dengxiaowu点赞活动跑马灯接口
    
**简要描述：** 

- 点赞活动跑马灯接口

**请求URL：** 
- ` /Activity/rewardList `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        &quot;恭喜 南方 130xxxx8963 集齐15个好友点赞，免费续费90天&quot;,
        &quot;恭喜 脑残的橡皮擦 135xxxx8964 集齐15个好友点赞，免费续费90天&quot;,
        &quot;恭喜 Miss陈 137xxxx0003 集齐15个好友点赞，免费续费90天&quot;
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[N��    |  |zjg，ztds （活动扩展类型）    |
|user_id     |是  |string | 发起人ID    |


 **返回示例**

``` 
{�? !	7�+dengxiaowu点赞跑马灯列表
    
**简要描述：** 

- 点赞跑马灯列表接口

**请求URL：** 
- ` /Activitylike/likeList `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;avatar&quot;: &quot;http://wxtest.firstwisdom.cn/Misc/d?sign=5b42cf880c218&quot;,
            &quot;text&quot;: &quot;在集赞的路上快马加鞭，你怎么还不来？&quot;
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[N�X}    �                 �= !	E�'dengxiaowu点赞页接口-信息接口
    
**简要描述：** 

- 点赞页接口-信息接口

**请求URL：** 
- ` /Activitylike/info `
  
**请求方式：**
- POST 

**参数：** 

必须登录

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|activity_id |是  |string |活动ID   |
|type |是  |string | like-点赞    |
|extend_type     |是  |string  4�D> !	E�#dengxiaowu点赞页接口-点赞接口
    
**简要描述：** 

- 点赞页接口-点赞接口

**请求URL：** 
- ` /Activitylike/add `
  
**请求方式：**
- POST 

**参数：**   2  � !	E�dengxiaowu点赞页接口-信息接口
    
**简要描述：** 

- 点赞页接口-信息接口

**请求URL：** 
- ` /Activitylike/info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|activity_id |是  |string |活动ID   |
|type |是  |string | like-点赞    |
|extend_type     |是  |string  0    

必须登录

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|activity_id |是  |string |活动ID   |
|type |是  |string | like-点赞    |
|extend_type     |是  |string | //yzjg，ztds （活动扩展类型）    |
|user_id     |是  |string | 发起人ID    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;成功&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;各类参数错误&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 15,
    &quot;info&quot;: &quot;活动不存在&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 16,
    &quot;info&quot;: &quot;已经点赞过&quot;,
    &quot;data&quot;: []
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[N�    vwMDmVAQYTADDClKCNSEPzRUi0W2mj+me4mPfVf8CUbStsR95Dsvv2+9759+95yCAYXibjFOe8oSy3Lc05bdj4SQRzHI3f+wjvba+6f0bVDYh3wDWefZktswQHLK1Vpef7p4wchhUcJJNwTsTKu4KlR5YUsKOqwhhJcEIOh6fYFsa2AAPhHD4eeIN8VsebpVju0yZZkfdUkzmJzbtl0y3Wyt2J6pQrNrZmcOcDD8MUHM7bkkcmHZkAkQx1xRUImzZXAqOOMoqZgVamTt8f3BxkQT6XlXgTy1fPs/IjB5Eksq1I8QAemHoYgTE0/T7Xsd9NY0lHLXmJR6PIJKW8x+S17OXRm6HLGF/YvR8Ta8M6qjVotEAhojkOQPWeT7O65hVrjzwqkjkskEoib4XzEjZeGhu/qOIkNnc0HULSvY8u/hcuNEGyIoqyH6E6olMTJSyjzfrXHRHf4mhGEtlhWG21GL0vqjh+L3e6M3c1IjoOITDdhBOO0PiAIE5P9w0pGxxOKLmlj/aIqpI1no4ooKGPJlKwLkjycNEYxz3z0p9XU9XH8O+6OEmU/AQZcClk/ItUfbt0K6yAGNrjfKNjb3mb7epJ0VXbdiWLV4OYXrk2ULycuaoaKe3L1/xPEMVRmN8NzcqRajN1qnH8B3eS0TKxSo35IFle9yoVb/w7fO1FSOIHDEOcr/XBIzot0aeMVY1+djWPfWb/YOoqQNSdrxd52/Wef8mGbQqNeNuh1AyipjGak/aZVVOxb3M1julR16wuKBIJj8EZ4vxbd2me3uO+uvyYbuZa9exOsdKfYnMszdNA2IJgU3tCfx+FzRncrpJBnZ2hu7nglSMqB+zELD5P7fqV5tA0vHVxQ5xZ7EaED6bdPnrPW+O2A/6ERbWJQE1t29i/bnT6gc[N�                                                                                                                 | //yzjg，ztds （活动扩展类型）    |
|user_id     |是  |string | 发起人ID    |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;user_info&quot;: {//发起人信息
            &quot;user_id&quot;: &quot;118&quot;,
            &quot;avatar&quot;: &quot;https://wx.firstwisdom.cn/public/images/default-avatar.png&quot;,
            &quot;like&quot;: &quot;0&quot;////是否已经点赞 1是，0否
        },
        &quot;activity_info&quot;: {//活动的信息
            &quot;like_count&quot;: &quot;1&quot;,
            &quot;like_text&quot;: &quot;还差14个赞就可以免费续费90天，快来帮我~&quot;
        }
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[N�    �  �                                                                                                                                          �i@ !	1�dengxiaowu奖励气泡上报
    
**简要描述：** 

- 奖励气泡上报接口

**请求URL：** 
- ` /Activity/rewardReport `
  
**请求方式：**
- POST 

**参数：** 

必须登录

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |like-点赞   |
|extend_type |是  |string | yzjg，ztds （活动扩展类型）    |
|reward     |是  |string | 奖励类型 1-3天，2-12天，3-45天，4-90天    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;成功&quot;,
    &quot;data&quot;: []
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[N�    ?  ?�                                                   �PA !	Y�)dengxiaowuapp 小程序 获取配置接口说明
    
**简要描述：为了以后统一修改版本更新信息等问题** 

- 1.获取APP 小程序配置的接口URL 不带 接口版本
	domain/app/getConfig
	
	参数 platform：'ios', 'android', 'miniapp'

- 2.APP端 获取更新信息提示接口
	1. domain/app/updateIOS (ios 获取更新信息)
	2. domain/app/updateAndroid (android 获取更新信息)

- 3.小程序 审核开关接口
	domain/miniapp/getStart
	
	参数：appVersion 小程序版本号
	
- 4.获取 APP 小程序 的版本历史
	domain/app/getUpdateInfo
	
	参数 
		platform：'ios', 'android', 'miniapp'
		appVersion: vx.x.x

- 5.获取 APP 小程序 的版本内容详情
	domain/app/getUpdateShow
	
	参数 
		platform：'ios', 'android', 'miniapp'
		appVersion: vx.x.x
		type:0 ，1 
		lastVersion:c[�Rj�,B !	+��dengxiaowu数据表记录欢迎使用ShowDoc！

# 策略净值表
CREATE TABLE `stock_s  _   2 2                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �d6 !	Y�MAdengxiaowuapp 小程序 获取配置接口说明eNrjUgACLi2t5+saXixrfNbf/2L/hvd7ZmlpKXBx6So8n7LiWcf2Z5tXPG3reda39Gn/Yi6g2hfrtz/b2BQa5ANVCDYAIvhs2s6ne/rB4lwgpU/7m55NhRvIxfVszaIX+/ue7N0PNDk4I7/cJT/5/Z5GACXHQv0=c[Yt�d5 !	Y�MAdengxiaowuapp 小程序 获取配置接口说明eNrjUgACLi2t5+saXixrfNbf/2L/hvd7ZmlpKXBx6So8n7LiWcf2Z5tXPG3reda39Gn/Yi6g2hfrtz/b2BQa5ANVCDYAIvhs2s6ne/rB4lwgpU/7m55NhRvIxfVszaIX+/ue7N0PNDk4I7/cJT/5/Z5GACXHQv0=c[Yt�    �  �                                                                                                                                                                                                           �(7 !	�$dengxiaowu错误码eNp9k01vEkEYx+98ir01ITG8Wm2IhwXGdgPdJbsLLadNg1s9EEnAl3iEqKFEXpJCDZEUkBJNrQXEWMvrl9mZ3Z78Cs7MUiF0I5c9zO83/+d55gFdfDbmJW0616tfpWep18FU4s8ka7Mx+JdIPc+8YIQQ84jZcG74GMbhgGdv9cp7lK/AQtOEHHa7nYHvhtqopA/H+rgJRzU4yN1U60avp407eivLMLBfxucup5PBtGPlciCKihSXwS7OuOfy4QTzElNfAyOsyFLQTUBYzqFa3xIEuxE5rohAioZlwnsIb/Su0CCHSl1Y7qCPLWNehZ9O10SOj7FhLmgmARmIxPYu7f9kBnZAIKRI3DZPnPu0le8zWCnenH8wellLhxeWSRLRNpeN6ZMRPBusjwqIMS4AsCgrj4UoHyTSAyKhk2s0rKHGOTqawXx/zYsBEiaDfU6SadBDWt9RHjUuYPnKsrigX8EfgY5gi0bU+qh4CUfH6LioTRuWUjQSFlhalctJHO13QZu0cCPGz+4aurevsDwbjkscrchFXx/OLrV5W6+P4bRmfOmg04qlS/pfzILH46M+XQr0o40aR6hRhIU2zH/D47daNsUfleJU8ixXTr/OwnndZrOICgvbHHlW92ITzPruoIK8Qzdmy+mkzeC/xS9tfGI9KD7EC3u8SdN7Gfx4erO7oFdwLplUnx4kWTUTUt/QhXSRgLsE9+r21G1x6n95eKimbwnPKhFUE6knqv8go256QTqd+kd5fX8BkfSdbg==cZ�ѿ  :关于系统底层错误代码  小于100 ***/
    const ERR_SYTEM = -1; //系统错误
    const ERR_PARAM = -2; //参数错误
    const ERR_EMPTY_RESULT = -3; //请求接口无返回
    const ERR_INVALID_PARAMETER = -4; //请求参数错误
    const ERR_CHECK_SIGN = -5; //签名验证错误
    const ERR_NO_PARAMETERS = -6; //参数缺失
    const ERR_SERVICE_NOT_FOUND = -7; //方法未找到
    const ERR_VER_NOTEXISTS = -8; //版本号错误
    const ERR_DB_ERROR = -9; //数据库操作错误
    const ERR_UPLOAD = -10; //上传失败
    const ERR_WX_ANALYSIS = -11; //微信登录解析失败
    const ERR_NOT_SERVICENAME = -12; //没有服务别名
    const ERR_SYTEM_BUSY = -13; //系统繁忙


    const ERR_PARAM_NEW = 1; //参数错误
    const ERR_NOT_LOGIN = 2; //请登录
    const ERR_NOT_PHONE = 3; //手机号未注册
    const ERR_NOT_PASS = 4; //密码错误

    const ERR_NOT_SMSCODE = 5; //验证码为空
    const ERR_SMSCODE_ERROR = 6; //验证码错误
    const ERR_SMSCODE_EX    P = 7; //验证码过期
    const ERR_SMSCODE_PHONE = 8; //注册手机号与接收短信手机号不一致
    const ERR_PHONE_EXIST = 9; //手机已存在
    const ERR_REG_FAIL = 10; //手机已存在
    const ERR_UNIONID_NOT = 11; //unionid 没关联
    const ERR_PHONE_SIX = 12; //密码不能小于六位

    const ERR_ADD_ERROR = 13; //添加失败

    const ERR_ADD_HAD = 14; //活动已经存在
    const ERR_AC_NOT = 15; //活动不存在
    const ERR_LIKE_HAD = 16; //已经点赞过

    const ERR_AIP_NO = 17; //百度识别结果为空

    const ERR_PARAM_FOLLOW = 100; //未关注公众号

    const ERR_OTHER = 9001; // 其他错误
    const ERR_UNKNOWN = 9002; // 未知错误

    const IllegalAesKey = -41001; //encodingAesKey 非法
    const IllegalIv = -41002;   //iv 非法
    const IllegalBuffer = -41003; //41003: aes 解密失败
    const DecodeBase64Error = -41004; //41004: 解密后得到的buffer非法c[Yv�                                                                          k k                                                                                                                                                                                                                                                                                                                                                                 �T !	+�Ydengxiaowu自选页红点
    
**简要描述：** 

- 自选页红点接口

**请求URL：** 
- ` /Nstock/redDot `
  
**请求方式：**
- POST 

**参数：** 

必须登录

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |news,sign 多个与英文逗号隔开   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;news&quot;: &quot;1&quot;,//1=有， 0=无
        &quot;sign&quot;: &quot;0&quot;
    }
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[d�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                       �LU !	1�Gdengxiaowu用户行为埋点
    
**简要描述：** 

- 用户行为埋点

**请求URL：** 
- ` v2.0.0/Buriedpoint/action_report `
  
**请求方式：**
- POST 

**参数：** 

必须登录

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|platform |是  |string |平台   |
|action |是  |string | 行为类型    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[s�-    UE57A5EBH80KkyK5F406CfinSl5GvsQlMeYHZbZggaZjGqOpl/+dPsXM/WUrb+m2jFq4+PV2MoJrWvtglDv9q07d7ENhWpz7HkXtspfaT6n0maylUip5kGNbmRUSz9ihSUVqeMuWHbj7V/81YVVV8cMHtGQn0zIsTBWWUEHi0JiUmQSq/TkkGr73AeauS/GFEmODHrhLvh2EYQwNNBcpmsb5vap8S4D6JHP58PoMbIdrvwZl8lNGImf/xrH3H6xF28P7A8pMiF3XQQBitL8rvkqQ3OH/KRYNtX6q2IWF1jhHZTqZrnIpBA/iSvnSfjTwx+jDu5BUQn0O/eWGx4Xj4X6wyQSVlwwMQX4IZF4RFTc8BYS3QE5LMSVNjPaBpdC5JgoSEHPtRue62NjXu/VH8PkhzGepltqZnRgRER8RLqzwYLASTt0DkQiIbEfotd9jZ+bTfn0P9Z8w6hlzFpueJcBOULESLfsgz4Xez3+yDKAwNMPwagm3idm2YsmffG31ajQdNmpeH+ekPhQDHmGY/g0FseGvAP8AExWKWt//W1k9nw2N3pRntWzTMvTVI5W5+lBwqimae4Jd/hUA/3FpbB/UlS8n+/EIcxzmTIDMd4BSjmt34fuzqDL+c+MfgFWpOAEjOq/1lzJOtqk6ZKlL5ine98KNzgyzopefCy9Q5+lbW5kV9hSwaj+13reNE+bdKdBk/DvWP1uuTH6FSbtdeQAjBzuS5rPwgdqVItUP2H6MoycJstwWRqNnHG6aO1t8UC6XuZucBR0fR92//dfJ3Le5/bOOXZQ9Vy+nbs0HgiIitLbnNMlexXN2Ld9jwrgAoXLkUHJ4qhVXB2pAmLlXKQMWxAyGZPjUSmIVSlCbIu5XGZPj83aghQEZnhAJ1lvk8Ads1Iy84v0WeGsvuYFK1uttBJF7n0uW+j2E9BmF3KQbhd5D63lVUvXjdqW+XIWxJm5nmntrrRKb0B89G5xRYkQYq83reaS0WhCflv5/SwHzuqzHwDjmKIWc[��     f  f         �UX !	+�_dengxiaowu好公司列表
    
**简要描述：** 

- 好公友X !	+�Ydengxiaowu好公司列表
    
**简要描述：** 

- 好公司列表接口

**请求URL：** 
- ` v2.0.0/newindex/getGoodCompany `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|page |否  |int |页数   |
|page_size |否  |int | 每页数量    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot  m�rV !	!�#dengxiaowuD点精选
    
**简要描述：** 

- D点精选接口

**请求URL：** 
- ` v2.0.0/newindex/getWinDK `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;symbol&quot;: &quot;002832&quot;,
            &quot;sig&quot;: &quot;1&quot;,//1=d点
            &quot;re  @   � � (``` 
{
    &quot;status&quot�8Y !	=�dengxiaowu获取财务评级的URL
    
**简要描述：** 

- 获取财务评级的URL接口

**请求URL：** 
- ` v2.0.0/newindex/getGradeUrl `
  
**请求方式：*�W !	C�#dengxiaowu获取用户个人中信息
    
**简要描述：** 

- 获取用户个人中信息接口

**请求URL：** 
- ` v2.0.0/user/infos`
  
**请求方式：**
- POST 

**参数：** 

必须登录

 **迄8Y !	=�dengxiaowu获取财务评级的URL
    
**简要描述：** 

- 获取财务评级的URL接口

**请求URL：** 
- ` v2.0.0/newindex/getGradeUrl `
  
**请求方式：**
- POST 

**参数：** 

必须登录

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;url&quot;: &quot;https://www.wx.firstwisdom.cn?cookie=645o15qu9bbtg5ku81tv4nlvoqpbtq55&quot;
    }
}
```


 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[v<�    turn_rate&quot;: {//收益
                &quot;text&quot;: &quot;+16.00%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;stock_name&quot;: &quot;比音勒芬&quot;
        },
        {
            &quot;symbol&quot;: &quot;600619&quot;,
            &quot;sig&quot;: &quot;1&quot;,
            &quot;return_rate&quot;: {
                &quot;text&quot;: &quot;+15.00%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;stock_name&quot;: &quot;海立股份&quot;
        },
        {
            &quot;symbol&quot;: &quot;000596&quot;,
            &quot;sig&quot;: &quot;1&quot;,
            &quot;return_rate&quot;: {
                &quot;text&quot;: &quot;+11.00%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;stock_name&quot;: &quot;古井贡酒&quot;
        }
    ]
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[sԧ  �ate&quot;: 1531756800,
                &quot;end_date&quot;: 1538409600,
                &quot;serviceId&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: &quot;2&quot;,
                &quot;name&quot;: &quot;涨停大师&quot;,
                &quot;icon&quot;: &quot;/public/images/user__ztds.png&quot;,
                &quot;intro&quot;: &quot;大数据监控，搜寻上涨动能较强板块，甄选出暴涨牛股&quot;,
                &quot;ctime&quot;: &quot;2018-01-23 15:22:06&quot;,
                &quot;mtime&quot;: null,
                &quot;status&quot;: &quot;0&quot;,
                &quot;start_date&quot;: 1531756800,
                &quot;end_date&quot;: 1541001600,
                &quot;serviceId&quot;: &quot;2&quot;
            }
        ],
        &quot;extend_info&quot;: [
            {
                &quot;name&quot;: &quot;管理员中心&quot;,
                &quot;url&quot;: &quot;/pages/user-admin?cookie=miu3trjvj6n16a0l4vr8c7sbhasom6in&quot;,
       / /                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �N< !	%�Udengxiaowu跳转协议eNpVj99KAkEUxq89TzFXXaWl9geMvegJuugJFlxiyVwTDaUJbDMizaSLLVOD1jaVKA3UEkt8GWdn9qpXaMYRrHMz5/vNd74zA4B4gR8hfWd3ZTseTRp6lH322PiVlMqs0wEIBuKaFo0Ze3pcCTK7TZ2RZw+8h4a0efUca57S+y8ytpYXzlUkrdNh6a8DQoFUNqEpmYy8nmeYT9Phi0yFcCChJtUD5XjpMG2ktva1rGwi8jhSY2lNtif/MmbT813VPCmbrvUOgMU6zLp9t3KNAUf8vMSXZccLcHCmZQod3/AgNCOAQz6E5buFCgv1dkutZy93yUxbsDXkw27TJJPBgq1zH/soksKE1ovEqQq2wRlxWrRWYfaVe3Yu2Kbw9RukYLNuno5anPkRcS7cXvvnu+rePQLAL4lC1Bs=c[p�    . � .                                  �"; !	%�}dengxiaowu跳转协议eNrj4lIAAi5dBYVM/2B9x7yUovzMlBfbN7/Yu+Zpb/+Ldeu4uAz18lJTU3Ly0zPzbA1fLFzxfMmulwu3vpy7CKLs5ZyGF8san8/c/XTvVB2ESgMFiNInO3qRVXAZ6ZVUFqTaVlRApKFmNC1+smMVxFQuY72CxKLEXNtqtcLS/BLr7NRKCMMKQpUl5pSmQpi1KGaAdUPtmtXytL/p2dQNXFw1IOtqXqzf8mxGXw1XjZUuEIC8DGEBAVeNIZgPMeX53olAgxTAIlw1RpwKNRB3g3jGIN7aac+nLn3Z0PmiaSFIzESBs+bZsqan+7cixEyB6l5s637atf/5nO6nS2YBxYAB/HRJ+7PNK97vmfVs+gIuLi4AwyG/LA==cZ��s�*: !	%�dengxiaowu公共说明eNpt0E9LAkEYBvD7foqBhW6NrpJE4SHo4kU8dRddaal1zR2zbpqJSugqYf5hQ8sMC82yBFHrw4gzoye/QiOrpNLxHX7PO88Mz9NBZdyLTNpfpJiZDcucAEn3ZtLOEz2NKxWcTbPDY4QC6p7JFL5AooqgTwqqKCypXkWGHj8gyTswFwwIu1a4Y4OCzQwFq5WzQNKq4aH2/66NPRzH8TyP441prEEydazVaPkax5s4/oG1K5J/n7dbn5OkUMXJ0nhYpS993CrQ5vO415kNUxzYOgspaN8dCByJQVVS/MYMBGi22+0HLhdNJYneXDr1UkWivEHNcEE/B+yT1gOBUzfyKUF5YUeRoqSoo0gJsMjk7Qc/Jch9nfSzS+8VzyWP6HTL4iLBHAsZlH0MK8/SSx1C8hrDWg73YqRXnUZvVxh7nVNEYSV4YswMz5vQ7xwd6DTTxo8xsC2QzgPRU8YhMBP9lVbqQAhLPglYSDc6TWgrK42eDu/f9UZFx+EvrP4PRA==cZ�K�  E35289&quot;,
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;title&quot;: &quot;离岸人民币兑美元下跌逾600点 刷新日低至6.8248元&quot;,
                &quot;pubtime&quot;: &quot;03:31&quot;
            }
        ],
        &quot;notice&quot;: [
            {
                &quot;id&quot;: &quot;416807&quot;,
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;title&quot;: &quot;2017年年度权益分派实施公告&quot;,
                &quot;pubtime&quot;: &quot;2018-07-06&quot;
            }
        ],
        &quot;three_event&quot;: [
            {
                &quot;id&quot;: &quot;1&quot;,
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;type&quot;: &quot;报表披露&quot;,
                &quot;content&quot;: &quot;披露2018年中报&quot;,
                &quot;pubtime&quot;: &quot;18.08.16&quot;,
                &quot;future&quot;: &quot;1&quot;
            },
            {
                 F &quot;id&quot;: &quot;2&quot;,
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;type&quot;: &quot;分红送转&quot;,
                &quot;content&quot;: &quot;2017年度分配10派1.36元(含税),股权登记日2018-07-11,除权除息日2018-07-12&quot;,
                &quot;pubtime&quot;: &quot;18.07.11&quot;,
                &quot;future&quot;: &quot;0&quot;
            },
            {
                &quot;id&quot;: &quot;3&quot;,
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;type&quot;: &quot;高管增减持&quot;,
                &quot;content&quot;: &quot;项徵(高管 项有志 子女)增持1500股，交易均价为10.12元，变动途径：竞价交易&quot;,
                &quot;pubtime&quot;: &quot;18.06.14&quot;,
                &quot;future&quot;: &quot;0&quot;
            }
        ],
        &quot;event&quot;: [
            {
                &quot;id&quot;: &quot;1&quot;,
                &quot;symbol&quot;: &quot;000001&quot;    ,
                &quot;type&quot;: &quot;平安银行·报表披露&quot;,
                &quot;content&quot;: &quot;披露2018年中报&quot;,
                &quot;pubtime&quot;: &quot;18.08.16&quot;,
                &quot;future&quot;: &quot;1&quot;
            }
        ],
        &quot;event_category&quot;: [
            {
                &quot;event_type&quot;: &quot;分红送转&quot;
            },
            {
                &quot;event_type&quot;: &quot;报表披露&quot;
            },
            {
                &quot;event_type&quot;: &quot;收购兼并&quot;
            },
            {
                &quot;event_type&quot;: &quot;限售解禁&quot;
            },
            {
                &quot;event_type&quot;: &quot;高管增减持&quot;
            }
        ]
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[Z�:    E  E                                                           �(C !	I�gdengxiaowu个股或者自选资讯接口
    
**简要描述：** 

- 个股或者自选资讯接口

**请求URL：** 
- ` /Nstock/infos `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |接口返回类型（多个以英文逗号分隔） news-新闻,notice-公告，three_event-个股中的三条大事件，event-大事件，event_category-(这个会返回大事件的全部分类)|
|page |是  |string | 页数 |
|page_size     |否  |string | 每页数量    |
|event_type     |否  |string | (说明：单选，全部的时候传空字符串。)    |
|symbol     |否  |string | 股票ID。 （ 自选资讯不要转，要求登录  ） |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;news&quot;: [
            {
                &quot;id&quot;: &quot;  D  I;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;35289&quot;,
        &quot;title&quot;: &quot;离岸人民币兑美元下跌逾600点 刷新日低至6.8248元&quot;,
        &quot;content&quot;: &quot;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=\&quot;https://wxtest.firstwisdom.cn/relatednews/images/20180727/e923e4147d410dd2c8dabb49897a882b.jpg\&quot; width=\&quot;578\&quot; height=\&quot;276\&quot; alt=\&quot;K usdcnh_64\&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=\&quot;https://wxtest.firstwisdom.cn/relatednews/images/20180727/df7dd4d6ba46ae56f11b947f9af44ae0.jpg\&quot; width=\&quot;578\&quot; height=\&quot;276\&quot; alt=\&quot;K usdcnyi_0\&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=\&quot;https://wxtest.firstwisdom.cn/relatednews/images/20180727/cc8d6dccca890b1dd28b37847d92dd30.jpg\&quot; width=\&quot;578\&quot; height=\&quot;276\&quot; alt=\&quot;K usdcnyc_0\&quot;&gt;&lt;/p&gt;&lt;p&gt;离岸人民币兑美元下跌逾600点,跌幅超过0.9%,刷新日低至6.8226元。&lt;/p&gt;&lt;p&gt;  J人民币中间价26日上调378点,报6.7662,升幅创2018年7月5日以来最大。专家表示,预计在中短期内,人民币的供求双方还会出现一些新变化,推动人民币汇率寻找新的均衡水平。&lt;/p&gt;&lt;p&gt;今年以来,人民币对美元汇率呈现有升有贬的态势。具体来看,今年1月份-2月份上旬,人民币对美元汇率延续去年12月份以来的升值趋势,2月7日人民币对美元汇率升到阶段性高点6.2882,较上年末升值3.91%;第二阶段是2月上旬至4月中下旬,人民币对美元汇率小幅回调后,在6.27至6.35区间内窄幅波动;第三阶段是4月中下旬至今,人民币对美元汇率有所贬值,6月中旬以来贬值速度有所加快。同时,6月中旬以来人民币汇率的变动独立于美元走势。从6月19日至7月25日,美元指数贬值0.4%,但是,与以往美元贬值导致人民币升值相反,以中间价衡量,人民币对美元贬值5.6%。&lt;/p&gt;&lt;p&gt;对此,中银香港首席经济学家鄂志寰  K昨日表示,2018年6月份以来,人民币汇率在较短的时间内快速调整,贬值幅度一度超过上一轮下行周期。预计在中短期内,人民币的供求双方还会出现一些新变化,推动人民币汇率寻找新的均衡水平。&lt;/p&gt;&lt;p&gt;中国银行国际金融研究所研究员谢峰昨日表示,人民币贬值背后原因主要包括:一是对市场心理产生影响。人民币是新兴市场货币,风险上升,使投资者短期倾向于持有避险货币。二是企业偿还外债的需求。6月份以来,境内企业前期发行的部分外债迎来偿还高峰,企业偿债的购汇需求加大。三是海外资金对中国市场的风险偏好发生变化。近期境内股市波动上升,海外资金对境内股市的风险偏好下降。可以看到,近期沪深港通北向资金的流入速度放缓。&lt;/p&gt;&lt;p&gt;鄂志寰表示,目前,经济基本因素在人民币汇率的决定中发挥主导作用,中国经济运行平稳,经常账户盈余相当于GD  LP的比率保持在1.2%的可持续水平,对人民币汇率的影响偏向中性。资本项目引起的跨境资金流动将逐渐超越贸易项目,成为人民币汇率的主要影响因素,资本流动因素在人民币汇率决定中的权重值快速上升,金融市场相关的资本流动增速将逐渐超过直接投资,成为人民币汇率走势的重要影响变量。此外,美元指数强弱仍是人民币汇率调整的压力来源和重要外部影响因素。2018年年初,美元呈现跌势,近期出现逆转,人民币对美元升值的态势亦将调整为趋势性波动,波幅显着小于美元指数的变动,目前基本回到年初的水平。&lt;/p&gt;&lt;p&gt;谢峰认为,人民币贬值不会持续。一是对市场心理的影响将逐渐消退。我国经济已经从过度依赖投资出口,转向消费为主的较为均衡的经济结构。我国产业体系完备,内需潜力巨大,商品和就业市场弹性较强,具备很强的承受力和回旋空间。二是货币当局有�    ��足的工具对汇率进行管理。我国实行的是有管理的浮动汇率制度。保持人民币在合理均衡水平上的基本稳定是汇率管理的目标。前期有关部门已经积累了丰富经验,如果外汇市场出现短期顺周期行为,有关部门完全有能力妥善应对。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;官方声音&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;外交部驳斥人民币汇率操纵论:中方无意通过货币竞争性贬值刺激出口&lt;/p&gt;&lt;p&gt;&lt;strong&gt;分析解读&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;三问人民币汇率:贬值的原因是什么?贬值空间有多少?放汇率+保内需是否成为新的政策组合?&lt;/p&gt;&quot;,
        &quot;pubtime&quot;: &quot;07-27 03:31&quot;,
        &quot;source&quot;: &quot;东方财富网&quot;
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[Z�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    �WD !	1�]dengxiaowu新闻详情接口
    
**简要描述：** 

- 新闻详情接口

**请求URL：** 
- ` /Nstock/news_info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |新闻ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot  H    m  m                                                                                                   �E !	1�Odengxiaowu公告详情接口
    
**简要描述：** 

- 公告详情接口

**请求URL：** 
- ` /Nstock/notice_info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |公告ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;275350&quot;,
        &quot;title&quot;: &quot;内部控制管理制度（2018年7月）&quot;,
        &quot;pubtime&quot;: &quot;2018-07-24&quot;,
        &quot;doc_path&quot;: &quot;https://wxtest.firstwisdom.cn/notice/300152/300152_1205222592.PDF&quot;
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[Z��    & � &                          �G !	1�Kdengxiaowu图片识别接口
    
**简要描述：** 

- 图片识别接口

**请求URL：** 
- ` /Aip/discern `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|name |是  |string |discern（识别）   |
|discern |是  |file |  上传的文件 |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&qu  R�>F !	C�dengxiaowu批量添加自选股接口
    
**简要描述：** 

- 批量添加自选股接口

**请求URL：** 
- ` Nstock/batch_favor `
  
**请求方式：**
- POST 

**参数：** 

必须登录

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|stock_id |是  |string | (多个以英文逗号分隔)   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[_Ҡ    �  �quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;symbol&quot;: &quot;002596&quot;,
            &quot;name&quot;: &quot;海南瑞泽&quot;
        },
        {
            &quot;symbol&quot;: &quot;300062&quo�H !	�adengxiaowu登录
    
**简要描述：** 

- 登录接口

**请求URL：** 
- ` /adminuser/login `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|account |是  |string |用户名   |
|password |是  |string | 密码    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;avatar&quot;: &quot;https://wx.firstwisdom.cn/public/images/default-avatar.png&quot;,
        &quot;name&quot;: &quot;4SwzzGOw&quot;,
        &quot;mobile&quot;: &quot;13760628603&quot;,
        &quot;id&quot;: &quot;1&quot;
    }
}
```
 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[b��    �  �                                                                                                                                                                                                                                          �	8 !	1�=Gdengxiaowu图片识别接口eNqtlM9vEkEUx+/zV8zJAynplo2o9WTi0URj9WRMFinVTVpWuxBjuk2g/gBKYNt0hQoNqRZqjdZt0yIIS/lndmaWE/+CszsLWTxQN3ZOb+Z93/vM7L73AKQLBALkZ8o6TGNVtfonQ6MSCEAAghBVL0guY+kfUPY7LjaQegCo1tJb+HTj8cN7rjAIBTh7R3w5uyjK0dhqHArAycl0uPQbGaojpcoH9xceQTsJUjfwxzFKYVu0VVBQ//0glVPIaRfV8oqln+PdogKU+SBd9mUdi22DUAm6x1QRj6zEoIJ3dbqTE6ti/DlU3BsNjSx7xNDIMTEuZczur5F8SVymoRCa7U3T2CeVdyM3AJC+o6+hao3UO+ZFnj4CCIIAwRqwL3PtVVJK3JYTkURSZvY85GY8LjG+JI0crjgZjcZkV+2VLkYSkZH0iXNur7Wx5eG9WXkmLU+m5bjQ9Vthb9bJGPvrTEbgZgsVymS7hs967GQctj7jm89zHBcO+eGb7WPrbY9oTXyi/T8/TPn8nD9+zmynBpkCajWugs+HeN4PH9W/2lVfK18N/Ka/n19ukGqWfnx0vPU337GegvUpNT43vcZZ+9BuNtsd8q1zSa1fgroxncUam3R3cG3vn3G0hZ3WRvUMPjtypx2unqN6hXX7QPtk6brZPSD7aTrHyF5+cFgafG7S2eB1sYEJAMA/vlj9otnrE+1o4YX0+q4UHRrpP/HV++g=c[_�	    ot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;symbol&quot;: &quot;002596&quot;,
            &quot;name&quot;: &quot;海南瑞泽&quot;
        },
        {
            &quot;symbol&quot;: &quot;300062&quot;,
            &quot;name&quot;: &quot;中能电气&quot;
        },
        {
            &quot;symbol&quot;: &quot;600031&quot;,
            &quot;name&quot;: &quot;三一重工&quot;
        },
        {
            &quot;symbol&quot;: &quot;603233&quot;,
            &quot;name&quot;: &quot;大参林&quot;
        },
        {
            &quot;symbol&quot;: &quot;603286&quot;,
            &quot;name&quot;: &quot;日盈电子&quot;
        }
    ]
}
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;文件名为空&quot;,
    &quot;data&quot;: []
}
{
    &quot;status&quot;: 17,
    &quot;info&quot;: &quot;识别结果为空&quot;,
    &quot;data&quot;: []
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[`"t    � � �                                                                                                                                                        �J !	%�Idengxiaowu修改密码
    
**简要描述：** 

- 修改密码接口

**请求URL：** 
- `/adminuser/update_pass `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|mobile |是  |string |手机   |
|password |是  |string | 密码    |
|smscode     |是  |string | 验证码    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

欢迎使用ShowDoc！c[b���OI !	%�Ydengxiaowu退出登录
    
**简要描述：** 

- 退出登录接口

**请求URL：** 
- ` /adminuser/logout `
  
**请求方式：**
- POST 

**参数：** 
无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

欢迎使用ShowDoc！c[b�+   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                            �7K !	%�)dengxiaowu股票搜索
    
**简要描述：** 

- 股票搜索接口

**请求URL：** 
- ` /Blackstocks/search`
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|key |是  |string |关键字   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;symbol&quot;: &quot;000010&quot;,
            &quot;name&quot;: &quot;美丽生态&quot;
        }
    ]
}
```

欢迎使用ShowDoc！c[b�K   � �                                                                                                                                                                                                                                                                                                                                                                                             �vL !	1�dengxiaowu入选理由列表
    
**简要描述：** 

- 入选理由列表接口

**请求URL：** 
- ` reason_list `
  
**请求方式：**
- POST 

**参数：** 

无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        &quot;全部&quot;,
        &quot;跌幅&gt;=40%&quot;,
        &quot;被问询&quot;,
        &quot;解禁不足2周&quot;,
        &quot;摘帽不满足1年&quot;,
        &quot;除权除息不足1周&quot;,
        &quot;复牌不足1周&quot;,
        &quot;其他&quot;
    ]
}
```

欢迎使用ShowDoc！c[b��    �  �                                                                                                                                                                                                                                  �M !	1�Qdengxiaowu时间条件列表
    
**简要描述：** 

- 时间条件列表接口

**请求URL：** 
- ` Blackstocks/times_list `
  
**请求方式：**
- POST 

**参数：** 
无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        &quot;全部&quot;,
        &quot;≤7天&quot;,
        &quot;8-14天&quot;,
        &quot;15-21天&quot;,
        &quot;22-28天&quot;,
        &quot;≥29天&quot;
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[b��   8 �8                                                                                                                                                                                                                                                                                                            �O !	�edengxiaowu详情
    
**简要描述：** 

- 详情接口

**请求URL：** 
- ` /Blacks  X�WN !	�udengxiaowu添加
    
**简要描述：** 

- 添加接口

**请求URL：** 
- ` /Blackstocks/add `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |
|name |是  |string | 股票名字    |
|reason     |是  |string | 入选理由    |
|descrip     |否  |string | 当入选理由是 其他 的时候，必填说明描述    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

欢迎使用ShowDoc！c[b�&    tocks/info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;symbol&quot;: &quot;000010&quot;,
        &quot;name&quot;: &quot;美丽生态&quot;,
        &quot;date&quot;: &quot;2018-07-03&quot;,
        &quot;reason&quot;: &quot;跌幅&gt;=40%&quot;,
        &quot;descrip&quot;: &quot;跌幅&gt;=40%&quot;,
        &quot;status&quot;: &quot;0&quot; //0=正常，1= 移除
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[b�                                                                                        G � G                                                           �Q !	�ydengxiaowu移除
    
**简要描述：** 

- 移除接口

**请求URL：** 
- ` /Blackstocks/del `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |int |id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

欢迎使用ShowDoc！c[b��P !	�{dengxiaowu更新
    
**简要描述：** 

- 更新接口

**请求URL：** 
- ` /Blackstocks/update `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |
|reason |是  |string | 入选理由    |
|descrip     |否  |string | 当入选理由=其他，则必填详情说明    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

欢迎使用ShowDoc！c[b��    �列表）单选    |
|page     |否  |int | 页数    |
|page_size     |否  |int | 每页数量    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;id&quot;: &quot;1&quot;,
                &quot;symbol&quot;: &quot;000010&quot;,
                &quot;name&quot;: &quot;美丽生态&quot;,
                &quot;reason&quot;: &quot;跌幅&gt;=40%&quot;,
                &quot;descrip&quot;: &quot;跌幅&gt;=40%&quot;,//描述。
                &quot;date&quot;: &quot;2018-07-03&quot;,//入选时间
                &quot;long&quot;: &quot;30&quot;,//入选天数
				&quot;status&quot; ： &quot;0&quot; //0=正常，1=移除
            }
        ],
        &quot;pageInfo&quot;: {//分页信息
            &quot;current_page&quot;: 1,//当前页
            &quot;page_size&quot;: 20,
            &quot;total&quot;: 1//总数
        }
    }
}
```
欢迎使用ShowDoc！c[b�#    d � d                                                                                        �<S !	7�!dengxiaowu自选页红点上报
    
**简要描述：** 

- 自选页红点上报接口

**请求URL：** 
- ` /Nstock/dotReport `
  
**请求方式：**
- POST 

**参数：** 

必须登录

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |news,sign 多个与英文逗号隔开   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```


 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[d&�RR !	�kdengxiaowu列表
    
**简要描述：** 

- 列表接口

**请求URL：** 
- ` /Blackstocks/list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|reason |是  |string | 入选理由筛选条件 单选   |
|time |是  |string | 时间筛选条件（传时�  Z  ]SYTij3/4TuIDXI7kwZNoMqxqE7lJXNeNhLWRL1wsE04t/CGm4phZhyMToOhU2mJLBUgBTMBEpoMhC5bedDe2gotuF2OFnuby9ryRJwX0DfvSaujxdr6FPvT/hQzCmirFe4KV1KCjOh3bU0tZnc+cjjtTY5gkLbdz5r9w9raZnc1RdjOO4GOBnmBTYYc3BvuQTJICPv8EpwfCNGbOeQTS+n4Sl5SsN1kgHQHqGCEJd1CfKmwXlYgU8o0U75pWdyI7jkkzKGpQa8Q3V4v4+v2MsZGU77sGnJNgPHRkrGOvogWm/Xy0kNM2XkofhJqur3BLhikEEkSuVDO88TDzUx0CRx9TZ3Mmk0m3cBT+zIPEqfQnczM/pV8KFiFioBRnQWj+qpOwudVsJXuyoE1yqPLgNbCpunOXcvt4iC/CtAC2mEUvKGQu9xIZKMKZ2Ng4Bv3bZMfPuSi/TD73MIWZsZg6hS8UBU8AHyPp85XCjyiJoeYAS/TA3cowbjXr5eMJbMhRIcplqKDGkQ35EN0KvE+dSaRjaVYv4qrEODFyLo8lFmdRZPhQhiaiPjQY7N8L2YjvfEpMzR8jZlUfv2Gezc/P4siK9Xv4mW6w+vr0S1d+gIdNESVlLZ8eUZ0SyU+8cv9lZRWc+kUUVVZtNIwVHflQAPsTfFrp0gAqe34qTALs0o+Z/N5Ln5dqi5Tu9xo/Feo0traW1dG8dVRaMG7QTD2VQrOZXBGwiTjDpNCmtzdMNQ006cXmKKpguIBpbUvROqpwmYcLQ6z4GqUSL4Lz83WsiJYowjN3DJVC9Qr/MZuFYDGjS/w+6uVAC2/To4tZz6sFQOhki2jMtSBN7QEhDGtegXxRbgyYd8cO+LnXgsHnZOBvJWRIb1+txBBN9Jnv21hlPWAgrRiQFOF8H6bRsKGSMZHBtmSRCyM+y8lYuU8GuVRoRKZnSWLLXmku3rmRa4Mbm4/AYZzuxNeGNBeiv25ldNcRuXMzA+mDxaR7yhncD8lg4Rbr0lYbj7EM9G5i    +RbM9734q8uOLDgL1ginB8SpVvOCuztT+D4GDOnjke4xcM6Cwbib7nY+HU7/1epjoqpkfXjLSVZ6fguOJu63A+TEQflUQ/USHSXXugphgqf+vOmCrkodwCKg/iKCjk2kT44SkcHkJlOhhKAqcOQ0GQ7WFQMVRGCmGpLvUbQ0+TOqLksjE/lj6pgG1UXetpYYvBzQCtWTHXtAevTYHgPZjwT7S8Gau8zL0P8/7AW3dBdJ9GCUaMYSrN6sPaPWCnNFjSqxxsa0agBv2uCI6yqZKoaBy6SMaghUOIukm9+P0pUhvgcXKMiLtxfGoFfQ72uAnjviEDqEe4QTQmSrkLEI6jqwjzCaZnCOExHoBYt4/TFfVznTsclTlB0GILfGiQYmiLgSGjVCQ09g0rxlMsBFHTVWliaFaRhuTGZ2s0MjVV6MPtVNhMUaiP6Xb3XGxI/tDwQ+WFtdtlbZSrQDEEynhqrzQanNre3OC8BWh36dmeb45HTbivY+E/HV8HolBrYF8k5Wbf+iPabcR9NkOIrO2G/MWDWh4JDHp8fboMsemqdxiORn5W5o8Zmrjudz0VnBDWN1SMtLfukjYVYXVLHW/C4wk3vZmYSV70vZUg/TBvhDpLP8r0TqvphOqenbCmrp0yQYR9DhTQt6aLzJ2bTn6WH++ggKx6Jr+gVpnc+c68GwOAAiJ9IjfNIx5U0Uu+o4PiV5ribU/AaSyt4YOvv1Nl7tQl3hFF1AyyNjSXZaW9trkbvafg9GJtWLytQkbn5fQjF6rSyClZMfX0DJdNGZaijluVQTlS36B4Y+ALGjoXPieGiZKRZykdeezre0OmGTj+DTjnUUZNqbSN1OpJKHBZjFNlL5tXN1SeUuPWXDNT0wet0fAdt9mB8FGzP3GyTN7y+xry+4gwgXGb/qUS5+I/qgYr1QjHQHBPE43onSRLiC3SNOBdwDWUyVOal87N/kv+W4KZPQHJMkdpyR0Ar/dHdkMp6QzHr/OQmFztyPFEsK37f+xe/x4+xc[YwH   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                         �9 !	+�mBdengxiaowu数据表记录eNrtWltT2loUfvdXZKYP4IyZAdROOx0faKE9zFHaUXzoEyCJmiMQJgRb+4RtVaq16qm3qvVWrR6norbewfpjyk7gyb9wdrKTkCByCZwe29EH3InslbXX+r61v70i92U1ff4udXbOT262ddPPbLTvItlfU3ML47en+al1MBQF0WR6ZbPmQavd6rJjLuv9ZjvmCbO0r8cdZhkvS3b1uYMk6+71+iOkBzPWYJiHIjwYFWSNZnMtFgmGqa4gSWDOxy7M2d7cjFnbXY/dDie02GJ3uuqECbIlD8ZSwT5han2+mTb7Q2t7swszmAzYg8ctwnTMkH65wq9vcnvL/F4CLI5cJOfMeGZoAt7+Ee234NxwlFvY4d7NwnvwRj3Ov9rmX56kz8/AUALeaMD5RBKMx+CwEecON0H/AljbAMcx7DbOfTwHH2cy0TfQmEF0lIBuejDhM+uV4gk3s84tLGFP4Q/e0oLbbGiOLywHhyB9VMDrN5pNdZZaZTU5Rr5ucUd79  \  `trategy_net_value` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `strategy` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '股票池类型：1-金股、2-技术掘金、3-热点追击、4-综合、5-涨停大师 6-板块选股',
  `date` date NOT NULL COMMENT '日期 YYYY-MM-DD',
  `cs_value` decimal(10,2) DEFAULT NULL COMMENT '沪深300净值百分比',
  `strategy_value` decimal(10,2) DEFAULT NULL COMMENT '策略净值百分比',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0-有效 1-卖出',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='策略净值表';

#股票概念分时统计
CREATE TABLE `stock_theme_minute_statis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `theme_id` int(10) unsigned NOT NULL COMMENT '概念ID',
  `theme_name` varchar(50) NOT NULL DEFAULT '' COMMENT '概念名',
  `date` date NOT NULL COMMENT '�  a��期',
  `minute` int(10) NOT NULL DEFAULT 0 COMMENT '分时',
  `change_speed` decimal(10,2) NOT NULL COMMENT '涨速已乘100',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `theme_name` (`theme_name`,`date`),
  KEY `date` (`date`)
  KEY `minute` (`minute`)
) ENGINE=InnoDB AUTO_INCREMENT=8926 DEFAULT CHARSET=utf8mb4 COMMENT='股票概念分时统计';

  `app_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'app 关注状态 0 未 1 已',
  `mini_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '微信关注状态 0 未 1 已',


CREATE TABLE `market_signal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL COMMENT '日期',
  `position` decimal(10,4) NOT NULL COMMENT '仓位',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `introduction` varchar(500) NOT NULL DEFAULT '' COMMENT '解释',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TI  bMESTAMP COMMENT '创建时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='大盘仓位表';


CREATE TABLE `stock_theme_minute_back` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `symbol` char(10) NOT NULL COMMENT '股票代码',
  `date` date NOT NULL COMMENT '日期',
  `minute` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '分时',
  `theme_show` varchar(500) NOT NULL DEFAULT '' COMMENT '展示板块',
  `theme_list` text NOT NULL COMMENT '板块股票数据',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `minute` (`minute`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='股票概念分时历史数据';


CREATE TABLE `user_search_history` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' C  cOMMENT '1-股票 2-板块',
  `search_id` varchar(10) NOT NULL DEFAULT '' COMMENT 'id',
  `search_name` varchar(50) NOT NULL DEFAULT '' COMMENT '名称',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '搜索时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0-有效 1-删除',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='搜索历史表';

#股票实时信号的涨幅
CREATE TABLE `stock_real_time_change` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `symbol` char(10) NOT NULL COMMENT '股票代码',
  `date` date NOT NULL COMMENT '日期',
  `minute` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '分时',
  `signal` varchar(5) NOT NULL DEFAULT '' COMMENT '实时信号BS',
  `change_percent` decimal(10,2) NOT NULL COMMENT '涨幅已乘100',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `symbol` (`s  dymbol`),
  KEY `minute` (`minute`),
  KEY `signal` (`signal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='股票实时信号的涨幅表';

#活动
CREATE TABLE `activity` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '1-集赞活动',
  `extend_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0-普通，1-yzjg，2-ztds',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常 1下架,2 完成',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='活动表';


#赞活动记录表
CREATE TABLE `activity_like_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '活动ID',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发起者',
  `friend_id  e` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点赞者',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常 1 删除',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `user_id` (`user_id`),
  KEY `friend_id` (`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='点赞活动记录表';

#集赞活动奖励发送表
CREATE TABLE `activity_like_award` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '活动ID',
  `award_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '奖励类型 1-3天，2-12天，3-45天，4-90天 ',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发起者',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常（已发送） 1 删除',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL  f DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='点赞活动奖励发送表';


#动埋点统计表
CREATE TABLE `activity_buried_point` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `activity_type` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '活动类型',
  `date` date NOT NULL COMMENT '日期',
  `source` varchar(10) NOT NULL DEFAULT '' COMMENT '来源类型 ios，Android，miniapp ',
  `type` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '埋点类型',
  `total` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '数量',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常 1 删除',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='活动埋点统计表';


ALTER TABLE `order`
ADD   gCOLUMN `activity_type`  tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '订单活动类型：0-普通、1-code、2-like' AFTER `client_type`,
ADD COLUMN `point_type`  tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '订单埋点类型：0-普通、1-fx、2-yzjg 3-ztds' AFTER `activity_type`;


#个股新闻表
CREATE TABLE `stock_related_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `symbol` char(10) NOT NULL COMMENT '股票代码',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '标题',
  `descrip` varchar(1000) NOT NULL DEFAULT '' COMMENT '摘要',
  `content` text NOT NULL COMMENT '详情内容',
  `pubtime` timestamp NOT NULL COMMENT '发布时间',
  `source` varchar(50) NOT NULL DEFAULT '' COMMENT '来源媒体',
  `source_url` varchar(255) NOT NULL DEFAULT '' COMMENT '来源URL',
  `source_md5` varchar(32) NOT NULL DEFAULT '' COMMENT '来源URL MD5 用于消重',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '抓取时间',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMES  hTAMP COMMENT '更新时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常 1 删除',
  PRIMARY KEY (`id`),
  UNIQUE KEY `source_md5` (`source_md5`),
  KEY `symbol` (`symbol`),
  KEY `pubtime` (`pubtime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='个股新闻表';

#个股公司公告表
CREATE TABLE `stock_related_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `symbol` char(10) NOT NULL COMMENT '股票代码',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text COMMENT '详情内容',
  `type` varchar(20) NOT NULL DEFAULT '' COMMENT '公告类型',
  `doc_path` varchar(255) NOT NULL DEFAULT '' COMMENT 'pdf文档路径',
  `pubtime` date DEFAULT NULL COMMENT '发布时间',
  `source` varchar(50) NOT NULL DEFAULT '' COMMENT '来源媒体',
  `source_url` varchar(255) NOT NULL DEFAULT '' COMMENT '来源URL',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '抓取时间',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAM  iP COMMENT '更新时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常 1 删除',
  PRIMARY KEY (`id`),
  KEY `symbol` (`symbol`),
  KEY `pubtime` (`pubtime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='个股公司公告表';

#个股大事件表
CREATE TABLE `stock_related_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `symbol` char(10) NOT NULL COMMENT '股票代码',
  `type` varchar(50) NOT NULL DEFAULT '' COMMENT '类型名字',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '标题',
  `descrip` varchar(1000) NOT NULL DEFAULT '' COMMENT '摘要',
  `content` text NOT NULL COMMENT '详情内容',
  `pubtime` date DEFAULT NULL COMMENT '发布时间',
  `source` varchar(50) NOT NULL DEFAULT '' COMMENT '来源媒体',
  `source_url` varchar(255) NOT NULL DEFAULT '' COMMENT '来源URL',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '抓取时间',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `status` tinyin  jt(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常 1 删除',
  PRIMARY KEY (`id`),
  KEY `symbol` (`symbol`),
  KEY `type_name` (`type`),
  KEY `pubtime` (`pubtime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='个股大事件表';

#更新反馈表
ALTER TABLE `user_feedback`
ADD COLUMN `contact`  varchar(50) NOT NULL DEFAULT '' COMMENT '联系方式' AFTER `user_id`,
ADD COLUMN `user_ip`  varchar(40) NOT NULL DEFAULT '' COMMENT '用户IP' AFTER `feedback`;


#个股黑名单表
CREATE TABLE `black_stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `symbol` char(10) NOT NULL COMMENT '股票代码',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '股票标题',
  `reason` varchar(50) NOT NULL DEFAULT '' COMMENT '入选理由',
  `descrip` varchar(200) NOT NULL DEFAULT '' COMMENT '详情描述',
  `date` date NOT NULL COMMENT '入选日期',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新�  k��间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常 1 删除',
  PRIMARY KEY (`id`),
  KEY `symbol` (`symbol`),
  KEY `reason` (`reason`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='个股黑名单表';



#版本更新信息表
CREATE TABLE `version_update_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform` varchar(10) NOT NULL DEFAULT '' COMMENT '平台 ios，Android，miniapp',
  `name` varchar(30) NOT NULL DEFAULT '一智腾飞' COMMENT 'app名字',
  `version` varchar(50) NOT NULL DEFAULT '' COMMENT '最新版本',
  `isForceUpdate` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否强制更新',
  `build` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '版本号',
  `packageUrl` varchar(200) NOT NULL DEFAULT '' COMMENT '包地址',
  `packageSize` varchar(200) NOT NULL DEFAULT '' COMMENT '包大小',
  `time` date NOT NULL COMMENT '更新日期',
  `intro` varchar(500) NOT NULL DEFAULT '' COMMENT '更新说明',
  `ctime` tim  lestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 正常 1 删除',
  PRIMARY KEY (`id`),
  KEY `platform` (`platform`),
  KEY `version` (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='版本更新信息表';

#小程序审核表
CREATE TABLE `miniapp_check_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform` varchar(10) NOT NULL DEFAULT '' COMMENT '平台 ios，Android，miniapp',
  `version` varchar(50) NOT NULL DEFAULT '' COMMENT '最新版本',
  `check_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '1 提交审核 2审核通过',
  `intro` varchar(500) NOT NULL DEFAULT '' COMMENT '更新说明',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMM    ENT '状态 0 正常 1 删除',
  PRIMARY KEY (`id`),
  KEY `platform` (`platform`),
  KEY `version` (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='小程序审核表';


#CMS用户
CREATE TABLE `admin_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '用户名',
  `nickname` varchar(64) NOT NULL DEFAULT '' COMMENT '昵称',
  `mobile` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '手机号',
  `password` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '密码',
  `avatar` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '头像',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='CMS用户表';c[b�\       ;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;symbol&quot;: &quot;000002&quot;,
                &quot;name&quot;: &quot;万科A&quot;,
                &quot;date&quot;: &quot;2018-08-14&quot;,
                &quot;sort&quot;: &quot;1&quot;,//排名
                &quot;change_percent&quot;: {//涨幅
                    &quot;text&quot;: &quot;-0.09%&quot;,
                    &quot;color&quot;: &quot;1dad51&quot;
                },
                &quot;price&quot;: {//价格
                    &quot;text&quot;: &quot;22.30&quot;,
                    &quot;color&quot;: &quot;1dad51&quot;
                },
                &quot;star&quot;: &quot;3.5&quot;//星星数量
            }
        ],
        &quot;date&quot;: &quot;2018年08月14日&quot;,//更新日期
		&quot;descrip_url&quot;:&quot;url&quot; //公司介绍页
    }
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[v<	   - -                                                                                                                                                                                                                                                                                                 �J? !	+�Edengxiaowu自选股接口eNrVmEtP20AQx+/+FHtpD0DM2s6D0CtVD63UqsCpqpIQTIgICY2NAGEkErUFCiQgAeUlCiU81WIotCkkJF8mu3ZOfIX6ESBGhNYRULOnzex/Zifrn9bjIYAyiJoaaW9Y3ozhZFLO759lF2tqAEHYgDyyWxwek+NrOLGBk  q�{> !	=�Ydengxiaowu获取财务评级的URLeNplkU1LAkEYx+/zKebUYUlXOto16BIUmfdddEtB3HJnMwihFSNIcC8qqBH5knmItsiQfGm/zM7LnvwKzb5YRs9pmP///5vneQZAXkAQ6MsVGxrENJn9upy3BQECEIGsNsFmk417+LbLrAqdPtF2JXm4R2qP2OwDnmPWhLyV+VUYikAJnm9FY9GYmFeK2XxauRBPFLRbkNNKspCDEvCfC2Kk+Ynnpp/kwYP9xBH0mNgsk8ZPF9i+drsz2prhRQMAyLN2HXfu6WDqfFV5EEiSBMEl8AbZONNVtK0hGelacI7D2OaalM0fqyshNOuplKKF7nVrWkbyyhrQfzW9kPtLySB0Gte8CkGi+H9rPqQESl7HwB8FD27I+yhcNumM8aAdTOfWW8yynFmfPhh8V/Su6g6bbveDg9al4L84izz3mF1zFjatjxIZtbijppZz4xuZU9aFc[v<�     - �                  �N^ !	1�Kdengxiaowu一级分类列表
    
**简要描述：** 

- 一级分类列表接口

**请  ��	] !	1�Adengxiaowu财务评级排名
    
**简要描述：** 

- 财务评级排名接口

**请求URL：** 
- ` /Finance/getStockTrade `
  
**请  ��0\ !	=�dengxiaowu公司财务评级详情
    
**简要描述：** 

- 公司财务评级详情接口

**请求URL：** 
- ` /Finance/getStockFinance `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;0&quot;,//1：没有，0：有 财务评级
        &quot;finance&quot;: &quot;1.5&quot;,//星星
        &quot;all_ranking&quot;: {//全部排名
            &quot;own&quot;: &quot;2405&quot;,
            &quot;all&quot;: &quot;3343&quot;
        },  �    f  f|status |否  |string | 客户投资状态1：接触中 2：暂停搁置 3：投资中    |
�z !	%�e{dengxiaowu添加客户eNrVlU1v0zAYx8/zp/CJSRXV1HEbXwEJxMu5dVtrRGuSkriDapnUVCDYRtce1jFtZTD2wgRau6lAS1/WLxM74cRXwImd0ZUI7bDLcrH9+Pe82M/fCoD8A7GY2yx5RzarVr3R6e/BdiwGAYhD1unT1Y+0+Ym96bD1Q1rdB5z1Wh12Vn7y8J4E4zAF80WUV2YyBZPoKjZmUDYLUyCILGi2+ZMOqoED5x/cf/QY+qFotczqFwlFOqf7xen1RFK+A4AlKFqrWHT06ldpxXLP+nR3zfJa39jWugWsuTj//JMEM7GMQysuzZwIK0uSYh5Di221uNkkhqLNQ0vkEkF5RugMbKe7nYCiktkggIbUf/wgL4mevIMihaqnlRyGwWqCYytrrNGTHFFIiNHa0Tjm2W+dYUViGV3NI60YCdLOoTNs0Er9L65kkxlkZKPj9r46/aHXsiX7HGeeIhId+bzpjPYkh1Wk5CKxix1O8V4b2DSjwzVO6fuSBA3uZSxEcwevWfs4PIq2iE2SNAkiBTPqPmW/Vn+wku33a1oqdLXufX8pzAlu54r1Ph853RM466+2y9RusJrtDpvwjm8IcL49fTnvZJljbQycheqkj4ly2DRwPrLtXueDN9rhEhJwqO9AXTdC37LUcZUT9CKpFdQ0NiIb6fba7vE6rXYknsPzKMevNM8lgjXeUWURR15tu85Lcfr73t7xFRQt8EldX1Ji9FHG9ZgumIrG+WRG55VlyH/8PHvDbfcvOnnlt369L+2GPqBrfEEA8h/KaIPu7LoHPed8jf9NQCqVgmAJ+MStZwWd3BXnFvM5mLg9tqWa86FdjPqCGMehLCIopJbA1JSYK1lpE0NCDGBqGSz7JQDwBxVVOmM=c\<4|    uuEIpTFND6It75+UVLZgBd08nxPY3091cCQDidJOSFJMUx9mO0LhtvZ/voAy7dybLSZj/i7OOAltA31OHjuGGWTWigl0quXzS1AAM+etqg7oWQcz14kAxSX/AxaWpFSJ4XcuKInvF4vIAYJ9R88ftcb4Z9wvI/v5fR5I4B1ZUvBcEfkfKEk7vX7Wa6kLpe2+3jfufSNZlfH4MWsLGi7MaTd5SgPZxRzA91tkZDRwQkh5Xbe4KMemSfs62aNfig1iee/oImMPClW9m7rHfBwbCjk4YKBsO/K1jdlGgwYtbCyNuTjeE9PNOi/yNB4UJdKnu3nrxyXnaSp60JfOvkjoUjU6MW2MQzTps8NXkPX5efv9IUDrKeHjfrZMG8+x1qKtMNHt5gkcU26/8SWw2WOLQihyw3Ns4UP99HUKIptoJN0lWzB/8+WzWb6mXVo477AutUEq4WKcTWYhYp207R5qArZT3h0FO3PPFyiaBdpZ6x+WzGk2xK3FQMZc2AxENqreRMWfn+XtqbR6JKcyz1cthgHCR1WZwuSdrc12KLNX1o38lipytobkRKiUoPixNbDZcsBSei0Ols0STVYgy3KNFtO2l5NBb9TjE8rX1aFzOk9sEXd0b2lfu1Zv4J30FZgi3a5q2DLUU2xNY9yaelHDokfH3C9ZSeh2/r3Fn1H70Rt9pYYUrscBF7elRYy6HRWb4FotsqND/rmxocspvVgf2l9nG9+0XnRGzKyeITnE1pPRtAtaGpSkA4yaGVc0BcFQmi0qQOA0kQo/aw4FJdLWIDA8dFgOKDaAV4exnP7hUwar2Y1nfGhGbW/ttHxB011BW+DrKUWgkJ+DSXTdUDJCs+LKLYsjU1ojoreIG7vKmkBZUOpRZQ6Ak1S/PgsOwFsFJB2TlTL85IF2vDn1WtDC1oLC6VG8OF2qbuGl46UgPrZFmcWZFEsZNal1Zj6gJbHi5tzxbWf0uL78iW9QUcQBP72Vc4nCqd5aWa7uTPS1xTxn2VjfwA5jwL+c[/�    svCh9NpgI2Auk10f2bntF7xF+zWfXcbMIMo0oulp+d53z7Ped/T82SA0C5gMinbfvX9LI5E1Hz6YH/FZCIAMBM4lsPxeRTcxbtJHE6gyAbQsGrqK94J3L97qww0ExTxyGHps9isvAQFZsLqYuGYILponntCQ07gxzjvpCBCggKll+kJ8Jss2o+Ucmgp7twevkcUs6NIAL+ucpD1IXr1Ukb54E9/SFZ2vqH4oqym9vByWAbyoFm7iipKd/rQTMjm8mMNIU17xwUPIePllDaWoMjxLkJWA2tKInlzqIQBgNBo5aPobVx5lyv8WNQ4AYqiCPAUFHNffOgT4FUJ0tAn6feDhK23borjHwiViTLYxzCsVEbXQ500pCtQPXttTmSL61SdtVr1CqjpOWU1WsXW5WIlRuQmi2tsTNkI5X3e9pAaDLKPYaMQu6NeQ+soRvAIYmPYjevX+m0D+r0hcqa3DUvGTfMutjuiOBbCIT9aj6OF1a4os+MkSY4fl7JbaOKhhNOFTA5lAiiW0yunzG0pgWyLxE1JK8x4yPLVpCOG93ZaFp72so101PySHS0lD18RyHlZqan2eHPtCIECpD2NgZdtaPvL4ZEc7/RpG3K6c8FreGGKb3xPx96sxdGeJn6krU2Z25S6lspLixMs7Jqw3dE1ZXKA7ET6KB17/M4pZD7h2PPz5jlvnuM3D3nePP9p8zQ8GQUt5JX9Dg1Zo9tJzSu5D6CjhSlL6mulqGKlJJ+n6WQuZNMomGiSYiDlFjxOAyn8YlZzjDgV1czhaRkx+x80YmLRuHfH02EhyZ5/xDNeIi0OR88JuMUTtnnOuo1TXnWbvb+QCaGtDbyQOFyQcS8dobsmRY5hm78qlsp35XfPkNaaUHbvTAm6Usj4z1qRNE1bZ03Q37WT2h2oQP+dAeCC8jGnrMzjuSB69vlU/7YYGe10zBtn68/bkdGqIoqiAN5cV/Phwve8Ek0Ou4WpIYE52J/9BYPMHCc=c[��>                       � �$�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        �IH !	1�=]dengxiaowu财务评级排名eNrtVl1P01AYvub8inPlxcK2DtEA3hITExONwytCXN0GLoxW105CKMlYUJn  ��G !	1�e]dengxiaowu财务评级排名eNrtVt9P01AUfr9/xX3yYWFbh2gAX4mJiYnG4RMhrm5jLoxW105CKMlYUEF  ��!F !	1�m]dengxiaowu财务评级排名eNrtVt9P01AUfr9/xX3yYWFbh2gAX4mJiYnG4RMhru6XC6PVtdMQSjIWVBD  �    /Cg8E22gaekoqWT1RvAMw/fAJzF2g2am3bQbg2ecuJYOT9HyoVzmS54fjGZSifvkRzbWFeOVy0tl/1w9HhTeJ+7eScrtuPW6CkyL8VGTzkRBuF3ytQZmE109xfsvLtpaGqgOYJtpksfqzGGdoljelgph0GY/CAXFuB6UCcrc69YOdgJ1sFwDj28QHhGzm8aitZQr3g5PaKnPtzNWMHwfHlJKm+imG3oZGXpFasJ2uXRRapU3AO+ItzLgdOD2w5VQ8vjdsmsnjQ16aaWLD+nm3uZbiz/03Rj/Zxu/ivpxnq9dNOxUmNe2hyMYG+sctAHRkPwz5BcmFGyBaLz9OhLOkYSTu1G0eJuO3ftQ9kds83FTDCuTlHpmFykEDj3XTdx6kyeV4jXEGtaEBhR0E37MFjK78LFIzkx21vaLa2PiQ7Tcn3Bdl5PjKwlvRMsjhm6h5+IxgKn5DaAL999SewSOOpT6JV/wTFuQ5zh2lRFprfD+U7E2q1MMFIi9E6uddQGMyx6CvdnMRM4NQ1mDu97hlV523lOZDkPK04aJB/PwqhfLvwNfbsGyFvvQrqdK0EjVWDvhIsx2/BKOag/ePPbaIUEm+vXKmjvg3JV4uw4o583roZuiTd1F6LtWOgbKfJ7p9kqZFv3Z//Oy8U7eLSDGWA2BgJn+RSCxaz554ybFtW3zzoUW4hXbtbq6mKY+JdGFEu0eXHUKppauE4PQCZSXjhSUlG4lCudLdQ2HnJpkNwDx5mLYlT7ZFI6mYOrIdSorWLB1r6SSqFGba0A32bKvlXUCJP5ik32FEwfweR7uLatzcwlaQ2tSzDwUdkNQJ8f5HeqI2ZAZA7PIthC1WYMv9sCayH19ii/DSrSb//4ApfbHsshBAnvIDUTp8WmObZQ5uEB6qsBaujSP5GDy3vwj20E66otCu2GkLo/UZIqK2yHl3Q21tE4+sjQMGW+eqdC9WtVKw5V874Fgb9fVza3CPhhU5FipTNJXkyPjPEvHvH2i6L/X3ULZY0=c[�E9  �       {
                        &quot;name&quot;: &quot;dividend_level&quot;,
                        &quot;text&quot;: &quot;股息分红情况&quot;,
                        &quot;score&quot;: &quot;0.3&quot;
                    },
                    {
                        &quot;name&quot;: &quot;dividend_continuity&quot;,
                        &quot;text&quot;: &quot;股息可持续性&quot;,
                        &quot;score&quot;: &quot;0.5&quot;
                    }
                ]
            },
            {
                &quot;name&quot;: &quot;future&quot;,
                &quot;text&quot;: &quot;成长预期&quot;,
                &quot;desc&quot;: [
                    {
                        &quot;name&quot;: &quot;future_profit3y&quot;,
                        &quot;text&quot;: &quot;营收增长预期&quot;,
                        &quot;score&quot;: &quot;0.3&quot;
                    },
                    {
                        &quot;name&quot;: &quot;future_prime3y&qu       �  
ot;profit&quot;,
 �Xa !	%�kdengxiaowu板块详情
    
**简要描述：** 

- 板块详情接口

**请求URL：**   ��K` !	%��Odengxiaowu板块轮动
    
**简要描述：** 

- 板块轮动接口

**请求URL：** 
- ` /theme/getRotationTheme `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |simple(首页的轮动)，detail （轮动的详情），history （历史）,explain(介绍页)。多个以逗号隔开|

 **返回示例**

``` 
{
    &quot;simple&quot;: [ //首页轮动
        {
            &quot;theme_id&quot;: &quot;238&quot;,
            &quot;theme_name&quot;: &quot;可燃冰&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;+2.11%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            }
        },
        {
            &quot;theme_id&quot;: &quot;410&quot;,
            &quot;theme_name&quot;: &quot;医药&quot;,
    �    /Cg8E22gaekoqWT1RvAMw/fAJzF2g2am3bQbg2ecuJYOT9HyoVzmS54fjGZSifvkRzbWFeOVy0tl/1w9HhTeJ+7eScrtuPW6CkyL8VGTzkRBuF3ytQZmE109xfsvLtpaGqgOYJtpksfqzGGdoljelgph0GY/CAXFuB6UCcrc69YOdgJ1sFwDj28QHhGzm8aitZQr3g5PaKnPtzNWMHwfHlJKm+imG3oZGXpFasJ2uXRRapU3AO+ItzLgdOD2w5VQ8vjdsmsnjQ16aaWLD+nm3uZbiz/03Rj/Zxu/ivpxnq9dNOxUmNe2hyMYG+sctAHRkPwz5BcmFGyBaLz9OhLOkYSTu1G0eJuO3ftQ9kds83FTDCuTlHpmFykEDj3XTdx6kyeV4jXEGtaEBhR0E37MFjK78LFIzkx21vaLa2PiQ7Tcn3Bdl5PjKwlvRMsjhm6h5+IxgKn5DaAL999SewSOOpT6JV/wTFuQ5zh2lRFprfD+U7E2q1MMFIi9E6uddQGMyx6CvdnMRM4NQ1mDu97hlV523lOZDkPK04aJB/PwqhfLvwNfbsGyFvvQrqdK0EjVWDvhIsx2/BKOag/ePPbaIUEm+vXKmjvg3JV4uw4o583roZuiTd1F6LtWOgbKfJ7p9kqZFv3Z//Oy8U7eLSDGWA2BgJn+RSCxaz554ybFtW3zzoUW4hXbtbq6mKY+JdGFEu0eXHUKppauE4PQCZSXjhSUlG4lCudLdQ2HnJpkNwDx5mLYlT7ZFI6mYOrIdSorWLB1r6SSqFGba0A32bKvlXUCJP5ik32FEwfweR7uLatzcwlaQ2tSzDwUdkNQJ8f5HeqI2ZAZA7PIthC1WYMv9sCayH19ii/DSrSb//4ApfbHsshBAnvIDUTp8WmObZQ5uEB6qsBaujSP5GDy3vwj20E66otCu2GkLo/UZIqK2yHl3Q21tE4+sjQMGW+eqdC9WtVKw5V874Fgb9fVza3CPhhU5FipTNJXkyPjPEvHvH2i6L/X3ULZY0=c[�E/   ~ ~                                                                                                                                                                                                                                                                                                                                                                                    �wA !	=�\dengxiaowu公司财务评级需求eNrtWV1v2lYYvvev8NUuoiYYErSsu60mTZq0admupoq4YBqrxO6wSRuVSkBIgJRAtnwsDSQZWT5o1UHSkC8g8Y8Z59hc5S/swAHHfAQSOzTZVAuBfXjfc57nvI/f89qHINFB9PXJGZ+y44fxuCLtXRRX+/pIgugn5cU0DB/DgzSYicLYNoj/RSBbJXsM9wM///hdzbCfHCVN37AczdkZ01NGHBF5+7PaNTlKVPvHPnD5FBTjVTfk9cP3Iz+RlQ5BPACX1GG9+BLMz3mBNF32RbzyfgGsv/Eq2RxciXkJ78N+dFSAV8/wZT/p7a81IwthcvwJ7yK9cCWLrgXRzXJPSa8SSMnb6W8fVW0IgkSwpEWQWJe38qXzNwgTMTo6ShKviErfX/zq4cWvBZEWPQI+f0hSDzR/sZyTr/9RM/bY7YxQs9aaOmiRrpvi3q8aAf9StS5MJjOaFfgxBZORi2KUqlwkI6SS2wSzKSUblPO7Tb058bQ3dmcesKodwpUN9Gnyol0um5vmnqFZUmGaTGA6XZ5Kw9jvKBSqgwY443I2jmMZoqxa8i2DNJoPDg4N4jPV+vWDJmQs5  w    S                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  �*Q !	C�mWdengxiaowu获取用户个人中信息eNrtWF1v2kgUfZ9f4ac+RCGxnUCTVFFf9mWlSlu126eqAtf2ErdgiG3S7laRIEmbhGxwIpEvSLtLSxpU7cJW/YACKT9mPWPzlL/QMSbIOEDSKJW6K/uFse85c+9cDnPMAAJfYGhIL8aN1wmkqkbjn+N6ZmiIAMBDGKkyVLf1dAGtlLXKG61a1Sp/a40cSpRQ6gCqrwCmGqUyertw59aNNs9DBIg5eoQcIUdjMi+NCuIvETkAWmksLNr+B  ��"P !	C�]Wdengxiaowu获取用户个人中信息eNrdVk1T2kAYvudX5NSDIyRBwY+O00uPnWmnH6dOB0KImBYSSDbQ1nEG1JaKAjqDWkU7paXKdFqpU1spoPyYZjfh5F/ohiATqFrr9NSckn2f591n3  �    #                                                                                                                                                                                                                                                         �K !	%�]`dengxiaowu板块轮动eNrtWFtT00AUfs+vyAuOImmThkLBVx+d0UF8chxaaKQZS4MlDjKGmQIWrIUWncqlRZCr6CgBby002B9jdjd56l9w04XaChXMiAMz3clMds/ut+fs+U42Zw5F40Y1NqKtiLExApNJo7Bd1NKNjTRFMTR8XQCvZ439LfB8EybWQXKVwmsNNQt3Ru903DhYyNBe2ikHhD7B2SvIHZLsk0Up1GkJaC9V2p5A4Mwu0JIlFAbdunm7k  ��ZJ !	%�mdengxiaowu跳转协议eNpVj99OwjAUxq/pU/TKK5kC/guGC5/AC59gyRZDxA0JGIg1gYmJgki8mEFEk+EEYhRM3BAhCy9D1+4tbCkJ+t30nF+/850WAMgEwhAm9w/W9jQloycV+v1FvXdcq9N+H4CIpKmqktIPk1oiQq0esceB5QZPbWELWkXaKZGHCfbM1aVzHQrrbFT76wBRKVtIq4l8XlwvMoyX2ehNpIKYlJYz8nHibOUkp2d3j9SCKOLiOJVTOVWU5/8y5tOLXc0yrhu++QkA4usQHTh+4xYBFA8z8S+LigmgyLwXKcS7Y0FwTgCKhiAS7+ZdjHcf98R8DYrX1LA424Ah5HcMPHWXbJP56LCKK1PSqmK7ydkWY9jukscGtW78i0vOtrnPaeOKRQdlMu5ytsN3GD/UffadCa70/GEPl1psEo+u2D3TL+xb3n4=c[p��    4  4                                          �IE !	1�=]dengxiaowu财务评级排名eNrVVVFv0lAUfr+/4j75QAYUnGabr4uJiYlG5pMxUoFNMtYqLRqykgBhOtyERaebOKdMh9PM4XDZGOD4Mfbedk/8BW97S20LLDxuTZPe0/t955x7zvlaAMkFXC5lL61WMrhYVNu/Oq2SywUBcEP1YAu9LKvVnNL4hguv0corXNhGxS+AMNTqEd7P3r1z04C7YRB6r0c5lgtFvDMRMSDyodmpOBuOwCDQY1AGfneMWkWdRDi3bwWmoOYOFbP4rRlaoiYJKKH2wmk6Lyn7TbS5JKnVA7xekIA04SaXlry+oqYbSm7jNUEIybmHfAxKeL1KbEGMR7kZKKnZsrK9c2OSYqJcOEF2kg+iYScQquVluV7SkRpUTD6OQH2NVipWHC0Mze9vOqs0W2hl0XhZyuG1Q5R+L7c+K98b6OeasluR6zXqEkBSk/Yq+rCpfG3IJ0ukIMDKpnukJAAEg0EI5oHGu/QkwYvXBJEVEwJdT0BmxLIV5ab57oYBToRCEcFAW6FhVmS7UOp9UAT6ZAwXXq+PpIVrZbyR77SWGc3YyDscTNNZsHvwea6YPvD6J3I7WGZH4iw3Swpspuf10obQ2pgsS8KR2LQj2Jj1yHY0G4vZwX4jMRObGhmUmrXCZl5yu4wz1T6RLDNmjxgYHWN8gzM0eRw756ji6ZtDEnTofNmnM4O7QLNHx7/Rxxd9OxKLCmKXfo90rbf+8zbL0hFdgfbQVxnf+OXxfqf+z+s9MGo21L0T67EHcYUQH3eQ/YNnzs51jJxRK/roe/CUad0H1E5pUgVy/Qe50VFNaRbR4nPybTDI+u750fGw2js/arsY+mI8/r76IrMwzEeS8fhMOpkj7ZdVytE56vVgk+dFkiXjGT2bc5Ych5IhwLtbarsg/2krqzuBR/yzST7UaWX+AfULKiM=c[�G�  �},
        &quot;industry_avg&quot;: &quot;1.5&quot;,//行业平均星星
        &quot;list&quot;: [//排名
            {
                &quot;symbol&quot;: &quot;601939&quot;,
                &quot;name&quot;: &quot;建设银行&quot;,
                &quot;score&quot;: &quot;2.5&quot;,//星星
                &quot;ranking&quot;: &quot;1&quot;//排名
            }
        ]
    }
}

```
综合排名空返回：
```
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;1&quot;,
        &quot;finance&quot;: &quot;&quot;,
        &quot;industry_ranking&quot;: [],
        &quot;industry_info&quot;: {
            &quot;industry_id&quot;: &quot;S4801&quot;,
            &quot;industry_name&quot;: &quot;银行&quot;
        },
		&quot;stock_info&quot;: [],
        &quot;industry_avg&quot;: &quot;1.5&quot;,
        &quot;list&quot;: [
            {
                &quot;symbol&quot;: &quot;601939&quot;,
                &quot;name&quo   z z                                                                                                                                                                                                                                                                                                                                                                                �{C !	=�\dengxiaowu公司财务评级详情eNrtWV1v2lYYvvev8NUuohIMAS3rbqtJkyZtWrarqQIXnMYqsTswaaNSiZAQQkogWz6WBpIMlq9WGSQt+QISfsw4x+Yqf2EHjnHMR0xihyabaiGwD+97zvOc9/F7XvsQJDqIvj4xG5S2J2AiIZX3L0qrfX0kQZhIEN4DiRMpnwGzaSk3JRZ2pNw2nAzD+BZI/EUgPyl3DA9CP//4nexkIp2k+RuWozkXY37KCEMC73omX5NOoj4W9oHLp6CUqLshrx++H/qJrHUIEiG4pEAI4EswPxcA5XA1GA2IB0Ww/iYg5fJwJR4gAg9N6KiRqJ/hSxMZMMnNyMI3PvqE95ABuJJD1z7By3JPyYAUSotbu98+qtsQBIlglRdBcl3cLFTO3yBMhNPpJIlXRK3vL37188LXPoEW/D58/pCkHqj+YrlhvvGHbOx3uRifbK02ddMC3TDFvV81Av6l5C7MZguaFfghDVPRi1KMql2koqQ6OC29DeNpb+7O0m9XOoQrG+jT4kV7PA4vzT1Ds6TANJtBeLc6uQvjv6NQKA4q4IxnuHkcq42yq8m3DdJsPjBgG8BnivXrBy3IWM7tR  ~    +Eb7wBPSscqJ6s3gGcZvAE4q70bNC/tpr0qPNXksXR+jpQL57Jd8PxiNldO3iM5drCuHa/aWi774ejRlvA+9/LDrNCJW7OnwLwUmj3F5AyYeSdNnoHZZHd/n4v3tgxN9bdGsMN06WM1wtAeYUQPK+lwCqb2xOICXJ/SycrSK1Zudox1M5xbDy8wMy0WMoaiZesVr2G/4G8MdzNWcGa+ulSuZlDMNnSysvaK1Rjt8esiVSntg2AJ7ufB6cfbDlVTy+NOyayRNFXpRk6Wn9PNvUw31v9purF/Tjf/lXRjv1660azUmJcON+NzNVc56ANjEfhnRCxOS7kioT09+pKOkYQj3yhq3B3nrnMou2N2eJgxxqMVFc3kUo6A8+B1E6fO5HmFeA2xpn0+RvDppn04VSnswMUjMTnbW9ptrY8JjWm5vmC11xMja0nvBItjhu7hJ4KxwEn5DRAsdF8SuwSO+hR65V9wjNcQZ7g2WZPp7XC+E7F2KxOMlAi9k2sDtcEMi57CJ3KYCZwMg+nD+55hFd4unhNYzs8K4wbJJ3IwNiEW/4bBHQPk7XchXe1K0EgV2DvhYswOvFIO6A/e/BZaIUFm/VoF7X1QrkKcHWX088bV0C3xpu5CtJqFvpEiv3earUN2dH/2114u3sGjbcwAszEQOOunECxmzT9nvLSgvH3Wodhionaz1lcXw8S/NKJYosOLo3bRyOE6/Qiy0erCkZSOwaV85WxB3njI74LUPjjOXpRi6ieTyskcXI2gRnUVCzYPpHQaNaprBfg2Ww2uokaYKtRscqcgfART7+HaljozV8praF2CoQ/STggGJ0Bhuz5iFkTn8CyCTVRtxvG7LbAWUW6P6tspqfzbP8HQ5bbHcgRBwjtIrcRpoWWOrZRlsJ/6qp+yXfon83B5H/6xhWBdtUWh3hBS9icq5doKq/GSzsG6m0cfsg1Slqt3KhS/drXiULXuWxD4+3Vtc4uAexmpHK+clcXF3aER/sUj3nVRmvgXyz5uKw==c[�G�    aXh7LFa2obBLIzugtgOhrB69hgehF4+f1IDErgL75JFRuhiuTe86MKqGU0UXPkDirEqEOGePR14gRspQCwElxuFFNME8YgCStPlQFjRDgpga17Rs4dwLapgioNAw2i1+maaBK4QtWmEkD6MMLgC4nvIEiWB5by4woxJDOepFGdh+Cs4WDbXUSmGqxEYjnosLYHklpbKq6fzqEHM5XLh2DhmFLrzTual+6LklmTRfHfgZKfFZay17qiBZZpmxBraCvW4JXcdama3VGCEUZZm6u5XDbcxxpssS21Pc2XKWvMsnHP7meYANReA6/nyzKIe2m4fy9I81xzbNSIP+li6i/W7vYxY/fBO5xg37L07wnkvScZJQsumoTb0yRMtmdWSa5XiAshswdUjLbkIo/tqrgDmkmAuDeKLyAVjcRCOgNwkOAiA1JSaj8L5MIjMGJO7MTX3Da3lbyDUvgNaYlv3wkZS/QRJEbZunOp12GwOkmyfw2/Nwck+30XAZvZQbWCC5EQkaSSlerupvl57P0leFIN43RrR30Pes18cUSPa4/Op0xQ00XkjFtquy0J4lAbBDZDaB7nZW2HhR8kj3oiFqAd0AMFIxmSewbb4BsgW1Nyc0eRcGnFUP50ExTzcLIHNVQTQlqbQSQVm8jBxiDBaOHnpv3Ql8tn/C/nM5yXEvh0i9lAkSV2fiLbziNiwXne2nJvm2e60nsJXOzvP0lDLbGvxT2BxTc39AKXJ9nskC75WIjYISLg9fpZ7SPP8W5Z54GflbkkYHh22c5TdTfp6RoV+uk8cHHKLvN/Ocpd8Z5ZjnYaoXWuXMNOeMJTMonCmvppq2qq450otUVNapLV1jb1ooBCvwMsjrAdX0J9lzJjXBq0wxSLxXaCQzOtH01p+v7HRlWLShmbheqYcSJjouiSD1Az8la7dP2DyEKQS5hrKS+t6NqsWdrTPQXS30Dbmy3sr5e3fWmLK6jKvMBiGwe9f9FJUPSmh/AND/PtHPF0pBv8BPJUyFg==c[���  uxt&quot;: &quot;资产收益能力&quot;,
                        &quot;score&quot;: &quot;0.3&quot;
                    }
                ]
            },
            {
                &quot;name&quot;: &quot;health&quot;,
                &quot;text&quot;: &quot;资本结构&quot;,
                &quot;desc&quot;: [
                    {
                        &quot;name&quot;: &quot;assets_debt&quot;,
                        &quot;text&quot;: &quot;资产负债结构&quot;,
                        &quot;score&quot;: &quot;0.0&quot;
                    },
                    {
                        &quot;name&quot;: &quot;owner_debt&quot;,
                        &quot;text&quot;: &quot;权益负债结构&quot;,
                        &quot;score&quot;: &quot;0.3&quot;
                    }
                ]
            },
            {
                &quot;name&quot;: &quot;dividend&quot;,
                &quot;text&quot;: &quot;分红能力&quot;,
                &quot;desc&quot;: [
               �                    &quot;name&quot;: &quot;future&quot;,
                    &quot;text&quot;: &quot;成长预期&quot;,
                    &quot;score&quot;: &quot;0.2&quot;
                },
                {
                    &quot;name&quot;: &quot;value&quot;,
                    &quot;text&quot;: &quot;估值水平&quot;,
                    &quot;score&quot;: &quot;0.5&quot;
                }
            ]
        },
        &quot;index_desc&quot;: [//个个指标细读
            {
                &quot;name&quot;: &quot;profit&quot;,
                &quot;text&quot;: &quot;盈利能力&quot;,
                &quot;desc&quot;: [
                    {
                        &quot;name&quot;: &quot;profit_level&quot;,
                        &quot;text&quot;: &quot;过往盈利能力&quot;,
                        &quot;score&quot;: &quot;0.3&quot;
                    },
                    {
                        &quot;name&quot;: &quot;profit_assets&quot;,
                        &quot;te  �quot;,
                    &quot;score&quot;: &quot;0.2&quot;
                },
                {
                    &quot;name&quot;: &quot;value&quot;,
                    &quot;text&quot;: &quot;估值水平&quot;,
                    &quot;score&quot;: &quot;0.4&quot;
                }
            ],
            &quot;industry&quot;: [//行业数据
                {
                    &quot;name&quot;: &quot;profit&quot;,
                    &quot;text&quot;: &quot;盈利能力&quot;,
                    &quot;score&quot;: &quot;0.3&quot;
                },
                {
                    &quot;name&quot;: &quot;health&quot;,
                    &quot;text&quot;: &quot;资本结构&quot;,
                    &quot;score&quot;: &quot;0.2&quot;
                },
                {
                    &quot;name&quot;: &quot;dividend&quot;,
                    &quot;text&quot;: &quot;分红能力&quot;,
                    &quot;score&quot;: &quot;0.5&quot;
                },
                {
  �
        &quot;industry_ranking&quot;: {//行业排名
            &quot;own&quot;: &quot;18&quot;,
            &quot;all&quot;: &quot;25&quot;
        },
        &quot;radar&quot;: {//雷达数据
            &quot;own&quot;: [//个股数据
                {
                    &quot;name&quot;: &quot;profit&quot;,
                    &quot;text&quot;: &quot;盈利能力&quot;,
                    &quot;score&quot;: &quot;0.3&quot;
                },
                {
                    &quot;name&quot;: &quot;health&quot;,
                    &quot;text&quot;: &quot;资本结构&quot;,
                    &quot;score&quot;: &quot;0.1&quot;
                },
                {
                    &quot;name&quot;: &quot;dividend&quot;,
                    &quot;text&quot;: &quot;分红能力&quot;,
                    &quot;score&quot;: &quot;0.4&quot;
                },
                {
                    &quot;name&quot;: &quot;future&quot;,
                    &quot;text&quot;: &quot;成长预期&   z z                                                                                                                                                                                                                                                                                                                                                                                �{D !	=�\dengxiaowu公司财务评级详情eNrtWd1v2lYUf/df4ac9RCUYErSse60mTZq0admepgpccBqrxO7ApI1KJcJHCCkJWfOxNJBksJCkVQakJV9Awh8z7rV5yr+wCxcc8xGT2qHJqloW+F6fc+/53fPzucc+BIkOYmBAzPiknWkYi0nl3EVpfWCAJAgDCUL7IHYi5VNgLillg2JhV8ruwEAILqRB7G8C6UnZY3jg//XnHxpKBtJGGr9jOZqzM8bHjDAq8PYnjTZpI+pzYR24egpKsboa0vrpx9FfyNqAIOaHK7IJXtwEi/NeUA5VfRGveFAEm6+8UjYP1xa8hPe+AR01EPUr3DSQXkOjG0m4pyYe8U7SC9eyqO0WXCz3mPRK/qSY3vv+QV2GIEhkVnkZxDfF7ULl/BWyibDZbCTxgqiN/dXvHl741i3QgseNr++T1D3FLZYb45s3GsIeu51xN6SVog5aoJuiePSrZsD/VGMIo9GEVgW+T8JE5KIUpWqNRIRUOqdttDG87K3DmQYt8oBwbQudbVq002l10dwTtEqymUYjCO1VA3tw4TVyhaxwqcQ/41qnMQ9TFiX2jjlaxYeGhofwlSz98l6bYSzn8   |                                                                                                                                                                                                                                                            �}I !	1�%^dengxiaowu一级分类列表eNqlVE1v00AQve+v2BOHqFELx3JFnJBALZwQkq3YaSwFOyR2EKorJSUUi0ASIP2Kq9CkoQSpSlI1pTR28Z/x7tqn/AXWHykugoOVOY1n3ry3u/I8AGmARIIMSs5xGdfrjjWamq1EAgKQhPbPEpl8Q9oWOTWQtut0+rj2FdWPAJ1whhf4dPPJyoMQnoQMXLwviKyY4hfXeDnLF/ksZIBPH4DxziUy6z6ewh89XH0MPSZU38TbM1W8ewgApBNWE+lt0pvYv6oUDhiGgWAdeMe99UKR5LsFmZWVQpAvw6WFSEsQ09KsEYKVVIovhOgolGNldgZ96te9WL/O/iDlVzn+JmmU7SZWZJ//hSWGiRoarn1CjQ9B5XpsYyGmbpHNKnwccdscoZKJR2N0eTaveFqRlXwsdaw13G3L7VbwwZd51XN5KS3IsR5e15D23Xl9hd7p86pneDYrZ+KoO+f01ifE+IzblXnVOaEocLzIxdH3VnfS/fft/ewZ2PBWK7JywTY6wzHeq/k2oAYV+uOqng20q2rQVIG6nPQCwjBRw8//Bh1Zy0tKTuCgKoiyVyHNPtYuiFERuKn5/jZ1AefHG2o6ZNAhjS30cW9q6ndoFe8P3FIrQHtE3oFR7y0+64dehfUx6rWCO7jNfWc4tI0jclim1kMOqu7xjts5J61KtBXYHQAAn3Qdq2ZfWZR/NSO9vCelpmb5N0Gb5v0=c[�H�    wI4oyJ6JDQTTIBAk/tsn+GHtvyxP/gre9pWu7FaeJkUWbJuvp/b5zzj33fDsFkFzA41E20+raJM7l1NqX42rB44EAeKG6s4IeF9XSlFL+gLNP0fwTnF1FuXeAMNTSHt7K3Lxx1YB7YQj6L8c5lgtH/bGoGBT58HB/ko1EYQjoMSgDvzhA1ZxOIpzr14L9UHOHchn83AwtUZMElFDtwVF6RlK2Kmh5VlJLOziflYDU6yWXlrz+RE0vlLzGa4IQxkZu8wko4XyJ2IKYjHMxKKmZorK6fqWPYuJcJEVWxm7FI04gVItz8n5BR2pQcexuFOrPaH7NiqOFofl9T2eUShXNTxsvC1N4cRelX8rVt8rHMvq8qGysyfvb1CWApCa1BfRqWXlflg9nSUGAlU3XSEkACIVCEIwDjXfuXooXLwkiK6YE+twLmQ7LUpwb4k8WDHAqHI4KBtoKjbAiewKl3t0i0F/GcOH3B0haeLuIl2aOq3OMZizNOBwM0V6wewj4Lpg+cP4NuR0s80SSLDdMCmym5/fTA6G1MVl1Jj/KOWJ1W3dsB7OJhB3caeRlYic63DKzFthMS64V8WSpSSRLi9kjBru6mYB7hiaPY0ccRTx6tkuCtpwvez/mfgg0e3TwFb1+1PRAEnFBPKEPkENrLP+4zbJ0kC5Ae+iLTKDnfE+zXdd5jRtGlbK6eWjdthtXCPNJB7nTveXsXEfHGbWiP003PmFag4DaE7pUbSomuq8LWVv8+zJu6LpTBNsc6qbSgcHWVNNuOjlNE+2phd/QwE97X+tuIO9/Ijfa21YqOTT9kMxFQzlnpPmZX+vo8TMzadpDM4yvs+lsIa3Qyt8N4wuYdNJG2tdaYYq2UaOHtpUh4+v6wzIkU8f8+GyT8fNvzJS6Pk6XA9Pxv9lbnjl4Y0WtZeVvNWVhPXiHH+3jw8fVyR84jvpEc[�8�                                                                          求URL：** 
- ` /Finance/getlevel `
  
**请求方式：**
- POST 

**参数：** 
无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;&quot;,
            &quot;name&quot;: &quot;综合排名&quot;
        },
        {
            &quot;type&quot;: &quot;value&quot;,
            &quot;name&quot;: &quot;估值水平&quot;
        },
        {
            &quot;type&quot;: &quot;future&quot;,
            &quot;name&quot;: &quot;成长预期&quot;
        },
        {
            &quot;type&quot;: &quot;profit&quot;,
            &quot;name&quot;: &quot;盈利能力&quot;
        },
        {
            &quot;type&quot;: &quot;health&quot;,
            &quot;name&quot;: &quot;资本结构&quot;
        },
        {
            &quot;type&quot;: &quot;dividend&quot;,
            &quot;name&quot;: &quot;分红能力&quot;
        }
    ]
}
```

欢迎使用ShowDoc！c[���                         ciKLgRHQoiAaZIOHHNtkfY+9teeJf4La3dG234jQxsmjTZD2933fOueeeb6cAkgt4PMpGRl0dx/m8Wvt6VC14PBAAL1S3l9GTolqaUMofce4Zmn2Kcyso/x4QhlraxZvZmzeuGnAvDEH/5QTHcuGoPx4VgyIfHupPsZEoDAE9BmXgl/uomtdJhHP9WrAfau5QPotfmKElapKAEqo9PMxMScpmBS1NS2ppGy/kJCD1esmlJa8/UdMLJa/xmiCEkeHbfBJKeKFEbEFMJbg4lNRsUVlZu9JHMQkukiYrI7cSEScQqsUZea+gIzWoOHI3CvVnNLtqxdHC0Px+ZLJKpYpmJ42XhQk8v4Myr+TqO+VTGX2ZV9ZX5b0t6hJAUpPaHHq9pHwoywfTpCDAyqZrpCQAhEIhCEaBxjt3L82LlwSRFdMCfe6FTIdlKcHF+JMFA5wOh6OCgbZCI6zInkCpd7cI9JcxXPj9AZIW3irixamj6gyjGYtTDgcx2gt2DwHfBdMHXnhLbgfLPJEUyw2RApvp+f30QGhtTJYl4Wgy5gjWbd2yHc0mk3Zwp5GYiR3rcEvNWmEzL7lWxOOlJpEsPWaPGOzqZgLuGZo8jh12VPHw+Q4J2nK+7P24+ynQ7NH+N/TmcdMTSSYE8YQ+QE6tsf6jNstyIroC7aEvMoGe8z3Ndl3nNW4YVcrqxoF1225cIcynHORO956zcx0tZ9SK/jTd+JhpDQJqj+latcmYCL+uZG3x7+u4oetOUWxzqJtMBwZbU0276eQ0TbSnFn5DAz/tfa27gbz3mdxod0up5NHkIzIYDeWckeZnfq2jR8/OqGkP0TC+zqbDhfRCK/83jC9g0kkfad9rhQnaR40e2laHjK/rD+uQjB3z87NN5s+/MVTq+jhdDkzH/2Zveejg9WW1lpO/15S5teAd/kEfHz6qjh8Dlkr68A==c[�Y�                                                                    �ot;,
                        &quot;text&quot;: &quot;盈利增长预期&quot;,
                        &quot;score&quot;: &quot;0.0&quot;
                    }
                ]
            },
            {
                &quot;name&quot;: &quot;value&quot;,
                &quot;text&quot;: &quot;估值水平&quot;,
                &quot;desc&quot;: [
                    {
                        &quot;name&quot;: &quot;value_profit&quot;,
                        &quot;text&quot;: &quot;利润水平估值&quot;,
                        &quot;score&quot;: &quot;0.2&quot;
                    },
                    {
                        &quot;name&quot;: &quot;value_operating&quot;,
                        &quot;text&quot;: &quot;经营情况估值&quot;,
                        &quot;score&quot;: &quot;0.7&quot;
                    }
                ]
            }
        ],
        &quot;desc&quot;: &quot;平安银行整体财务质地差，盈利能力不暇，资本结构失衡，分红能力普�    �，机构对其未来成长预期保持悲观态度，目前估值处于行业均值水平附近。&quot;,//文本说明
        &quot;date&quot;: &quot;2018.09.04&quot;,//更新日期
        &quot;industry_info&quot;: {//行业信息
            &quot;industry_id&quot;: &quot;S4801&quot;,
            &quot;industry_name&quot;: &quot;银行&quot;
        }
    }
}
```
没有评级的返回

```
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;1&quot;,
        &quot;finance&quot;: &quot;&quot;,
        &quot;all_ranking&quot;: [],
        &quot;industry_ranking&quot;: [],
        &quot;radar&quot;: [],
        &quot;index_desc&quot;: [],
        &quot;desc&quot;: &quot;&quot;,
        &quot;date&quot;: &quot;2018.09.04&quot;,
        &quot;industry_info&quot;: {
            &quot;industry_id&quot;: &quot;S4801&quot;,
            &quot;industry_name&quot;: &quot;银行&quot;
        }
    }
}

```

欢迎使用ShowDoc！c[�X�    gRhQFJ6JDQTTIBAkf22Q/xp3TcsVf8LSn69punWBiYNGmyXp6nvfjvH2e9x2A5AIul7yZUNYmcSajlL8dl7IuFwTADZWdFfQ0p+Sn5MInnH6O5p7h9CrKfADEQsnv4a3k7VvXdbgbBqD3aoRjuWDYOxQW/SIfHO6LsaEwDAAtBrXArw5QKaMZEZubN/x9UHWHMkn80ggt0SUJKKHyo6NESpK3imh5RlLyO3gxLQGpx00uNXntiS7dUHLrrwlCGBu5y0ehhBfzZC2IsQg3BCUlmZNX16/1UkyEC8XJztidSMgOhEputrKf1ZAqVBy7H4baM5pbM+NoYWh+PxNJuVhCc9P6y+wUXthFideV0nv5cwF9XZA31ir729QlgKQm5Xn0Zln+WKgczpCCALM13SMlASAQCEAwDlS7Cw/ivHhFEFkxLtDnHsi0m7Yi3CBf3dDB8WAwLOhoMzTEimwVSr07RaC/jO7C6/WRtPB2Di+ljkuzjLpYStkcDFIuWD34PJcMH3jxHbltVsYXibHcMCmwkZ7XSz8IrY1hVbPkRzlbrC7zia1gNhq1gjv0vAzsRLtTZuYCG2lVyjk8mW8QyUQxa0R/Zxfjc87QsOPYEVsRj17skqD1+ba1VT8dkZ41TUjy1JjvmCeVi+17q1eTHOtTQwff0WbKKUGHE7IPh5xZQsur+n37pCFjohFBrJr3E1bV82Pcsmp+5MuMr/tid6MjNz12saBsHpqP7WQrBPmYzbjDWRNWW5sk9FrRn4YHnzBWA4CuJ7ReYmkzpDHVOo26efZ9po5yTTpKY6hTG+kfOJmsz1bIp9dJM020phb+QAO/5b7KblDZ/0JutLctFzNo+jEZ3Lpyzgn5mdMxevzcjMLW0Azj6Wg4WwgVTtJuGI/PMCc0UodqdorSqN5Dy8qQ8XT+ZRmSqWP8O26R8fNvzJSaPprLgWn/T/YTzxy8saKU05UfZXl+3X+PH+3lg8elyV9lojHhc[�Md                            |求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |
|industry_id |是  |string | 行业ID    |
|type     |否  |string | 排名类型。综合排名的时候传空字符串    |

 **返回示例**

综合排名返回：

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;0&quot;,//1：没有，0：有
        &quot;finance&quot;: &quot;1.5&quot;,//星星
        &quot;industry_ranking&quot;: {//行业排名
            &quot;own&quot;: &quot;18&quot;,
            &quot;all&quot;: &quot;25&quot;
        },
        &quot;industry_info&quot;: {//行业信息
            &quot;industry_id&quot;: &quot;S4801&quot;,
            &quot;industry_name&quot;: &quot;银行&quot;
        },
		&quot;stock_info&quot;: { //股票信息
            &quot;symbol&quot;: &quot;000001&quot;,
            &quot;name&quot;: &quot;平安银行&quot;
          �t;: &quot;建设银行&quot;,
                &quot;score&quot;: &quot;2.5&quot;,
                &quot;ranking&quot;: &quot;1&quot;
            }
        ]
    }
}
```

个个已经分类排名

```
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;0&quot;,
        &quot;industry_ranking&quot;: {
            &quot;own&quot;: &quot;18&quot;,
            &quot;all&quot;: &quot;25&quot;
        },
        &quot;industry_info&quot;: {
            &quot;industry_id&quot;: &quot;S4801&quot;,
            &quot;industry_name&quot;: &quot;银行&quot;
        },
		&quot;stock_info&quot;: { //股票信息
            &quot;symbol&quot;: &quot;000001&quot;,
            &quot;name&quot;: &quot;平安银行&quot;
        },
        &quot;industry_avg&quot;: &quot;0.2&quot;,//行业平均分
        &quot;finance&quot;: &quot;0.1&quot;,//个股的分类分
        &quot;list&quot;: [
            {
                &quot;symbol&quot;: &quot;    601939&quot;,
                &quot;name&quot;: &quot;建设银行&quot;,
                &quot;score&quot;: &quot;0.4&quot;,
                &quot;ranking&quot;: &quot;1&quot;
            }
        ]
    }
}
```
空的时候返回：
```
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;1&quot;,
        &quot;industry_ranking&quot;: [],
        &quot;industry_info&quot;: {
            &quot;industry_id&quot;: &quot;S4801&quot;,
            &quot;industry_name&quot;: &quot;银行&quot;
        },
		&quot;stock_info&quot;: [],
        &quot;industry_avg&quot;: &quot;0.2&quot;,
        &quot;finance&quot;: 0,
        &quot;list&quot;: [
            {
                &quot;symbol&quot;: &quot;601939&quot;,
                &quot;name&quot;: &quot;建设银行&quot;,
                &quot;score&quot;: &quot;0.4&quot;,
                &quot;ranking&quot;: &quot;1&quot;
            }
        ]
    }
}
```

欢迎使用ShowDoc！c[�M�    OtqC47RN3+6/TNhTgTVBbTVyQ4bT5u5mr5Xg0dbABCY20jD7As9X9U+r2EiCAQCBEB7xWY8Y1VoATAfPAHmsq7MxiLKNVlhlJhsjacIctgWMis7CbTBMZbl5TbaDuUYhTmBWrPbMvDSnMDyJ+G7nbB5Pem6s+XmujNT9pyn4SIT5rsJWiWO9qrN5U1jITeYK7ARsZs7Go3dDwnsqBBmgrzc+pr8/sfig+BIVAyeMZmoSI6m4TKMxSM9W9Kzu8f132HxBdr5qGc3UepQq9RgMguTBbixiUNI3YCr67CyCN/GYX5Jq6bQ2ipcXzYfHqhYYXgt/8YXBlfAKoKzFzRJTXhIykOPEZR3iqanSHLwHGH7HGIsFOoH7FYPNQAmKX4sks6klHeMuur1TZBkPw4vck7GxDg56evPaAvtx97S6SLND19IhfTXqhB9LMDEPswfwsrKpajwN4WTL6RCXAPePdB60VKeqbaNfViqaZWkWWSygDVqfF6E9Sp63oDPdzBATy8146twuYoy7zFGX82e+Vs6l/h830R81ucZwr4cIY5TJEl9vRDpXkLs3N0bduyb/GPFTG3fhe+eArVUofwa5Xu2AVgp5gHQaq/0jWdw65nrAq4LuC7guoDrAv9ZF+jWqfV0VmIjnKPnCi8rfmrsqo/00RM+cqyfYtoNF0Shh5PQ/RnyDCPx/pgUciq2o1QPHonKdQyZ7lkME45ilc4JCi9N22Kt52wk8lDgp30PWdE3zoSYoBybFbnoZFjyShweMg9mZme4cUc3589pkF6nQerFnGmQm7uuQboG6Rqka5CuQf6vDNIyq/6oy7HSi9np922pPTaCducZSRTEoHyurp5a0+BGcLzMduMn0f4KRUK1jNLYFpLmseYfB82XS8bhykDBnPeNYNLxRhAIBFrnqjC/jN4V2ie+KPse5jPWK0IzvWeUSuYf6z8TRqms7681X283cx/0zJI9ZB0aAwDQXy+NRko7aujpwu2ZyKMfIuxxPfEFbrtqfQ==c[�U^    WPWe1ue+Be8pcpoEHHNMJJw06TnfvzuOff8Ts89KYajhhkM0kFY3puCPC8Lh6V8ymDAMcyIw3UBrC/LhQPwaR8mdgG/jaG1ciYLj6Zf9j27XGjEnbiZ9dIB2jxMs30M62J9THBAGcCdWHl7FQKXTkGeL6MQ6MXz/gFc2Q/w03CxopVTu2BhngNCtBiOcdLROUjHOTnzC64kOIzrNaKm2F2W1K4R54yXw2gFOz5C4xxcyaDeKBvyBYfR2xcY8dMPi3tLxc0TKfVBPdWjUn7OQ7Munx8v5T+qY8pkZg9GoqV8DE17faMsExpX5kFiBvDHaPhPeBrspMTcd/F8txheBny2mEqCfJjDMBydVkiC1bS0cyb+jqOjYk6nE8cmMMXkB2/fMewT1RZV7sVf4Wazapaqv7xQaRMV6S+07GeHz3MFVt8Wyq4KnXUhQVeA1oIAn5FmI2DmsD7U7XUFh2nHCB1y00H2Cq61q0oR/Z7VqnhsMZFkx3X7V+lg/ExIC6OHKIoaUmUNarLSm+zU4SYrSehw09y5PJ9pno+MhMlm/XcfkR6Xx0be7KOyNNhZFXlqrFciz2xWI70dcvVD7jojgzTr8AVf+5kxHQZ22whTFyXmZptsJEpb7jcOP0pfFb5rVNWaXYUfDwwxfq0FFEFYLPZ6hlc5qJb6zJz0OS3FTuXtaGO8ksG1eE9j0G1DpyFDVpPd3nGTPn0s1X6hdfjTwwyBGtWjhxkx97O4OoMesLp1/5khyFZjBn0zZA+phxlYWJMjBTj1RRQ27zszlMlCtRozXQRhs1O6mDnJwuNTkN2V9uN6mPHeITMWk9V2t8xoRgbbNVvjmu2/FxkEqoLEM6EFSwx0j5E2St9FdggSG4h4MZe67+mSNBFEC5YY3YRNX7r8Co82imuzIBppM9Oc4q/brvMikxJxKbkhxb61mWkKM10WXdkMLMRgehkuLom5tTYzty0x1F8e2KTy0w3D4I8tWUiIBUFK7vd7mbGnjLuUn7oAAePZVw==c[�+O    3123xAkfoiBAX0vYewkUS5nNL+cNDYHBkiCcJBG9hDm1vR8Gb061KoftVpNq37WmkWUrKDsB5h7T2CqUTlE+7MP7t7q8Bykj4y5nLSTplSFlylBnJQUH9GexsKitR+wkWvDMfrO7Xv3STMRzM2i1e7ssPmiVazrG3V4tEoQJOY287DwRi/VtONFTCR8Ph9JTBPmAq5FVQlcVwALVMV6HyfpQVvI1HAa6IBVjuOVDtoODbCAPYVa2W0z8HJM4PjT8EOKQlsZmC5aJemCzWe658umJNCrg7Er+B0usmG+l6BVE2ij1kqtGLPFi7kCJ4m9XCqi+kMCRwlhNsgr7e3xep+Kj4POiBj8QzIRyH0lxDKMuSO9UNELr08aS3DvDVr/rhdWUHZXq9ZhugDTZbi8gkMotwwXMrA6B/cTsDSv1bJocQFmUubghxx2Fl7Lz8TsxQo4IPTXwkUzow6acbiGSMY97nKN0/TFOcL2HKIaCp0H7PUScwFMBl5smW5Sxj3EjLg9ozR9HocXA/0M15jHM0zTPYSZwSv5yfW3fkLfyzC5BUu7sPrqn/jpOQgoV/IT1oDPP8rsWR4yfbO8BSt1rZo2RabL2G3G8Rxs1NB2E26vY4Cen28lFmCqhjYPMEZfKPzxVFzKRp7/x0bdr0eD/bfZFCvzXvvVOE1RWv29vvzyjAvNwkRlTgr0lW8KgIgyTlHmYgXOOSnICogLSkAKOzmRshgU4BXgZYZGPLTHNeqhh85zSKfAgih4wbMIfwlz2xejyqFeRqRrTAd+E8ENjJi4umA2HMHOjQmAlydssfY4J0lPBH7CM+yWGHdUHfP7QdD9RB1lQGxYDMWkaMQPom63pYs445hbEazVy0nhCCsK/cftVHc8Hnf6WSGgOjGwcxIp7ahpNuqlFMysE9bOz5g9st07YSmFvpY7XR0VDmBp02qnrfyGUamYm/42iZuzvrXY2llrFb/pm/P2kPVjQBAE+vTOaGatue5NSfGbEnfSSP4CWofzhQ==c[s��                                                                                                                                                                                                                                                                         �nS !	C�u#dengxiaowu	判断股票池是否订阅eNp1UltvEkEUfu78inkySjqleHnBV40vJhqpz0IXmm5S2dpdgolrAmgDlshiQgmypOlli8TYrmiV1t2yP0ZmZveJv+BhB0hj9LzM+b4z5/blIAyGIhF+WvC7RWYYvvd17LYjEYwQwbRiseaJXzrgxz3W32ctm9a7/ulh0NpmtWNqHCFI9e0B65eePnk4zSM4idc1bVONR6P5l0tr8paq5WU1rTxfkrLRRGYjI2lRWU3kVlVpS17N4CQKRxB1WPOCukZYCio9fpRYwTp+cH9l0okaJbY7H08XkNbf69TbDgrvdN536F5V9+0z1qrpSI8TsMmCoScgwTqZ0vBjU1E2nslprMNqQMhZDevzdUU5aBcjQfkD0L8LxZuE7RRYx2a1FnDXR+cO3TEDc+APhzcgfIvwNye8dOF7l7TsAHGbcMel9Qq4dwj72aPFDrU+0fNK2B9hWNtrUHOPW79GwyrsjJLJJEaToV+hhWsvcop2N53SUsKLL0djizNazq4pU1o8ak6SMqoqwPybqqW0nDrLRwuvwxZXWgsZhWh/C/tPRclUUJB0JuX/DFIm0wtlAcZATTr4xh1DXNHYNZeBYp3PAs9EoVaZfe9Nr5CZZ9Rqi2GDxkfftkfOEd8vwsHwTjXoNoODH7z99mpIHDJCiH059L3a6NLjjV5iXcnfU6SxW/wDQx5nTQ==cZ���    7b2A8lR+KqsVSFDMD2lgELUjMQUtJMHi3HFUL/AuYRCKe0MbpbdpR4ZMrTCHIjxCnmoX6AVOKfi0YAcFkO9+C329QeFy+bGjLn8FaWfklNdKWqTfkH2iUG6qD0jMmtS3YBj0aIWw9MBcUCWwkPWPEiMg+QnLP4RGQVraT33Xs+vm5FZkMya6RTQIgpF0fi0hRTILKK1Pf17HB+V8nq9NPWEsky+9PCRJF8jtpB+O32XdjqJWUR/aaHVnpR7v6AlP3eJ/kMwebt4D+k01YSEfH1CNQgkVTQxBsa3a0N7Ar5Qr9DVL4R7hJB8CK+2q0KR8FiuVnHV5eC4huP2r9AhBaVwNUzo5nm+m/SrUMPl0XCTDTc1c6wNN03mjSn17HzEsA5389/7iPP7/G7uzz4q9e41VUQeifVy5DmdJNLrIVc75I4zMiTIXWLoflAatGFgq5t1tPB6buKMjcTXVs+DriC+vsp8H1F11OwK/FBftxSstoBnWZfLU8vwCgcdpV6dRC8WUWzXWI2ejLdu8Gq8/2TQaUPnRIaaHR5Pw5/02WPp6Bdagz87zLC48W12mNFzH83MOH5AZuX8M8NyF40Z/M1wbZwdZuD+gjG2D0de6oXl884M73DxF42ZFpZ1e3hbzHzNwk+7ILuONuN2mAn8R2Zcjmb3/2WmSnKvnrOdnLP98ySDxVmQvle4gCkG/o9xbt7ej2wbJJYw8Xoufd6vS87BshcwxWhl3fauy3m4s2QuTIDoWJ2Zs0n+Wj02f2QoEUepJRR7V2fmTJhpcdm6zcB0DC7Owlczem6hzsxpUwxS8qCGraJbRTGOFBVJCfH3MuOx9UXmoLzIMOXCYq2GIb1h6VG/6KcVMSRbEpTahM+yKP9U9Be1Sa6opY1vUbT3Fm0to+lx8GKuqGVcWArnt8xImqy2NrIMBmsT8PPmYQU28wWspckZzNS8oap6fhW9GTHULFqIl4uZlVOkiEtRFPywYhQS+n4B7387IA1el3qK2shP+QBaYA==c[�*�  �&quot;color&quot;: &quot;eb333b&quot;
                }
            },
            {
                &quot;name&quot;: &quot;季&quot;,
                &quot;value&quot;: {
                    &quot;text&quot;: &quot;+1.3%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                }
            },
            {
                &quot;name&quot;: &quot;年&quot;,
                &quot;value&quot;: {
                    &quot;text&quot;: &quot;+1.3%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                }
            }
        ],
        &quot;d_stocks&quot;: [ //d点金股
            {
                &quot;symbol&quot;: &quot;601028&quot;,
                &quot;name&quot;: &quot;玉龙股份&quot;,
                &quot;type&quot;: &quot;d&quot;,
                &quot;return_rate&quot;: {
                    &quot;text&quot;: &quot;+13.00%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                }
            },
            {
            ewcTM7AZFE+zcCTtDYNxF+B6DnYLYDchCS+uyzPSaU0WBCVtQh4PQdFEe2V0KtzGApLYlESS3gvYmkgmdG2DVqPKJtbQBTl/QjYfYsi51gvFgKnF8D0SywKLR2jybyGVfsTWUkMof15KEbhafifUFj5OwGXp7EcefICFhfkswj+xqrB3ArIp0FsG66sGTv/u8pvqytua3F52X6apvvvW16vu3XN1hY1D1Sf+zS73GzLiukHDWkfww3Xu01aLDD2GmdEAyX8KKdT0XyPMR5dwFuvo/1eWxxcYKQRe53tLBa5sogjTRL/gkk1ujRT4UEKZ3HjnOZx+2vU/aQ6d54BhSiYXpVTmQazG3mvS0O3kukoyw4bOX6D+ZXxBJos6H3Z6wur2TibdhbjNa4besafdOj6CM8JQ5+o736W8fPcJ+r8GMv4/ueu195+vpV9HX6Bdw776/OEC00UlKlFeSLVEmNGf/FPKStl672btdtMo9iM8n4N65VKF3djhTGvDuu6G+BjhYCPc/gYoeOFos0U9Vii1IhzfKrqsdna5RwWVsD8KogvgtzyY+PcZO3pmHPDI8BH4NzW/SXVLucgl5PEJNjJ4Gh/dJzb/hPKm2ekATfHcE5Wn5csFpC+ANEDEBdxgkDpzAfkJsreS7e9T87y8LiAD/AoM3s31u/kfTowZbbfo/DKa93Zz2zXGvjsltjGnwcMW9rePgWbR2hxq5X0bEwB9SEUPGCW7LW3nSXR9gm+vuGbJtw56sD17p5OXDdy/GbfEHVEaDPd3ACvO7cFnE7W769XfjUgMEKgtrkoYlwtzdSVbLTikFYK0peLDOtEpqsykclUKxA1ezBk0McHvGrdSK0Y4R60lIHTeVSKuF34Sm29LK/L51FU3EeHKbTwEiwmLssbNtwL1w6V0Lo2u1pkwgaD3Sl4krmuom2cgt11zQdlaU3OZqXSG/RnWM7mUXJW2VtRUmfqDb9uSCvEEQQBD3bkSky6qGD5z4f40a9552U5/C9ZczZcc[�VQ  �uot;text&quot;: 2,
            &quot;color&quot;: &quot;eb333b&quot;
        },
        &quot;ping&quot;: {
            &quot;text&quot;: 1,
            &quot;color&quot;: &quot;ffffff&quot;
        },
        &quot;die&quot;: {
            &quot;text&quot;: 13,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        &quot;ranking&quot;: { //排名
            &quot;own&quot;: &quot;1&quot;,
            &quot;all&quot;: &quot;123&quot;
        },
        &quot;ranking_num&quot;: &quot;2&quot;,//近一个月的排名次数
        &quot;change_list&quot;: [ //涨幅列表
            {
                &quot;name&quot;: &quot;周&quot;,
                &quot;value&quot;: {
                    &quot;text&quot;: &quot;+1.3%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                }
            },
            {
                &quot;name&quot;: &quot;月&quot;,
                &quot;value&quot;: {
                    &quot;text&quot;: &quot;+1.3%&quot;,
                      �
- ` /theme/getThemeInfo `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|theme_id |是  |int |id   |


 **返回示例**

``` 
{
    &quot;data&quot;: {
        &quot;theme_id&quot;: &quot;432&quot;,
        &quot;theme_name&quot;: &quot;页岩气&quot;,
        &quot;change_percent&quot;: {
            &quot;text&quot;: &quot;-0.83%&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        &quot;net_inflow&quot;: {
            &quot;text&quot;: &quot;-0.15亿&quot;,
            &quot;color&quot;: &quot;1dad51&quot;
        },
        &quot;top_change&quot;: &quot;10.06&quot;,
        &quot;top_symbol&quot;: &quot;300023&quot;,
        &quot;descrip&quot;: &quot;页岩气是指赋存于富有机质泥页岩及其夹层中，以吸附和游离状态为主要存在方式的非常规天然气，成分以甲烷为主，是一种清洁、高效的能源资源和化工原料&quot;,
        &quot;zhang&quot;: {
            &q     �             �kO !	%�`dengxiaowu板块轮动eNrtWltPE0EUfp9fsS8aRdrudmkp+OqjicbLkyG0tCttLF2kS5S4JIUKWIEWDTfLLVyDRimghALF/hh3ZrdP/QvO7kDtWraFVQw1O2myM7NzZs6c75s5Z08KKFxAQ4O8FVM2BlAqpeS3i7l0QwMFgI1CC3m4MKMcb8G3myi5DlOrAI9VMvtoZ/Dxg7snA22Ul3IIQa6Lc3RywgNe8AkhPvJI7aC8QJueiKDpA5hLaVJY6P69h48odT6YGkRTpVVF0oQT4yLMDxViCVHeOYKLo6KS+YZmkyIQW224qHprNdK0UaLtpBuPEPq6OUpEsxncigo9oUgnf  ��gN !	%�adengxiaowu板块详情eNrlWFtTIkcUfp9fMS/Jg1lgYGQ1m9e8pCpVSWU3T6kUjjAqJc4QGGJMsAoUVl0VdMsLKmpwRdnEFfHGcHH5MZnunnnyL6SHUYRxUGDdlKmdoqCnu79z+fr0ofsQJH6Iri50GJL3wjAelytHl+X1ri6SIEwk3KyAzVU5uwcnozCWBvE3BJ4rZ/MwN/HjD99eTTSRfaRFGGJHWMsgK7xQG99wAzzZR1RFa9PhSgGU41UEBnz/3fMXpCoLxCfgck1jUHsFC/NBUIkqoZkgypXA1mxQzp7CRCxIBJ+Z8KPaXG1pryYyaLrqxjOqhjjcLjIIE1nc4+YE/OWqDhIEie2pLIGNLbRblN7PYmOIvr4+kviDUIV+/kuAF75yMQKjtZ6RWv/N2LX063Htt5u2aY0nhtM5ZoRtBCipM3D8Fh4tGcOcQww3yDq8rM/JcsJtW+oUsL8JjaJNlLmX/kwvt0427+F9jRCri3HZrVq7hhjXG8WxgsPNDXj40bYNstqlYuUjmCTwXofGlQ5NmamnTVYEQ/xjI/28pxFCUxRlo40xLtbv9Lm9TZYQhxmcm5LPZsG7hFSMg  �    cC7pFSKg9w8TM3BVEk+zcKTjDYNJF6C6DnYLYL8lCS+u6zMS+UMWBSV9Qh4NQ9FEe2V0ctzGApLYkkSy3gvYmkgldW2DdqIKFvbQBTl/QjYfYsi51gvFgJnF8HsCywKLR+j6YKGVfuTOUkMof0FKEbhafjvUFj5KwlXZrEcefoClhblswh+Y9VgfhUUMiD+Gq6uGzv/m8pvuytua3N52UGapgfvW16vu33N1jY1D9We+zS73Gzbiul/NaR9DDfa6DZpscD4K5wRDZTw45xORes9xnh0AW+9jvZ7bXFwgbFm7HW2s1jk6hKONEn8E6bU6NJMhQdpnMWNc5rH7a9T91x17jwLilEwuyans01mN/PekIZuJdNxlh01cvwG8wvjCbRY0Puy1xdWs3E27S7G61w39Uw+6tL1MZ4TRj5R3/0s4+e5T9T5CZbx/c9dr3/9dCv7OvwC7xz1N+YJF5oqKjNL8lS6LcaM/uIfU1bK1n83a7eZRvE55f061iuVL+7GChNeHdZ1N8DHCgEf5/AxQtcLRZsp6qFEqRHn+FTVZ7N1yjksroKFNZBYAvmVh8a5ydrXNeeGR4CPwLmt90uqU85BPi+JKbCTxdH+4Di3/SeUt85IQ26O4ZysPi9ZLCBzAaIHICHiBIEy2Q/ITZS9n+54n5wV4HERH+BRNnY31u/kfTowZbbfo/DKa93Zz2w3YPPDwpW2d+761hFa2m4nLRu7Tj0M16l+e8fZEb0+wdc2fMOEO0dduN7b143rRo7f7BeigQhtppsb4nXntYDTyfr9jcqvBgRGCNQ3FUVMqiWZhlKNVhTSSkD6MpFhfch0VR4ymeqFoVYPhgz7+IBXrReplSLcg5azcLaAyhG3C1+lrZeVDfk8ikr76DCNFl+ApeRlZdOGe+H6oRLa0GbXikvYYLA7A0+y19WzzVOwu6H5oCyvy7mcVH6D/gjLuQJKxZS9VSV9pt7sG4a0AhxBEPBgR67GpYsqlv90hB//mndeVsL/AI8BMcQ=c[�U�    �                                                                                                                                                                                                                                                                                �oM !	%�`dengxiaowu板块轮动eNrtWN1P2lAUf+9f0ReXjQm0FBTd6x6XbFH3tBhA6IQMqMMuzlgTlKFjKHULfgwV42fcsomaGVBh/  ��_L !	%�uadengxiaowu板块详情eNrlWFtTIkcUfp9fMS/Jg1lgYGQ1m9e8pCpVSWU3T1spHGFUSpwhMMSYYBUorLoo6JYXVHSDK8omrog3hovLj8l098yTfyE9jCKMgwKbTZnaeRh6uvs7l69PH7oPQeKH6OlBhyF5LwwTCbl6dFnZ6OkhCcJEwq0q2FqTc3twOgrjGZB4Q+C5cq4A81M//vDt1UQTOUBahBF2jLUMs8IztfENN8STA0RNtDYdrhZBJVFDYMD33z19RqqyQGIKrtQ1BrVPsLgQBNWoEpoLonwZbMeCcu4UJuNBIvjEhB/V5lpL+zSRQdNVN55RM8ThdpFBmMzhHjcn4JerNkgQJLanugw2t9FuSXofw8YQAwMDJPE7oQr9/OcAL3zlYgRGaz0htf6bsWvp1+Paby9t0xqPDKdzzBjbDFDSZ+D4LTxaNoY5RxhumHV4WZ+T5YTbtjQoYH8VmkWbKHM//ZleboNs3sP7miFWF+OyW7V2HTGpN4pjBYebG/Lw4x0bZLVLpepHMEngvQ6NKx2aMlOPW6wIhvgnxgZ5TzOEpijKRhtjXKzf6XN7WywhDjM4PyOfx  �  �   &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+1.00%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
                {
                    &quot;symbol&quot;: &quot;000705&quot;,
                    &quot;name&quot;: &quot;浙江震元&quot;,
                    &quot;type&quot;: &quot;d&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+1.00%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
                {
                    &quot;symbol&quot;: &quot;000078&quot;,
                    &quot;name&quot;: &quot;海王生物&quot;,
                    &quot;type&quot;: &quot;d&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+1.00%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
      oa6usPcjcLGdGF5T06/Jru6WcyNBTjBFwpTxdwb0qe+zGyg+FAxl8Cvg6GowPf0qe9hchimdnH3j9ggXEtL2U/S0XohNgNT+4X0JMzFRAAovNv8JJxblNcOpe+jeKvA6/VS4BVQVb7+vJcXbhNdSL2VekI5HEQtsr42UC2vSrVfopqd20OBU2HydLIeUmk0FIn4uji9EExl5JE4HN42FvUHfZFOrr2b6/FzEeFUXK9X2ULcS0G/xC2nnWGunTV/2Rp8mO/Ri3EdLMt2kLpOqr/U6m80YaYmhjZhprEjZTxzeTay0XZX08VtxAR8ARdT3UZara2xjHmE6yXmORyE6RbljCl3lpIRTmgPRZ6G+RcmFGx20XY3K2VHLllJfG35n7WH8fVVwrtiqUq1y+T7ujr4sF4DlqadTo+R4mUGqoQ+Mya/W5QTB8rqUG159QbXywdqC52XOjURarJ7PNeqrWcOpcoTaoCfGWRoXNgWM8hI2S+FuWH8g3MrVx8Zmqk3ZPCZYVoYM8ig43klfowG3kv55auODGt3svWGjJumXR7WFDJ7+2j3AO6vy5ujZpAJ/kNknPYm179FRtfTZsVstWO2vx5k0DgKkg7zdRhiYD/GuFhzjmwbJpcw8FI2fdWvS8ZO03UYYjTTLnPX5Qe0s1SYH4FDcQuZywn+mj0mHZmcHJUnl+TERwuZS0HG7TR1m8GJBFqcQVPTUnbeQua8IQZJeYB+4HCQbB18M6Msazk9LSunz8MJPqE3eqoMXZ4owY6X12sZ7fX7uWi0fJcnhvYJvkrbncR5JHl4tnc0cud4wt+wxA7R3ez2YDJVd+jVPbExf2sFYQxzPnBN5X2MpiHsrM3KGh+MtWPfPyOnwUVxVqBUkUPTyvlsQmaoNK289BWOTaP5Q7SyfZGZ6sm64AI2twhuEfw/IXhFb1u1L7KLeRO3h3Fb3sQ6bNZhs7yJRXDLm5S9J/39+BtK/ecCAOjzipJPSsd5eXLzYZB/cYf3F3MDPwHYYCyMc[�]�  �quot;: &quot;海油工程&quot;,
                    &quot;type&quot;: &quot;h&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+2.45%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                }
            ]
        },
        {
            &quot;theme_id&quot;: &quot;410&quot;,
            &quot;theme_name&quot;: &quot;医药&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-0.54%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            },
            &quot;net_inflow&quot;: {
                &quot;text&quot;: &quot;+0.11亿&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;stock_list&quot;: [
                {
                    &quot;symbol&quot;: &quot;000153&quot;,
                    &quot;name&quot;: &quot;丰原药业&quot;,
                    &quot;type&quot;: &quot;d&quot;,
                   �            &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
                {
                    &quot;symbol&quot;: &quot;000039&quot;,
                    &quot;name&quot;: &quot;中集集团&quot;,
                    &quot;type&quot;: &quot;d&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+4.01%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
                {
                    &quot;symbol&quot;: &quot;300191&quot;,
                    &quot;name&quot;: &quot;潜能恒信&quot;,
                    &quot;type&quot;: &quot;d&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+3.23%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
                {
                    &quot;symbol&quot;: &quot;600583&quot;,
                    &quot;name&  �          &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;-0.54%&quot;,
                &quot;color&quot;: &quot;1dad51&quot;
            }
        }
    ],
    &quot;detail&quot;: [//详情
        {
            &quot;theme_id&quot;: &quot;238&quot;,
            &quot;theme_name&quot;: &quot;可燃冰&quot;,
            &quot;change_percent&quot;: {
                &quot;text&quot;: &quot;+2.11%&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;net_inflow&quot;: {
                &quot;text&quot;: &quot;+750.63万&quot;,
                &quot;color&quot;: &quot;eb333b&quot;
            },
            &quot;stock_list&quot;: [
                {
                    &quot;symbol&quot;: &quot;300228&quot;,
                    &quot;name&quot;: &quot;富瑞特装&quot;,
                    &quot;type&quot;: &quot;d&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+4.88%&quot;,
                �  �                                                                                                                                                                         �JT !	C�-:dengxiaowu服务付费和订阅接口eNrFVE1vElEU3b9fMSsXpBMoiZu67cbERGN1ZYxQQJ2FoMDootMESJEKLVBDG75SpUXKQqGNyNdQ5s/M+5gVf8E382aaIQ4k0kVfMpk795577rtnkgM4eoDLhTsJ0kqiQoEol7NJ1eXiAOA5VD+E2YYql0lvBL8ekM6ZVk6j/A9YOAe0iXQH6Cr1/Okjs4PnfJxbjIWibvp8FAKhGOcDBj1DopMRnBQMMMU+ebz1jNNpYCGFjq2pUElrDRlXZHh9DCRWgsVDSc8nvkj4SoanOYl0e6icl4C0wdOj72BE7JPnJN5MSwAAjo5XSrB2iptjdZqjs4HP5+PADtD77n0QI/EHsbg/LsZYvMF51mwlIfw6YhVMsBigq5loOzToj/st6Asjr5+dm8g2j+nzSgjOU6+bpG43k570fqmjy4ebThTidiwQFbaXkbAf5tge9r8LzbepwwSqjLXMEUk17Ls533xeMefbo3IXFltEyaD6t6UbOJF52MtaAmf7KJG8YdldW0lf75LFFup5f3HTvyqifhsm67B5AYf7t1NxVcVuq5FnFY28/6OROpRhtqbVBmQ6vWuNjOgl2NU9weYVzHiYzRhmaLMiRw/iTQuiJmSZz6JDW95EI+J7IchJQjiuZ3CpjfYHWN4TgrPJwTr1QtJP4/EF7jRw8TM8Ks8mNS/NokpHS1QZ2nA3emHYzKDfbcuxaz3YrLIdtFKFdLuqfI6/J6kB43pOa51ojT+4umcvMdOnRol+nhElr14rlH/rbeTTZiQwmyT/AlmuVRM=c[N�  �- ` /user/services `
  
**请求方式：**
- POST 

**参数：** 
必须登录
|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;service_id&quot;: &quot;1&quot;,
            &quot;subscribe_id&quot;: &quot;1&quot;,
            &quot;name&quot;: &quot;一智金股&quot;,
            &quot;service_status&quot;: &quot;0&quot;,
            &quot;subscribe_status&quot;: &quot;0&quot;
        },
        {
            &quot;service_id&quot;: &quot;2&quot;,
            &quot;subscribe_id&quot;: &quot;5&quot;,
            &quot;name&quot;: &quot;涨停大师&quot;,
            &quot;service_status&quot;: &quot;1&quot;,
            &quot;subscribe_status&quot;: &quot;1&quot;
        },
        {
            &quot;service_id&quot;: &quot;0&quot;,
            &quot;subscribe_id&quot;: &quot;2&quot;,
            &quot;name&quot;: &quot;主力雷达&quo    �  �                                                                                                                                                                                                                         �R !	+�e"dengxiaowu	股票池订阅eNp1U1Fv0lAUfvb+ivvkA7Fjm/qCrxpfTDQyn4wRVphrMinSNphYE8AhbChlCRIGZBkb23hQKnHCtnbwY+Te2z7xFzxwCxKj96XnfP36nXO+c4swHOTzsU7KOU1Tw3CG38d2zefDCAnYyTTZSZt2D53OkVvN0uIJMY4R0B2zT7uZZ08feVwBh/CmqsaVgN+ffLu0ISUUNSkpEfn1khjzB6NbUVH1a/FIWI0q2roiJqT1KA6haWmuRSuXxDamcqD25HFwDev44YO1STViZOiXeVs6T0nps06GWTe1o7OuRQ4KumOe02pRR3pAgDMZbBrxVMC64MHAiMvy1kspgnVaNQGQYirW58NyOSi3Iri5PYB/pdKrAt1N0YZJi1XAxnZ+dGGR3bpb7zuDwdjeAcptgX34xjKXzvCa5CwA7gjMskkpD+FdgfbaJN0grTNykec9/DFisQu8MrY/cbshwMuYGBXay3NkOhNCGEwblkn9gLWuRoMCOIZCoRBG79CNm280Wb0HPod5FHj+4tYMlWIbsofyh6KJYlRReDKnKWpY1TwwsIzeT7QXanL3udd/7+OfixC8PcAmZhv434FPXiVkLT7ZzMQNQFi5TfN9Zm1LEfADzKk5vSy7OmOdJit9JHvVsV1fBZTud9xUjbNnJpFWjv5oe3eZ1s9Jq8ZncMv7jmmOrGN2mIbrxxoF97TiNn+y2vbiK/47IITo1yNnWBxdD0E/uCkn78vi2E7/Bidbj5c=cZ���    t;,
            &quot;service_status&quot;: &quot;1&quot;,
            &quot;subscribe_status&quot;: &quot;1&quot;
        },
        {
            &quot;service_id&quot;: &quot;0&quot;,
            &quot;subscribe_id&quot;: &quot;6&quot;,
            &quot;name&quot;: &quot;策略收益通知&quot;,
            &quot;service_status&quot;: &quot;1&quot;,
            &quot;subscribe_status&quot;: &quot;0&quot;
        },
        {
            &quot;service_id&quot;: &quot;0&quot;,
            &quot;subscribe_id&quot;: &quot;7&quot;,
            &quot;name&quot;: &quot;版本更新功能介绍&quot;,
            &quot;service_status&quot;: &quot;1&quot;,
            &quot;subscribe_status&quot;: &quot;0&quot;
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[���  �        &quot;symbol&quot;: &quot;000722&quot;,
                &quot;name&quot;: &quot;湖南发展&quot;,
                &quot;type&quot;: &quot;d&quot;,
                &quot;return_rate&quot;: {
                    &quot;text&quot;: &quot;-17.00%&quot;,
                    &quot;color&quot;: &quot;1dad51&quot;
                }
            },
            {
                &quot;symbol&quot;: &quot;002490&quot;,
                &quot;name&quot;: &quot;山东墨龙&quot;,
                &quot;type&quot;: &quot;d&quot;,
                &quot;return_rate&quot;: {
                    &quot;text&quot;: &quot;-2.00%&quot;,
                    &quot;color&quot;: &quot;1dad51&quot;
                }
            }
        ],
        &quot;finance_stocks&quot;: [//好公司股票
            {
                &quot;symbol&quot;: &quot;600583&quot;,
                &quot;name&quot;: &quot;海油工程&quot;,
                &quot;score&quot;: &quot;0.53&quot;,
                &quot;finance&quot;: &quot;2.5&quot    ;//星星
            },
            {
                &quot;symbol&quot;: &quot;002353&quot;,
                &quot;name&quot;: &quot;杰瑞股份&quot;,
                &quot;score&quot;: &quot;0.50&quot;,
                &quot;finance&quot;: &quot;2.5&quot;
            },
            {
                &quot;symbol&quot;: &quot;000852&quot;,
                &quot;name&quot;: &quot;石化机械&quot;,
                &quot;score&quot;: &quot;0.47&quot;,
                &quot;finance&quot;: &quot;2&quot;
            }
        ]
    },
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�k�                                                                                                                             �              {
                    &quot;symbol&quot;: &quot;000623&quot;,
                    &quot;name&quot;: &quot;吉林敖东&quot;,
                    &quot;type&quot;: &quot;d&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+1.00%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                }
            ]
        }
    ]
}
//历史列表的返回
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;history&quot;: [
            {
                &quot;date&quot;: &quot;1536768000&quot;,
                &quot;list&quot;: [
                    {
                        &quot;theme_id&quot;: &quot;11&quot;,
                        &quot;theme_name&quot;: &quot;可燃冰&quot;,
                        &quot;theme_change&quot;: {
                            &quot;text&quot;: &quot;+4.5%&quot;,
                            &quot;color&quot;: &qu  �ot;eb333b&quot;
                        },
                        &quot;stock_id&quot;: &quot;222222&quot;,
                        &quot;stock_name&quot;: &quot;石化机械&quot;,
                        &quot;stock_change&quot;: {
                            &quot;text&quot;: &quot;+4.5%&quot;,
                            &quot;color&quot;: &quot;eb333b&quot;
                        }
                    },
                    {
                        &quot;theme_id&quot;: &quot;11&quot;,
                        &quot;theme_name&quot;: &quot;可燃冰&quot;,
                        &quot;theme_change&quot;: {
                            &quot;text&quot;: &quot;+4.5%&quot;,
                            &quot;color&quot;: &quot;eb333b&quot;
                        },
                        &quot;stock_id&quot;: &quot;222222&quot;,
                        &quot;stock_name&quot;: &quot;石化机械&quot;,
                        &quot;stock_change&quot;: {
                            &quot;text&quot;: &q  �uot;+4.5%&quot;,
                            &quot;color&quot;: &quot;eb333b&quot;
                        }
                    }
                ]
            },
            {
                &quot;date&quot;: &quot;1536681600&quot;,
                &quot;list&quot;: [
                    {
                        &quot;theme_id&quot;: &quot;11&quot;,
                        &quot;theme_name&quot;: &quot;可燃冰&quot;,
                        &quot;theme_change&quot;: {
                            &quot;text&quot;: &quot;+4.5%&quot;,
                            &quot;color&quot;: &quot;eb333b&quot;
                        },
                        &quot;stock_id&quot;: &quot;222222&quot;,
                        &quot;stock_name&quot;: &quot;石化机械&quot;,
                        &quot;stock_change&quot;: {
                            &quot;text&quot;: &quot;+4.5%&quot;,
                            &quot;color&quot;: &quot;eb333b&quot;
                        }
                    },
                        {
                        &quot;theme_id&quot;: &quot;11&quot;,
                        &quot;theme_name&quot;: &quot;可燃冰&quot;,
                        &quot;theme_change&quot;: {
                            &quot;text&quot;: &quot;+4.5%&quot;,
                            &quot;color&quot;: &quot;eb333b&quot;
                        },
                        &quot;stock_id&quot;: &quot;222222&quot;,
                        &quot;stock_name&quot;: &quot;石化机械&quot;,
                        &quot;stock_change&quot;: {
                            &quot;text&quot;: &quot;+4.5%&quot;,
                            &quot;color&quot;: &quot;eb333b&quot;
                        }
                    }
                ]
            }
        ]
    }
}

获取介绍页：
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;explain&quot;: &quot;https://wxtest.firstwisdom.cn/plate-intro.html&quot;
    }
}

```

欢迎使用ShowDoc！c[���                &quot;mini_type&quot;: &quot;2&quot;
            }
        ]
    }
}
// type=extend 返回
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;代理商模式&quot;,
            &quot;url&quot;: &quot;/pages/user-agent?url=test_13760628603.png&amp;inviter=13760628603&amp;cookie=miu3trjvj6n16a0l4vr8c7sbhasom6in&quot;,
            &quot;desc&quot;: &quot;&quot;
        },
        {
            &quot;name&quot;: &quot;收益通知预览&quot;,
            &quot;url&quot;: &quot;/pages/user-admin?cookie=miu3trjvj6n16a0l4vr8c7sbhasom6in&quot;,
            &quot;desc&quot;: &quot;9月10号收益通知预览&quot;
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[��\                                                                                                                                                                                                                                                                      �qZ !	1�bdengxiaowu版本更新历史eNp1U8tO20AU3c9XzKqLCCcOG1J3202lSq1KYVNVtRscYonYrmfSIGEkQl/QiJhFmtIQUSgBsUA4FCoKCc3PeMbOil/o2GPSQMnIku/ce859D4DsgETCP1oK9svUcYJe+6rbSCQgAAL0V1do85BuntJ6m1Q/Eucnre4RZxcwRuCe0ePlqWePY7gAZZjH2ERSKlWaxyrCyZxmIVzS0IxRSGb1lGKaqVkVT5kzClYf6TkDyiAKzl3R+jnpOpE35uzpk8nnMIxDnGX6ZZCTza9kfc0mvQ/9pVXbP+6QrYoduKd0o2oDWxLYCauKJH4VoC3EaoYw5xScM6wCtOmGyzQIW5o+C21yfkKcNsewXKdVC2mGfhsVN4U4Z1EQACAroFcjm1t+68L7U2HZA1mWIVgAIeDem6KBH7CKFS5J8EWkD8/CQPqHfMujXoP5P53MJNNcHLuDo+nYMu5gxONz1r2LFjnaodu/R/vIYq2g3vQxLqYzgsi+CZgWJfG+NC6O5pvF13Mayr/6342Yoc0VcYJ+3RvNxuo8vsmajioI9+7z9+Ddpdep+J01bhrwFyPp5RgYbkXuVidQMZtVERqOHRuwgovoGiyCxXBs0ThJ6xM9OYjfANt+0mrwCfdr3wLX9Tq7/naZLa3frPT36/2dX37j/bCJPyMAAD38EfSq3mXPrx1M5o3SQyN71S3/BT/ZYGs=c[���    txDTl/nZ79Fw9IXPo/kYSMX+smQ6+3hYHRlKS098PcthckRBiH/4nxQXJgPRYN9O9YLrPsXn5sZjM7kWkaBoH84kg0Lczx28IIDYacLYxceGXsYxhKf9bRe0PZOtJ22fJ7vtVMz2O502nvt9XfxBD1tkGaDlBJqcRVUGNumBQdTkVpNPeoqK8dkM2d44dlpbKq20iSzoe3UB4CzTieolGKLPD5SkwfKUYnWoIwFLb9KXjRBIrc6hqWABZsZOlclO5s0tc3iYiwwuZLPafG8UnxC/4gzld0uXMW9LCvZU/J2m6Vkn+mntF1Ru6/V8qVaPgCVHWMHxmZKa81BSu/iyds3UJQ8UlQc3kPMuhtey0OSu4PZ8uTY5LONST78vyEc3CNQQlLoqCvrjB8Oh7Nfp3VyWASt3O3XyTkLKuCNFl//+DoJn65O9v+sTgHftUUKc7Mzt++PfhXPj/C93dO6bNbbx3B6P5sEJACVnK5xYotLwZ/Dv16LjvG0c2YcRoS9v9zgItwlJFVQLy8/gMpfKskLoCrJNFAM4TnjSGBkBWUshvR0Fq81lXRVvqgCnZnXWET2BcZ4YD4B943R3UnL8xkI3QsPg4pRr9cvitaMRmWAuWX9MbY80uxRVyt1upc2fhwxJiHbWzGl1iLPN2JMGeNiLl5vCJmDmDl9bwMXnaIoFghJ+lSfuBD7xDBsJPDa2hO4T5CNp2clktiHa4ecp5Cd/+FzjKZ5cphX/moaUJYzPECk+6/VSoshQtJWOxTzRCIetKSbmSL4usBzxqz726sfB13OflbNopJ9QXfPtN1638D0M/Rk9TEpX/Q1bGtBiXmWB6yGNP6GwcDCOCQuxC5MufVKeZlA8JWTm2lYHsNUGydq580VJhwNgDRdoApKsdpX+gK6hhcQOJOt3BXnkSECQltEMaPI5HCNnpTMryQt1GE/Wd217DO1UmEpwZ9P2d/QjnPawamSX7Gq2G+U4zj65k+1m5Y7XUj/+/vhxa/D3l478Q/VqwOKcZ��l    j , j                                                                                              �7V !	%�%cdengxiaowu用户信息eNq1Vl1P01AYvu+v6JUXhEo7YOCM8cYbExON6JUx2+jqKG4t9gNRSrINEAbsg4TPDYjIgGl0k4gwt8F+jD2n3dX+gqfrtnQDxkfw3LTveZ/345w+Pc/BcDSwjg4tE9D3gjAW00s/K8VERweOYQSuL  �QU !	1�Mbdengxiaowu版本更新历史eNp1U0tP20AQvu+v2FMPEQaHC2l67aUSElUpXKqqdlMHLEHsxpu2EotE6AsakeWQphAiHiUgDgiHQkUhof4z3l3nxF/o2mvS8MjIkmdnvm8eO7MACgGJBD9aCPaLjJDAa161a4kEBECBfHmJ1Q/ZximrNmn5CyW/WHmPkl0gGIF7xo4XJ56NxnAFanBIt+2hKQNN2G90ZDzJZS2ogSi+RLPqOW2TiCDwT8fGn8MwFCWL7Hs3LZZHurqCqfe5s7CM+XGLbpZw4J6ytTIGOK0ICQuPNHlUIFZis0DYMzrKWvlZiNmaKywOypu5KYjp+QklTYkRtU4aece0crdRcd+UnEVJAICiAa9CNzZ548L/WxLVA03TIJgDIeDB24KFHomOdaml4YvIHspcV/uPfCezXoPlPzmYGkxKdeAejplDeeseRjwhsupfNOjRDtv+0z9GBpmzxs0Yw2oypajiG4FJNa0+TA+r/fl24fWM6Uy/uhtGTbH6kjrCfuz1ZyPjA7rJmow6CFfr21bw8dJvlXhrRbq6/PlIezkAeq8ie+smnEImYzhOb+7YgXRUcK7BKpgPxxaNkza+spODeM3FgtNGTU64U1kPXNdv7fLtolhaXi919qudnd+89qnXJV8KAIAd/gy8sn/p8crB+LT1/rGVuWoX/wGmElUJc[���    018-08-30 14:10:09&quot;,
                &quot;publish_time&quot;: &quot;08月30日&quot;,
                &quot;text&quot;: &quot;V2.0.0新功能介绍&quot;,
                &quot;url&quot;: &quot;https://wxtest.firstwisdom.cn?type=0&amp;platform=ios&amp;lastVersion=2.0.0&quot;
            },
            {
                &quot;id&quot;: &quot;2&quot;,
                &quot;version&quot;: &quot;1.8.1&quot;,
                &quot;intro&quot;: &quot;1.8.1版本提交审核&quot;,
                &quot;ctime&quot;: &quot;2018-08-07 10:09:20&quot;,
                &quot;publish_time&quot;: &quot;08月07日&quot;,
                &quot;text&quot;: &quot;V1.8.1新功能介绍&quot;,
                &quot;url&quot;: &quot;https://wxtest.firstwisdom.cn?type=0&amp;platform=ios&amp;lastVersion=2.0.0&quot;
            }
        ]
    },
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[��!   � d�                                                                                                                                                                                                                                                                                                                                                                                               �NX !	C�5 dengxiaowu获取指定类型的消息eNqlVUtT00Acv+dT7MkDEtm0PGy9etSLj5PjWCgVOwpFkg4+4kzbsbTY0iBTCxZGQB6tDjZUCpW20A9j9pFTv4KbbBpa1IvuJZv/7//87exvBcCWMDBAKjG6H8eaRtuHnVZxYAAIgghoro60As6mUKVIqk30K   ��W !	I�5dengxiaowu获取用户消息中心数据eNrVVl1TGlcYvt9fca56Yd14FkSF3rW9bG/6cdXJCAVimBZI2WWsE5wBYhSrgnEIGnCS2KjQTMJHRVE+5Mdkz9ndK/5C392z4KKkMslkOj0355z343nfc97nfHAIGjcxoZTj6nGCZjJqt9pr5ycmEMfxSE03SCanZEs01aBnKZqoyOdvSfcRfVqlW2WaPiKZVxx4q5UGrSV//O4b05VHbnRfkh6Irqmpxd/v3AtERGkxIPrCwTve0FRU9EemFvzSt+LCV/6Q5I8gN2ckwWBo7oK0MwYSAIGdHoFkkhDUhKe7L3vtTbmzSvcqeta1pPKsRTpPOQ4BSDdLCs+Vw6Z8uQEInNvtR  �    /  /                                     �Bc !	%�?dengxiaowu用户信息
    
**简要描述：** 

- 用户信息接口

**请求URL：** 
- ` /user/infos`
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |否  |string |extend（扩展信息）   |

 **返回示例**

``` 
//type 为空的返回：

{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;service&quot;: [
            {
                &quot;id&quot;: &quot;1&quot;,
                &quot;name&quot;: &quot;一智金股&quot;,
                &quot;icon&quot;: &quot;/public/images/user__xnjg.png&quot;,
                &quot;intro&quot;: &quot;智能盯盘，实时监控主力动向，提前布局处于拉升前奏个股。&quot;,
                &quot;ctime&quot;: &quot;2018-01-23 15:22:00&quot;,
                &quot;mtime&quot;: null,
                &quot;status&quot;: 1,
                &quot;start_d  A   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  �yY !	I�dengxiaowu获取用户消息中心数据eNrVVltTIkcUft75Ff2UB+NoD4gKqX1J8pi85PKU2lIjrFJZYMMMZazFKiCu4g3UQnTBWtesitlaucQLykV+zE53zzz5F3JmekC8RcqUlUq/dPe59znfnDkCgiV0dbF8RNuL0mRSaxQvapmuLiQIItISZZJMs9Q+jZfpSZxGC+rpAWn8TteKdClPE7sk+V4Aba1QpqXYj999Y6mKaBiNK8pL2dXbO/Fbz3NvUFYmvLI74OsZ9feGZE+wd8yjfCuPfeXxK54gGhbMILgZmj4jtaRpCQyBnOGBJGPg1DJP199d1BbV+gzdKBhRl2LsTZXU1wQBgZFGimTfsp2Ker4AFoTh4WEkvBKMd372ayigfOEeUUb4yYV+MunGetU6XUoqky89TUmp+xYBv2diyCePDflDvqYc3yW+/YPOzQhuj+RaRF6f56onG5YGRewQJQfCThfGL   �  �**参数：** 
无，但是要求登录

 **返回示例**

``` 
{
    &quot;data&quot;: [
        {
            &quot;type&quot;: 1,
            &quot;new_msg_num&quot;: &quot;1&quot;,
            &quot;new_msg&quot;: [
                {
                    &quot;time&quot;: &quot;2018-05-15 09:00:01&quot;,
                    &quot;msg&quot;: &quot;洛阳钼业（603993）、海康威视（002415）、山西焦化（600740）、华友钴业（603799）移入股票池；隆基股份（601012）、新和成（002001）、皖通科技（002331）、华微电子（600360）、启迪设计（300500）移出股票池。&quot;,
                    &quot;status&quot;: &quot;0&quot;,
					&quot;url&quot;:&quot;&quot;
                }
            ]
        },
        {
            &quot;type&quot;: 2,
            &quot;new_msg_num&quot;: 0,
            &quot;new_msg&quot;: [
                {
                    &quot;time&quot;: &quot;2018-05-15 09:00:01&quot;,
                    &quot;msg&quot;: &quot;中通�  ���脉（603559）、吉大通信（300597）入选股票池。&quot;,
                    &quot;status&quot;: &quot;1&quot;,
					&quot;url&quot;:&quot;&quot;
                }
            ]
        },
        {
            &quot;type&quot;: 3,
            &quot;new_msg_num&quot;: 0,
            &quot;new_msg&quot;: [
                {
                    &quot;id&quot;: &quot;11876&quot;,
                    &quot;user_id&quot;: &quot;118&quot;,
                    &quot;type&quot;: &quot;3&quot;,
                    &quot;time&quot;: &quot;2018-05-11 10:09:18&quot;,
                    &quot;symbol&quot;: &quot;300496&quot;,
                    &quot;stock&quot;: &quot;中科创达&quot;,
                    &quot;msg&quot;: &quot;B点信号 | 08:00:00 中科创达（300496）出现买入信号。&quot;,
                    &quot;di&quot;: &quot;1&quot;,
                    &quot;status&quot;: &quot;1&quot;,
					&quot;url&quot;:&quot;&quot;
                }
            ]
        },
		{
                        &quot;time&quot;: &quot;2018-10-12 10:09:49&quot;,
                    &quot;msg&quot;: &quot;近期策略收益近期策略收益近期策略收益&quot;,
                    &quot;url&quot;: &quot;https://wx.firstwisdom.cn/infei-guide.html&quot;,
                    &quot;status&quot;: &quot;0&quot;
                }
    ],
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|type |int   |type: 消息类型 1-金股 2-涨停大师 3-T+0 4-多空,5=主力雷达，6=收益
|new_msg_num |int   |未读消息数  |
|new_msg |arra y   |new_msg：新消息
       time：消息产生时间
       msg：消息内容
       status：0-未读 1-已读
       symbol: 股票代码 用于T+0消息跳转
       stock： 股票名称
       di： -1 T+0卖点信号  1 T+0买点信号  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�;    <  <                                                  �A] !	1�-bdengxiaowu版本更新历史eNrNVVtPE0EUfp9fMU88NGw7BRNqCfHFFxMTjQgvxti1bGGTtrt2poJhSbgoFwtdYhCxEORSCImkBcFwaUv/TGd2+8RfcPZSaIs2sb44D7tz5pzznXNmvjkDIB/A4zFyk+b+FNN1s3x0Xcx4PBAAARoL82zjkK2fstUjmp6l+g+W3qP6LuAeZv6MHU8PPHvsmgswBEcIUXHQ5xsdIxIm3oicwGRUxkNKzBuO+0RV9Q1LZEAdEon0KB5RYAjYwR0otnpBi7qNxsGePul/Dq04VJ9mn29y0hyRLi9ptPyhOrmgGccFupnSzPwpW0trQAsKfFhV2TNHFKAmuMvcQo2KJKIkYlBja3m+gklCjg9DjV6cUP3IseG5DkoJLCvxZit3U6h+ZgcBAPICyit0fdPIXlauUjx7EAqFIBgHlkHHm6RCennFojMLQmf9VpdMRGsq5+98O6HPxyPT5X22dmVBn6fMUoktLlQ/5a6LizS3w+bPjO95Y+WgCTAqY1JDfHGjs8Z4g3TrIQ81ZtDtpvAH87fOzjT6dHmRF7X2k+MkofzGC9LcNts6r05mzPJc5XK2NUqYyDGpCQX5AwIKCN0I+u8F/SiI7rfGUJOv+S6NvLoLhQJsY74bsS97rRGINEYaPQftWqyb8vGbOVOqFFJGYak1yJ2jb3mBHpB3qtSHOsSY2lvjcJ+sYHshKmLiMrav7igaAk90tsWGrjbY4PcGvP6/ZoPt5TYdfblymXWI0TYfUA+0yRDsQv/EB9TTDh/sav5rPtxIL0EdP2rHE2k6HZwMhyWM60twFUQkSVwzRmDCaoB2Y6TZOXZy4L4m/B2h2YzTK6srX818vlLYNbamePs3NlLV/dXq9k8j875e5TxIAAB2uGOW05VSmbe7/hFl9KESvi5O/QJ632qHc[�i�   s s                                                                                                                                                                                                                                                                                                             �2d !	1�dengxiaowu更新内容详情
    
**简要�jd !	1�dengxiaowu更新内容详情
    
**简要描述：** 

- 更新内容详情接口

**请求URL：** 
- `http://dev.wxtest.firstwisdom.cn/app/getUpdateShow `
  
  注意：不加API版本号
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|platform |是  |string |平台   |
|appVersion |是  |string | 版本号    |
|type |是  |string | 0:历史列表，1：消息推送    |

 **返回示例**

``` 
消息推送
{
    &quot;data&quot;: {
        &quot;update_info&quot;: {//是否立即更新按钮的显示
            &quot;status&quot;: &quot;1&quot;,
       �    �  �                                                                                                                                                                                                                                           �\ !	1�Mddengxiaowu更新内容详情eNrlVltvElsUft+/Yj+dh6YwgvGkqTHGxBcTE42X83JihMC0TgIMMhtr4jShF6rcOmhqRVqr9CbxwrRpzyktID/mzN4zPPUvuIZNKeCgPmhyovtlmLXX5Vtrf8P+EIaFRkbMSsLanmGaZjV3juvFkRGMkAuzlX22vEMXkrRyaOnbbC7JFreotoEgwtIP2O7s7RtXO+4u7LtHSHRcEILiA/fUQyIqxD0hxRQyJSlBO  ��j[ !	%�dengxiaowu跳转协议eNpVj91KQkEQx6+dp9irrtJS+zS86Am66AkEDyGZmmgobaBHg9JMujD8KjhmKlEapGZHDr6M+3Heol1XsOZmZ37zn//MAiAR4EQodHS8cRgJxqOhIP/+4tY7KZV5vw/gdkU0LRiOnoQifjc3eqxt2sbIfmopmd3M8E6W1abEqqyvlJtISeeT0l8FeFyJdEzzp1KqvfTQX+aTN+UKXlcsEA+c+S/XzpPRxMGpllaJTz0XgXBSU+nVP4/F9HJXPU/KOq18AmC5DvPBkFbvMWCfU4T8sspEAHYvauXCrAdhhBYEsMeBsLpbVl5ZfTyyyqudueW6IdkWcmDa0clstGLbQsfHRVKYsWaRtOuS7QhG2l3WqHLjjuauJduVumGLFAw+yDOzK9me3KH/8NEzHU5JoUfHPZJtikkyuZH9fdGnNZPnLNYYCDfBAH4B8UHpIA==c[��    ewORAR/NCpMiuR2NOgn4s178lQM+xDUx5jtldm8BqmMao6m31y6fsVMPWGrH6h2gNoAeTm2fEjrWrsiFLx+7eYtbGOh2ix73sWt8leaz6m0mWwlUqq5W6NrGdXS91lhUUXquAuW3Xn7F391YdXVMYNHNOQnE3IsjFVW0MGikJgUmcQqPdyj2g73gW7+EmOKJEcGvXAXfLsIQhgaaC7RlTVz88j4lAH0yOfzYfQI2Q5/3I/L5DzMxM9/jWNuP92Ltyd2V4pMyF0XQYCiNL9tvs/Q3B4/KpZNtZ5VzOI8K3yCUt0sp5kU4idx5SQJf3r4Y9TBPSgqgX7n3nLD4+KxUH+YRMKKCyamAEEkEo+IihveQqI7IIeFuNKmRtvgUogcEwUp6Dn7p+fc2JjXe+ZimFwY42m6paZHB0ZExIekOxssCJy1Q+dAJBIS+yF63Wf5udmcT7+25hpGLWPWcsO7DMgRIka6Zf/uc7HXoy8sAwg8/RCMauK/xAx71aSvXliNCk2XnYr35wmJD8SQZziGr2NxbMg7wA/AZJWy9uffRmbPZ32tF+VxPcu0PE3laHWO7iaMaprmHnOHrzXQX1wK+ydFxfvtThzCPN9TZiDGO0App3Vn6O40+j7/6dEfwIoUnIBRfWfNlqz9dZouWfq8efT2/8INjoyzohcfS2/Rp2mbG9lltlgwqh9bz5vmUZNuNWgS/h2rvyw3Rn/CpL2OHICRw31J81n4QI1qkeqHTF+CkdNkGS5Lo5Ezjhastxs8kK6WuRscBV3dgd3f/utEzvvc3jnHDqqey7dzl8YDAVFReptzumTPoGn7tu9RAVygcDkyKFkctYqrI1VArJyIlGELQiZjcjwqBbEqRYhtMZfK7MmBWZuXgsAMD+gk698kcMeslMz8An1aOK6veMHKXlZaiSL3PpEtdPMxaLNTPUg3i7yH1tJLS9eN2ob5ZgbEmbmaaW0vt0r/gPjo3eKSEiHEPqxbzUWj0YT8tvS7LAeO6zOfAZJAoog=c[�j�    D  D�  �  �t;: &quot;itms-apps://itunes.apple.com/us/app/ap�9g !	1�!dengxiaowu消息推送详情
    
**简要描述：** 

- 消息推送详情接口

**请求URL：** 
- ` http://admintest.firstwisdom.cn/msgmanage/info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;2&quot;,
        &quot;name&quot;: &quot;10月收益通知2&quot;,
        &quot;image&quot;: &quot;http://wxtest.firstwisdom.cn/upload/20181016/8203fa470a0fe1ee4aa2ea492ae03f5f.png&quot;,
        &quot;type&quot;: &quot;1&quot;,
        &quot;url&quot;: &quot;/pages/analysis&quot;,
        &quot;status&quot;: &quot;0&quot;,
        &quot;url_name&quot;: &quot;首页&quot;
    }
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�|�    I/7tBX2CMW8Au1UJ5FWjMMGbGUVUzsmpYKClBkXHZbj3Tv26OIUV2+aIqIhP56VYmFOISWNzsg4JkbmOAVOj0A9YBjqzA9CTBalyDCK65PnGBT/HBXeAk3NQGEF1D9g9YlZqZ43cx7qAXm9SpIaKVQ7iSQTRhz1vr0GG1vG7pn+JktdRz6fj0N2KHqALPRnP8Ul/CUNrp/dzXBs/nIt3g39j2JkVupDeJ4yg+K+8VsW8kdsz0ku3fmlZpSXSekNtdvXcqlJxn4cly+UsKuHXSYd4EFBDgyC7eZGy8VjoUExEYdlF429TDNNxPGIILvpU0hwB6QwH5e7OdadcMlYigm8GPRc+cLz+fS01zt1NYy/mmZq+qYWJodChIX7uB8bjudZ+o+MAxZxSBik6HVfYRlgHZ7Mc3OppTeyRiM/2suAFMFCpG/29gDEGg/emhli4BmkoNcTfyWS5Fkbnj0xWzXIVJ2MD+oJCfeEkGc0h3dzcXTIO5QflJNZyVnvkS4zKz7bW3aW9BgQtQjpPNSX4DCh1zOQf8gA73Jg0LgY9s8JsvefPXEQ87yPmSEZ71BKOY07I1cX0PvhFyY/QFak6Q7o9V/NxYp5vA2ZiqktG2cvP5XcYMxYVtj5kcwePMpYuZFbJ4WSXv+987htnLVhrwUp+p6t/2dzY/IjRNrrmAM05LTyQjFHD6heL4N2SrQ1GnJIVWnZ1Vt5/WzFfLnDBGGzymB0K2DzgK7+708ncl5n87197LGyFd9eLY0HAoIs251zKrJTaAHRemT7amAfBv+m+t++M65/4/o3rn/j+jeuf+P69+nXP9r62lpi1uqzxn64+Xfs+l29pp+2/Rft/qhBReZiUjwqBjlFjGBrxlirktUTo7EsBnv9uvk6RXPHqFWM4go8Kp03N7xWF/+01kmUGfqih4fdh+SoevljBXbLzIfO2lNT0/TGjvEiaWonxma2s7/eqfxJm2/7Evs3gxAir7bNdkFvtal+6x/KdSlw3kz+DeQO3yI=c[��[   d �d                                                                                                                                                                                                                                                                                                                                                        �u_ !	1�ddengxiaowu更新内容详情eNrtWF9v2lYUf7+fwk97iAIOVJuiTFNVqS+TJq1a171U1UDgpJYAM3xpOtWRIAlp+Gs6pSklaVryr2jrcLJkDQlQPsx8rs1TvsKuuYQYarpKa6Vq477Yvvd3zvmdc8/18THi6EATE0YtYe4niaqa7YPzZnligkPIxZGNY7J+ACspqJ2a2j5ZSpHCHqg7iEqY2gk5XLz13Tc9uIvz3cU4OsPzQeGee/4+FmTsnhVjMp4X5aAUdgcivD8a5ecEfCsa9GPh5l1pnvMhap7jyFGVLKtUk17PQ+bFtRtfG+lVsvkK1BPU5ceskfVTaKpdg9TejW9vfs9ZVEBdJ  ��^ !	1�Mddengxiaowu更新内容详情eNrlVltvGkcUfp9fMU95sAwbiBJZjqqqUl8qVUrUXF6iqiBY2ysBS9khjpS1hC844eYlleNi7LjBV9SkrC07MTYQfkx2Zpcn/4WcZTAGsiR+SKQonZdlz5zLd858y3wIw0IjI2YlYe3OMk2zmvtn9eLICEbIhdnaEVvZp4tJWjmx9F02n2RLO1TbQhBh6cfsYO7eb7923F3YN0VIdFwQguJD9/QjIirEPSHFFDItK  =  �                      &quot;content2&quot;: &quot;1、个股新增财务评级报告，挖掘中长线好公司&quot;,
                            &quot;images2&quot;: [
                                &quot;image1&quot;,
                                &quot;image2&quot;
                            ]
                        },
                        {
                            &quot;content2&quot;: &quot;2、个股财务评级增加同行业对比，全方位了解个股在行业中地位&quot;,
                            &quot;images2&quot;: [
                                &quot;image1&quot;,
                                &quot;image2&quot;
                            ]
                        }
                    ]
                }
            ]
        }
    },
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
//历史列表返回
{
    &quot;data&quot;: {
        &quot;update_info&quot;: {//是否立即更新按钮的显示
            &quot;status&quot;: &quot;2&quot;,    p10N5lRzeMm7ORUSz8l5aKK1DmeDtvx3h175DmV709TRCwcwPNyPMKppKzTGQXHpegCp8L5CWhHDEOd+VqMK5IcHUVxA/Icg+IfYuIroJk5KK6B9husP7SqtctW3ks9IM/XSUonxVo3mWLCiKPedzZga8fcvzBe5KjryO/3c8gJRXeRjX7v+4SMP6TBDbC7OY7NX60leqH/TorOywOIIFBmUDo0f8lB4YS9c5LPdH+sm5VVUn5B7Q60XGlScAAnlJdK2NXLLtMu8JCoBIfBTnPj5RLx8LCYhCMKT2Ov0EyTcCIqKh76FBY9QTkiJJRejvUmeAXLcVGQQt5rH3jfn531+WY+juCPZpmagaml6ZEQYfEOHsSGEwSW/mPjgCUcFocp+jzXWAbYmyf7k7XSNpo5s1kY72VQjmIxOjD7zRDEHndfmRlh4B2mYDSSfyRT5HEHHj+02nXI1tyMD+sJi7fFsHc8h9dzcXXIN5IflJNVzdvfkR4zOz67O06WdBsQrQSZAjRW4DhpNLJQuMcAr3Ng2LgUCSyIiu+vPXER876JmREZ30hKuY1vx64uoTfDL03/DVmRoW/AaPxsLVet013IVi191bx4+q7kBmPGssLJj2QP4H7Wzo38JimWjcav3Qcd86IDB21I0+9s4z+bG9P/QKR9rjlAQ04rL5TydIMajQro50TfoCGHdI2WXaNdMC7WrKd7TBC2awxGXwVsH9HV//3uRO7rbL7/HvusHMW3X0sTwaCoKE7n3IrsDFpCtB45Tg3sYPCOVH/f21R/etBjyt+i9E8q96RyTyr3pHJPKvekcv/7Kjf9aXf8zLMmBWtJjLYtXPsVfL9dwfODRsW4QUUW4nIiJoU4VYpie8bcqJH1M7O5KoX6nQbreZrmjlmvmqU1uF++bG357P7Do3o3WWHol90H2L9HTmpXLSHYrzAfuhuPLF03mnvmk5Sln5nbue7hZrf6Oz04OJdYVwkhRJ7tWp2i0e5Q/Xb351M5eNlK/QkVFyTcc[�LU  �       &quot;desc&quot;: &quot;立即更新&quot;,
            &quot;url&quot;: &quot;itms-apps://itunes.apple.com/us/app/apple-store/id1361588220?mt=8&quot;
        },
        &quot;text&quot;: { //内容显示
            &quot;title&quot;: &quot;2.3版本新功能介绍&quot;,
            &quot;content&quot;: [
                {
                    &quot;title1&quot;: &quot;一、板块轮动&quot;,
                    &quot;level1&quot;: [
                        {
                            &quot;content2&quot;: &quot;1、行情板块新增板块轮动，提前布局上升板块&quot;,
                            &quot;images2&quot;: [
                                &quot;image1&quot;,
                                &quot;image2&quot;
                            ]
                        }
                    ]
                },
                {
                    &quot;title1&quot;: &quot;三、个股财务评级&quot;,
                    &quot;level1&quot;: [
                        {
          } t }                                                                                                                 �ta !	Y�mAdengxiaowuapp 小程序 获取配置接口说明eNptkM9KAlEUxtdzn+LsxoYa0Z5AWgVBktR+YFQu5MwwTnuNjCT0uigLC/qrBNU4UOA0Gr7M/aOrXqEro+XCszoc+L7vdz4EcpCmCb8y6VU5IZNx8DPq0DCi0SkddlmrKYZ3NKzQsc8vvkT9jN++8ZtP3g7o+IFX++K9Pr3yp4/XmgYIbUBKnzQHjLQz2SywgIiXcxaRaa0hvn3ROeHNLiNP+3s7QMMGC3sQH2JbpJh2ycBW0nCcZDHvbdlWAReRwsgxvwzAOTS8gu2WJJ6K7bK6Dqphma6NzdlawhaWOnXGkNZlunjtQ4yyjMtJSzxHcSpSUjosRR45puHlt3dzkJD+K8RrSEmvUGRiCkjMcVYqJdam/lcIMP+B34dsVGG1jwXN3Hj+yayBnGe43qIA+bc8H+TdMrat/27j7hgZ/ALG9u+9c[Yv��` !	1�-ddengxiaowu更新内容详情eNrtWF9v2lYUf7+fwk97iGIcqDZFmaZp0l4mTVq1rnuZpoHASS0BZvjSdKojQRLS8Nd0SlNK0qzkX9HW4WTJGhKgfJj5XJunfIVdcykx1HSttEndxn2xfe/vnPM7x+f6XB/E0YGmpsx60jpMEU2zOkeXrcrUFIcQz5GtU7J5BGtpqJ9b+iFZSZPiAWh7iEpY+hk5Xr755ed9OM/5b2EcmxOEkHjbs3gHiwr2zEtxBS9KSkiOeIJRIRCLCQsivhkLBbB445a8yPkRNc9x5KRGVjWqyWgUIPvkk+ufmZl1sv0MtDPU48eskc1zaGk9g9Te9S9ufMXZVEBbJg8GtFX2CKWCC  �    ��益通知2&quot;,
                &quot;open_times&quot;: &quot;--&quot;,
                &quot;jump_times&quot;: &quot;--&quot;,
                &quot;status&quot;: &quot;0&quot;,
                &quot;ctime&quot;: &quot;--&quot;,
                &quot;status_name&quot;: &quot;预览&quot;
            },
            {
                &quot;id&quot;: &quot;1&quot;,
                &quot;name&quot;: &quot;10月收益通知更新&quot;,
                &quot;open_times&quot;: &quot;0&quot;,
                &quot;jump_times&quot;: &quot;0&quot;,
                &quot;status&quot;: &quot;2&quot;,
                &quot;ctime&quot;: &quot;10月16日&quot;,
                &quot;status_name&quot;: &quot;已发布&quot;
            }
        ],
        &quot;pageInfo&quot;: {
            &quot;current_page&quot;: 1,
            &quot;page_size&quot;: 10,
            &quot;total&quot;: 2
        }
    }
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�{U   , ,                                                                                                                                                                                                                                                                                                  �Qf !	1�Qdengxiaowu消息推送添加
    
**简要描述：** 

- 消息推送添加接口

**请求URL：** 
- ` http://admintest.firstwisdom.cn/msgmanage/add `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|name |是  |string |名称   |
|image |是  |string | 图片    |
|url     |是  |string | 连接    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;url为空&quot;,
    &quot;data&quot;: []
}

{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�|'   � �                                                                                                                                                                                                                                                                                                                                                                                                   �he !	1�dengxiaowu消息推送列表
    
**简要描述：** 

- 消息推送列表接口

**请求URL：** 
- ` http://admintest.firstwisdom.cn/msgmanage/list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|page |否  |string |第几页   |
|page_size |否  |string | 每页数量    |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;id&quot;: &quot;2&quot;,
                &quot;name&quot;: &quot;10月�  �  �
            &quot;desc&quot;: &quot;不显示&quot;,
            &quot;url&quot;: &quot;&quot;
        },
        &quot;text&quot;: { //内容显示
            &quot;title&quot;: &quot;2.3版本新功能介绍&quot;,
            &quot;content&quot;: [
                {
                    &quot;title1&quot;: &quot;一、板块轮动&quot;,
                    &quot;level1&quot;: [
                        {
                            &quot;content2&quot;: &quot;1、行情板块新增板块轮动，提前布局上升板块&quot;,
                            &quot;images2&quot;: [
                                &quot;image1&quot;,
                                &quot;image2&quot;
                            ]
                        }
                    ]
                },
                {
                    &quot;title1&quot;: &quot;三、个股财务评级&quot;,
                    &quot;level1&quot;: [
                        {
                            &quot;content2&quot;: &quot;1、个股�  Ű增财务评级报告，挖掘中长线好公司&quot;,
                            &quot;images2&quot;: [
                                &quot;image1&quot;,
                                &quot;image2&quot;
                            ]
                        },
                        {
                            &quot;content2&quot;: &quot;2、个股财务评级增加同行业对比，全方位了解个股在行业中地位&quot;,
                            &quot;images2&quot;: [
                                &quot;image1&quot;,
                                &quot;image2&quot;
                            ]
                        }
                    ]
                }
            ]
        }
    },
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}

{
    &quot;data&quot;: {
        &quot;update_info&quot;: {
            &quot;status&quot;: &quot;0&quot;,
            &quot;desc&quot;: &quot;立即体验&quot;,
            &quot;url&quot;: &quot;10&quot;
        },
       �   &quot;text&quot;: {
            &quot;title&quot;: &quot;2.3版本新功能介绍&quot;,
            &quot;content&quot;: [
                {
                    &quot;title1&quot;: &quot;一、板块轮动&quot;,
                    &quot;level1&quot;: [
                        {
                            &quot;content2&quot;: &quot;1、行情板块新增板块轮动，提前布局上升板块&quot;,
                            &quot;images2&quot;: &quot;https://wx.firstwisdom.cn/public/images/mini_new_1.png&quot;
                        }
                    ]
                },
                {
                    &quot;title1&quot;: &quot;二、板块分析&quot;,
                    &quot;level1&quot;: [
                        {
                            &quot;content2&quot;: &quot;1、板块详情页新增板块分析和成分股，板块情况一目了然&quot;,
                            &quot;images2&quot;: &quot;https://wx.firstwisdom.cn/public/images/mini_new_2.png&quot;
               �           }
                    ]
                },
                {
                    &quot;title1&quot;: &quot;三、个股财务评级&quot;,
                    &quot;level1&quot;: [
                        {
                            &quot;content2&quot;: &quot;1、个股新增财务评级报告，挖掘中长线好公司&quot;,
                            &quot;images2&quot;: &quot;https://wx.firstwisdom.cn/public/images/mini_new_3.png&quot;
                        },
                        {
                            &quot;content2&quot;: &quot;2、个股财务评级增加同行业对比，全方位了解个股在行业中地位&quot;,
                            &quot;images2&quot;: &quot;https://wx.firstwisdom.cn/public/images/mini_new_4.png&quot;
                        }
                    ]
                },
                {
                    &quot;title1&quot;: &quot;四、其他&quot;,
                    &quot;level1&quot;: [
                        {
                                &quot;content2&quot;: &quot;1、用户引导优化，不管是炒股小白还是进阶小白，都能找到量身定制的解决方案&quot;,
                            &quot;images2&quot;: &quot;https://wx.firstwisdom.cn/public/images/mini_new_5.png&quot;
                        },
                        {
                            &quot;content2&quot;: &quot;2、新增版本更新功能介绍，最新功能立即体验&quot;,
                            &quot;images2&quot;: &quot;https://wx.firstwisdom.cn/public/images/mini_new_6.png&quot;
                        }
                    ]
                }
            ]
        }
    },
    &quot;info&quot;: &quot;success&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|update_info['status'] |int   |0:立即体验。1：立即更新，2：不显示  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�T                                                                                                                                                                                                                                                                         �nh !	1�dengxiaowu消息推送修改
    
**简要描述：** 

- 消息推送修改接口

**请求URL：** 
- ` http://admintest.firstwisdom.cn/msgmanage/update `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |
|name |是  |string |名称   |
|image |是  |string | 图片    |
|url     |是  |string | 连接    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;info&quot;: &quot;url为空&quot;,
    &quot;data&quot;: []
}

{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�}+   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        �i !	1�Edengxiaowu消息推送发布
    
**简要描述：** 

- 消息推送发布接口

**请求URL：** 
- ` http://admintest.firstwisdom.cn/msgmanage/publish `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


c[�}�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �j !	1�=dengxiaowu消息推送删除
    
**简要描述：** 

- 消息推送删除接口

**请求URL：** 
- ` http://admintest.firstwisdom.cn/msgmanage/del `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: []
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


c[�}�   � �                                                                                                                                                               �Tq !	1�Wdengxiaowu个股研报详情
    
**简要描述：** 

- 个股研报详情接口

**请求URL：** 
- ` v2.4.0/Nstock/report_info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **返回示例**

`�p !	+�Kdengxiaowu个股的研报
    
**简要描述：** 

- 个股的研报接口

**请求URL：** 
- ` v2.4.0/Nstock/stock_research`
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |
|page     |否  |int |   大于1 返回 更多分页的数据  |
|page_size     |否  |int |   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;statisti   �    m.cn/Msgmanage/param_list `
  
**请求方式：**
- ＧＥＴ 

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;首页&quot;,
            &quot;url&quot;: &quot;/pages/analysis&quot;
        },
        {
            &quot;name&quot;: &quot;策略列表详情页&quot;,
            &quot;url&quot;: &quot;/pages/page-strategy&quot;
        },
        {
            &quot;name&quot;: &quot;一智金股&quot;,
            &quot;url&quot;: &quot;/pages/firstWisdom?query=yzjg&quot;
        },
        {
            &quot;name&quot;: &quot;涨停大师&quot;,
            &quot;url&quot;: &quot;/pages/firstWisdom?query=ztds&quot;
        },
        {
            &quot;name&quot;: &quot;主力雷达&quot;,
            &quot;url&quot;: &quot;/pages/firstWisdom?query=zlld&quot;
        }
    ]
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[Ń�    �  �                                                                                                                                                               �Tq !	1�Wdengxiaowu个股研报详情
    
**简要描述：** 

- 个股研报详情接口

**请求URL：** 
- ` v2.4.0/Nstock/report_info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;symbol&quot;: &quot;000001&quot;,
        &quot;title&quot;: &quot;业绩延续高增长，资产质量持续优化&quot;,
        &quot;content&quot;: &quot;2222&quot;,
        &quot;source&quot;: &quot;广发证券&quot;,
        &quot;date&quot;: &quot;2018-10-29&quot;
    }
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[���                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 �vb !	%�%dengxiaowu跳转协议eNpVj0tOAkEQhtfUKXrlSpABnxgWnsCFJyBhYogISMBAbBMYMFEQiQsIj9FkEIEYBRMBETLhMvR0zy3spknQ2nTVV3/9VQ2AeIATodDxydZRJBiPhoLs+4uZ76RUZv0+gOKKqGowHD0NRfwKM3q0PbWNkf3UkjJbz7BOltZnxKxsrpVuJKWLSemvAjyuRDqm+lMp2V55aC+LyZt0Ba8rFogHzv1XGxfJaOLwTE3LxCefy0A4qcr0+p/Hcnq1q5EnZc2qfAJgsQ6zwdCqPWDAPicP8WWZ8QCsLGvpQs1HboSWBLDHgbC8W1ReUX1UaeXVztwxzRBsGzmw1dHIfLRmO1zHxkVSmFO9SNoNwXY5I+0ubdaYcW/lbgTbE7phixQMNsjTaVewfbFD+2GjZ2s4I4WeNe6RrM4nyeRW9A9436pPWc6kzQF3E0xxc2h3quJwDAC/2DHvrA==c[�j�    �  �                                                                                                                                                                                                           �(c !	7�umdengxiaowu收益通知详情页eNp1U89vEkEUvs9fMScPxGVhbbsEY7x4MTHRWI1Xlt2FrpZdujsbrG4TqMVfKNQEGwqmWkuxBwM21jYWlH+GnVlO/AvO/kCXBuf05r3vfe/NvO8BSA+IREi36HRKuFZzht8mg2YkAgFgIK6fktbrcbFJPh46vQ5+Vh7v/8DVQ7t2AGiS0zvDx5v3794KMhiYgmxO0B/JiFVUUcvJN9WMBlPAK+Gj8c5Pe1DzEij+zu3le9Clsmub+P3fypZ/tbffWvawPC6+sshx396rWE7vBDeqFrCSDD1u757lXxloMYGbIhQJWrjRo7aBdEXNQtfjRgCkvQzrdmuPtM9Hvyu0EZBKpSB4ClzCS2umhq4aSECm4dtJGLscCin0TdNAADZFUTYCdBgqCUiYQn32EI00S8Lx4fx/OFXIybPIKwvzkUpOyF6AriCUT7Js4TGSDRTNKLqBCoohabmoqLJmflUTJJaLxRPxGMexMUHOZHgpvrjA8+mYJC6JQlpIiFwiw6eXlvjFaF7Nzq9s6quzddk8bcVgvYIPvILX10xZX7+2/uRhwOFRbIAN9+9DM/En78/5ohbmioAJNEBVMJ3+/w5NyeqamXeloajI9ZD6EX55RvpbijQZvIlTATqnZXL+hXT3yfZz+11jMmhx1It3u+4aeOipiOz2C/z9aLoqrRO73fTfMK7vOr3eqH9APpWo6smHyrizQzeHNLfCIX/bAAD462dnWB39GlL+5RWtcEMTJ4PSH2tPe8A=c[�8�    �  �求URL：** 
- ` /market/incomeInfo `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |�Tg !	7�Mmdengxiaowu收益通知详情页eNp1U1tvEkEUfp9fMU8+EGBh2wLBGF98MTHRWC+vLLsLHS27272I1W1SavGGQk2woWCqtRT7YMDG2saC8mfYmeWJv+DsBQWC8zRzzvd958zMdwCkCwQCpL1ptwq4UrH730a9eiAAAQhBXD0jjdfDzTr5eGR3WvhZcXjwA5ePrMohoCS7c45Ptu7evuEzQjAFmUdseCEcYXKc+lDUGSTxck68LmVkmAJuJY+Ed39avYrLo7RbN5fvQEfRqmzh938bML2jtfPWtPrF4eYrk5x0rf2SaXdOca1sAjMZosu5grvzjiFohvwwRSABmrjWoXtNV5GUhU7EzXCKck9UNSRLswiYQxKi6SBEsgaDnCSoss8CkN6gX7Ua+6R5Mfhdou2DVCoFwVPgtHFpzZD1y5rO6Ybm7ZMwEpxIIfoS44QPNnhe1Hz0JFTgdG4M9dQnZIRpETY+yf+Hk7icOI1cWJyPRDkuOwNd0XUlyTD5x7qo6eEMUjU9jzRBzoV5iTGUVZkTGDYSTUQjLMtEODGTiQvRpcV4PB0R+BjPpbkEzyYy8XQsFl8KK1J2fmVDXZ2uyyi0FY1xC953C15dM0R1/cr6kwe+hiuxATact5/4E88vnjtmHTTXOiHfOdQ7Y8/8b1FKVpUNxTEUknQnQqrH+OU56W4jYdR7E6W2tc+K5OILaR+QnefWu9qo12BpFO+1nRly0WMTWc0X+PvxeM4ap1az7t1hWN2zO51B95B8KtBZIR9Kw9YuHTtS355MeaMKAMBfP9v98uBXn+ovr8j5azI/6hX+AH57kWk=c[�k\   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �d !	%�udengxiaowu跳转协议eNpdj81OwkAQx8/sU/TkSZCCnxgOPoEHn4CExhCxIAEDcU2gYFQQCQcIUDQpIhCjYCIfFVJ4Gba7fQt3uySoc9mZ3/znP7MACDSAUxBCxydbR3IwFgkFyeSLGO+oWCL9PgCiS5akYDhyGpL9ItF6uD21tJH11OIyq5kmnQyuz5BR2Vwr3QKXLvXibwXwuOKpqORPJnl75aG8LPU37gq8rmggFjj3X21cJCLxwzMpxRMffy4D4YTE0+s/Hvb0alcjh0qKWfkEALJ1kAyGZu0RAuhz0mBf5hkNAEW75i7YKFMjwSYAehwC5HezysuqjyquvFrpe6JojG0LDmh2FLQYrdkO1ZFxAeUXuFlA7QZju5ShdherNaI9mNkbxvaYbthCeY0McnjaZWyf7VC+yejZHM5QvmeOeyjTpJNIv2P9A9o361OSNbA6oG6MiW4KrU6VHc5KkZZLPU1l1m15dZPIvvLfTPTaSrpHtdQJmc8pBOAHA0UQNQ==c[�<�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             �e !	%�edengxiaowu跳转协议eNpVj81OwkAUhdfMU8zKlSAFfzEsfAIXPgEJjSEqIAEDcUygYFQQCQsIUDQpIhCjYCI/FVJ4GaYzfQtnOiTo3fSe75459xYAyAo4IQwdn2wdhYOxSChIJ9/U+MDFEu33AZBcYVkOnkdOQ2G/RLUeaU8tbWQ9t4TNaqZpJ0PqM2xUNtdONxTWpV786wAeVzwVlf3JpBivMpTXpf4uUoHXFQ3EAhf+643LRCR+eCanROMTn6vAeUIW7c2/DPv1alcjh0uKWfkCAPF1iA6GZu0JAeRzsuK/LDpWAEm2FinEKLMgaBOAPA6IxN1cebn6rJLKm5V+oIrG2TZ0ILOj4MVozXaYj44LOL8gzQJuNzjbZQy3u0StUe3RzN5ytsd9wxbOa3SQI9MuZ/t8h/JDRy/mcIbzPXPcw5kme4n1ez4/YHOzPqVZg6gDlsaZ5GbQ6lT54VxKTC71NLNZd+XVTZLXhixStdQJnc8ZBOAXFLsFcA==c[�A�    �  �                                                                                                                                                                       �Lf !	7�=mdengxiaowu收益通知详情页eNp1U1tvEkEUfp9fMU8+EGBhbYFgjC++mJhorJdXlt2Fjpbd7V6C1W0CtXhDoSbYUDDVWop9MGBjbWNB+TPszPLEX3D2ggLB83TmnO9858zMdwCkBgIB0inY7SKuVu3Bt3G/EQhAAEIQ185I8/Wo0CAfj+xuGz8rjQ5+4MqRVT0EtMjunuOTrXt3bvoVIZiCTI5TH4k6gyRezok3pIwMU8Bt4aHx7k+rX3ULKP72rZW70KGyqlv4/d/Opne0dt6a1qA0KrwyyUnP2i+bdvcU1ysmMJMhas7srucdQ9AM+WGKQAI0cb1LfU1XkZSFTsTNcIpyX1Q1JEvzCJhDEqLpIESyBoOcJKiyXwUgvcGgZjX3Seti+LtMxwepVAqCp8AZ49K6IetXNJ3TDc3zkzASnEoh+hKThA82eF7UfPQ0VOB0bgL12KdohFkSNj5d/w8ncTlxFnl5aTES5bjsHHRV15Ukw+Qf66KmhzNI1fQ80gQ5F+YlxlDWZE5g2Eg0EY2wLBPhxEwmLkSXl+LxdETgYzyX5hI8m8jE07FYfDmsSNnFnQ11bbYvo9BRNMZt+MBteG3dENWNqxtPHvocLsUm2HTefupPPL146phX0ELphHzlUO1MNPM/oyVZVTYUR1BI0p0IqR3jl+ekt42Ecf9NlMrWPiuRiy+kc0B2nlvv6uN+k6VRvNdxlsdFT0RktV7g78eTBWueWq2Gd4dRbc/udoe9Q/KpSHeFfCiP2rt030hjezrl7SgAAH/9bA8qw18Dyr+yKuevy/y4X/wDzEaP0w==c[�=_    < [y� � <* 
- ` /v2.3.0/market/incomeInfo `
  
**�6m !	+�pdengxiaowu个股的研报eNrVV1tPE0EYfZ9fMU9GCYW2XAQMb/hgYtSIPhlCy7LCxsri7hRFlqStVJBbMeFSCyHcKSoUYkFoi/0xdmZ3n/gLTjtt2S20UBJQ56HZ6ZzzzdfvnM58CyAdoKJC3fFoG14SCGjJ3ZNEqKICA   ԉl !	+�Updengxiaowu个股的研报eNrVVltPGkEYfZ9fMU9NS0QuGmNtfPOlSdM2tX1qDCBudVPKUnaxoa4JUKnUGzZBpGiMNxTbCpqi5Wb5Md2Z3X3yL3RgAIEKCok2nQcys3PON   ҈2k !	+�pdengxiaowu个股的研报eNrtVltPE0EUfp9fMU9GGxbaQghieOPFxKgRfTKkLcsKG9du3Z1iKmtCKxXkVk   ͘^j !	K�Mdengxiaowu策略选股-股票列表接口eNrtnd1T28YWwJ+jv0Ivt8yksNFKWn2k07f7eGfunZv26U4nU   ��Wi !	%�edengxiaowu资讯列表eNqFVVtPE0EUft9fMS/6QCy0zYJNfcX4oIlE9MkYW2GBJtgiu029LMmWqIBYFpICvQEFy0XRLoQi0Bb2v8DO7OwTf8GznbK9QGTSpDPnfOc7l5lzlkOwuI4Os6jQrThRVarvXVYzHR2I41yIHn6mRQ1PL9P1HTK3idUfHGCpdkT2J188e1IHu  ց"h !	-�uodengxiaowuAPP 推送列表eNrjMtRTeN7Z8WzOmmeztzybtuFlw6zn85e+3zOLi/PpjmVPW9c87W8C8gpyEkvS8oty3+/pSSwoCEstKs7Mz+PiBEIjPYVnU7Y9n91Fkk4Aan4/wQ==c[�y�    
**请求URL：** 
- ` /v2.3.0/market/incomeInfo `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |
|platform |是  |string | miniapp, ios ,android   |

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;27&quot;,
        &quot;name&quot;: &quot;34&quot;,
        &quot;image&quot;: &quot;http://wxtest.firstwisdom.cn/upload/20181022/0aeff7d15477b0dc6caba8c28f7b6675.png&quot;,
        &quot;url&quot;: &quot;/pages/firstWisdom?query=yzjg&quot;
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�l9                                                                                               lBgRJLGRH9XV+y9JIhS51BoXJRiIXEw8rZzINwVFmJi17uoMP4BBbiaO0ZBlk5wVa2xAEnf0/7nSEaPHj63nWB1kiw6ocjsiOcTMta/WMqMbO5X8OqsTLUSSc3JnOx3wbKTqe3Y0YVkV10MiLHgsIBkktLgFApLSLbWD4GzoXwthj62IhDRVBu1ss6AXjdgOQ5BAnoSZ1fNQtk4m4XouUAggLhPnB3A3XfRiPRgMCgF2c6PmLyhkyJScPRK6fF6vPfaAOOCGB2Vrps3EJ5uL+/jeZ/bfYV62YKy16drkoZ9aPDKjv3zbh/Pdvf+YzUQCUtCWGo1vVDmqb5mbqlkdRnuy6yWz5Uc/aadKytW9qtx/AerCZLKG+WvZnLNKG8TZZvkEvjbunGcMY43rakEqazi+bkLZcE4Vki6jPVdeHU8yU17fWR5E/aX1e82T/b0sjpNDo9wAhzNkOSJtfITqwt4f9HMJ82ff630hv1b1J144N3CHUFUEBJjcFzjRP5Rbx/RknYAKa3b09lzx/ZzekOYgHX2zAInSlj9RXIz/B18tIXVAzClehrv7QMX84QL21SBuBO4WjYzn8EIOgxn82Ypb5zMQqoXyiSZXjAqv23tbsrchU77ayl5cAJFhAoCJ4nPE2WxrY6M36hsQtqQPy2e0SKEVrbO0rhQArbbCj0JdwOlpF/AUKOlDbMCXThz+/2PRd9IobdC6/173R6fy827vD7k6fHz9/3e+7cziZHo+EAbEQRC40mzcHa7eUwIDY+0vcN6J1yzmmiRvHJOE+1dZ6f2ejQUFm5uqUbLOeJX7RT2GHEa+yZlbcY4CK4pjnpfhocirWk9fdxcjnr1pKAUFa9wbm7Cnj9Nc4lNSzYb7fnZLEWsdsgDXcHag71Mkp+ixT3kRo6cpIuWkiFLe9ZypUaOC1PkYKf+bSDZEi5kGLOVTFNNMyo/zHwcRruZm7W2lmBw2g+7ScU+LzBAye8Nqs8Zp7qZ3OkficR6IwOX1fg/pFX6iQ==cZ�7�  �福林：缺“芯”集中反映了生产性服务业严重滞后】一智快讯4月28日讯，中国（海南）改革发展研究院院长迟福林表示：“中国服务业占GDP比重是51.6%，但生产性服务业占服务业比重却只有4%左右，这就是中国大而不强的重要因素之一。我们的高端制造业缺芯，恐怕集中反映了中国以研发设计为龙头的生产性服务业严重滞后。”（腾讯财经）&quot;,
                    &quot;pubtime&quot;: &quot;2018-04-28 16:47:27&quot;,
                    &quot;source&quot;: &quot;财联社&quot;,
                    &quot;weight&quot;: &quot;0&quot;,
					&quot;stocks&quot;: [ //相关股票列表
                        {
                            &quot;symbol&quot;: &quot;000001&quot;,
                            &quot;name&quot;: &quot;平安银行&quot;,
                            &quot;change_percent&quot;: {
                                &quot;text&quot;: &quot;-2.77%&quot;,
                                    &quot;color&quot;: &quot;1dad51&quot;
                            }
                        },
                        {
                            &quot;symbol&quot;: &quot;000002&quot;,
                            &quot;name&quot;: &quot;万科A&quot;,
                            &quot;change_percent&quot;: {
                                &quot;text&quot;: &quot;-2.35%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                }
            ]
        },
        &quot;time_line&quot;: [
            1524844800
        ],
        &quot;page&quot;: 1,
        &quot;page_size&quot;: 1
    },
    &quot;info&quot;: &quot;OK&quot;,
    &quot;status&quot;: 0
}
```

 **返回参数说明** 
返回参数 weight 1：表示重要标记 0 ：表示普通新闻
返回参数 stocks 相关股票、

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�w  �0EQvnWuXbU8qln6qLMhyJIfIHNsh/ziWmO5q1IrcMQAcVSoFRBAnA+oFUSgitdObRcEiAK1sLenF8GrUXthyTednzDWzsA31lgTb9ya3MDxLZxJX5V8juNVqFKz1xTI94hupbjbL3md9poDKmqKvZb8bK+N968LYzkyT9CPczSo5QU61EpA8gW1CAjX72V08UCW29leOwP/V7XXKgX/2iO6leJuM7O6/Wsvvzv07DXk/Gyvze0F6+eXVi6lH7+n4V9LdOy1IAFe8QG1PAcU/vrtNfHR2tpeOwPfWHtNyLejm8kcnkpSIB/xdGaWvAgE8erke0S3Stwl0lYn+cRTka7fXosAqr6Oh0ym9OxrOv41oVaGiAq1iFgc3g/UqoDjm0EtB/1MrX6Y0DOLeuZ/VnyRArUcohN7hhAg1QfUkn5I8vVTywHJ17ZWz04bU1N4b5FKIIOn4xiTQRf9YWj56w+/dYkAiW3tGBcHvrGOsRVfMeN5PJ4wFw9ouBicQot8Lw5lTfK9oVsp7rZEXeeSCwQyaoaLgXwdyMCZNM5mCLL4zTwFew0phd+gDBDvA2qhAmATwm8CEFqE2svZa2fgG2uv9aN5a3vCzC1QMNaQE+lEnYFEIXznEdsKcdftRvVRzwGuCdAjoCrBbLAZs0FRDKC9tKWGyNcL26tL5mxSz68b8RQFaHmFjlfMI8BzAbSXXt1rFUt7KfeiNO6NdS8Kz/I4/dLcXjCmR2msEFLyMLwBU4N7r+BWirtteK6Pe0kGUGrGAiHfInGQBs0GU0/M0RV8skuDWCgExJbPBL35SfT2jAqqr5FN5uwlaTrIynyAbJmRVYAiXD+xCMiwjYPNpYFv8K65FjTUXi1cLe49glsp7va0VWvPBFXZzzPBFnWIPXqSAbQVM0EaDnELL488WbJjF5l5CsQKiI53IQEYWNnLz+Ak5Gd32JxYtub2qcXbEKV4myB4emAugPYctGTwUDt7xM64N9gjJpY68weeTxpvNmgEmvlWil54BLdK3    CVBQWtz3yr78Tv/MkvQAbBXAhb52rvAuxt6ZgUnc4XlcSqRBz5gttnMSoBvb+eiOO4Ndi7y43gqSS924WXbeeO59wZupbhbdqRWDl3wEEi+fnrEOFi208DkFozne1fPXMTJagBtCwSJfZ4HYz9hzs7QMbRkEidIfMBs0w0tEHy9xc189zseTxCn2JpOUWCWE9WA2eYzC4V23uHmjHuDneJkztizDbWxSiPUzMmt5F94BLdS3C2laH3cQx6ITUmMKPl7QW98wljaojaTI90MoC2DVgCi1JRVaM7fM7k0Tr+kls1TppRzxSfQChxQpWakAUC8r/f7bLwqHOWppVyRJBRA2/z1DUFo51ixM+6NTmiYwJvbhdEVPb9OYwcGpbAbzwNEYQeGR3IrxWWkiO25zw0FseLrjxVD0VNeqQDair1uquDn1WhjbA3vxKkFixV6e904IYD2ktDyZPB8DW1rzuU8ToICaCseWeLaOT9W6YSkBudbOVzFq7/Qi7whSk8t2Y+bXRl81zOmPg0+krmrpriHEoBKMxZKVNXnoTczcVT4/QUFx9he3KO0rRhCoPiCWvJzLzeDWr6d82OVTrxrcBzjJG0lMsbzSTqJviWRWqJvCkeSuJ4ZWAf5igKlKyf6Vrhm5DNUlCDqfO1RZzutu+wHaqVm5J/9nM6DII2z14x7vbN3ztUj5pF9mGvZIa/OScLOucHFs4WN/+8YP9mnEDMQOOcc2wfZFusaa0fG011Hwj5K1zktuKQndYQzi+RT58xK+8Tko1/wXEo/3sKbK/rhb46YfjhqHaT17NppdooUWTP7xM4XRpfwXBpPTRRWFk+zCYYHJZ1vlozdA9IUlnHOeSWXHGus/mYuH+PcM3IPyBpv143VhPXujX60Rz5geRan35auBdZYWjNenJibmWKP8eYk6V3puGcj+Y40zLlRYXHZSpGmbphrcSuVNldnCq+fF9YPSHfKi5wToxkyRn/8auVn9VzeXNy50xd98Pdo6DQb/xOjgNIFcZ���  ܸ�力雷达的历史',
			'tech_winners' =&gt; '主力雷达的牛股',


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;top_history&quot;: {
            &quot;status&quot;: &quot;3&quot;,
            &quot;list&quot;: {
                &quot;time_line&quot;: [
                    1525795200,
                    1525622400,
                    1524672000,
                    1524585600,
                    1524499200,
                    1524412800,
                    1524153600,
                    1524067200,
                    1523980800,
                    1523894400,
                    1523808000,
                    1523548800,
                    1523462400,
                    1523376000
                ],
                &quot;data&quot;: {
                    &quot;1523376000&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;数据港&quot;,
                        �      &quot;stock_id&quot;: &quot;603881&quot;,
                            &quot;include_price&quot;: &quot;40.45&quot;,
                            &quot;include_time&quot;: 1523376000,
                            &quot;quit_time&quot;: 1523462400,
                            &quot;quit_price&quot;: &quot;41.01&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+1.38%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;大烨智能&quot;,
                            &quot;stock_id&quot;: &quot;300670&quot;,
                            &quot;include_price&quot;: &quot;35.50&quot;,
                            &quot;include_time&quot;: 1523376000,
                            &quot;quit_time&quot;: 1523462400,
                            &quot;quit_price&quot;: &quot;34.94&quot;,
      �                        &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-1.58%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;1523462400&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;名臣健康&quot;,
                            &quot;stock_id&quot;: &quot;002919&quot;,
                            &quot;include_price&quot;: &quot;40.40&quot;,
                            &quot;include_time&quot;: 1523462400,
                            &quot;quit_time&quot;: 1523548800,
                            &quot;quit_price&quot;: &quot;40.95&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+1.36%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                  �        {
                            &quot;stock_name&quot;: &quot;润都股份&quot;,
                            &quot;stock_id&quot;: &quot;002923&quot;,
                            &quot;include_price&quot;: &quot;46.60&quot;,
                            &quot;include_time&quot;: 1523462400,
                            &quot;quit_time&quot;: 1523548800,
                            &quot;quit_price&quot;: &quot;45.31&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-2.77%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;1523548800&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;名臣健康&quot;,
                            &quot;stock_id&quot;: &quot;002919&quot;,
                            &quot;include_price&quot;: &quot;40.95&quot;,
                            �  &quot;include_time&quot;: 1523548800,
                            &quot;quit_time&quot;: 1523808000,
                            &quot;quit_price&quot;: &quot;41.40&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+1.10%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;科蓝软件&quot;,
                            &quot;stock_id&quot;: &quot;300663&quot;,
                            &quot;include_price&quot;: &quot;36.28&quot;,
                            &quot;include_time&quot;: 1523548800,
                            &quot;quit_time&quot;: 1523808000,
                            &quot;quit_price&quot;: &quot;20.82&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-0.47%&quot;,
                                &  �quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;1523808000&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;科大国创&quot;,
                            &quot;stock_id&quot;: &quot;300520&quot;,
                            &quot;include_price&quot;: &quot;24.34&quot;,
                            &quot;include_time&quot;: 1523808000,
                            &quot;quit_time&quot;: 1523894400,
                            &quot;quit_price&quot;: &quot;25.36&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+4.19%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;凯伦股份&quot;,
                            &quot;stock_id&quot;: &quot;3007  �15&quot;,
                            &quot;include_price&quot;: &quot;50.42&quot;,
                            &quot;include_time&quot;: 1523808000,
                            &quot;quit_time&quot;: 1523894400,
                            &quot;quit_price&quot;: &quot;29.02&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+4.01%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;三五互联&quot;,
                            &quot;stock_id&quot;: &quot;300051&quot;,
                            &quot;include_price&quot;: &quot;11.59&quot;,
                            &quot;include_time&quot;: 1523808000,
                            &quot;quit_time&quot;: 1523894400,
                            &quot;quit_price&quot;: &quot;11.67&quot;,
                            &quot;scope&qu  �ot;: {
                                &quot;text&quot;: &quot;+0.69%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;伊戈尔&quot;,
                            &quot;stock_id&quot;: &quot;002922&quot;,
                            &quot;include_price&quot;: &quot;30.64&quot;,
                            &quot;include_time&quot;: 1523808000,
                            &quot;quit_time&quot;: 1523894400,
                            &quot;quit_price&quot;: &quot;29.25&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-4.54%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;1523894400&quot;: [
                        {
                            &qu  �ot;stock_name&quot;: &quot;聚灿光电&quot;,
                            &quot;stock_id&quot;: &quot;300708&quot;,
                            &quot;include_price&quot;: &quot;30.36&quot;,
                            &quot;include_time&quot;: 1523894400,
                            &quot;quit_time&quot;: 1523980800,
                            &quot;quit_price&quot;: &quot;31.75&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+4.50%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;康强电子&quot;,
                            &quot;stock_id&quot;: &quot;002119&quot;,
                            &quot;include_price&quot;: &quot;17.52&quot;,
                            &quot;include_time&quot;: 1523894400,
                            &quot;quit_time&quot;: 1523980800,
        �                      &quot;quit_price&quot;: &quot;18.10&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+3.30%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        }
                    ],
                    &quot;1523980800&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;乐视网&quot;,
                            &quot;stock_id&quot;: &quot;300104&quot;,
                            &quot;include_price&quot;: &quot;4.68&quot;,
                            &quot;include_time&quot;: 1523980800,
                            &quot;quit_time&quot;: 1524067200,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+5.98%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
           �                   }
                        },
                        {
                            &quot;stock_name&quot;: &quot;三五互联&quot;,
                            &quot;stock_id&quot;: &quot;300051&quot;,
                            &quot;include_price&quot;: &quot;11.44&quot;,
                            &quot;include_time&quot;: 1523980800,
                            &quot;quit_time&quot;: 1524067200,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+3.15%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;朗玛信息&quot;,
                            &quot;stock_id&quot;: &quot;300288&quot;,
                            &quot;include_price&quot;: &quot;25.20&quot;,
                            &qu  �ot;include_time&quot;: 1523980800,
                            &quot;quit_time&quot;: 1524067200,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+1.98%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        }
                    ],
                    &quot;1524067200&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;长川科技&quot;,
                            &quot;stock_id&quot;: &quot;300604&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524067200,
                            &quot;quit_time&quot;: 1524153600,
                            &quot;quit_price&quot;: &quot;67.16&quot;,
                            &quot;scope&quot;: {
                                &quot;text  �&quot;: &quot;-0.24%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;富瀚微&quot;,
                            &quot;stock_id&quot;: &quot;300613&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524067200,
                            &quot;quit_time&quot;: 1524153600,
                            &quot;quit_price&quot;: &quot;181.44&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-1.39%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;国科微&quot;,
                            &quot;stock_id&quot;: &quot;300672&quot;,
     �                         &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524067200,
                            &quot;quit_time&quot;: 1524153600,
                            &quot;quit_price&quot;: &quot;68.83&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-5.71%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;1524153600&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;富瀚微&quot;,
                            &quot;stock_id&quot;: &quot;300613&quot;,
                            &quot;include_price&quot;: &quot;181.44&quot;,
                            &quot;include_time&quot;: 1524153600,
                            &quot;quit_time&quot;: 1524412800,
                            &quot;quit_price&quot;: &quot;0.0  �0&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+3.97%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;长川科技&quot;,
                            &quot;stock_id&quot;: &quot;300604&quot;,
                            &quot;include_price&quot;: &quot;67.16&quot;,
                            &quot;include_time&quot;: 1524153600,
                            &quot;quit_time&quot;: 1524412800,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+1.24%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&q  �uot;: &quot;北信源&quot;,
                            &quot;stock_id&quot;: &quot;300352&quot;,
                            &quot;include_price&quot;: &quot;6.14&quot;,
                            &quot;include_time&quot;: 1524153600,
                            &quot;quit_time&quot;: 1524412800,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-0.65%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;熙菱信息&quot;,
                            &quot;stock_id&quot;: &quot;300588&quot;,
                            &quot;include_price&quot;: &quot;33.94&quot;,
                            &quot;include_time&quot;: 1524153600,
                            &quot;quit_time&quot;: 1524412800,
                            �  &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-3.95%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;1524412800&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;北京君正&quot;,
                            &quot;stock_id&quot;: &quot;300223&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524412800,
                            &quot;quit_time&quot;: 1524499200,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-3.47%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                             � }
                        },
                        {
                            &quot;stock_name&quot;: &quot;乐视网&quot;,
                            &quot;stock_id&quot;: &quot;300104&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524412800,
                            &quot;quit_time&quot;: 1524499200,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-3.55%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;宣亚国际&quot;,
                            &quot;stock_id&quot;: &quot;300612&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;:   �1524412800,
                            &quot;quit_time&quot;: 1524499200,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-6.25%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;1524499200&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;必创科技&quot;,
                            &quot;stock_id&quot;: &quot;300667&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524499200,
                            &quot;quit_time&quot;: 1524585600,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+21.61%&qu  �ot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;浙大网新&quot;,
                            &quot;stock_id&quot;: &quot;600797&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524499200,
                            &quot;quit_time&quot;: 1524585600,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+3.36%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;汉王科技&quot;,
                            &quot;stock_id&quot;: &quot;002362&quot;,
                        �      &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524499200,
                            &quot;quit_time&quot;: 1524585600,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+2.35%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;紫光国芯&quot;,
                            &quot;stock_id&quot;: &quot;002049&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524499200,
                            &quot;quit_time&quot;: 1524585600,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                               �   &quot;text&quot;: &quot;+2.13%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        }
                    ],
                    &quot;1524585600&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;国民技术&quot;,
                            &quot;stock_id&quot;: &quot;300077&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524585600,
                            &quot;quit_time&quot;: 1524672000,
                            &quot;quit_price&quot;: &quot;12.41&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+1.64%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;兆日�  �技&quot;,
                            &quot;stock_id&quot;: &quot;300333&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524585600,
                            &quot;quit_time&quot;: 1524672000,
                            &quot;quit_price&quot;: &quot;13.46&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+1.20%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;海川智能&quot;,
                            &quot;stock_id&quot;: &quot;300720&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524585600,
                            &quot;quit_time&quot;: 1524672000,
                            &quot;quit_pri  �ce&quot;: &quot;30.96&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+0.52%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;飞鹿股份&quot;,
                            &quot;stock_id&quot;: &quot;300665&quot;,
                            &quot;include_price&quot;: &quot;0.00&quot;,
                            &quot;include_time&quot;: 1524585600,
                            &quot;quit_time&quot;: 1524672000,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-3.33%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;15246  �72000&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;吉大通信&quot;,
                            &quot;stock_id&quot;: &quot;300597&quot;,
                            &quot;include_price&quot;: &quot;22.54&quot;,
                            &quot;include_time&quot;: 1524672000,
                            &quot;quit_time&quot;: 1524758400,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+1.51%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;浙大网新&quot;,
                            &quot;stock_id&quot;: &quot;600797&quot;,
                            &quot;include_price&quot;: &quot;14.02&quot;,
                            &quot;include_time&quot;: 1524672000  �,
                            &quot;quit_time&quot;: 1524758400,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-0.93%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;惠威科技&quot;,
                            &quot;stock_id&quot;: &quot;002888&quot;,
                            &quot;include_price&quot;: &quot;33.03&quot;,
                            &quot;include_time&quot;: 1524672000,
                            &quot;quit_time&quot;: 1524758400,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-2.03%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
     �                         }
                        },
                        {
                            &quot;stock_name&quot;: &quot;海川智能&quot;,
                            &quot;stock_id&quot;: &quot;300720&quot;,
                            &quot;include_price&quot;: &quot;30.96&quot;,
                            &quot;include_time&quot;: 1524672000,
                            &quot;quit_time&quot;: 1524758400,
                            &quot;quit_price&quot;: &quot;0.00&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;-5.04%&quot;,
                                &quot;color&quot;: &quot;1dad51&quot;
                            }
                        }
                    ],
                    &quot;1525622400&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;东土科技&quot;,
                            &quot;stock_id&quot;: &quot;300353&quot;,
                            &qu  �ot;include_price&quot;: &quot;15.71&quot;,
                            &quot;include_time&quot;: 1525622400,
                            &quot;quit_time&quot;: 1525708800,
                            &quot;quit_price&quot;: &quot;16.18&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+2.99%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;海特高新&quot;,
                            &quot;stock_id&quot;: &quot;002023&quot;,
                            &quot;include_price&quot;: &quot;11.81&quot;,
                            &quot;include_time&quot;: 1525622400,
                            &quot;quit_time&quot;: 1525708800,
                            &quot;quit_price&quot;: &quot;12.07&quot;,
                            &quot;scope&quot;: {
                                &q  �uot;text&quot;: &quot;+2.20%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        }
                    ],
                    &quot;1525795200&quot;: [
                        {
                            &quot;stock_name&quot;: &quot;德艺文创&quot;,
                            &quot;stock_id&quot;: &quot;300640&quot;,
                            &quot;include_price&quot;: &quot;24.60&quot;,
                            &quot;include_time&quot;: 1525795200,
                            &quot;quit_time&quot;: 1525881600,
                            &quot;quit_price&quot;: &quot;25.80&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+4.88%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        },
                        {
                            &quot;stock_name&quot;: &quot;飞鹿股�    �&quot;,
                            &quot;stock_id&quot;: &quot;300665&quot;,
                            &quot;include_price&quot;: &quot;25.37&quot;,
                            &quot;include_time&quot;: 1525795200,
                            &quot;quit_time&quot;: 1525881600,
                            &quot;quit_price&quot;: &quot;26.25&quot;,
                            &quot;scope&quot;: {
                                &quot;text&quot;: &quot;+3.47%&quot;,
                                &quot;color&quot;: &quot;eb333b&quot;
                            }
                        }
                    ]
                }
            }
        }
    }
}
```

 **返回参数说明** 

注意：
1.接口的返回根据参数的类型 返回对应的数据，也可以多个参数一起传（以英文逗号分隔）
2.返回字段： 
status：0 未登录，1 没有购买， 2 已买， 3 无显示

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[֯3  �         &quot;list&quot;: [
                    {
                        &quot;name&quot;: &quot;门窗&quot;,
                        &quot;income&quot;: &quot;10.54亿&quot;,
                        &quot;percent&quot;: &quot;0.8&quot;
                    },
                    {
                        &quot;name&quot;: &quot;门窗&quot;,
                        &quot;income&quot;: &quot;10.54亿&quot;,
                        &quot;percent&quot;: &quot;0.2&quot;
                    }
                ]
            },
            {
                &quot;category&quot;: &quot;按地区&quot;,
                &quot;date&quot;: &quot;2018年中报&quot;,
                &quot;list&quot;: [
                    {
                        &quot;name&quot;: &quot;门窗&quot;,
                        &quot;income&quot;: &quot;10.54亿&quot;,
                        &quot;percent&quot;: &quot;1&quot;
                    }
                ]
            }
        ],
        &quot;shareholder&quot;: {//股东股  �本
            &quot;date&quot;: &quot;2018-11-02&quot;,
            &quot;lt_stock&quot;: &quot;10.22亿&quot;,
            &quot;all_stock&quot;: &quot;10.22亿&quot;,
            &quot;stock_member&quot;: &quot;3.3万户，较上期增长0.12%&quot;,
            &quot;lt_stock_percent&quot;: &quot;60.58%&quot;
        },
        &quot;organization&quot;: [//机构持仓
            {
                &quot;date&quot;: &quot;2018半年报&quot;,
                &quot;numbers&quot;: &quot;3家&quot;,
                &quot;total&quot;: &quot;1660.40万股&quot;,
                &quot;proportion&quot;: {
                    &quot;change&quot;: &quot;3.60%&quot;,
                    &quot;type&quot;: &quot;up&quot;
                }
            }
        ],
        &quot;manager&quot;: {//公司高管
            &quot;introduce&quot;: [
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;谢永林&quot;,
                    &quot;job&quo  �t;: &quot;董事长&quot;,
                    &quot;hold&quot;: &quot;暂无&quot;,
                    &quot;salary&quot;: &quot;466.97万&quot;
                }
            ],
            &quot;hold_data&quot;: [//增减持
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;项有志&quot;,
                    &quot;date&quot;: &quot;2018-11-01&quot;,
                    &quot;type&quot;: &quot;1&quot;,
                    &quot;change&quot;: {
                        &quot;text&quot;: &quot;+0.15万&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;price&quot;: &quot;10.12&quot;
                }
            ]
        },
        &quot;manage_data&quot;: { //经营评述
            &quot;symbol&quot;: &quot;000001&quot;,
            &quot;date&quot;: &quot;2018半年报&quot;,
            &quot;descrip&quot;: &quot;一、概述\r\n　　公司围绕董事会的战    略部署，以业绩增长为中心，积极开展各项工作，逐步构筑领域、产品多元化的业务结构，实现\&quot;内生+外延\&quot;增长。公司在报告期内的总体经营情况如下：&quot;
        }
    }
}

//业务分类只有一个的时候
&quot;business_cate&quot;: [ //业务分类
            {
                &quot;category&quot;: &quot;&quot;,
                &quot;date&quot;: &quot;2018年中报&quot;,
                &quot;list&quot;: [
                    {
                        &quot;name&quot;: &quot;门窗&quot;,
                        &quot;income&quot;: &quot;10.54亿&quot;,
                        &quot;percent&quot;: &quot;0.2&quot;
                    },
                    {
                        &quot;name&quot;: &quot;门窗&quot;,
                        &quot;income&quot;: &quot;10.54亿&quot;,
                        &quot;percent&quot;: &quot;0.8&quot;
                    }
                ]
            }
			]


```

欢迎使用ShowDoc！c[۳*  �&quot;超跌反弹潜力股&quot;,
                &quot;description&quot;: &quot;市场风格切换，前期暴跌股票，强势反弹&quot;,
                &quot;tags&quot;: [
                    &quot;短期&quot;,
                    &quot;小市值&quot;
                ],
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;stock_name&quot;: &quot;平安银行&quot;,
                &quot;change_percent&quot;: {
                    &quot;text&quot;: &quot;+2.12%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                },
                &quot;change_text&quot;: &quot;入选后最高涨幅&quot;,
                &quot;date_text&quot;: &quot;入选时间&quot;,
                &quot;select_date&quot;: &quot;2018.11.19&quot;,
                &quot;type&quot;: &quot;cdft&quot;,
                &quot;url&quot;: &quot;/pages/firstWisdom?query=cdft&quot;
            },
            {
                &quot;name&quot;: &quot;金牌分析师最看好个股&quo    t;,
                &quot;description&quot;: &quot;金牌分析师重点关注，强烈推荐股票&quot;,
                &quot;tags&quot;: [
                    &quot;短期&quot;,
                    &quot;基本面&quot;
                ],
                &quot;symbol&quot;: &quot;000001&quot;,
                &quot;stock_name&quot;: &quot;平安银行&quot;,
                &quot;change_percent&quot;: {
                    &quot;text&quot;: &quot;+2.12%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                },
                &quot;change_text&quot;: &quot;入选后最高涨幅&quot;,
                &quot;date_text&quot;: &quot;入选时间&quot;,
                &quot;select_date&quot;: &quot;2018.11.19&quot;,
                &quot;type&quot;: &quot;jpfx&quot;,
                &quot;url&quot;: &quot;/pages/firstWisdom?query=jpfx&quot;
            }
        ]
    }
}
```

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c[�С    ~ � ~                                                                                                      �<v !	%���0v !	%��dengxiaowu主题选股
    
**简要描述：** 

- 主题选股接口

**请求URL：** 
- ` /v2.5.0/select/theme_select `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |是  |string |数据类型  
		gphg_daily ：股票回购的股票池
		gphg_winners : 战绩版
		cdft_daily ：超跌反弹的股票池
		cdft_winners : 战绩版
		jpfx_daily ：金牌分析的股票池
		jpfx_winners : 战绩版|
|sort_type | 否  |string | 排序类型 repurchase_price（回购金额）,equity（总股本）  �u !	%�Kdengxiaowu策略列表
    
**简要描述：** 

- 策略列表接口

**请求URL：** 
- `v2.5.0/newindex/getSmartRecord `
  
**请求方式：**
- POST 

**参数：** 

无

 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
      �                                                                                                                                                                                                                                                                                       �`z !	�dengxiaowu登录
    
**简要描述：** 

- 登录接口

**请求URL：** 
- ` pyapi/admin/login`
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|mobile |是  |string |用户名   |
|password |是  |string | 密码    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1NDc0NDY2MTYsImV4cCI6MTU0ODA1MTQxNiwidXNlcl9pZCI6MywidXNlcm5hbWUiOiIxMzc2MDYyODYwMyJ9.sII4nKOoXaLv74ixIrxeAAP1py3rqmSd_D-lGj57ALI&quot;,
        &quot;user_id&quot;: 3,
        &quot;user_name&quot;: &quot;小武&quot;
    }
}
```c\<)a    X10v65oBm5gHXFYei02qwD9kENWNAwD0CULwM3UXMgwspzDxVQNSYEPHzx+AiSbODVFlo49x2QRLyRjuDRD/ccq+wW8NhsTd7MkPR9jYgNm2qS5155k0Qxi5no31UDRMAQxkt6lkoB4X9BLpaU9ktyRbdE5dXV5w8Nel4f1+aOA+qZRVja38eqamP1RWZmWRbL/paH42hcMQl4AA4DE05XCt0oiToc4zxBS2DiYEQ/ncCqJizmNjZqivo0X4aHRpo3qu8VKYg7H35K1BY2NmqKODRqwEOKRS44a4IUtRdiAzH/A+VQ9bh6GIzw3zArQFeZ9HDwqxuWQqdvq+uejYqKH8/FcxM8iaYz8mqxOSKkpF/5IY1HI8i4KD3opHvIcDCLJQvI9zmXJwTbOzVCt2sow8pxATdBOqZrJN6fkgQLXwwpcHQYoWUqf6KQqX/Plv7OUKYzb7QaM1apcIWaMkfRvvYqE0D0BsSgiyM8DwNajGPIFh0KNgbpyhOOgUNdWqnpYxDZUZevNsSZVTmqoLEC1M4fN3m+2280OG1nNkuU9pVc1FoUQ69eCcep7a4TfJ6AG4JlqXGpjJ3oU+YoGBkMaZzap2fW8qbFBNqCJEed+4p1E9eOBmJlrj6+xTm3A7rA4ne2Ratrpr4NOXuEoUru7bbdbHI7u0xwqnIb8IV6Nh4NOp3NQftZFj58WhbRH1fbExY1yfrZMd/76NMnE2ydCu4c1rLH0l/OlN3csd+nPGbLa2O0aOlj6+7rf0EQ5u8/AiRCi03C1pr+tr0W6dFJlENcg7tUhbm8r4qp6njPq/nFm/DIuqHppcL4r6lxXknEbdd6mNg7dTluftmcLrYUVbxoXfNQ0X3mMWthg9/+UFDpvk50aSoDlX0LkGmH9ER3aHxc0xllssLWT2dr2ZrqMu8goe42tbJS9N6LsVX4cv+CjpvmV/iLLXqPqvXZ1RDASGIQai3abUR/erHW9Yt8PlX8tGoWUwXmjkLrOhZTb7Wb+AdYhncY=c[���    H  H                                                              �5| !	1�dengxiaowu添加客户账号
    
**简要描述：** 

- 添加客户账号接口

**请求URL：** 
- ` pyapi/account/add `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |用户ID   |
|account_type |是  |string | 账号类型 1.数字货币 2.股票 3.商品期货    |
|exchange     |是  |string | 交易所  1 :okex  2:bitmex    |
|account_name |是  |string | 账号名字    |
|api_key |是  |string | api_key    |
|secret_key |是  |string | secret_key    |
|pass_phrase |是  |string | pass_phrase    |
|customer_account |否  |string | 账号    |
|customer_password |否  |string | 账号密码    |
|remark |否  |string | 备注    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;id&quot;:&quot;1&quot;
    }
}
```
欢迎使用ShowDoc！c\?V    �  �                                                                                                                                                     �}x !	=�dengxiaowu资管�]x !	=�_dengxiaowu资管系统接口说明
**简要描述：** 

- 除了登录接口，都带上参数token

**测试环境请求URL：** 
- ` http://fmtest.firstwisdom.cn `
  
**请求URL：** 
- ` http://fm.firstwisdom.cn `

**请求方式：**
- POST 


错误码说明：
 1 ：返回成功
 -1：未登录
 其他代表逻辑错误

c\A���]y !	�dengxiaowu注册**简要描述：** 

- 注册接口

**请求URL：** 
- ` pyapi/admin/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|mobile     |是  |string | 手机号    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {}
}
```


c\<(�    ent&quot;: &quot;11&quot;,
                    &quot;price&quot;: &quot;12.22&quot;
                },
                {
                    &quot;date&quot;: &quot;2018一季报&quot;,
                    &quot;percent&quot;: &quot;11&quot;,
                    &quot;price&quot;: &quot;12.22&quot;
                },
                {
                    &quot;date&quot;: &quot;2018中报&quot;,
                    &quot;percent&quot;: &quot;11&quot;,
                    &quot;price&quot;: &quot;12.22&quot;
                },
                {
                    &quot;date&quot;: &quot;2018三季报&quot;,
                    &quot;percent&quot;: &quot;11&quot;,
                    &quot;price&quot;: &quot;12.22&quot;
                }
            ]
        }
    }
}

#空的情况
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;report&quot;: [],
        &quot;rate&quot;: [],
        &quot;hold&quot;: []
    }
}
```
欢迎使用ShowDoc！c\�D  uot;result&quot;: &quot;买入&quot;
        },
        &quot;hold&quot;: {//机构持股比例
            &quot;description&quot;: {
                &quot;num&quot;: {
                    &quot;text&quot;: &quot;11&quot;,
                    &quot;color&quot;: &quot;FEC709&quot;
                },
                &quot;ratio&quot;: {
                    &quot;text&quot;: &quot;2.33%&quot;,
                    &quot;color&quot;: &quot;FEC709&quot;
                },
                &quot;change&quot;: {
                    &quot;text&quot;: &quot;+3.22%&quot;,
                    &quot;color&quot;: &quot;eb333b&quot;
                }
            },
            &quot;content&quot;: [
                {
                    &quot;date&quot;: &quot;2017三季报&quot;,
                    &quot;percent&quot;: &quot;11&quot;,
                    &quot;price&quot;: &quot;12.22&quot;
                },
                {
                    &quot;date&quot;: &quot;2017年报&quot;,
                    &quot;perc              &quot;own&quot;: &quot;2&quot;,
                        &quot;all&quot;: &quot;30&quot;
                    },
                    &quot;market&quot;: {
                        &quot;own&quot;: &quot;122&quot;,
                        &quot;all&quot;: &quot;3393&quot;
                    }
                },
                {
                    &quot;name&quot;: &quot;近3个月&quot;,
                    &quot;times&quot;: &quot;1次&quot;,
                    &quot;total&quot;: &quot;60家&quot;,
                    &quot;industry&quot;: {
                        &quot;own&quot;: &quot;2&quot;,
                        &quot;all&quot;: &quot;30&quot;
                    },
                    &quot;market&quot;: {
                        &quot;own&quot;: &quot;122&quot;,
                        &quot;all&quot;: &quot;3393&quot;
                    }
                }
            ]
        },
        &quot;rate&quot;: {//机构评级
            &quot;num&quot;: &quot;15&quot;,
            &q  ,
                    &quot;color&quot;: &quot;eb333b&quot;
                },
                &quot;hot&quot;: &quot;现为市场调研热点&quot;
            },
            &quot;content&quot;: [
                {
                    &quot;name&quot;: &quot;近1周&quot;,
                    &quot;times&quot;: &quot;1次&quot;,
                    &quot;total&quot;: &quot;60家&quot;,
                    &quot;industry&quot;: {
                        &quot;own&quot;: &quot;2&quot;,
                        &quot;all&quot;: &quot;30&quot;
                    },
                    &quot;market&quot;: {
                        &quot;own&quot;: &quot;122&quot;,
                        &quot;all&quot;: &quot;3393&quot;
                    }
                },
                {
                    &quot;name&quot;: &quot;近1个月&quot;,
                    &quot;times&quot;: &quot;1次&quot;,
                    &quot;total&quot;: &quot;60家&quot;,
                    &quot;industry&quot;: {
                ST7U08f3a8JmoEbWEccll6LzSpAP+SQFQ3DAHQpDeBmqi4UNbKcxQWxqkkVHz54/ATINrE4RZaOPceUJl5IxnBxhvqPlffzeG02Ju1mSGo+xsQGzLTIc6/WlKYZxMy1biqBomEIYiS1S1sC4n1BL20t7ZHkjmKLzqnLGx72ujyszx8F1DUNsry5jVfXpMyP8sq00iT7X2pyr33BIOQFMABIPFXOfysn4kwX5xlCKgsHM9LhHBaTuJDVWqjK6Vp4ER4abViovFssJ+Zw/C1ZW9BaqMrpWaCxCiEeufQCBmT+A86JtYh5GI7w3DArQFeY93HwqBBXoqVeK+ufjwqJHs7HcxE/i+Qx8muyMiFnpZT/I49FIcu7qHrQS/Uhz8Egki0k3+Nshhxs4+wMlQJK9uUZgWodL2ypJ1RJ5xoT8kCB62EFTlFiAAVJ8ROdUvlrrvR3liKEcbvdgLFa1UvDjDGy/K1XkRC6JyAWRQSlPgBsPaohX3AoVB+oCUc4Dgo1abWoh0VsXVSx3hhrYOSkhMYC1Dpz2Oz9Zrvd7LCR1QxZ3lN71eqiEGL9zcpY/N5aw+8TUF3hmWZcLmMnelT5igYGQ03ObHKx63nT6gbZQFOMOPsT7yQqHw+k9Fx7/SrmtAbsDovT2V5TCzr9ddDJKxxFWne37XaLw9F9mkOV05A/xGv14aDT6RxU6rra46dFIW9QrT1pcaOUmy3Rbb8+TdLx9olo3sFNqLH0l3LFN3csd+nPGbJa3+tNcLD093W/oYlydp8BEyFEp+FqDX9bX4t06aTKAK4B3KsD3N5WwNX0PGe0/ePM+GVcUDVicL4r6lxXknEbdd6mNg7dTluftmcL5cKqR8YFHzWN147BhQ10/w+l0HlLdmooAZZ/CZFrhPVHdGB/TGiMs9hAayejte3NdBl3kUF7ja1s0N4bQXvVX8Yv+KhpfKK/SNprsN5rxyOCkcAgbLJotxn88Gat6xX7fqj+Y9EgUgbmDSJ1nYmU2+1m/gErup1ic[���    v &D� � v                                                                                                    �Ou !	%�Uwdengxiaowu机构关注eNrtWF1P01AYvj+/oonBi8k+G0TwUjQxMdGIXhFCS1e3hq3F9kxESzIGMw50k2Qag  r�gt !	%�vdengxiaowu主题选股eNrtWdtOE0EYvmafYm4wij1tK0jwFUw0Hq6MaZftUKptt+5OEUIhQEBboRRUSAORWBCCJnKICPSgfZnOdHvFKzjbbenuUijEhOPOTXdm/sP8/3wz882UAbQwbW2ljRF5bZQkk3Jh6yC/0NYGGMYKivu58nKqPBKXx9JkehUnVxgqK2/uke2x508eVgWtwAPsfU5bu  �'s !	%�wdengxiaowu机构关注eNrtWF1P01AYvj+/ojd4MdlngwheiiYmJhrRK2NY6erWsPVgeyaiJdkGJA50k2Qao  �Wr !	%�evdengxiaowu主题选股eNrtWVtPE0EUfmZ/xbzgQ6V3QYJ/wUTj5cmYdtkOpdqbu1OkoRggoK1QCiqkgUgsCEETucQK9qL9M53p9om/4Gy3pbvLlkJMgMLOS/fMnO+cOWe+mTm7ZQBtjMlU2ZkQtyZJKiWW9o6KKyYTYBgzKP8uVNfT1YmEOJUh85s4tcFQXXH3kOxPP  �Oq !	%�Uvdengxiaowu主题选股eNrtWdtOE0EYvmafYm7wotKzIMFXMNF4uDKmXbZDqfbk7hRpKAYIaCuUBRXSQCQWhKCJHGIFe9C+TGe6veIVnO22dLdsKcQEKOzcdA7/Yf5/vpn5ZssAWhiTqbwzIW1NElGUintHhRWTCTCMGZR+5yvrqcpEQppKk/lNLG4wVFbaP    quot;total&quot;: &quot;&quot;,
            &quot;list&quot;: [
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                }
            ]
        }
    }
}
//超跌反弹
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &q    81hl2AA8siOemEQutUK8DAVF6oamc/gfLKiSRUfP3r6DCg2cXKMzB16jqpVPJOI4sIE9R8tbefw0mRU3twhqekoE+2y0qKMvfKlVq0gaq02Uwk0EIYgSlKbtCYh0R/y0drcFklsqLbomFpafOFen9vL+QMDgPqmUZZW1/Hikrzzs7QwrlbJ9tea4Ft/KARFCXQBEkuVct9L8Rjt4r09SGNjd0Lem8LJBM5nDDYqgo1tvAr39NdtlN/PluJTOPaOLM0YbFQEG9igAUuCiNxq1ADPrGnCBmT6I84mq3GLMBwR+V5Ogu6w6OfhQT6mhkzdlpe/HOTjFt4v8pEAh5Q+8nu0PKKkppj7o/QNQE50U/WQj+pDkYchpFhIfMCZHbK7jjMTVApYgpz4GiJ3HxeIwNt4fwyP5O9UJkYdKKjMnXGc5XS2Pk4vlHgLJ/FAVQMUQYXPdKSlb9ni30kKH8bj8QDGbtdOGzPIKPK33kQE9EBCHIpI6ncXcFg0Xf5Qj1DrqApHeB5KVWmtqJdDXE1UtV7vq+PnqITOAtQ7czrYTivLWp0OsrhD5re0XvW6SEBcwKiMkz+O1wj4JVRTeKHrV8rgkRZNvgaC3YLBmUMpbCNvet0QFzTEiDO/8Ea8/GlXTk81169AUW+Addpcruaaeiw2nocGeYX9SO/uLsvanM7WkxxqnAoBQdTrw26Xy9WtfjfUHjopCmXh6u3JsyvF7GSRbgfL4yQda54I48I2oMbWWcwWhu/Z7tOfU2S1tgUY4GDr7GgdpolytZ4CEwKiw3AfD39HxzHpapAqE7gmcC8PcNuPA66u5SWjbx9ihi7igKryhbMdUWc6kszT6OotanPTvWrz03RvoVxYc/04562mfg8yubCJ7v+hFA2umFc1FO01+CjsDwmNuRebaL3KaG16Ml3EWWTSXnMpm7T3RtBe7Yv5OW819af786S9Juu9djwiFAl2Q4NF1mHyw5s1r5fs/VD7f6NJpEzMm0TqOhMpj8fD/APG6qeDc[��  
0.86%~1.23%&quot;,
                    &quot;notice_date&quot;: &quot;2018-11-06&quot;
                },
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;type&quot;: &quot;董事会预案&quot;,
                    &quot;repurchase_price&quot;: &quot;2.8亿~4.7亿&quot;,
                    &quot;equity&quot;: &quot;0.86%~1.23%&quot;,
                    &quot;notice_date&quot;: &quot;2018-11-05&quot;
                }
            ]
        }
    }
}
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;gphg_winners&quot;: {
            &quot;date&quot;: &quot;&quot;,
            &  ,year_change_percent（半年涨幅） ,market_value(市值)   |

|sort     | 否  |string | 顺序类型 desc,asc    |

 **返回示例**

``` 
//股票回购
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;gphg_daily&quot;: {
            &quot;date&quot;: &quot;2018-11-20更新&quot;,
            &quot;total&quot;: &quot;20只&quot;,
            &quot;list&quot;: [
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;type&quot;: &quot;董事会预案&quot;,
                    &quot;repurchase_price&quot;: &quot;2.8亿~4.7亿&quot;,
                    &quot;equity&quot;: &quot;    svCh9PFABuB6DbR/Zme03rFX7Bb991twAx+IL1YTnue9znPe973tE8GKP0CFou6E9I+hEk8rpVyhwdvLRYKACtFkkWSWsCLe2QvQ2JpHN8EOlbLfiG7kXt3blaBVspNPXbZhmwOuyAhyE7ZvRyagKKXEfinDOKhMMEHpqGIKDeoLGYQkDcFfBCvcOgUt2+N36XK7DgeIa/rGmTjFr96KePS4o9QVFZ3v+LUsqxl98lqTAbyqFW/yllURsatlZKt1cc6QpoNTEI/JZPVrH4vIZEXvJSsRdbVdObGWAUDAKXLKiXwu5T6vqh8X9Y1AbfbTYFnoMx94VEQoisSYlBQMsajlGOwaYoXHsLaRBUcZFlOqqKboR4GMTWowd6YE7nyPtVn7XajAlpuXl1L1LFNXJzEivx0eY/NlK1QIRjoDmnAEPcEtSbidDXn0DmKhX4otoZdv3Z12DFijE2Rc4NdVLI+RvBy/QklySiJhvBGCi+t9SWZm6RpevKkkn2wTYcayyn5Is5HcLJoVE6d31YjhQ7EbaQ1ZQLihDrpfdO6vbZFYAJcqxyttOLEK5mjdwTxAU5qqz3ZWj9GIESMvzXwkgPvfD46khc8Qf1AzvYueAMPZ4TWdXr2ZiOO8bfpox1dytyl1A2qACNOcahvwU5X35LpEbqX6ON07Mk7R8l/Isnn581z3jwnbx76vHn+0+ZpefIAdEiv6ncYxJndTnZBLX4EPS1MNaWhThnVrJQU9Ld9mZVCDi+m21IxifJBv8ckirwI646RZBO6OfxTRsz5G42YWDbu/el02Wh64B/xjBdpm8s1cApu8ZRtnqfp4FR33eEcVvJRvL1JltJHJ2Q+S8formmRZ7n2t4qt9l751W9I55xwYf9MJXRZyYfOWpH0nLbPWkJ/10nq9kEFxu9c+c8KQLY2tFJM+VZSE5lxH5wZg+zhQfgnraXZ+A==c[���                                                                �  �                                                                                                                       �t{ !	%�#dengxiaowu添加客户
    
**简要描述：** 

- 添加客户接口

**请求URL：** 
- ` pyapi/customer/add `
  
**请求方式：**
- POST 

**参数：** 

添加个人客户：

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_type |是  |string |客户类型： 企业1 个人2  |
|name |是  |string | 名字    |
|mobile     |是  |string | 手机    |
|title     |否  |string | 职位    |
|company     |否  |string | 工作单位    |
|id_card     |否  |string | 身份证    |
|wechat     |否  |string | 微信    |
|email     |否  |string | email    |
|address     |否  |string | 地址    |
|remark     |否  |string | 备注    |
|invest_status     |是  |string |客户状态： '客户投资状态1：接触中 2：暂停搁置 3：投资中'    |
|invest_remark     |否 |string | 搁置说明    |
|salesrep     |是  |  8   4 4 | 跟进人    |

添加企业客户：

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_type |是  |string |客户类型： 企业1 个人2  |
|name |是  |string | 企业名字    |
|tax_number     |否  |string | 纳税号    |
|legal_representative     |否 |strin�I{ !	1�=|dengxiaowu添加客户账号eNp1kk9v0zAYxu/+FO+JQ0U6ddzKdRckJBCDc2OSqI2qNCFxtVV4UlOJwZhoJm2Dik1jjK70ACsTlQpbIV+mdsJpXwEnTqG0zJf3z/Pz68eWEYiFcrnorBn3fB4Ecfjlavw2lwOEFOCjS/bymJ2d8BejeNhjwYi3T1nwAYkd8WDEz1uPHtzNcAVUcBrYMZewptn1GlnCug4qSsdLmL/+zsZBygv8/r3Vh5BMYkGL7/85lcqS7byiLHz2q7lFo/NLdrRN48GQd9oU0aIiVuI7zWSpAFWytiC0ukdsy3BLpg6Udwai6RHXrJWBRnt9cZk7KxLMrJZIwzHmSZA3lqdDIZ+Y+vwmHn5k33xYzset99FpH27l2f4m2/X54TshgRxrrGsVXCsbkNZzYycXXd7Z5VtNgAIU7aqxDrBcfGwSK8n+sVXD1nW2xPsIN1PeMUtVo7GATvuS8gzNNch/wRlJsg72vJJTcbG3aGBWm3vvzDhQttNb9DxPJ4PWbFe/BmeDzejYzza5hoXd6gLJus/5175kEIiPFu6xg6OoezH5uS1+GVJVFdBTlAA3ntRtctsjmNQ9mRehcHNGsrzytC+jXZVxFtIxwVNKzv2rmXqmyFCQIYU20EbiBfFPJ3HYnvwIxT9crdhrK7Z2NfZ/A3X9eec=c\<;�    �  �                                                                                                                                                                                                                                             �rw !	%�dengxiaowu机构关注
    
**简要描述：** 

- 机构关注接口

**请求URL：** 
- ` v2.5.0/nstock/get_organization_import `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|symbol |是  |string |股票ID   |


 **返回示例**

``` 
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;report&quot;: {//机构调研
            &quot;description&quot;: {
                &quot;num&quot;: {
                    &quot;text&quot;: &quot;12&quot;,
                    &quot;color&quot;: &quot;FEC709&quot;
                },
                &quot;change&quot;: {
                    &quot;text&quot;: &quot;有所增加&quot;     K �K                                                                                                                                                                                                                                                                                                                               �w !	+�U~dengxiaowu跟进人列表eNrjUgACLi2t5+saXixrfNbf/2L/hvd7ZmlpKXBx6Sq82D7/xf7ZT3btetox/cXCFc/6lj7tX8wFVP5i/fZnG5tCg3yganUVEhT0CyoTCzL1k0uLS/JzU4v0ixNzUouLUguKFRK4wHZAND2btvPpnn6wPqC2AP/gEAWQiU/7m55NhVv9bPoCLi4FoJb9U57Onvd8ya4n+7qB6rkSEhIUuKq5QI5WKyzNL7EuLkksKS2GsK0UDHWQpHKL02HiEDo/G0IjK0pJLEmEqYoGi4NANZyFUJmZgmqaIbJhqEphPkfV8Lyv+8W+TggbrqlWhyRLjciw9GnvrKeLV6PbC2bFctWCgpQLAHUwtBg=c\<Lb�v !	=�]xdengxiaowu资管系统接口说明eNrj0tJ6vq7hxbLGZ/39L/ZveL9nlpaWAheXrsLLmUue7Gp7PnP3071Tn/Utfdq/+P2enpfNe5/uWPZkR9fT/qZnUzeU5Gen5nFxaWk929r9Yv3U533rny5qfrF++7ONTaFBPlCzdBUSFDJKSgqs9PXTcktSi0v00jKLikvKM4tT8nP1kvNzFRK4FBSAhuDViEUTTMezaTuf7ukHawLqCfAPDgF6gIsLAHRhZr0=c\;��  uot;data&quot;: {
        &quot;cdft_daily&quot;: {
            &quot;date&quot;: &quot;2018-11-20更新&quot;,
            &quot;total&quot;: &quot;20只&quot;,
            &quot;list&quot;: [
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;year_change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;market_value&quot;: &quot;2018亿&quot;
                },
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;  ,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;year_change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;market_value&quot;: &quot;2018亿&quot;
                }
            ]
        }
    }
}

{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;cdft_winners&quot;: {
            &quot;date&quot;: &quot;&quot;,
            &quot;total&quot;: &quot;&quot;,
            &quot;list&quot;: [
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12  .33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                }
            ]
        }
    }
}
//金牌分析
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &quot;jpfx_daily&quot;: {
            &quot;date&quot;: &quot;2018-11-20更新&quot;,
            &quot;total&quot;: &quot;2只&quot;,
            &quot;list&quot;: [
                {
                    &quot;symbol&quot;: &q  uot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;number&quot;: &quot;10&quot;
                },
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    },
                    &quot;number&quot;: &quot;10&quot;
                }
            ]
        }
    }
}
{
    &quot;status&quot;: 0,
    &quot;info&quot;: &quot;success&quot;,
    &quot;data&quot;: {
        &    quot;jpfx_winners&quot;: {
            &quot;date&quot;: &quot;&quot;,
            &quot;total&quot;: &quot;&quot;,
            &quot;list&quot;: [
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                },
                {
                    &quot;symbol&quot;: &quot;000001&quot;,
                    &quot;name&quot;: &quot;平安银行&quot;,
                    &quot;price&quot;: &quot;12.33&quot;,
                    &quot;change_percent&quot;: {
                        &quot;text&quot;: &quot;+11.22%&quot;,
                        &quot;color&quot;: &quot;eb333b&quot;
                    }
                }
            ]
        }
    }
}
```
c\Xl�  �  �]                                                                                                                                                                                                                                �f} !	1�{dengxiaowu添加产品方案
    
**简要描述：** 

- 添加产品方案接口

**请求  -�2~ !	+�dengxiaowu跟进人列表
    
**简要描述：** 

- 跟进人列表接口

**请求URL：** 
- ` /pyapi/customer/salesreps `
  
**请求方式：**
- POST 

**参数：** 

无

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;salesrep&quot;: &quot;王辉&quot;
        },
        {
            &quot;id&quot;: &quot;2&quot;,
            &quot;salesrep&quot;: &quot;王博士&quot;
        }
    ]
}
```
c\<Lm   n !	1�sdengxiaowu添加产品方案
    
**简要描述：** 

- 添加产品方案接口

**请  +    a   a                                                                                     ��  !	%�adengxiaowu客户列表
    
**简要描述：** 

- 客户列表接口

**请求URL：** 
- ` pyapi/customer/list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|type |否 |string |客户类型  1:企业，2：个人  |
|status |否  |string | 客户投资状态 1：接触中 2：暂停搁置 3：投资中    |
|page       v�} !	%�5dengxiaowu上传文件
    
**简要描述：** 

- 上传文件接口

**请求URL：** 
- ` pyapi/upload
 `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|name |是  |file |file 目前只支持英文名|

 **返回示例**

``` 
 {
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;upload_file&quot;:&quot;http://fmtest.firstwisdom.cn/uploads/2.text&quot;
    }
}
```c\<N�    �  �                                                                                                                                                                                          �9x !	1�}dengxiaowu添加产品方案eNptkk1vEkEYx+/zKebkgZRWPNarFxMTjS/nZbK74gr74u7sgbhNoKktltAlKUi1Wm2s0IOF1iK0QOTLMLPLya/gLLOLkGUuz8w8v+flP88AyBZIJLx2wW8Wqev648u/o0+JBAQgCWl/SPa/TQYtclikH27paYke/CDud8Ai/E6fXm2/ePooxJMwDY08MpQNw9QlW8SCkUPaBpIkmAazGjyC5SEjdxbEYp48fvYcBumIu03r89IOP5JqxSHjd9PCe8e7GpKTsuN3uvTowAHOZpKtoPnZjh+T0EmG14wQbQvrqmwKigQdetRhlxY2FS0DHa92Tkv9hw84iERRtzW8gvO7TeLOuUgX42aFl1nIn2me1LJkLOC8IcdA//cOY7kgmFoPdF40/G6L3BThvXV6XQ82oQZd0VYnYYzXqiximq3GKJZ7uueGlIWRyVpS1BXZRgXSKtNGb9rohnROF7O2IciaZMXxy+K0cUE/f4VLL8icQtBKjPeGh167sdSyijSUkVWZvftLOd6Q1z71qrt+9zZSiEwzLygalk3ZwnGdtZ53vE9Ku7RUhdG0FE1UDJQTMjYyEYucV2FpgnmNv5BBnVRcv90Oh3F3DaZ4tCmryMxCh1SbS8LP9uj1eSgaYyS+ChRYEffa0jU2S+9nc3Lzi+HTjzuTYS+gAWT/f1wjxyfe2WDyp8w+P0in0xC8BUG/d97YOr7PBoRti+83YWptwaVameieWz3L7SIkIYwiiuf971Ok0MNNipsZtAW2gl7AP8Ypu5k=c\<I�   i i：** 
- ` pyapi/product_plan/add `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |用户ID   |
|account_id |是  |string |账号ID   |
|product_id     |是  |string | 产品ID   |
|asset_type |是  |string | 资产类型 1.数字货币 2.法币    |
|cur�� !	1�Udengxiaowu资产类型列表
    
**简要描述：** 

- 资产类型列表接口

**请求URL：** 
- ` /pyapi/assets_type_list `
  
**请求方式：**
- POST 


 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;1&quot;,
            &quot;name&quot;: &quot;数字货币&quot;
        },
        {
            &quot;id&quot;: &quot;2&quot;,
            &quot;name&quot;: &quot;股票&quot;
        },
        {
            &quot;id&quot;: &quot;3&quot;,
            &quot;name&quot;: &quot;商品期货&quot;
        }
    ]
}
```c\>��    �  �                                                                                                                                                                                                               �$y !	%�} �dengxiaowu客户列表eNqVVE1v00AQve+v2BOHqFZpuZUrRyQQhRNCttWaYJHEId6ASh0pjoJUEhHnkBZwS0WbEnqAmEotLUlK/ox3bZ/6F9j1xo7zUQR72Z2ZN2/n7YwWQLpAKuV1y37HJJblD39cDexUCgIgQNw9JFvneOu9f3BMGl+w1QYU6zvn5KTy6MHdEVCAEsxvyHl1ca2oIy2rFBYzqo6gBEJqDic7v/DACjNowv17qw8h48JWhWzHNxrcxM13Bh6+CcpvDe+kj/frhu+ckg8NAxgrAl2s5vDETQEawshNEWgjr0ADNzvQ0FFBzaWpEcrgVBykIxkVdQ4b40Z6SW3bP6t6tZ+kbC7R0qhy/2vHvfgOl5llV7C5R5qmd9mFt5gjhLMw587LaQWG5yn2KDDCiLr6+npgHDUAgPQRhy28u+8d9dzfdfqCQJIkCDYBA9x4UdTQba6In1fg0kIilNXTkZ/v2nO+J0HrMpIjFOcdx1g3o9jjOMbW5oQ1zogGQWTdmCpqFq3mXio6EudKmEXn5KwyqYd8anjtWlLTbJYuZxS9oOQnM4N+FVuOO6i5vd7f82NF6vr/6RHn1BsN1D9eyR5xDo07MN0Lm88s90wQlWLrycJUQ8MBU3NPtdmOJ68vFJQcEhn4GskJNjauEWr55jwY0pCciYnAZJklUGIzDQD7dsjuKT6y+cgHrY++47j9tvfZpD+Jt1cPOjvBwZlnV5Mh/nPRbPLt0B823Muh1zpefaa9uqOtXQ3MP7FW2jA=c\=�   � �� 2：暂停搁置 3：投资中    |
|page     |否  |int | page    |
|page_size     |否  |int | page_size    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;customer_type&quot;: 1, //客户类型
                &quot;invest_status&quot;: 1, //投资犄n� !	1� �dengxiaowu客户账号列表eNqtU8tOwkAU3c9XzMoFoSHqTrduTEw0PlbG0AoVJ0qLdholjIkYTTRE6gIR0RifhIWxmmCIivZnmGlZ+QtOO4BoXBHvZu7cOef03M4dAHmAUMh92PYqWWZZnvP42SiHQhAACdKHa7Zf92oVatXp/ol3VWX5O2rdAM7w7Dp72pmbnmjDJSjDSCqtpFAkZhpYT6rrESUW000NR1eRgaEMgi8JHiu+0IYVUDlzanJmFvqi1Nphx10DRGzp0SGhzl5r+4C4T2/0Ikc8u8ZKeQLIiMTDbyHIxFaCRGqXOaLjJYrikLCSzYtIw5CI1sbHAhSA3JdToGcX7u1r8yPHTQFZliHIAF98YM3U8aiBFWwaIh+Bg+Geo6SR6NTFqq+ItRcUV7DSQc0HdT8y3ewb2fltKP5TdbBX9G+KpiTVn6RFhJPqJr9D3m5boMvfCvflY6gfH2mkJZZU9D8OhvtxEFe1xCZS9A3zt4kgWwBb/qX7c8/OavS2LCaiVTj1bLv5duNeZvnsuue5VqXYunp2y7u9R+LpAADY/bXn5JvvjluozizrG2N67LOR/QI8S0ioc\>�h    �  �                                                                                                                                                     �]� !	1�e}dengxiaowu添加产品方案eNp1k01PGkEYx+/zKebUAxEtPdprL02atOnLeZnsjnQL+9Ld2QPpmoixSiW6JEKxtbU1teChglYKKkS+DDO7nPoVOsvsIkg6l2defs9//s88GQD5AImE31wL6gXmecHg7G//cyIBAUhC1u3R7e/D6wbdK7CPV+yoyHZ/Uu8H4BlBq8vO1189fxLhSZiGZh6Z6pJpGYojE8nMIX0JKQpMg/EdIoPr0L43TuI5z56+eAlDOeqts+rkalcsaXnHpYP3o7UPrn/eo4clN2i12f6uC9zlJB+h+fFMLJPQTUbbnJAdmxgatiRVgS7bb/FNVSfQ9SsnrNh9/EhQSJYNRyd3oaBdp94Eiivi0PjKKRCK15nI2TYmEsmbeJYK/mxwUBQBU4thbae1oN2glwX4YJFdVMNJ7NuysC7nYwGbWKqe4Roc8Rs7EYW00HbMrOQMFF7DdUdbXoTYBFnci6rhean+Gm2UWK0zqrUjOmfIWceUsK7Ys9bpWWFUO2VfvkWgYWI9UoUh58JpWVa54ejtw/ID6b8V+b09v1mbqUtDOspgDfOWrOB5437zyC9vBu2r+LGQZeUlbhRb2CZzOKt0/INtWtxkxTKMe6nqsmqinJRxkIV45p1WDQdf6XWV7nhBsxk17P4CTIlsC2vIykKXlusz73m8xS5Oos4QguTXYQV2zL2xDZ332/9VH17+5vjo08aw1wlpAPm/GFTowaF/fD28KfFPAdLpNATvQOj33lvHIA95I4lji/kyTC1MHWl2Jt4X0ciKOA0piKCYErq3Z6oSnYiQEmEMrYLV0Av4B+CQx28=c\>̰    �  �                                                                                                                                                                                  �A| !	1�-}dengxiaowu添加产品方案eNptkk1v0zAYx+/+FD5xqNaNchxXLkhIIF7OqZWEEtq84DiHikxqp7GVVV0qbaODwWBitDuwdmOl3dqKfpnaSU98BZw6KasyXx7bz+95+T82gHyBVMpvl4JmmXleMD7/O/qUSkEA0pD1h3T722TQortl9uGaHVfYzg/qfQc8Iuj02cX6i6ePIjwNs9AqIktbsbCpODKRrAIyVpCiwCyY1RARPA8debMgHvPk8bPnMExHvXW2Py/tiiOt11w6fjctvXf9iyE9qrpBp8sOdlzgrqb5Cpuf7cQxDd10dM0J2bGJqatY0hTosoMOv7QJ1owcdP29U1bpP3wgQCTLpmOQW7ig26TenIt1cW5WeJGFYkzzpLatEokULTUBBr83OCsEwcxyqPOsEXRb9KoM7y2zy/1wE2vAWDXkYiIHR/xWLaKQHvafYHji6ZYXMTZBmPej6cl+6KhEW1XW6E0b3YgumHLesSTVUOwkfl6eNs7Y569wYXzcKcmmZiR4f7jrtxsLDevIQDlVV/nQX6rJhvz2sV/fDLrX8RQQxkVJM4iKVfsWnXs9/3CbVjZZpQ7jp9IMWbNQQco5CCMeOa+ihZOCk/EXOtinNS9ot6OXuLsEMyIaqzrCeejSenNB+MkWuzyNRBOC5FehAjvmXtumwR/S/9mcXP3i+PTjxmTYC2kA+ecf79HDI/9kMPlT5T8fZLNZCN6CsN87bxyT3OcPRBxb7FdhZumGS7dz8b2wZl7Ym5CCCIopkfe/T1MijzAZYWbQGlgLewH/ANOIunY=c\<a�    �  �：** 
- ` pyapi/product_plan/add `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |�] !	1�e}dengxiaowu添加产品方案eNplk01PGkEYx+/zKebUAxEtPdprL02atOnLeZnsjnQr+9Ld2QPpmoCxSiW6JKLY2tqaWvBQQSsFBSJfhpldTv0KnWV2EWQuz7z8nv/8n3kyAPIBEgm/kQ9qBeZ5weDiX/9LIgEBSELW6dHtH8Nune4V2MENOymy3V/U+wl4RtDssMv1Ny+fRXgSpqGZQ6a6ZFqG4shEMrNIX0KKAtNgfIfI4Dq0742TeM6L569ew1COeutsf3K1K5a0vOPSwcdR/pPrX/bocckNmi12uOsCdznJR2h+PBPLJHST0TYnZMcmhoYtSVWgyw6bfFPVCXT9yhkrdp4+ERSSZcPRyX0oaNWoN4Hiijg0vnIKhOJ1JnK2jYlEciaepYK/GxwURcDUYljbeTVo1el1AT5aZFf74ST2bVlYl3OxgE0sVc9wDY749Z2IQlpoO2ZWsgYKr+G6oy0vQmyCLO5F1fC8VD9P6yVWbY+qrYjOGvKqY0pYV+xZ6/SiMKqes6/fI9AwsR6pwpBz4bQsq9xy9O5h+YEkG6o+Z8Hv7fmN6kxNGtJRBmuYt2MFz5v2Gyd+eTNo3cQPhSwrJ3GT2MI2mcNZpe0fbdPiJiuWYdxHVZdVE2WljIMsxDPvtWk4+Ea7+3THCxqNqFkPF2BKZFtYQ9YqdGm5NvOWp1vs6izqCiFIfhtWYMfcO9vQea/937Xh9R+Ojz5vDHvtkAaQ/4lBhR4d+6fd4W2JfwiQTqch+ABCvw/eOwZ5zJtIHFvMl2FqYepIszPxvojGqojTkIIIiimhe3emKtGJCCkRxtAaWAu9gP+LXMWtc\>ɼ   T T                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          �)} !	1�} �dengxiaowu资产类型列表eNrjUgACLi2t5+saXixrfNbf/2L/hvd7ZmlpKXBx6Sq82NryZNfy5xt3P53X/bRj+ouFK571LX3av5gLqOPF+u3PNjaFBvlAlesqJCjoF1QmFmTqJxYXp5YUx5dUFqTG52QWlygkcIEtgWh5Nm3n0z39YF1ATQH+wSFAu7gUgNL7pzydPe/5kl1P9nUD5bgSEhIUuKq5QC5UKyzNL7EuLkksKS2GsK0UDHWQpHKL02HiEDo/G0IjK0pJLEmEqYoGi4NANZyFUJmZgmqaIbJhqErzEnNTURU/m7rh6drpL7Ysf7qjESIC11arQ5K1RqRY+6Jp4fOlKyiz0JgUC59ObXs6ufHZnPlAr6JbC2bFctWCIhEAXnTOdA==c\>ƽ    b  b                                                                                        �� !	1�cdengxiaowu客户账号列表
    
**简要描述：** 

- 客户账号列表接口

**请求URL：** 
- ` /pyapi/customer/account_list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |客户ID   |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: [
        {
            &quot;account_id&quot;: &quot;1&quot;,
            &quot;account_name&quot;: &quot;bitmex账户1&quot;
        },
        {
            &quot;account_id&quot;: &quot;2&quot;,
            &quot;account_name&quot;: &quot;yingfei&quot;
        },
        {
            &quot;account_id&quot;: &quot;3&quot;,
            &quot;account_name&quot;: &quot;dengxiaowu&quot;
        }
    ]
}
```

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\?�    �  �                                                                                                                                                                          �I~ !	1�=}dengxiaowu添加产品方案eNplkk1vEkEYx+/zKebkgZRWPNarFxMTjS/nZbI7xRX2xd3ZA3GblKa2WEKXpFCq1WpjhR4stBahLUS+DDO7nPwKzjK7CGUu8/Z7/s//eWYA5AMkEn5rI2gUmOcFw4u/g0+JBAQgCVmvT3e/jW6bdL/ADm7YSZHt/aDed8AjgnaPXW6+ev4kwpMwDc08MtUV0zIURyaSmUP6ClIUmAaTHCKC69CBNwniMc+evngJQznqbbLaNLUrtrRSdunw/Xjjg+tf9ulxyQ3aHXa45wJ3NclHaH6yEtskdJPRMSdkxyaGhi1JVaDLDtv8UNUJdP3qGSv2Hj8SFJJlw9HJXSjoNKg3heKKODRJOQNC0Z2pnG1jIpG8ieep4PcWB0URMLUc1nZeDzpNel2AD5bZVS1cxL4tC+tyPhawiaXqGa7BEb9ZjiikhbZjZi1noDAN1x3veBFiE2RxL6qGF6UGG7RZYvXuuN6J6JwhZx1Twrpiz1unF4Vx/Zx9/grnOsaFJNlQ9QVtv7/vt+pzZjWkowzWMO/zGl5047dO/Mp20LmJO4AsKy/x7NjCNlnAWbXrH+3S4jYrVmD8QKouqybKSRkHWYhH3un/aPiF3tZo2QtaregV7i/BlIi2sIasLHRppTHXpNMddnUWFU0Ikl+HFdgx98Y2dP6I/s/G6PoXx8cft0b9bkgDyD/7sEqPjv3T29GfEv/pIJ1OQ/AOhH7vvXUM8pC/DnFssV6FqaWZK83OxOdiNrJinoUURFBMCd3/d6oS3YgpJaYJtA7WQy/gH7jns3k=c\>�    �  �：** 
- ` pyapi/product_plan/add `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |int |用户ID   |
|account_id |是  |int |账�� !	%�mdengxiaowu产品列表
    
**简要描述：** 

- 产品列表接口

**请求URL：** 
- ` /pyapi/product/list `
  
**请求方式：**
- POST 


 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: [
        {
            &quot;product_name&quot;: &quot;test产品&quot;,
            &quot;currency&quot;: &quot;BTC&quot;,
            &quot;capacity&quot;: &quot;2222.00000000&quot;, //容量
            &quot;product_id&quot;: &quot;5&quot;
        },
        {
            &quot;product_name&quot;: &quot;测试产品&quot;,
            &quot;currency&quot;: &quot;EOS&quot;,
            &quot;capacity&quot;: &quot;200.22220000&quot;,
            &quot;product_id&quot;: &quot;6&quot;
        }
    ]
}
```
c\>��    �  �                                                                                                                                                         �Y� !	1�]}dengxiaowu添加产品方案eNp1k01vEkEYx+/zKebkgZRWPNarFxMTjS/nZbK7xRX2xd3ZA3GbQFNbLGmXpFCq1WpjhR4stBahBVK+DDO7nPwKzjK7FLI6l2defs//ecsAyBZIJLxWwW8Uqev6o4s/w0+JBAQgCWlvQHa+jftNsl+kBzf0pET3fhD3O2AefrtHLzdePX8S4kmYhkYeGcqKYeqSLWLByCFtBUkSTINpDO7BdMjQnToxn2dPX7yEgRxxN2htFtrhR1LZdcjo/aTwwfEuB+S47PjtDj3cc4CzmmQrSH6648ckdJLhNSNE28K6KpuCIkGHHrbZpYVNRctAx6ue0VLv8SMOIlHUbQ3/g/M7DeLOuKguxk0DL7KQt2kmalkyFnDekGOg/3uTsbwgmFoO6jyv+50muS7CB8v0qhZsohpMU9bEfEyDIV5zN6SQGuQfMWs5HbEDZLqTbTdELIxMlo6ixtMhwwJplmm9O6l3Qjqni1nbEGRNsiJcCQJAclGc1M/p568hqBuyFqrCgHPgvCyt3jL0rsPsQfhvRd5g32vVF+pSkYYysiqz2azJ8cS91olX2fI7N1GzkGnmBZaobMoWjuG02vWOdkhpi5YqMJqooomKgXJCxkYmYp7xKOPRF9KvkV3Xb7XCmd1fgikuYMoqMrPQIZXGQktPt+nVWTgcjJH4OijCirg3lq6xkXs/G+PrXwyffNwcD7oBDSD7JqMqOTr2Tvvj2zL7IyCdTkPwDgQp33tr6/ghmyW2Lb5fhamluSfVykT33OpZbuchCWEUUVz37k2RwhduUtxMoXWwHuQC/gIvp83rc\?e   ~ ~                                                                                                                                                                                                                                                                                                                                                                                    �~� !	U�dengxiaowu账号对应币种的待分配余额
    
**简要描述：** 

- 账号对应币种的待分配余额接口

**请求URL：** 
- ` /pyapi/customer/unallocated_assets `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|account_id |是  |string | 账号ID   |
|currency |是  |string | 币种    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;currency&quot;: &quot;BTC&quot;,
        &quot;amount&quot;: &quot;176.0000&quot;
    }
}
```

欢迎使用ShowDoc！c\?�
� @| ��������������������~xrlf`ZTNHB<60*$ ���������������������|vpjd^XRLF@:4.("
��������������������ztnhb\V��PJD>82,$   � � � � � � � � � �~~}}||{{zzyy�&vvuuttssrrqqppoonnmmllkkjjiihhggffee� *ccbbaa``^^]]\\xxww� �YYXXdd� rVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&%%$$##""!!  		   
   M ���������������������|vpjd^XRLF@:4.("
�������������������~vnf^VNF>6.&                                                                                                                                                                                                                                                                                                                                                                     � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �~~}}||{{zzyyxxwwvvuuttssrrqqppoonnmmllkkjjiihhggffeeddccbbaa``^^]]\\YYXXVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEE   / /                                                                                                                                                                                                                                                                                                     �M� !	1�E|dengxiaowu添加客户账号eNp1kk1v0zAYx+/+FM+JQ0U6ddzKdRckJBCDc2OSqI2qvJC42ioyqanEYEw0k/ZCBWiM0ZUeYGWiUmEr5MvUTjjtK+DEaclW8OV5+f/8+G/LCPhChUJ02or7PguCOPx6OXlTKABCErDxBX15RE+P2YtxPOrTYMw6JzT4iPiOeDhmZ+1HD+5muAQy2E1s60tYUayGSZawqoKM0vECZgc/6CRIeY7fv7f6EJJJNGiz/fmpnijpziuPhs9+t7a86OyCHm578XDEuh0PeWWJr8R3molSAk/K2pxQGi6xDM2p6Cp4rDvkTd0k4EV7A36TOyuCynxWSNPWrmAg7irOhVIxsfPldTz6RL/7sFyM2x+ikwHcKtL9Tbrrs3fvuQRiprau1LBZ1SCt8zOn5z3W3WVbLYASlK26tg6wXH6sEyPJrhgysTE35BJHN6tzT/xZuJUZb+uVutZcQGd9Qbma4mjkn2BOEqyNXbdi1xzsLhrIa9eeOTMOHt3pL3q+TieD1ixH/Q9Oh5vRkZ9tcjQDO/UFkvaes28DwSDg/yvco28Po9759Nc2/1xIlmVAT1EC3HjSsMhtl2DScEVehtLNnGS41VlfRKsuYh5SMcEzSsz9q+lqpohQEiGFNtBG4gWxz8dx2Jn+DPkPXK1ZayuWcjnx/wCarXYDc\>��    7OpkEaDYxiBg+g29Mel2D4IxqVTbyZxABf2QHAHQxaSEIcnMyMvnuXVCdyM65wTlNOmozk3y9itLh1F0wznYEcpt9vKunEzlvuXaglX/4JUMGeMbJ8PG024MiwIzsCVIgReFcHiPA/SPnn6Iy+eJMFWgJeEGFxb4DF+kEBNmUTuTRUJnCfy3UijgGbUZsF5uCagTpuDxXl1ck+HcloYjnCll0F4S9xNZP4FECjMbDbj2CSmDH7nHcewD9wsxXJu9X0Q12vLPtndY4V+9cm8VZ/lShaKpQpa6rilbzaHkys4qqDzEtfpxJggRSPS2RHw7RVNlDZZIZUGojmXy+qgJyrhPDQ9KsdTa0bZlUhVGhkMpKGHRE0VKyyntFdA89j0pBU01wNmxDhkujwaPUlej2uGjZcH09sATFF6pa1KOWp8nKEp1mqpk3Yg/lNMBoF/VvbNA/8xWqww4hdDXuD/KkUOm5xfcd1VLZk6k8pvFE2oOl2MhaPLVfu0N7AUyvyrVfxT45nM2bq8vXkBaOc45Rh1UHZr5eis1c2izRV88TRG9ppC9rS1GtpdkiyhQ+Dg5gcx/KkOoKYz84Yid097/WujYtfQthYfeBqQhJV2RagbEkNvNyadFpNuSDruzNFfPSTtPFm6AenogJx/0eMcja56cOOHeptBDE+eW2oqrOyE09oWh/bdv+ItuhbJLZGLWiC3RSzquKQlUmFoglNgqjyFNSLKJGloyJWLBQaUfpk/CfF74gLunPvh7VLzm+biZOcQcbKDaDjRP9DfQw50CA9vKwu/zDbezcZuNraUjaX922w2l1VB1bqrWmWtrsTWLcES+QosQRRrr+c1ZDLmYjinUo9VKrGoR1w+hP64mPTaLNnUZ302FZJ++8TEgRiNiIuzYGktmwobUC9cj8rTIVW7ULYFu3Pw12G+Yg3DMbAbUucgL69LgpBJ7ojfPJIQFzcC8v6qHDkVQ97yT2rRG50n8GhbSi9kztJofOMb5v0QQ2dTnv/SIcdJc\>�%    �  �：** 
- ` pyapi/product_plan/add `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-�d� !	%�} �dengxiaowu客户列表eNqNVEFvEkEUvs+vmJMHUrJSb3jtxcREY/VkDGzatW4EFtlFU7skLMGkgmU50FahVlsqNsaCTVpB2Lp/Zmd2OfEXnNnZhQUh7Vxm5r3v++a9eW8GQDJAKGS3805Lw7rumL9GRj0UggCEIWof4+0u2t53jk5x5RvSm4BgnU4XnxeePLrvAcMwDtObfFrk1rKyIiWFDJcQZQXGgSvN4HjvDzJ0l0EIDx+sPoZUC+kFvDs+UWVbVN1RkflumH+v2ucDdFhWnc4F/lhRgRoNk0FjdldsG4Zq2DMThLKZFqCKqi2oiimFrNwcmA6EkahlaFavPjI+LJNTrd4Pq993ebLCK1mZMT2qlz8u7TqXRbv0G+c1GCEschXO95bVO4NUA9cLSDvAVc2+asM71ODiqZtFlOY3BOiug9q+1QPEZPHtAtTYpQIAyX2aNdQ4tE/61t8yuUwQj8ch2AIUcOtVVlLuskzYOgojSwFXUt7w7WyWXrI5CFrnFd5HMd2JjxbW9z0d++jYmtpNGH5PxGhhJkFBjgtWZgFZTL0WZCU2mxEhB4uygJzik8J0tvhzxW6WvIxpBNUddLa/gC7zCUHOCOlpieGgiPSOZZRI33hCHOd0vzhmg1iuuwNxfZKEfwH3Vm6SfGxONn4bBkt4TQHmyLAHwWJhlimh3Hj3bGmmGdzmFFPPpf+7JXh8JiOklBgFz/TkHDXa6j5q+fY8mCIpfGIsBKbDzIEcfQ8A0N8LNy7QSZ09l2Htk9PpWIOm/VUjH5J9UB629oZHl3a9GHSxD5Cw8c9jx6xYV6ZdO119Ib1ZkdZGhvYPGNoGbA==c\>�     a  a                                                                                       �� !	%�m{dengxiaowu添加客户eNrVlU1vEkEYx8/Mp5iTTYikod7qVzDR+HKGASa4Kbvg7lAl3SYs0WjBFg5FG4rV2haJptAGFeSlfJmd2fXkV3B2Z8Et2ZgeetC9zMwzv+dl5vlPFkD+gXDY6hTtlsGqVXt69mvcCIchABHI+iNa/kA7H9mrPts5odUjwFm722fnpUf373hgBMZhroBy0nIyr5GsjNVllErBOHAjC5q9+UHHVdeB8/fuPngInVC0WmL1eUKRzhx8NodDkZTvAKALita2dTp98bO4pVvnI3pQ0e3uV7a3owN9NcI/5yTuTCwjUI94Zk7MKouRQg5Dne11uVlSCNRFIhGRp4Pm2DAHjSgUZay43gqS504aUSUlDXXI66Gnb6GIL2cTUgZDd7XAsa0Kaw49jkhkhtFay4/Zxmtzsu1hyaycQ0ohEKT9E3PSpNv1P7iUiiWRmgqOO/xijiZ21/DYpzj5GJHgyBcdc3rocVhGUiYQm+9wijdaxZoWHK55Rt8VPVDlXupaMHf8kvXas6Mo61gjMY0gktf89+lvVvk7KxpOs5Y8bZbr9rfnwhzldq5V+1PLHJzCFWfVKFGjyWqGNenAW47Bxfn20uWkizX6eug6C715PhrKYE3FucCe2/339nSf60fAM2W70vr3le3V6dc3Qc9iSl5OYDWwhdawZ7V3aLXv4RmcRhl+nzkuDqzwXkrrOPBee3Veijk6sg/bV9CywBcVfUmDwUfxKzGR1ySF87FklleWJH/xs41dqzeat/HKr/x639j/+HSu8e0AyH8i0126f2AdD82LCv+DgHg8DsEGcIgbT/JZclscWsxXYfSmb0vW0jO7GLNrYvRDKUTQjNoAoZCYSynPJoaoGEBoE2w6JQDwG8myNTM=c\>�G    URL：** 
- ` pyapi/product_plan/add `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |用户ID   |
|account_id |是  |string |账号ID   |
|product_id     |是  |string | 产品ID   |
|asset_type |是  |string | 资产类型 1.数字货币 2.法币    |
|currency |是  |string | 币种    |
|amount |是  |string | 数量    |
|start_time |是  |string | 开始时间    |
|lockup_ends |是  |string | 封闭期    |
|open_time | 是 | string | 开放期|
|accounting_currency |是  |string | 结算币种    |
|management_fee |是  |string | 管理费    |
|carry_interest |是  |string | 收益分成    |
|principal_guarantee |是  |string | 保底协议类型 0, 1   |
|remark |否  |string | 备注   |
|attachments |否  |json字符串 | 附件  |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;id&quot;:&quot;1&quot;
    }
}
```
c\?o   r r                                                                                                                                      �T� !	1�Wdengxiaowu客户账号资产
    
**简要描述：** 

- 客户账号资产接口

**请求URL：** 
- ` /pyapi/customer/account_assets `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类�n� !	1�dengxiaowu客户账号资产
    
**简要描述：** 

- 客户账号资产接口

**请求URL：** 
- ` /pyapi/customer/account_assets `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|account_id |是  |string | 账号ID   |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;input_assets&quot;: [ //累计转入
            {
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;2202.0000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;  z
   @� ���������������������~xrlf`ZTNHB<60*$ ���������������������|vpjd^XRLF@:4.("
����������������������ztnhb\VPJD>82,&   ~~}}||{{zzyyxxwwvvuuttssrrqqppoonnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&%%$$##""!!  

				
   Z� ���������������������|vpjd^XRLF@:4.("
���������������������|tld\TLD<4,$�����������                                                                                                                                                                                                                                                 � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �~~}}||{{zzyyxxwwvvuuttssrrqqppoonnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBB    j4z78w78zwEiQqh06mhGe3ABf1+LXmSSQR0OpIgKBKEdqA3qkUOgD+qnblTsUO4uA/8uwTy0MJReDo7+upF3pwiGdLgmGQdVgMni5Jg450GluME2S6NsaLISyLJELl/YU+49hck/Dln5PtyeMRMZrsF/lm4WoSg4CpYWlBA0pOe+aSop3Gw7VO0cASuLyqEMkihkh1E7g1XKVKh8s3IooBmzGohFbgeRo1Wu0QqeHDPh3JWBIlwJVfA5ra6F0v98yFQBMMwJDFFZDu/90EWpEeixEqyiN8HSaO+5JNNHC+046fwHj9LjSysxBascL8X36x2h1yYqILNa9JgUCNhLRTUzo+BZ7/oki1TZbWLjjjZ6eTt3GQ5nMfmJ6V4Lruxtmykyp1MJtrUQ6OCq2We0/om0Dw1P7sJmtsBMzoyZG4cjZGmb2dqhkcaB9NbA0yx9kZfseTYiQmBYyXeUmXZgehPNe4H3rm0ZwF4T9BmhUGvGnAD71cteFTn+Ir7rmLLVBlUPlHUYepwChaZKzXt07dhK5TM73XI7KyNL/eWeFFCyRN8cdXu4S07wdo5vvLX92m62aXWplA80N/+Yjc1Fwt45tPCq91otCwavd1wdFA4utHopFPD2D02urG4JhZXX9Bke60rGtz6ge9niJml55friqg06eBbMpd9D5u8/V5Gckek4DKQuyIEVabkRmTAVAcXIHB9mqhFcGnaVJPjFoUBtPxSf2Lq99g1nDf3w7ul1O3m0HTnEGi6g+gz1T/Q30MPdAh/bil7biSNtzNp052RsekOydctWIEtSth0Q/maYZgStRLro1gNrVRMq0qlVF4ppaiiRnpVQS7jTkF2ZHXTrGKKWtSVI+iNqnG31ZJJfDZmEgHtt0eNHaqhoLo0B5bXM4lNE2qFG6H0TABbF+RVsDcPfx3llWW4GQF7ATyG9MqGFg6n4rvqN5cWjqpbvvTBWjp4pgbcpZ+wOI3OD3i8oyUXU+dJ1P/IO+HjkMBlEq7/kM+aQw==c\>��   � ^��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                �6� !	1� �dengxiaowu客户账号资产eNrtWE1PGkEYvu+v2FMPhJUFa6321tqkTZrYFDw1jWwXYkmFpbCbxrgmYkFpqaKpWgU1xe82BrTF0gKWP8PMLif+QmcZvkFEROXAXHZn9n1nn3k/ZuZ5CRI1QqWSwtPyvgv6/XLqOJsMq  4�2� !	1� �dengxiaowu客户账号资产eNrtWN1P2lAUf+9f0ac9ECoF55zubXPJlixxGfi0LNIV4siEMmizGGsiDpSNKZqpU1Az/N5iqG44NsDxz3Bv2yf+hd1SvkFEROWB+9Ke23Nuf/eccz9+B8NRwzQaMTot7XtgMCilj  *��  !	1�U �dengxiaowu客户账号资产eNrtWE1PGkEYvu+v2FMPhJUFa6321tqkTZrYVDw1jbtdNpZUWMrupjGuiRhQGqpoqlbRmOJ3GwPaYmkBy59hZpcTf6EDAwiICILIgbnszuz7z  1  9   {
                &quot;type&quot;: &quot;USDT&quot;,
                &quot;amount&quot;: &quot;100.0000&quot;
            },
            {
                &quot;type&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;32.0000&quot;
            }
        ]
    }
}

{
    &quot;status&quot;: 1002,
    &quot;msg&quot;: &quot;账号资金为空&quot;,
    &quot;data&quot;: {}
}


{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;input_assets&quot;: [
            {
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            },
            {
                &quot;currency&quot;: &quot;ETH&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            },
            {
                &quot;currency&quot;: &quot;USDT&quot;,
                &quot;amount&quot;: &quot;-797.0900&quot;
            },
            {
                &quot;currency&quot;: &quot;EOS&quot;,
           FQkQVAkCG9Db0yO7gN/TD51p+MHcGEP+HcIpCFHYvBkZuTFs7w4RRpJjX2CsVs0rODkOavZoWFYlhNs/CjjdJp5J2kkcv/CmnD1L0j6c8pI9/mw3kAq0wL/DFwpQhBxFyzOiyDlyUx/FKWTBNjyiXIkCtcWREIcpFBTFpF7w12KFKn8MJIogLCYSBGuRdCYxcaTIomX9XQoJ0WQCFdqGQS3pN14+p8PgSKMRiNJTBLK5HfeCRz/wMkzvODE74OkVl32yeocK4zjJ/cWP8uFTAzPFKTwvKVvFptdKBiqIPOS1GikaEQOh+SzI+DZK6oobbKiV5qIFRwOs42dqITz0PCoHE+tGmNVjFSppNPRuh4aNdyt0JxSXwHNY8OTVtBcD5gR/ZDh8mi0NH09phnWXx5MbwMwxd4rdVXIMePjHMvwZlOdsAOxn1LCD7yzGc888B6jZIUhrxRwA+9XOXTY5PrwLoASrypl6iyqmKMXitodnElgy0X71DeQCmX2VSv2qbFM+mw9s715AWj7OGMbtTFWc+XsvNnJo80VfHE1RvaaQfqsuRraXZouoUPg4OYHKfipDqCmI/OGPHdPff25UbFrqFvzDzz1yZGVdnmo6xJdb9cnneaTrks67szRXt0l7TxZug7paIecf9ETbI2uenDjB77NIIaXmVtqyq38hN3cFoP23b/iLboWyS2Ri1ogt0Us6pikJVKha4JTELg/RTQiyjSta8iViwUGFH7pP3Hpe/wC7pz74e1S85vm4nTnEHG6g2g41T/Q30MPdAgPbysLv8w23o3GbjS2FI2l/dtoNJZVQXHdFVdZqyuxdUuwVL4CS1HF2ut5DamMOTjBrhRklVIsGpGWD6E3JiXcFlM2+VmbTQbk3x4pfiCFQ9LiLFhayyaDOjQK18OZ6QCWLpRtwe4c/HWYr1jDYBTsBvAaMsvrciSSTuxI31xyJCZt+DL7q5nQqRRwl3/CRW90nsCjbTm1kD5Lofn1b7j3QxybTbr+A7Y7xvc=c\?	�  3ot;: 5,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;21.0000&quot;,
                &quot;product_plan_name&quot;: &quot;test产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 5,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;21.0000&quot;,
                &quot;product_plan_name&quot;: &quot;test产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;
            }
        ],
        &quot;unallocated_assets&quot;: [ //未分配资金
            {
                &quot;type&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;2158.0000&quot;
            },
            {
                &quot;type&quot;: &quot;ETH&quot;,
                &quot;amount&quot;: &quot;222.0000&quot;
            },
           5;,
                &quot;balance&quot;: &quot;2.4000000&quot;
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 6,
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;223.0000&quot;,
                &quot;product_plan_name&quot;: &quot;测试产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 6,
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;23.0000&quot;,
                &quot;product_plan_name&quot;: &quot;测试产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&qu         6  5  3  9     },
            {
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;300.0000&quot;
            }
        ],
        &quot;allocated_assets&quot;: [ //已经分配到方案的列表
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 5,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;2.0000&quot;, //分配到方案的余额
                &quot;product_plan_name&quot;: &quot;test产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot; //权益余额
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 6,
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;22.0000&quot;,
                &quot;product_plan_name&quot;: &quot;测试产品&quot    string | 跟进人    |

添加企业客户：

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_type |是  |string |客户类型： 企业1 个人2  |
|name |是  |string | 企业名字    |
|tax_number     |否  |string | 纳税号    |
|legal_representative     |否 |string | 法人代表    |
|id_card     |否  |string | 法人身份证    |
|address     |是  |string | 企业地址    |
|business_contact     |是  |string | 企业联系人    |
|mobile     |是  |string | 手机    |
|wechat     |否  |string | 微信    |
|email     |否  |string | email    |
|remark     |否  |string | 备注    |
|invest_status     |是  |string |客户状态： '客户投资状态1：接触中 2：暂停搁置 3：投资中'    |
|invest_remark     |否  |string | 搁置说明    |
|salesrep     |是  |string | 跟进人    |


 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
		&quot;id&quot;:&quot;1&quot;
	}
}
```

c\?$             &quot;amount&quot;: &quot;0.0000&quot;
            }
        ],
        &quot;allocated_assets&quot;: [],
        &quot;unallocated_assets&quot;: [
            {
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            },
            {
                &quot;currency&quot;: &quot;ETH&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            },
            {
                &quot;currency&quot;: &quot;USDT&quot;,
                &quot;amount&quot;: &quot;-797.0900&quot;
            },
            {
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            }
        ]
    }
}

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\?     �  �� 2：暂停搁置 3：投资中    |
|page     |否  |int | page    |
|page_size     |否  |int | page_size    |

 **返回示例**

``` �h� !	E�e �dengxiaowu客户的方案列表-分页eNqFVE1v0zAYvvtX+MShasg+BIdxg10mIYFgnBBqTRqqiDYJtTOpWyq1g7HCtGVSgY2NDXVAxwFaJhVtjEL/TJ2kJ/4CTtKkSWiYFSl5/T7PYz+v/QZANkAqZbWrdqtmGobd//ant5dKQQA4SNtHZv3U2ntmvvlhNuu0vmM3P3O0/nzY/G5ufaLGB8C4dufUPFm9d+fmiMjBLOTVMlIlXi0pOU0gGbWAZL4gYQKzwF3P4zBZ2jNcGmPdvnV3ETqC1Fg1Xwfb0L2Qbm/qtL82rL7QrZOf9HBDtztdc3dLB/ocx4ZjxP3yQg7q3GiaIQQNE6UoljJSDurmbodNYlKS5DzUPY8L8x5QRXkxjoDu5DifwcuSGzPydisODLI6AJAZ7b+i+4fWx/PB7w3mEmSzWQhWgAO49ERTyDVMENGw9z0Hp9OhVBHn/XnvrTz23mFQDhHkozzdcc6puJ+7H+ScsRKJxgwp5+OvpiHPD86PaaPmnf7CfAInVNyxDZ73C5vAQoKgaDKZSLK7LWokU/1bNaZeSft7TSaxK5iRUVGMlpSImHhMjjbWaaPuPGtfqHHGzZrv3ofrPcEDxiLJkLIqxs5vUpFKJVEWytHVry/euGCFolOkKGlm+vIUGyMiz1vdjt1uOl25tpkg8xAx90LM+mxUxjx4au2/HPx6Ozw6uNDvhEo6Pfp1x+4e07Pa/00JWlErICItMRmmt4QKWkwr7DAwuF6l1V5EshJED9Kxq++2oiQ/Uv7tjfihsN8TAyecYEgNS8sBamZqEowoBBWCBgLRbVZAxel+AP4CDcvjSQ==c\F��   � �                                                                                                                                                                                                                                                                                                                                                                                                                                      �L�	 !	U� �dengxiaowu账号对应币种的待分配余额eNpVkM9OwkAQxu/7FHvyQKzIRRO8KRcTE43omW4KwUZokW5jiEsCRIyGQD2g8U/kgIoejEhCgiDQl2HbcvIV3HZBYC6zM/ubb79ZAFkAn8/+zDmNvGUYjvn123/w+SAAAnTaDWp0aLNLe1X6nbffyvbDOR0W6eXFuFgeDe7H9Ser8kqNZ8A0nGbHahUO93cmAgIUoT+VQSnZL+kaVpOxtF9XUCKhSgjHohGkaTGsQRF4Dvi0ddulfcMTYPN7u+ED6EpTo2Dd/BsjvKTXZULN4jh3RezWD62ViNNsW3cVAkhQYOGu5p14KUAiTNqMQJKk6gqOyFFIrLsm68kKhmSy8naIU5KeTscUKTNlNJyWlTjD+G94LwAAmXuzSh9r9ktvNCwx60AURQjOgAssnegq3tAwwrrGz0EYWJ67SmrxaZ9n9ZjneSiKMJpSXHd2N3W5qLJ5sDUvM8NR0t18EQ6sr62ssuCVN5AFWXcNAKyPumNWRgPTrr6Hj9TTkCr99vN/47Lniw==c\>�y    �  �                                                                                                                                                                                                                              �� !	Y�/dengxiaowu转账记录-详情-失败原因添加
    
**简要描述：** 

- 转账记录-详情-失败原因添加接口

**请求URL：** 
- ` /pyapi/asset/plan_transfer_remark `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |申请ID   |
|remark |是  |string | 失败说明    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {}
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\@W`    �  �                                                                                                                                                                                                                                 �� !	1�M �dengxiaowu方案收益统计eNp1U8Fu00AQve9X7IlDhJuml0rlyhEJROGEkGPiKFhN7BDbRQhXSkpDCylxkdIqTaAQmpYeqphCaEXi4p/J7jqn/AJjb9I6UZmLd2ffezPreYswBIrFWKfoH5eobfvej5HbiMUwQgKme39oa4vWzlnzPet/8TstWj0i9iEChu9c0LP1xw/vjeECTuJ4/pWUV+L5giabKUPMZyU1npYKqqJmdJxEYSXOA2Xi2iEVmA/uLz/CgSix1+nuVQMW35KdDxbxysPiO4ud9clBxfKdLq1XLWQtCRDBFcIV3wrYEsZpQCgytmjdgbVuFKAPHGSCE4ShF69Gmges3Rv8rUAjKJlMYvQaBYK3XpiacUc3JMPU+XoJJ25HjnJ6ZpLnX22Ff6MgWTKkCYrrXp8Ff0dU5GmRRFTjGivlNFM1pqELc/MQY3w8zroOzMe/PCXloxn2MwlKpdLT9Pm5xcUInX5+A0Pmo56hp8ycmZUMZTUtqmlDXJWy5oxW4qZWyGaRFN0ZrZAsZhX96jJPnmKoHtalzZ+s54WMNbQWTCMyJe4FPvlZd9xoC2HsCvDFxA//C6BkCpqZD8yiqEaQYbUTunXB+huKPHK3E2BJ/7zMet9Zp8V23pKP9ZHbXIAs3e8Miw2OntiKtDfpr5PJG2p2SbvB7zCs7fuOM+gfsq8leAfsU2V4vDds/WaNjegRf4YIIXr6zfeqg0sP9Jefay/vaqmRW/oHKpOSQg==c\A|:   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          �� !	Q�'dengxiaowu客户账号的方案列表-下拉
    
**简要描述：** 

- 客户账号的方案列表接口

**请求URL：** 
- ` /pyapi/customer/account_plan_list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:--  K    �  �                                                                                                                                                                                    �>� !	7�%dengxiaowu资金划转和平仓
    
**简要描述：** 

- 资金划转和平仓接口

**请求URL：** 
- ` /pyapi/customer/assets_change `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string | 客户ID   |
|account_id |是  |string | 账号  （申购非必填）  |
|product_id |是  |string | 产品ID  （申购非必填）  |
|plan_id |是  |string | 方案ID    |
|apply_type |是  |string | 申请类型  1:申购,2:赎回,:3分红  |
|currency |是  |string | 币种    |
|amount |是  |string | 金额数量    |
|attachments |是  |string | 附件    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 14
    }
}
```
c\A��    g | 备注    |
|invest_status |是  |string | 投资状态    |
|salesrep |是  |string | 跟进人    |
|invest_remark     |否  |string | 当投资状态为搁置时，必填    |

个人客户：

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |客户ID   |
|customer_type |是  |string | 客户类型    |
|name |是  |string | 名字    |
|mobile |是  |string | 联系人手机号    |
|title |否  |string | 职位    |
|company |否  |string | 公司    |
|id_card |否  |�b� !	1�m �dengxiaowu客户账号删除eNqNULtOAkEU7e9X3Mpi44bVElsbExONj9rdgCFEBXSXwjAkiDEBEcZCDWJCfAAlKwkRHyg/w8wOFb/g7A4YKuJt5j7OPefcAZQBmua1c6J1xikVg9dxv6ZpCKAjaz/zQk90W4z2WOFxdN/glSajLyA3hNvjnfzu1voErqOJodSplYqHrEgkmU44oej+IZoQ8Cs0v/tgfRosSPzmxvYO+lSM5vntnyxRJbsuEza4GOWKxOt8sXqJCLfLqxUCJKzL8I0HmSp1JPqkLRETB3vxKBJedWXPdk7iiRgSdczaaoADlM4GN+yh7jU+hz8laQtM00TIgE+/cJxOOiu2YzlpW+VhXDIMY3lxZnxkx6Yz9Qq3qUT4W5HRS3kzfyqM+1fD97I4/1bfqJCzNFHLsaY8mSxkYZ6HufrJg3+wyysBfgHBi9Dmc\Ek~    �  �                                                                                                                                                                                                �2� !	1� �dengxiaowu转账申请详情eNq9VEFv0zAUvvtX+MShNMucDRDhBlckEIwTQq3Vpmu0Jg2Jc6iWSttQBWhiQeo2TYDGASiXbelEpY2x0T9Tp+HEX8Cpu6ZpkzJxwIlk573ve+97zrMBZANkMv2jtaC17rtu0G3/Pn+XyUAABBhcHASdVn/7W+CdBF7Lf9Hwt75Q9xNgDGbyjzeePLo/hAswD0Wjhg1VxJalENGoYD1HTKxbJcXMqXqpCvNgkIxT/d3v9NwdsBn54YPHSzCMS90Nf2ekweGf9O0bh3Ybv9ZeO/3jH3R/0wm8jr+35QBHFtgIqxis+KcAHWFoZgi1CB1/z2Nri5iqvgydYUVHbXqxw7whCkCmq7tN3+/3P5/1fm4yUSCfz0OwCsLg157bVXLHIpjYFl/LEGXHXJq1fGnnc3WFz+OgIib4EsXjRj5sGJXaYJumERFKLY6yL2YT/DwKUTUlrkaaR7eFeSSgWxAheQHJi9K4vHgQw6wW7QLJDf5glJHP6Io8HU9qIIpFemdfaXNdoM2XtPkqfBsH1D0VkP/hY3rcgm2ail6oxcPdXbqXThnuQ81Qrqw+oiRoDzumcziDrFVtncQ515E0Jy2kc2yLnYvpVLTt+oetGakIwYWypuhk1IlPY7BwrE5ZEnvoRnYGLjq7qU03UZBZiZdSJsSQRbGCcuzhpil6Pfuv4m/+P/FSmviY5RlIKGpMzl9PN2/BxFsmHZjSrd5J73RGw5qKhs2VOC0dXVJ11Son3CvCxMbwDamDenh5/gGHxQL/c\@S�    �  �page_szie    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        �h� !	%� �dengxiaowu客户列表eNqNVE1vEkEYvs+vmJMHUrJSb3jtxcREY/VkDGzaFTfCLrKDpnZJWIJJBQscaKtQqy0VG2PBJq1F2Mqf2ZldTvwFZ3ZYWBDSzmV33vd5nnm/ZgCkCwQCdivrNA1SLjv9X0OzFghAAIIQt47I1iXe2nMOT0jpGy43AMU67Utylnvy6P4IGIRRmNwQk7KwltaQmpBSQlzWEIwCV5rDye4fbJZdBiU8fLD6GDItXM6RnfGJOt/iyraO++8G2fe6fdbDB0XdaZ+TjyUd6OEgXSxm949vg1APjswUgTaSEtRxpQl1DaVkJUY3bhpcCsJQ2DINq1Mbmh+W6cFW54fV7bpUDYkorXHyhD2qAinsOBd5u/CbZA0YokRaEOd70+qcQiZDajls7JOKYV+14B1mcPHMzeNKijEJuv9cXlYQ1fasI0BEk98uQI1dOgCQVrVfxfUD+7hr/S3SkoJoNArBJmCAW6/SKrrLk+H/YRha8rkSWsyz86/6kn/9oHURiR6K6058rL2e7+nYx9bm1G7C8CYjwtozCQoKgr85C8iy8lrSUGQ2I0r2N2UBWRET0nS25HPJbhRGGbMIKtv4dG8BXRPjkpaSktMSg14el9uWWaCjMxISBOfyi9OvU8t1NZDXJ0l4Bbi3cpPkI3Oy8cbQ38JrGjBHht8JHgu3TAllxrtnSzPD4A6nrDxX/58W//GplKSgCAPPzOQcNTbqHmr59jwYUpEYHwuB6TAzIMPuAwDsDSP1c3xc49dlUP3ktNtWr2F/NeizZO8XB83dweGFXcv7XfwZpGzy88jpl6yrvl09WX2hvllR14am8Q+1igkEc\?|    A  � A                                                     �h� !	m�= �dengxiaowu客户信息详情（在客户基本信息中）eNrtVl1PE0EUfZ9fMYmJDw1N6aIU  n�L� !	E�- �dengxiaowu客户的方案列表-分页eNqNk89v0zAUx+/+K3ziUDXLfggO5QZckJBAME4ItSYNJaJJSuxM+5FK7VC3wtgyqQMGY0MM2HaAlolKG6PQf6ZO0hP/Ak7SpknWUqxI8fP7vOf3fbYBZAMkEna95ByULdN02t/+tN4mEhAADtpbR1b1xPp+RFdeWBufqfkRMNZpnFjHy3dv3+iBHMzAR4QUUjw/Pz8hqDKPChKvY1HjNTEnYSJqMAO8bfxQ69UP2jK9aBZ86+adWejmpeay9TLY3fBNurlu0HalW3pm2Mc/6d6a4TSa1vaGAYwUx4ZbvzfzTQ4aXG+ZEYKOiSqLWlrKQsPabrBFTDRJyUGD1veZtOvXfLCAcmKcgN7iwJ/Gi5Jns+DNgzgYeA0AIBPa3qI7e/ans87vNaYSZDIZCJaAC1x4oqvkMiaI6Nifp+BUMuSSca6/7v/Vx/4/DGURQX3Kzzvw5VnP+757gc8dSxFrECFl+/yl5Agk1MtY1edZJAiqrpD/QQuamtWFMHpxJJpHSlpBshjtDhEx6Zwd0lqZo7VVWqu6X+ULNU+5Gevd+3DrhlSKsUjSZKEgjq1U0DVNVISF6O5XZq+O2UF2WxENmp6amGSjF8jzdrPh1D/Q6kq3sj4izQPE1Asx6TPRNNbuU3vneefXm+7+7li9QzrpPrevr53mIT0t/1uUoMt6HhFpjqVh+eZQXo/lCisMBK6WaKkVSVkMrPvJ2C32XpWkPFTPX/P4oZC0C484wVA2LC0G1PTkMIyoBOWDtwCiZRZB0X3IAPwFs4O9Dg==c\Ar	   [ [                                                                                                                                                                                                                                                                                                                                                 �!� !	7�e �dengxiaowu资金划转和平仓eNptks9v0zAUx+/+K96JQ9WoGnAKVy5ISEP8ODdWGnUVaxJi51DhSes0WNFYA9tAg2mVVmA7ACvTOsraQf+Z2nFO/As4cTMmtb7Yfu/zfe+b5yBQCxUK8cmqPGqKKJLjH38vPxYKgJAB8nw92XjLW9vy9ze+/ZpfnE1GO6L9hUefkBLJ3kCcrj15eH+qMMCCkt/Afq1kh4R6dScoYUIcSsr2EnarDlgo66aF4v0Fv4wyrZI+WHz0GNKqPFoT765MMH3lb7YYH79IVl+x+HTEO5tM9vpir80QMw210s/ITvpqADOmYUXkZsq1CjCx11NBQoOaWwUG/KQrWoN7dzWJbdsLXToPlP0jHg0A4t0z2f+eHHSUHX74NZP5gVcJ7bmyyfCY7zTT+nOFy9idp1KjEYetzFVmy/eXG2Xa8J0ZMq3aG+iZACyYukvxpinP23y/UzRv8dbLeNidDiIIHNduzE7hVzM+3sq71dMZzDDqT0i6B+otko0oJynF9lLdcSmZxT+sT0Y/NYhAvfl4V/mJPw8nfzbVgyPLsgA9Rylw41no0TuEYhoSfTZhoXgtVSfVPK5376ner0MVTHFO6br/c7XKVd3bWWoFraQO0D83iEmwc\A��   o o                                                                                                                                                                                                                                                                                                                                                                     �� !	7�= �dengxiaowu资金划转和平仓eNptkUtv00AQx+/7KebEIYoVFTiZKxekSq0onOOVY6VRG9t414eIrdRUhQaVxtCX+lAjNUB6gaZVU0KTQr5Mdu2c+AqsvXGolOxld2Z+8/jvIJAHZTLh5XrUqoogiAZXf+9PMhlASIPodnO09ZnXdqPf3/nuR353M+zvifo3HnxBMilqd8X1xuuX8+MMDQzIuRXslnKmT6hTtrwcJsSiJG8uY7togYGSbipRHN7x+yDJlamLC0uvIK7Kgw1xMBmCKZN/2mF88G60/oGF133e2GZRuyOO6gwxXZMnlpG8lKkB08ZuSaTD5EsFYOKoLZ2EeiW7CAz4ZVPUui+eKxKbpuPbdBYYdVo86ILiXM8p+OZMbti74HvVpGBCrmJ7FibFi/PaBMOuu1rJ04prTZHh/o38L6UaYE6P7c6P7GM9uq3z00ZWf8Jr78NecyzV8yzbrEzr/FUNL3bSbuVY5RQjdz1qnsnfHm0FKUkpNpfLlk3JNH68Oez/VCACudXBvpwn/Nob/tmWK0WGYQB6i2Lg0Rvfoc8IxdQn6q3DXPZBqEyKqV/dzoq6H0IFTHFKqbr/Y6XCpO7TJLSG1uIJ0D+sazPGc\@m   h h                                                                                                                                                                                                                                                                                                                                                              �� !	%�Sdengxiaowu方案详情
    
**简要描述：** 

- 方案详情接口

**请求URL：** 
- ` /pyapi/product_plan/info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;plan_id&quot;: &quot;1&quot;,
        &quot;asset_type&quot;: 1,
        &quot;asset_type_name&quot;: &quot;数字货币&quot;,
        &quot;product_id&quot;: 5,
        &quot;product_name&quot;: &quot;test产品&quot;,
        &quot;account_id&quot;  G    : 1,
        &quot;account_name&quot;: &quot;哇哈哈公司-bitmex账户1&quot;,
        &quot;start_time&quot;: &quot;2019-01-09 14:24:14&quot;,
        &quot;currency&quot;: &quot;BTC&quot;,
        &quot;lockup_ends&quot;: &quot;2个月&quot;,
        &quot;management_fee&quot;: &quot;1&quot;, //管理费
        &quot;carry_interest&quot;: &quot;1&quot;,//收益分成
        &quot;principal_guarantee&quot;: &quot;是&quot;, //保密
		&quot;remark&quot;: &quot;&quot;,
        &quot;attachments&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;product_plan_id&quot;: 1,
                &quot;url&quot;: &quot;http://fmtest.firstwisdom.cn/uploads/funds.sql&quot;
            }
        ]
    }
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\A�   f f                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �� !	=�Mxdengxiaowu资管系统接口说明eNp9kM1Kw0AQx+/zFHNeSEs9+gyC4se9oC0WaStmwWs/UEqVrEITjIpf1aIe3BaqxiS1L7O72Zz6Ci6NehE8Dfxmfn9mBghJXhp60FSM6elwFp8TggAWpv69CA8TP5ITVzkPkvVn8XHanshgIIKuZC3lDml9p1QDIES9HmnuJg6Xd23N39WotbG69J1lYRG3Kd1dzOfLVVqyaa5c2bPpfsXeqldzmzUsAqLJ+Nf76/wayvuQMZtLxllZXls3+0Pa8zXnyU1T87E6c0wbsICm6GlPXlypzonsXgNaBYPmZ4ggTJ5CQxZ+SBahOp66fM7+ACgP3kTkiaivbx/TRqQ/T7MpgC/xUKs+c\A�R    � � �                                                                                                                                     �� !	=�]xdengxiaowu资管系统接口说明eNrj0tJ6vq7hxbLGZ/39L/ZveL9nlpaWAheXrsLLmUue7Gp7PnP3071Tn/Utfdq/+P2enpfNe5/uWPZkR9fT/qZnUzeU5Gen5nFxaWk929r9Yv3U533rny5qfrF++7ONTaFBPlCzdBUSFDJKSgqs9PXTcktSi0v00jKLikvKM4tT8nP1kvMUErgUFIBm4NWHqQem4dm0nU/39IP1ALUE+AeHAJ3PxQUAoyll4Q==c\<'��I� !	1�= �dengxiaowu方案收益统计eNptUctOwkAU3c9XzMoFsRbckOAvmGh8rIxpRyCkEUqlUxJjSSqG+CBSF2iIRAxRXBkqhmgEtD/jTOvKX3Da8o53M3fuPefcM3MBZAFCIadtuE/H1DRd++V3cBsKQQA4SG8+aPOMVt+c+oXTv3fbTVppEfMBMIZrvdNOcXtjdQjnoAh55RApEq/ksgktjgUljWQ+iXKyJKdUKAJ/UsBjymRg+lTGXF/b3IKeKDGL9HpsQA+u5OpSJ3bpxzjXnU6fNMq6a3VpraIDPcax8J7gZ8GVgzo3LDOElIA6rVksV3GO+YBexesAyLzYVVJvOI+9768yMwJEUYTgCHiCCwdaFq+oGGFNDfIYjCxOtTJqalQPzux+cE6DEgijESrQnfS83xGkxKxIZFpjgkWZrCbjWejyUpjFEM/zTtdi+3E/n0mpNcfeQ2xUPDlLDy9Fo1N0enfClhyseo4e1zJaGmEpnxTkJBbyKK3NaUX+s0JODWIM5rR8spCW1PFjdnYhm+7PpfVXp2f7jAIoeNsA4A/9WAN5c\A|B    _id&quot;: 1,
            &quot;account_id&quot;: 1,
            &quot;product_id&quot;: 6,
            &quot;plan_name&quot;: &quot;测试产品-哇哈哈公司-3期&quot;,
            &quot;plan_id&quot;: 4
        },
        {
            &quot;customer_id&quot;: 1,
            &quot;account_id&quot;: 1,
            &quot;product_id&quot;: 5,
            &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-2期&quot;,
            &quot;plan_id&quot;: 5
        },
        {
            &quot;customer_id&quot;: 1,
            &quot;account_id&quot;: 1,
            &quot;product_id&quot;: 5,
            &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-3期&quot;,
            &quot;plan_id&quot;: 6
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\Ax�  J-|:----- |-----   |
|customer_id |是  |string |客户ID   |
|account_id |是  |string | 账号ID    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: [
        {
            &quot;customer_id&quot;: 1,
            &quot;account_id&quot;: 1,
            &quot;product_id&quot;: 5,
            &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
            &quot;plan_id&quot;: 1
        },
        {
            &quot;customer_id&quot;: 1,
            &quot;account_id&quot;: 1,
            &quot;product_id&quot;: 6,
            &quot;plan_name&quot;: &quot;测试产品-哇哈哈公司-1期&quot;,
            &quot;plan_id&quot;: 2
        },
        {
            &quot;customer_id&quot;: 1,
            &quot;account_id&quot;: 1,
            &quot;product_id&quot;: 6,
            &quot;plan_name&quot;: &quot;测试产品-哇哈哈公司-2期&quot;,
            &quot;plan_id&quot;: 3
        },
        {
            &quot;customer    �  �                                                                                                                                                       �[� !	C�M �dengxiaowu客户账号的方案列表eNrdltFv0kAcx9/vr7gnH8gaAnN7mK97MTHROH0yBhog2Dgo0jbGrEtgGQ6D0hnYZLBM2ZDxsFAXmSig/DPcXXniX/Dao9BNZtJkiYZLk/7ud9/f3X16ab4HIG3A4yHNlFFPY00z+l9GvbLHAwHgIGoe42zbaNWR1iblbbz/A1ezKPvBqDZw/jPSTgAtNfQ2Pt96/PDeuI6DQehNvOITgjekSLIYiyS9fCgkKnE5kFjn44F1QZJhEFjrsmI6MeppVj0tf3B/7RE0Z0baFt6bbEdlXbT7TkX9zDD1RiXnXXSUUw29hUt5FagrHG0mkBWxLgdVbpymCntDASEMVVzSaVKSk0I8ClXGeneVCe0N/6mD7HNYQqoEkEL0i6hyRGqdwa8cJQDBYBCCDWAKbr1QRPmOJPOyIrF4BfoWHEMxKWrn2Vt8zt5OUZiXeVv1xMqbbWMSTZUOwCvLXdZN+f4qSyTFsBJyypZmysxjjfOxyGUUOSLJg84pKqQ5VNhBhaz5ZM6Q9p3z4cOPTs4Z8zm2NpFsLvxb+mUX9PgiZ+h7N8Hvnz9+vxv+xfnjX3TDf/u/4b+hv9/V6S/NG72rs1+e0lvRU7Bp+ovDd5gtMhO8apQzHZIbGyS1SNsar2u0JJoUlYRpg0JcNjOk2KA+SbrbQnjUe+uj7mx8y5DOKWlWye5r9L406lX8NIsPmsNUmalto0S1Hfy1Mb5c4EoL1cqMYVg8MHR90D0hn9L0SkAOc8P6/rB6QS8dziF2PwEA4LNjo58f/OzT+deeiS9XxdCol/4NXVcmPQ==c\?�    �  �@: &quot;&quot;,
        &quot;tax_number&quot;: &quot;&quot;,
        &quot;legal_representative&quot;: &quot;&quot;,
        &quot;business_contact&quot;: &quot;李磊&quot;,
        &quot;remark&quot;: &quot;&quot;,
  �� !	1�Gdengxiaowu更新客户信息
    
**简要描述：** 

- 更新客户信息接口

**请求URL：** 
- ` /pyapi/customer/update `
  
**请求方式：**
- POST 

**参数：** 
 企业客户：
 
|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |客户ID   |
|customer_type |是  |string | 客户类型    |
|name |是  |string | 企业名称    |
|tax_number |否  |string | 纳税号    |
|legal_representative |否  |string | 法人代表    |
|id_card |否  |string | 法人身份证    |
|address |是  |string | 企业地址    |
|business_contact |是  |string | 企业联系人    |
|mobile |是  |string | 联系人手机号    |
|wechat |否  |string | 微信    |
|email |否  |string | 邮箱    |
|remark |否    s    quot;,
            &quot;currency&quot;: &quot;BTC&quot;,
            &quot;apply_type&quot;: &quot;1&quot;,
            &quot;apply_type_name&quot;: &quot;申购&quot;,
            &quot;amount&quot;: &quot;+12.23&quot;,
            &quot;user_name&quot;: &quot;小武&quot;,
            &quot;attachments&quot;: [
                {
                    &quot;id&quot;: 15,
                    &quot;transfer_id&quot;: 14,
                    &quot;url&quot;: &quot;http://l1_1_1&quot;
                },
                {
                    &quot;id&quot;: 16,
                    &quot;transfer_id&quot;: 14,
                    &quot;url&quot;: &quot;http://l1_1_2&quot;
                }
            ]
        },
        &quot;trans_info&quot;: {
            &quot;apply_status&quot;: 1, //1:申请中，2：成功 3：失败
            &quot;apply_status_name&quot;: &quot;申请中&quot;,
            &quot;remark&quot;: &quot;&quot;,
            &quot;finish_time&quot;: &quot;-&quot;
        }
    }
}
```c\AVN   � �                                                      �|� !	=��dengxiaowu内部账号转账记录
    
**简要描述：** 

- 内部账号转账记录接口

**请求URL：** 
- ` /pyapi/asset/plan_transfer_list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|asset_type |是  |string |资产类型   |
|account_id |是  |string | 账号ID    |
|plan_id     |否  |string | 方案ID    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;id&quot;: 13,
                &quot;apply_time&quot;: &quot;2019-01-17 11:31:21&quot;, //申请时间
                &quot;product_plan_id&quot;: 1,//方案ID
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: �Q� !	=��Cdengxiaowu内部账号转账记录
    
**简要描述：** 

- 内部账号转账记录  X    类型   |
|account_id |是  |string | 账号ID    |
|page     |否  |string | 昵称    |
|page_size     |否  |string | 昵称    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;id&quot;: 46,
                &quot;customer_id&quot;: 1,
                &quot;customer_account_id&quot;: 2,
                &quot;ledger_id&quot;: &quot;16636352&quot;,
                &quot;currency&quot;: &quot;USDT&quot;,
                &quot;amount&quot;: &quot;-0.82971193&quot;,//金额
                &quot;typename&quot;: &quot;To: margin account &quot;,//事件
                &quot;remark&quot;: &quot;&quot;,//说明
                &quot;ctime&quot;: &quot;2019-01-16 16:18:41&quot; //时间
            }
        ],
        &quot;page_info&quot;: {
            &quot;current_page&quot;: 2,
            &quot;page_size&quot;: 10,
            &quot;total&quot;: 19
        }
    }
}
```c\@>�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ��	 !	%�mdengxiaowu钱包流水
    
**简要描述：** 

- 钱包流水接口

**请求URL：** 
- ` /pyapi/asset/wallet_ledger `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|asset_type |是  |string |资产  P                                                                                                                                                                                                                                                                                        �^�
 !	1�kdengxiaowu流水说明更新
    
**简要描述：** 

- 流水说明更新接口

**请求URL：** 
- ` /pyapi/asset/wallet_ledger_edit `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |
|remark |是  |string | 说明    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {}
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\@?�   � �Y                                                                                                                                                    �-� !	E�udengxiaowu客户的方案列表-分页
    
**简要描述：** 

- 客户的方案列表-分页接口

**请求URL：** 
- ` /pyapi/product_plan/list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类�d� !	E�cdengxiaowu客户的方案列表-分页
    
**简要描述：** 

- 客户的方案列表-分页接口

**请求URL：** 
- ` /pyapi/product_plan/list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |客户ID   |
|page |是  |string | page    |
|page_szie     |否  |string | page_szie    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;id&quot;: 6, //产品方案ID
        w   B B                                                                                                                                                                                                                                                                                                                        �2� !	1�dengxiaowu转账申请详情
    
**简要描述：** 

- 转账申请详情接口

**请求URL：** 
- ` /pyapi/asset/plan_transfer_info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |申请记录id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;apply_info&quot;: {
            &quot;id&quot;: 14,
            &quot;apply_time&quot;: &quot;2019-01-17 11:31:42&quot;,
            &quot;product_plan_id&quot;: &quot;1&quot;,
            &quot;product_plan_name&quot;: &quot;test产品-哇哈哈公司-1期&  N   Y Y                                                                                                                                                                                                                                                                                                  �P� !	1�Odengxiaowu方案收益统计
    
**简要描述：** 

- 方案收益统计接口

**请求URL：** 
- ` /pyapi/product_plan/earnings `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **�#� !	1�udengxiaowu删除产品方案
    
**简要描述：** 

- 删除产品方案接口

**请求URL：** 
- ` /pyapi/product_plan/del `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |方案ID   |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {}
}
```c\Ay�    7QEpIZVoNu65+W+ce+r5j1vu95RatVQ0k1P4rMRNpKmZfMiUJblTu94lltkWI7hFmiOE+KcwHOhu3QsVrvzt9f7Oy/rO5UIXU3Ppc0UEMMEt1ISizXyGlEzZeq6rKbynf58cPnD9nRFBoLGR3tbgafB2IiquOyNlc7W3uX4S3w8bLChUt/4sf7o177Nd/d/04HNl05hNaLqkqIqxtUefcA0HYAHt51iqW/CU+aymZWAck0WVTRRrklZM1IOTRe4vVqrlN2Dh3CjAAsnUVGlgCllxSBFYuqqpGb6+LhXv7cWJAnau3DzaX9RLacDJacOpFp9fXq+apgBOS326tLu6OHNP6un99Dep0/bJENvI90M1Hw3ozpI0vW8qKhA1mUj0jnUI45dgsV11N8DCXWNuTcc85X6jj9/iqpS9+gDSDxIFQO3N+B20dvXnkH7FcM5vzwYdDb2UPbmROWvQQSC2CIkykfVV+eo9ExVD7kwXx0qK7PDQpbHhCwrxOP944mk6sWzdFR6DsXLUQmJzURs/uGzDpNruAzDoBY+pwiZLpZMHDaZWEImQiZCJkKmMZOJxSMTvyiw84RMhEyETIRMYyXTIh6Y2EWB4ycUTPFhwMQQMBEwvZVggsX12vGjqQPTe9hgYicVTPyQYGIJmQiZ3kIyuS+24P29qSPTAiaZFoQ5dkrWcoRMhExkMTcxZJrHJNO8kOAImQiZCJkImcZLpgQmmeamhkwETARMBEwTA6Y5TDDxk/v/95BgIlwiXCJcmhQujf4mO0tzCYFPCNz8VDyXS1xih8dSfGgsDZ2+80GFyylsTOFRChNSozMKA1HsND2Vg48P3cqT8TDJ2fkteDl+HGziMdnECYmFqXg0Fx+FTTwum85PH2ETYdPFPpdziiW4+WAC2cThsQntc1PyouVIcCLrObKeI+u5AdZzzdKV2a4PmDUpIyPVpdybXzh3QwFBRMpEze82NUP5tvULhe1lBnJAyrY+g6Y6/VyhVryPuP8Hvv5uGQ==c\@%�   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �$�
 !	=�e �dengxiaowu内部账号转账记录eNrtm+9v20QYx9/7r/ArXpR6sZ2mpeYd8AYJCQTjFZocK3Ezi9Qx9nlSmCulg7ZZN+qgbrRj0LGxlSGNZhXZOrqW/jM5x3nFv8D5R34uTpNcKmXRWZbss5/73vM8d/dRLrYpGm3UzEztoODurzq27Z49/+/k55kZmqIYGq6v1b976lb2oX3knj5DJ+7Bc3h619l6Au3fKVTPLR85hze+/PyTsBJDJ+mYlpc0JSYZhgxiWlZSRaBLqrEk62JWMQCdpPwmg6rOT//AE9uvjSp/9ukXl2lPF9o3nLtNT6ygCEs/WPBsrV64adUOX8O9W5Zbrji7WxZlCQzavFj8s6DI0BYTXkYWvjsiyGsybTm7ZXTNALqiZmjLffF99fiPQDG0TaVypgpEJd1tSwfJ+PgjOrD0w0NmfhGW9ttNUWjOw2LDlKJRyGd34P292uPj6r+3ULxUMpmkqeuUZ/DON2YOvG8ACZhGcC7Q3GzbrWUj07geHHNfB8d2o  V  Y接口

**请求URL：** 
- ` /pyapi/asset/plan_transfer_list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|asset_type |是  |string |资产类型   |
|account_id |是  |string | 账号ID    |
|plan_id     |否  |string | 方案ID    |
|page     |否  |string | page    |
|page_size     |否  |string | 每页数量    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;id&quot;: 13,
                &quot;apply_time&quot;: &quot;2019-01-17 11:31:21&quot;, //申请时间
                &quot;product_plan_id&quot;: 1,//方案ID
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,//申请类型
                &quot;amount&quot;: &quot;+12.23&quot;,//申请金额
                &quot;apply_status&quot;: 1,//申请状态
                &quot;finish_time&quot;: &quot;  Z-&quot;,//完成时间
                &quot;cumulative_net_value&quot;: &quot;-&quot;,//产品累计净值
                &quot;actual_amount_change&quot;: &quot;-&quot;,//实际金额变动
                &quot;actual_portion_change&quot;: &quot;-&quot;,//实际份额变动
                &quot;accumulated_amount&quot;: &quot;-&quot;,//产品剩余余额
                &quot;accumulated_portion&quot;: &quot;-&quot;,//剩余份额
                &quot;carry_interest&quot;: &quot;-&quot;,//计提分成
                &quot;carry_interest_status&quot;: &quot;-&quot;,//分成状态
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 12,
                &quot;apply_time&quot;: &quot;2019-01-17 11:30:33&quot;,
  [                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,
                &quot;amount&quot;: &quot;+12.23&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&q  \uot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 11,
                &quot;apply_time&quot;: &quot;2019-01-17 11:30:03&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,
                &quot;amount&quot;: &quot;+12.23&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply  ]_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;apply_time&quot;: &quot;2019-01-17 11:29:06&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,
                &quot;amount&quot;: &quot;+12.23&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &qu  ^ot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;apply_time&quot;: &quot;2019-01-17 11:09:12&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 3,
                &quot;amount&quot;: &quot;-12.23&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;:   _&quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;分红&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;apply_time&quot;: &quot;2019-01-17 11:09:02&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 2,
                &quot;amount&quot;: &quot;-120.23&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot  `;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;赎回&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;apply_time&quot;: &quot;2019-01-17 11:07:40&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,
                &quot;amount&quot;: &quot;+120.23&quot;,
                &quot;apply_s  atatus&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;apply_time&quot;: &quot;2019-01-17 11:06:51&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;curr  bency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,
                &quot;amount&quot;: &quot;+120.23&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id  c&quot;: 5,
                &quot;apply_time&quot;: &quot;2019-01-17 11:04:51&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,
                &quot;amount&quot;: &quot;+10.23&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_n  dame&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;apply_time&quot;: &quot;2019-01-17 11:02:12&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,
                &quot;amount&quot;: &quot;+1.23&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_na  eme&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;apply_time&quot;: &quot;2019-01-10 15:25:16&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 3,
                &quot;amount&quot;: &quot;-5.0&quot;,
                &quot;apply_status&quot;: 3,
                &quot;finish_time&quot;: &quot;2019-01-10 15:25:16&quot;,
                &quot;cumulative_net_value&quot;: &quot;&quot;,
                &quot;actual_amount_change&quot;: &quot;&quot;,
                &quot;actual_portion_change&quot;: &quot;&quot;,
                &quot;accumulated_amount&quot;: &quot;&quot;,
                &quot;accumulated_portion&quot;:   f&quot;&quot;,
                &quot;carry_interest&quot;: &quot;&quot;,
                &quot;carry_interest_status&quot;: 0,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;分红&quot;,
                &quot;apply_status_name&quot;: &quot;失败&quot;,
                &quot;carry_interest_status_name&quot;: &quot;无状态&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;apply_time&quot;: &quot;2019-01-10 15:21:57&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 2,
                &quot;amount&quot;: &quot;-3.0&quot;,
                &quot;apply_status&quot;: 2,
                &quot;finish_time&quot;: &quot;2019-01-10 15:21:57&quot;,
                &quot;cumulative_net_value&quot;: &quot;&quot;,
                &quot;actual_amount_change&quot;: &quot;&quot;,
                  g&quot;actual_portion_change&quot;: &quot;&quot;,
                &quot;accumulated_amount&quot;: &quot;&quot;,
                &quot;accumulated_portion&quot;: &quot;&quot;,
                &quot;carry_interest&quot;: &quot;&quot;,
                &quot;carry_interest_status&quot;: 0,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;赎回&quot;,
                &quot;apply_status_name&quot;: &quot;成功&quot;,
                &quot;carry_interest_status_name&quot;: &quot;无状态&quot;
            },
            {
                &quot;id&quot;: 1,
                &quot;apply_time&quot;: &quot;2019-01-10 15:15:46&quot;,
                &quot;product_plan_id&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;apply_type&quot;: 1,
                &quot;amount&quot;: &quot;+13.0&quot;,
                &quot;apply_status&quot;: 1,
                &quot;finish_time&quot;: &quot;-&quot;,
                    &quot;cumulative_net_value&quot;: &quot;-&quot;,
                &quot;actual_amount_change&quot;: &quot;-&quot;,
                &quot;actual_portion_change&quot;: &quot;-&quot;,
                &quot;accumulated_amount&quot;: &quot;-&quot;,
                &quot;accumulated_portion&quot;: &quot;-&quot;,
                &quot;carry_interest&quot;: &quot;-&quot;,
                &quot;carry_interest_status&quot;: &quot;-&quot;,
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-1期&quot;,
                &quot;apply_type_name&quot;: &quot;申购&quot;,
                &quot;apply_status_name&quot;: &quot;申请中&quot;,
                &quot;carry_interest_status_name&quot;: &quot;-&quot;
            }
        ],
        &quot;page_info&quot;: {
            &quot;current_page&quot;: 1,
            &quot;page_size&quot;: 20,
            &quot;total&quot;: 13
        }
    }
}
```c\AR�                                                                                       �  / � /                                   �`� !	y�'dengxiaowu账号信息详情列表（在客户基本信息中）
    
**简要描述：**  i  ) !	m�dengxiaowu客户信息详情（在客户基本信息中）
    
**简要描述：** 

- 客户信息详情（在客户基本信息中）接口

**请求URL：** 
- ` /pyapi/customer/info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |客户ID   |

 **返回示例**

``` 
#企业
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;name&quot;: &q�%� !	m�=dengxiaowu客户信息详情（在客户基本信息中）
    
**简要描述：** 

- 客户信息详情（在客户基本信息中）接口

**请求URL：** 
- ` /pyapi/customer/info `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----  o  j 

- 账号信息详情列表（在客户基本信息中）接口

**请求URL：** 
- ` /pyapi/account/list `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |客户ID   |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;customer_id&quot;: 1,
            &quot;account_type&quot;: 1,
            &quot;exchange&quot;: 1,
            &quot;account_name&quot;: &quot;bitmex账户1&quot;,
            &quot;api_key&quot;: &quot;0908301&quot;,
            &quot;secret_key&quot;: &quot;09hjhusauhjha&quot;,
            &quot;pass_phrase&quot;: &quot;password&quot;,
            &quot;customer_account&quot;: &quot;11306&quot;,
            &quot;customer_password&quot;: &quot;887651&quot;,
            &quot;remark&quot;: &quot;你好 备注健康科技&quot;,
            &quot;account_type_name&quot;:   k&quot;数字货币&quot;,
            &quot;exchange_name&quot;: &quot;OKEX&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;customer_id&quot;: 1,
            &quot;account_type&quot;: 1,
            &quot;exchange&quot;: 1,
            &quot;account_name&quot;: &quot;yingfei&quot;,
            &quot;api_key&quot;: &quot;a4e7729a-e95b-42cb-8dae-d0f238f72f6a&quot;,
            &quot;secret_key&quot;: &quot;ED980F77CEE6413D88CB71040E84003E&quot;,
            &quot;pass_phrase&quot;: &quot;YingfeiCoin20056666&quot;,
            &quot;customer_account&quot;: &quot;&quot;,
            &quot;customer_password&quot;: &quot;&quot;,
            &quot;remark&quot;: &quot;公司账号，请勿乱用&quot;,
            &quot;account_type_name&quot;: &quot;数字货币&quot;,
            &quot;exchange_name&quot;: &quot;OKEX&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;customer_id&quot;: 1,
            &quot;account_type&quot;: 1,
            &quot;exchange&quo    t;: 1,
            &quot;account_name&quot;: &quot;dengxiaowu&quot;,
            &quot;api_key&quot;: &quot;2897e66f-aa19-4071-a93a-417c21e9e815&quot;,
            &quot;secret_key&quot;: &quot;1C5324D419F8AE6266086966885BBAFE&quot;,
            &quot;pass_phrase&quot;: &quot;dengxiaowu&quot;,
            &quot;customer_account&quot;: &quot;&quot;,
            &quot;customer_password&quot;: &quot;&quot;,
            &quot;remark&quot;: &quot;小武的账号&quot;,
            &quot;account_type_name&quot;: &quot;数字货币&quot;,
            &quot;exchange_name&quot;: &quot;OKEX&quot;
        }
    ]
}
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\Ef                                                                                                                              � �                                                                                                                                                                                                                                                                                                                                                                                                                                                �B� !�:� !	1�#dengxiaowu客户账号修改
    
**简要描述：** 

- 客户账号修改接口

**请求URL：** 
- ` /pyapi/account/update `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |账号ID   |
|customer_account |是  |string | 账号    |
|customer_password |是  |string | 密码    |
|remark |是  |string | 备注    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {}
}
```

欢迎使用ShowDoc！c\Gи   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �,� !�$� !	1�wdengxiaowu客户账号删除
    
**简要描述：** 

- 客户账号删除接口

**请求URL：** 
- ` /pyapi/account/del `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |账号ID   |

 **返回示例**

``` 
{
    &quot;status&quot;: 10002,
    &quot;msg&quot;: &quot;该账号涉及方案，不能删除&quot;,
    &quot;data&quot;: {}
}

{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {}
}
```

c\F��    8dUXExONH0/GbIfuUDd0d+vuFm1YEgoSi4SWBDWkIgYRNIqtJEZqrfTPdGaXJ/6C0w6Fbl100Bh5cLLJ3blzzt1778ycLIBsgFDILU95mzlaLHqNj/v1UigEAQhDUn5F8zvNxhrNVbzKJp2Z3a/nycpb7icva3Rli682qx/263O0sEGK64DF8yo7dHv61vUrB8HCMA4j6SxKq5FExrINDZsRVR81YBy0v8/x9NkXUi+2KYxx7eqNm7AVjBSn6dPDtBw+JYsLDmnM7k3NOe72V7I673iVT3S54ABnOMxGq7D2G5+GoRM+cDNEJwdZVaBDlyvMadmmqiehw2u7fKkNBJCl1nhCnq+6r2vN3XmWF4jH4xCcadZzzWoJTIDWd87eyxj2RctGdsbi78Mw2te1pFnJjp9bY4zbbpCCbNRB8bhHa6ri50e76UcwHWnYDyRLj8hSvvXMbpFiNZimGSNqqocYPd8flS4Mxc4NDgaTbNXu5QQDE4aWRnpWBKoqcgKZigj0Pk7cRbYIEmtITYkAkaKY2LJEoDZ6IOsZbQSbIugUTqKUbOI0C491dkzUcaHOjWQsVWcZyQmDsRI91dIXBXf9cTDTZEWbY0K707kKdjaNhQ6Zqo9jy5b9x51b6acMf1K3D0GtMeGbBR38aN8xkK7L/EtsYCbcuqWHe2ufux/u90WaPJzd6S3SQilssT0W6mHG8uXL7UAwNqjR/QKbKf+oBly1uMQJbG5ABFqaJrkVuphzv5WPSfegDwFktzDv7c51tXUSTAKmpdV3zVrtn2npgKiWYjM5egIBHRqSYv2D0kBM+i+gp1JA/6J0SieWzuhJpFNQfKTTJT7ta/5H4lPY8N5ssn/N31EeslAi6+97xYf9zYHvXVe7mg==c\Ee�                                                                                                                             p- |-----   |
|customer_id |是  |string |客户ID   |

 **返回示例**

``` 
#企业
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;1&quot;,
        &quot;name&quot;: &quot;哇哈哈公司&quot;,# 企业名字
        &quot;mobile&quot;: &quot;15012987466&quot;,# 联系人手机号
        &quot;title&quot;: &quot;&quot;,
        &quot;company&quot;: &quot;&quot;,
        &quot;id_card&quot;: &quot;&quot;,# 法人身份证号
        &quot;wechat&quot;: &quot;&quot;,# 微信
        &quot;email&quot;: &quot;&quot;,# 电子邮箱
        &quot;address&quot;: &quot;&quot;,# 企业地址
        &quot;tax_number&quot;: &quot;&quot;,# 企业纳税人识别号
        &quot;legal_representative&quot;: &quot;&quot;,# 法人代表
        &quot;business_contact&quot;: &quot;李磊&quot;,# 企业联系人
        &quot;remark&quot;: &quot;&quot;,# 备注
        &quot;customer_type&quot;: &quot;1&quot;,#客户类型: 企业1 个人2
        q  &quot;invest_status&quot;: &quot;2&quot;,#客户投资状态1：接触中 2：暂停搁置 3：投资中
        &quot;invest_remark&quot;: [ #  搁置说明
            {
                &quot;id&quot;: 1,
                &quot;customer_id&quot;: 1,
                &quot;invest_remark&quot;: &quot;的顶顶顶顶顶&quot;
            }
        ],
        &quot;salesrep&quot;: &quot;1&quot;, #跟进人ID
        &quot;user_id&quot;: &quot;3&quot;,
        &quot;status&quot;: &quot;0&quot;,
        &quot;customer_type_name&quot;: &quot;企业客户&quot;,
        &quot;invest_status_name&quot;: &quot;暂停搁置&quot;,
        &quot;salesrep_name&quot;: &quot;王辉&quot;#跟进人
    }
}

#个人
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;3&quot;,
        &quot;name&quot;: &quot;ergf&quot;,# 名字
        &quot;mobile&quot;: &quot;18827062372&quot;,# 手机号
        &quot;title&quot;: &quot;&quot;,# 职位
        &quot;co    mpany&quot;: &quot;&quot;,# 公司
        &quot;id_card&quot;: &quot;&quot;,# 身份证号
        &quot;wechat&quot;: &quot;&quot;,# 微信
        &quot;email&quot;: &quot;&quot;,# 电子邮箱
        &quot;address&quot;: &quot;&quot;,# 地址
        &quot;tax_number&quot;: &quot;&quot;,
        &quot;legal_representative&quot;: &quot;&quot;,
        &quot;business_contact&quot;: &quot;&quot;,
        &quot;remark&quot;: &quot;&quot;,# 备注
        &quot;customer_type&quot;: &quot;2&quot;,#客户类型: 企业1 个人2
        &quot;invest_status&quot;: &quot;1&quot;,#客户投资状态1：接触中 2：暂停搁置 3：投资中
        &quot;invest_remark&quot;: [],
        &quot;salesrep&quot;: &quot;2&quot;,
        &quot;user_id&quot;: &quot;3&quot;,
        &quot;status&quot;: &quot;0&quot;,
        &quot;customer_type_name&quot;: &quot;个人客户&quot;,
        &quot;invest_status_name&quot;: &quot;接触中&quot;,
        &quot;salesrep_name&quot;: &quot;王博士&quot;
    }
}

```
c\E~S    k  k                                                                                                 �� !	1�M �dengxiaowu更新客户信息eNrtlUtP20AQx+/7KfbUQ9QI9UqvXCpValXac7I4K7CI7dTeQBFGilFRyyuOVF4CSsWjFBWaBIWS1Enwl/GuzYmv0E12A1GsqFJvleqL7fFv5j8znrEB5AdIJMJyITp1mOtGfvWutZtIQACSkO1dsa0qLR+xj/XAP2ROhRW/UvcYcI+oUmeXi29ePZd4EqbhSG4O5dQRJW8RQ8PmSD6XQQTDNOhqCA+29Yu23K4T93n5Yvw17ISj7iLb7EnDoOUEjV0hzG0AAlsAtLRuU3/ptrBsh5dNerBqR5UrtlO0gT2a5EennO6VuE1COynNnOjllVIz0GY7FW60iKnqk9AWUs/GBkAyl8ODKBSskIfCQUdanJNFlNbDb1XJEfQupee1CWxyydJpPx16tfCsSN26RLN4EmVTJs6Z2MI6QUSdwTEnVtsMPC9oHkeHZ9JPzaQUZGaGoJF3HjTbUcWRNMpkeHxrWO77Vfq5INGJvKXqnE0pBk9HIUN8ImcjrDW5lHTTjAk1G2/OPcaWV9m+91D3LFamEImlT2/KfAIlgzWkZmPI7WI5LF9KxOSMOR0Pc/KB1e5bpc9gi6Qs3tx8vAVsZTP6+T5cuWaFXrcslMUWfyXxaupfIn/voWgZWSbRNQ4m0v7ULxA0PFZywnaZbV/ftdb4iNPDcxEMBI3vPPLDMvyLu8BzpT+2/3IkiEqy8dmPnLWgvS4RxdBySJ+Lt3npgrqNP6zG0KUYDNa/Dv/ndHBOIf/E+xt07yA88YKbVf59B+l0GoJ50AEevc0b5KmoQVyPwieP+x5p1mTPLs7GtDj3Q/x/gnrU/AJY6CgAANjFUeQXg7YfbpyNTxmzY4Zy13J+AyPFGSY=c\E�%    |string | 备注    |
|invest_status |是  |string | 投资状态    |
|salesrep |是  |string | 跟进人    |
|invest_remark     |否  |string | 当投资状态为搁置时，必填    |

个人客户：

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|customer_id |是  |string |客户ID   |
|customer_type |是  |string | 客户类型    |
|name |是  |string | 名字    |
|mobile |是  |string | 联系人手机号    |
|title |否  |string | 职位    |
|company |否  |string | 公司    |
|id_card |否  |string | 身份证    |
|address |否  |string | 地址    |
|wechat |否  |string | 微信    |
|email |否  |string | 邮箱    |
|remark |否  |string | 备注    |
|invest_status |是  |string | 投资状态    |
|salesrep |是  |string | 跟进人    |
|invest_remark     |否  |string | 当投资状态为搁置时，必填    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {}
}
```


欢迎使用ShowDoc！c\E�Z    �  �                                                                                                                                                                      �L� !	E�- �dengxiaowu客户的方案列表-分页eNqNVE1v00AQve+v2BOHKCb9EBzKrXBBQgJBOSGULI6JLBLbZNeV0jpSUggNVK0rpdDS0qIUaDlAQqWglhLIn8munRN/gbWdOLabEFaR7Nl57+288U4A5AvEYlajZB+VmWnanW9/2ruxGARAgLRxyKqn1u5z9uYHq1dpdduufxZo9UWv/p1tfKLmB8C5dvOUnazcv3urTxRgCia0AtLkhJZX07pIkloWKYmsjAlMAfc8j8Nladt0aZx15/a9BegIUnOFvfbLMLyQbq4btFPplV4a1slPerBm2M0W29kwgDEn8OUYcd+8UICG0N/mCFHHRM1J+aSchgbbafJNTPKykoGG5/HmDQ+ooYwURUB3c5hP4iXZjTl58ygK9LMGAJAb7WzRvQPr43n39xp3CVKpFATLwAFceqqr5BomiOjYe5+D0/FAKoczg33vqT7xnkFQGhE0QHm6w5zT8UHugZ9z1nIoGjLk9AB/NT4GEuhlpOqLWCSKqq6Q/4EOrsoQemUslN+mpIJyUrg7RMKke35Ma2WB1lZprer8Kl+oeSbMsnfvg60bUSnGEkmSgiZNrFTU83lJEQvh0+cXrk84Iee0Ikyamb48xVefmEhYrabdqDsDVlkfI/MIcfdixPpsWIbtP7P2XnV/ve0d7k/0O6KTzrh93bZbx/Ss/G9Top7Ts4jIi1yG6y2irB7RCjr0Da6WaKkdkiz60cN45Ba7UyUrj9WL1zz6Ufg/DQeP+YIBNSwv+aiZqVEwohKU9WcBhMssgqIzyAD8BZb4xZw=c\A��   , ,tatus&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;id&quot;: 6, //产品方案ID
                &quot;customer_id&quot;: 1,//客户ID
                &quot;account_id&quot;: 1,//客户账号ID
      �P� !	1�Odengxiaowu方案收益统计
    
**简要描述：** 

- 方案收益统计接口

**请求URL：** 
- ` /pyapi/product_plan/earnings `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|id |是  |string |id   |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;plan_id&quot;: &quot;1&quot;,
        &quot;amount&quot;: &quot;2.0000&quot;,//累计转入
        &quot;balance&quot;: &quot;0.7700&quot;,//权益收益
        &quot;cumulative_net_value&quot;: &quot;1.0000&quot;,//累计净值
        &quot;value_list&quot;: [] //收益曲线
    }
}
```

c\A|J    |否  |int | page    |
|page_size     |否  |int | page_size    |

 **返回示例**

``` 
{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;list&quot;: [
            {
                &quot;customer_type&quot;: 1, //客户类型
                &quot;invest_status&quot;: 1, //投资状态
                &quot;name&quot;: &quot;李磊&quot;, //名字
                &quot;salesrep&quot;: &quot;黄可伊人&quot;,//跟进人
				&quot;salesrep_name&quot;: &quot;王博士&quot;,
                &quot;customer_id&quot;: 1,//客户ID
                &quot;invest_status_name&quot;: &quot;接触中&quot;,
                &quot;customer_type_name&quot;: &quot;企业客户&quot;
            }
        ],
        &quot;page_info&quot;: {
            &quot;current_page&quot;: 1,
            &quot;page_size&quot;: 20,
            &quot;total&quot;: 1
        }
    }
}
```



- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\F�|              &quot;customer_id&quot;: 1,//客户ID
                &quot;account_id&quot;: 1,//客户账号ID
                &quot;product_id&quot;: 5,//产品ID
                &quot;plan_name&quot;: &quot;test产品-哇哈哈公司-3期&quot;,
                &quot;asset_type&quot;: 1,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;21.0000&quot;,//累计分配
                &quot;balance&quot;: &quot;3.0000&quot;,//权益余额
                &quot;asset_type_name&quot;: &quot;数字货币&quot;,
                &quot;cumulative_net_value&quot;: &quot;1.0000&quot;//累计净值
            }
        ],
		&quot;customer&quot;: {
            &quot;customer_id&quot;: 1,
            &quot;invest_status&quot;: 1 //客户投资状态1：接触中 2：暂停搁置 3：投资中
        },
        &quot;page_info&quot;: {
            &quot;current_page&quot;: 1,
            &quot;page_size&quot;: 20,
            &quot;total&quot;: 6
        }
    }
}
```

c\G��   , �,                                                                                                                                                                                                                                                                                                �:� !	1� �dengxiaowu客户账号资产eNrtWE1PGkEYvu+v2FMPhJUFa6321tqkTZrYFDw1jWwXYkmFpexuGuOaiAWlpYqmahXUFL/bGNAWSwtY/gwzu5z4Cx0YvkFEROXAXHZn9n1nn3k/ZuZ5CRI1QqWSQ9PKvhP6fEryOJPwq1QkQ  y�
� !	1�= �dengxiaowu客户账号修改eNplkc9LAkEUx+/zV7xTh6VFutrVSxAUWWd3WcVEdLf9gYQjqNAvJLeDhRRImImH2E0SxLL2n3Fmt5P/QrPOGqLv8ua9+Xzfe/MGATMkCL5TDfo1atuB9z6fPgoCICQCcbr0ehyM+sQezzyHtia0+UrsF8QUgTumw/rJ0X6EiyBBTDuXtVxMVhTVKpoxS0vLZgYktGjBBfRhQqb2QsMkhwfJYwirEbtO7/87Yx6Su1tMvIvf6g32h1+k08CBO6LtJkY4LjILZ1+ceCgCFqM0I6IhUrk0YNp2Wc4w9VwxC5i/Zy/BOcUyTLWQ0VORYJ0GjsMarcmGUVL1jeJA3Ev/uRbheqYg6/lNpndFPwacQcBW47XIU8fvfc5+GmwvSJIkQGUUAltnlmruGqZsWgY/x2Fne+WqYGSXee7VPPerEPsHeUmVK6gSdkCIvnUDrzn79vzWIHmqlhKqMp/W/gB8J+Ahc\Eg�    VAkCG1DT1SJ7ANfVDl1pWIHcGEP+HYIpKGEo/BkZuTFs7w4RRpJjX2CsVs0rMgLnNXs0DAsy4k2YZThebPAk0Yi9y+sCVf/goQvp4x0nw/rDWR2WuCbgStFCBLugsV5CSTd6emPknwSB1teSQlH4NqCREiDFGrZReTecJciJSo/jCQKICwmUoJrYTTGCw6LbYyUSLyyp0M5QYJE0JLLILAl78ZS/7wIF2E0GkliksjOf+edyAkPeIERRB6/D5JaddknKz9WGMdP7i1+lguZGIEpSOF5S98sNrtYsFVB5iWp0ciRsBIKKmdHwL1XVMm2yYpeaSJWdDjMNnaiEs5Dw6NyPLVqjDVrp0olnY7W9dCo4W6F5pT6CmgeG560guZ6wIzohwyXR6Ol6esxzbD+8mB6G4Ap9l6pq0KOGR/nWEYwm+qEHYj+lOM+4JlNu+eB5xjlKwx6ZL8LeL4qwcMm14c3ApR7VSlTZ1HFNL1Q1O7gTCJbLtqnvoFUKLOvOmufGsukztbT25sXgLaPM7ZRG2M1V84umHkB7a/gi7MxstcM0mfN1dDu0nQJHQIHNz/IgU91ADUdmTfkuXvq68+Nil1D3Zp/4KlXCa+0y0Ndl+h6uz7pNJ90XdJxZ4726i5p58nSdUhHO+T8i55oa3TVgxs/8G0Gkbz03FJTbhUm7Oa2GLTv/hVv0bVIbolc1AK5LWJRxyQtkQpdE5yCwP0pohFRpmldQ65crDGg8Ev9icnfYxdw59wPb5ea3zQXpzuHiNMdRMOp/oH+HnqgQ3h4W1n4ZbbxbjR2o7GlaCzt30ajsawKikuvuNBaXYytW4Wl8kVYiiqWX89rSGXMwYn2bE3WYhOyI/LyIfRE5bjLYsokPmszCb/y2y3HDuRQUF6cBUtrmURAh0bheig97cfShbIt2J2Dvw7zRWsYiIBdP15DenldCYdT8R35m1MJR+UNb3p/NR08lf2u8k+47o3OE3i0rSQXUmdJNL/+Dfd+iGMzCed/xZHIQw==c\?   {,
            },
            {
                &quot;currency&quot;: &quot;ETH&quot;,
                &quot;amount&quot;: &quot;222.0000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;,
            },
            {
                &quot;currency&quot;: &quot;USDT&quot;,
                &quot;amount&quot;: &quot;100.0000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;,
            },
            {
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;300.0000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;,
            }
        ],
        &quot;allocated_assets&quot;: [ //已经分配到方案的列表
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 5,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;2.0000&quot;, //分配到方案的余额
                &quot;product_plan_name&quot;: &quot;test产品&quot;,
       |           &quot;balance&quot;: &quot;2.4000000&quot;, //权益余额
				&quot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 6,
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;22.0000&quot;,
                &quot;product_plan_name&quot;: &quot;测试产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 6,
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;223.0000&quot;,
                &quot;product_plan_name&quot;: &quot;测试产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;,
				&quot;frozen&quot  };: &quot;22.0000&quot;, //冻结资金
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 6,
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;23.0000&quot;,
                &quot;product_plan_name&quot;: &quot;测试产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            },
            {
                &quot;customer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 5,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;21.0000&quot;,
                &quot;product_plan_name&quot;: &quot;test产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            },
            {
                &quot;cust  ~omer_id&quot;: 1,
                &quot;account_id&quot;: 1,
                &quot;product_id&quot;: 5,
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;21.0000&quot;,
                &quot;product_plan_name&quot;: &quot;test产品&quot;,
                &quot;balance&quot;: &quot;2.4000000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            }
        ],
        &quot;unallocated_assets&quot;: [ //未分配资金
            {
                &quot;type&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;2158.0000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            },
            {
                &quot;type&quot;: &quot;ETH&quot;,
                &quot;amount&quot;: &quot;222.0000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            },
            {
                &quot;type&quot;: &quot;USDT&quot;,
                &quot;amount&quot;: &quot;100.0000&quot;,
				&qu  ot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            },
            {
                &quot;type&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;32.0000&quot;,
				&quot;frozen&quot;: &quot;22.0000&quot;, //冻结资金
            }
        ]
    }
}

{
    &quot;status&quot;: 1002,
    &quot;msg&quot;: &quot;账号资金为空&quot;,
    &quot;data&quot;: {}
}


{
    &quot;status&quot;: 1,
    &quot;msg&quot;: &quot;ok&quot;,
    &quot;data&quot;: {
        &quot;input_assets&quot;: [
            {
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            },
            {
                &quot;currency&quot;: &quot;ETH&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            },
            {
                &quot;currency&quot;: &quot;USDT&quot;,
                &quot;amount&quot;: &quot;-797.0900&quot;
            },
            {
                &quot;currency&quot;: &quot;EOS&quot;,
                    &quot;amount&quot;: &quot;0.0000&quot;
            }
        ],
        &quot;allocated_assets&quot;: [],
        &quot;unallocated_assets&quot;: [
            {
                &quot;currency&quot;: &quot;BTC&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            },
            {
                &quot;currency&quot;: &quot;ETH&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            },
            {
                &quot;currency&quot;: &quot;USDT&quot;,
                &quot;amount&quot;: &quot;-797.0900&quot;
            },
            {
                &quot;currency&quot;: &quot;EOS&quot;,
                &quot;amount&quot;: &quot;0.0000&quot;
            }
        ]
    }
}

```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


欢迎使用ShowDoc！c\J{(