<?php

$JWT_PRIV_KEY = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAuVwVgW2t/jp3sH+lXd2BY1A7BPACeVSpda2OVH3/OdDcMOpL
ttkn7Te64iXb2s17Eik8SfNH9E/bED7f2wXXMbUeiiJJ78y3GZD12SNBnW//aGWJ
6B04RhzcDmAsRvPkT8nFX2X2lAJBeHnyDQO5CYKelhgwpw0tKu/0c6XZUNr4Ua3s
O2bLvTJhz5VBBI4g0Zkgk22YqzeG6q8btD1acW09X8PUD8/rsAFHQx5gaDBfUmjN
XZhRt1NMflwiz/6dILTG/U6VNcV6tstCbO32C37jfCv8IDXRJPAoTN9VCecN672V
FziM+vWk9UpniHfrT7EJBbaLoMJDjVfXjb38lwIDAQABAoIBAE3N5kUGudMNzbGr
Usl8sdPzGGLxL8ioDd2UdTroDFrDXbm2jwN4UXcUPoCwrYFBYRh1cJYF5T0ay/Qc
wDAaWoLF6MTIscpTXsP/ggKb9u3T1hyHCoUAxt8/O+tY2R0LQNlw80Ug8oicDck5
Pq3R0zi3uEN+ceWc9UmhoTVt9zMlj6kydYoYHbxlbX/8N6Sgd6dvRJLquNrFoGMd
zLvntfXDq/Mn5PIkz9IymzyaAXJE5p0QLUt/F+G0ZhR5hUkddEQKtLK8AtBunH+5
wZfqjzH3D65HGJ5nDHrNIuzneUtiKHrKIiy100O2s4OGtmw2GowtnZ0Yp7Yz8+tG
1c58VVkCgYEA49MRWpW0PFB1jLwN1Tj3+FxIhsbrPsIuXy+3jdX5IjkMnlELtjS6
C2Kp1RmCIprHg8xfrSCYc1LD8AjXo9dROtj8NzYLoiBHiggQcqsF8bXkDjXLU8Ss
ADtUm/XrsYt7ebNjDjNV4MFYvSiiLyp3GxVtw6e6Ps/h7F/KwPl44z0CgYEA0EiU
X207S6mk6E7bj3xCw5KEl/RdPacNKiSbhM6QI7uyzkADyHtWeqSNygmfiQoJBmM2
4WNm5HZU+h+NUgIKpUKtZZSmDcdkQ/MsXsj8npYmL2Q5YLcJ2YgEyJPKeeWqpbdK
q3SAWshnuoX+g/+F925r8LjWhPEnHwXrQVsoTGMCgYEAz0JERlls53X3CrpGB1VV
WY9yt5IdjzGOiC/b19/yTu0BisGGWxNqsVLn2CLlnd+bZE64N8MwjbGc6TDSJI6M
qnGeOggj2zFsg6lEdV0bAkMMHtVXjXSdWXSgS2YVLqcLBLNqiQ+wr9CVjzh5G1mR
k4USH23mZKAwEx8uUBJkpK0CgYEAxvfutVJVyKvgmwNp/yIHbWi0Paz0vYatrsqV
vkLNszUFVL4WXxhjvnkf8hdLTdBGWtHAhYM9sZXRC7fEesj0fna5ykY8cwE9KSRO
CKYbnSt2guNNZLS2NhYX67wzOktJv1Dfhfae/xpe7PI/9rzMr1fOyYDpfMoaQyqW
WDLKxl0CgYA2+RkrBFuLRgLQBgYKdg1Ymgu9EWQPhvuEndqnQO3FcakM1CBE1sK4
zVxYO13Ir6gSdVPw6ua7bDdi2q2mmzs2+nGp1QzoqmbGXWgVZyx0kX8Z7UoBB0LE
9smyOTjc47ukTL6QfUMdPFb6G7wFoiCZdPMU/btB9jw3F/beeV5loQ==
-----END RSA PRIVATE KEY-----
EOD;

$JWT_PUB_KEY = <<<EOD
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuVwVgW2t/jp3sH+lXd2B
Y1A7BPACeVSpda2OVH3/OdDcMOpLttkn7Te64iXb2s17Eik8SfNH9E/bED7f2wXX
MbUeiiJJ78y3GZD12SNBnW//aGWJ6B04RhzcDmAsRvPkT8nFX2X2lAJBeHnyDQO5
CYKelhgwpw0tKu/0c6XZUNr4Ua3sO2bLvTJhz5VBBI4g0Zkgk22YqzeG6q8btD1a
cW09X8PUD8/rsAFHQx5gaDBfUmjNXZhRt1NMflwiz/6dILTG/U6VNcV6tstCbO32
C37jfCv8IDXRJPAoTN9VCecN672VFziM+vWk9UpniHfrT7EJBbaLoMJDjVfXjb38
lwIDAQAB
-----END PUBLIC KEY-----
EOD;


return [
    'GT3_CAPTCHA_ID' => '2f41bb1d9644514403ddbbd3c9433220',
    'GT3_PRIVATE_KEY' => '9e5abdbfcbc9695939272d7d4ce512a3',
    "JWT_PRIV_KEY" => $JWT_PRIV_KEY,
    "JWT_PUB_KEY" => $JWT_PUB_KEY,
];