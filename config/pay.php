<?php

return [
    'alipay' => [
        'app_id'         => '2016091600527392',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxvwzPlrg4DBcYNPnfnVeX6svd6n69larHzAd+ZNCHy117F/QXem43p9UyGwOldUcUFNXC7eav94q1ixIAKr9BV6Ua6ZzqpN4rWZhgxEV6yiVF0HhG639Z/TvL3f8sjsp/0BTZRVJjX+pW/hhbrxSZX5VFkNqU5SvLT+DjZo8Y4o26WOx2NB7u+80IAUM+R3jML7ZVexr8ZOqLS7QskOqPmCsK6/ZKgv098o5u/U4Ynth/9exBsfgg0LKXJy9EhxBy3yvDQwjdjT1Uaehd16NiJNMZHCCU0KgF8pAbhf5WE5RJ2+E8pkb1qOh6+YyurTrS3NYiiO9EvkJ6eH1narvUwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAsyBGsHqbik1QISCEGyRfbaPuzESNofGqelPJ+ekKL7DRjq3YNBGFV+mhicCeuxmbhiUEtyMA9xizpNMCBlaD6BHyh3GwfqQonfl4XDZZ4Zy2B1XfWAlCWTtTJW/O0cJUnHuljiOJ1E5HX3efW+WN3crIvFGJk/OZdf/GNdCgU20azxndsO23EsbjNXSLDdrnrE0ISuzGCVXuR5nQ6kHCIkWCiHvLaKejGvzr0T++GdJ5MSAgszeR/ZwCbN70Rm5q+WgkoFuQCHTASTsj4k+30Lov6X3DHDkoo4bq6mBLtAvt8i5N2umYhpklZJOVsM1du/x4AdQGFv5llvAHADbBTwIDAQABAoIBADeKnYChM9Npb5wl+fB0kcZsW2IpK4V4arTtgCYmdUseV4wXKX/TovYEcltFR7KaGRg6KEEk8Gqt1R4Zc3pFnzb5QatvvBs4iYOaVBC7pZkIP4T8wnkIvfLvKzPjfEycJiIzUL1HFbin4QegDuCuyBNqil2iJreihAYLngkXvG7BU/K+FTMLxxkcd8fDizNqHw3BCpHkv5aGSGlq5eUBcQEQ2xhoY9+Vk3c2hmvsdITJ98q0euTqY8vLVEzZG/7dqXYoBjc8BYk5PcwQXXD8DezMROvy/v0Cq697riIA8ofZYRDvHRFcPPl6dyWeSIX3qmb8rh1IaeBSe1m2/p4e2FECgYEA3xYmd4QgXBZGn0MqbkvJTYgodN4iZdMdaQn4BMULY6vblOcA/sIiNjfoE/YMk0rV8RoMNVU62AV9v6PaOHlKXVgaVuh74H19ICBz1smtnwgq0dtT0e7rGzvFTqj2KTdyt+EwdBnhb4Rwmp3xaEBezErrHtKircpgkPYGEfvaukcCgYEAzY3D3ksgGJJ1S0m9SCuvSG7yi8Dz1EJkUudYgxeG5N/vTJb3jUvjDTWY3285w01JMcyfETS5z38dXYDAmBMDOB/xi5BdM1aGgnman3tBUlUCsPVvdSOO+QHscp+u1h8S0aH6PCmAaiSFBv09VI1d3xLfeO5ofwDJK9DEw6HWvLkCgYAq9iwQRiypL00IbLnmJcgtmzQXVZQQQfje+qF94aiQ2E7gPSBu71oBUQDrny3Ky9WpqdeCCdjcMyqFVnu29nzAvy/LXthEYkZPgpBsY8iA4OTGJ1PcEQPL6dXUkStewqPgD4jyQu2sOTgqPpJ3/jWDaEYhWHUlvNyd7hM7MWJtDwKBgBgM4kH8IEE/waGReygalGOxN4fKh7zqF7rrfpu4APx+hw07DLPnkSVWhBCAfw2u2UWOX34v4R26DcGG8wHYF6RVeHmP5pe/I/XYLJNEZJwxfiMeVHAsPOo9o2C19krvT9BfV1v6rx+8LiRnNOnTsIwNNUB9BJT3jpIl1x/cq7dhAoGAY+d54owz1Ibz1md6Vg87Vb4EsT3ljgj5piWYZGXHsPKoAaHgxhJ448od5rdkqStlQnra0yIc9rQE/Ub9fqmUCuKuYlufbIJB4y5D8BOyaNGzz1J9kxDOv97znJGaa5pOtLh52eL4SXZF0gY3drErPups4Km5MEawwDzvtG6LIZA=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];