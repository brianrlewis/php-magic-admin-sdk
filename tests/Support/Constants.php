<?php

namespace BrianRLewis\MagicAdmin\Tests\Support;

final class Constants
{
    const API_FULL_URL = 'https://api.magic.link';
    const API_KEY = 'sk_test_123';

    const VALID_DIDT = 'WyIweGUwMjQzNTVlNDI5ZGNhZDM1MTdhZDk5ZWEzNDEwYWJmZDQ1YjBiNjM5OGIwNjY1NGRiYTQxNzljODdlMTYyNzgxNTc1YjA5ODFjNjU4ZjcwMjYwZTQ5MjMwZGE5NDg4YTA0ZDk5NzBlYjM4ZTZmZGRlY2Q2NTA5YTAyN2IwOGI5MWIiLCJ7XCJpYXRcIjoxNTg1MDExMjA0LFwiZXh0XCI6MTkwMDQxMTIwNCxcImlzc1wiOlwiZGlkOmV0aHI6MHhCMmVjOWI2MTY5OTc2MjQ5MWI2NTQyMjc4RTlkRkVDOTA1MGY4MDg5XCIsXCJzdWJcIjpcIjZ0RlhUZlJ4eWt3TUtPT2pTTWJkUHJFTXJwVWwzbTNqOERReWNGcU8ydHc9XCIsXCJhdWRcIjpcImRpZDptYWdpYzpmNTQxNjhlOS05Y2U5LTQ3ZjItODFjOC03Y2IyYTk2YjI2YmFcIixcIm5iZlwiOjE1ODUwMTEyMDQsXCJ0aWRcIjpcIjJkZGY1OTgzLTk4M2ItNDg3ZC1iNDY0LWJjNWUyODNhMDNjNVwiLFwiYWRkXCI6XCIweDkxZmJlNzRiZTZjNmJmZDhkZGRkZDkzMDExYjA1OWI5MjUzZjEwNzg1NjQ5NzM4YmEyMTdlNTFlMGUzZGYxMzgxZDIwZjUyMWEzNjQxZjIzZWI5OWNjYjM0ZTNiYzVkOTYzMzJmZGViYzhlZmE1MGNkYjQxNWU0NTUwMDk1MmNkMWNcIn0iXQ==';

    const VALID_DIDT_PARSED_CLAIMS = [
        'iat' => 1585011204,
        'ext' => 1900411204,
        'iss' => 'did:ethr:0xB2ec9b61699762491b6542278E9dFEC9050f8089',
        'sub' => '6tFXTfRxykwMKOOjSMbdPrEMrpUl3m3j8DQycFqO2tw=',
        'aud' => 'did:magic:f54168e9-9ce9-47f2-81c8-7cb2a96b26ba',
        'nbf' => 1585011204,
        'tid' => '2ddf5983-983b-487d-b464-bc5e283a03c5',
        'add' => '0x91fbe74be6c6bfd8ddddd93011b059b9253f10785649738ba217e51e0e3df1381d20f521a3641f23eb99ccb34e3bc5d96332fdebc8efa50cdb415e45500952cd1c',
    ];

    const VALID_DIDT_DECODED = [
        '0xe024355e429dcad3517ad99ea3410abfd45b0b6398b06654dba4179c87e162781575b0981c658f70260e49230da9488a04d9970eb38e6fddecd6509a027b08b91b',
        self::VALID_DIDT_PARSED_CLAIMS,
    ];

    const VALID_FUTURE_MARKED_DIDT = 'WyIweDkzZjRiNTViYzRlN2E1ZWJkZTdmMzVkYzczMWE5NWFmOGYwZjVlMWQyMWQ5ZDYwZWQxM2Y4YmYzMmNiN2UwOTQ1MDM0MGI1Y2IyNTIxODZkNWQ3OTFiOTAyODZhYmY1NzM3YzMxN2M5NzNhMmQzMGY0MWZmYmFlNGU0NTdmMjE4MWIiLCJ7XCJpYXRcIjoxNTkxOTE0NTgyLFwiZXh0XCI6MjIyMjcxNDU4MixcImlzc1wiOlwiZGlkOmV0aHI6MHg0YzMzMmQ5QzRhMmEwNjY1YzNmODg1MTU1YjlFOTFmZEIzMDBlRTc2XCIsXCJzdWJcIjpcIms4NUtaR09Ycl9vMTYxNGdFVGN6Yzlac0phTjV4cjF2TVFXSWhnbjQ1Slk9XCIsXCJhdWRcIjpcImRpZDptYWdpYzoyMWI4ZjRkZS02ZmIzLTQ0M2YtOGM0MC04ODcwODJjNDQ1MjNcIixcIm5iZlwiOjE5MDczMTQ1ODIsXCJ0aWRcIjpcIjVhMjhjMjQwLWRmYzYtNDg2Ni04ODk1LTVkYzBhOTVkNWJkN1wiLFwiYWRkXCI6XCIweGRlMmI1ODgyNjUyZGExOTY4YWNlZTIyYWUyNGI2OWYxNThlZjg1NDQzOGE0OTlmMThjZGZlZDU3MzEwOGIxNzExYjQ2OWQ3MzQ5NzdhNGQ4NGJlM2RiODc2OTBkZjFmZjk4MTVjN2Y3NDIxNjIxMGY4Y2JhMGJmYzQ2ZGIwYjhkMWNcIn0iXQ==';

    const INVALID_DIDT_MALFORMED_CLAIM = 'WyIweDRiN2Y0ODgzNTczOGM2ZjViZmI5MTIyYmEzN2EwN2EyZDYwMTUwZjM2NGNhMDIwZjUyYWVlZjc3MmNlODk2ZWExYmJlYzc3OGZlMmFhNWNjODc3ZmVmOWQyOTJmN2U2MWZhMGZjY2M2NWIwZWZlZGVkMThmNzI0MzZkNjQ4MzdjMWMiLCJ7XCJ0aGlzSXNXUk9OR1wiOlwiSEVMTE8gV09STERcIn0iXQ==';

    const INVALID_SIGNER_DIDT = 'WyIweDBhNTk4NmE1NDdiMzNhMDAxODIxNmRiNjk0YzNiMDg3YTU3MTk1Nzg4ZTZmMDc2NDg4NzA2ZTQ3ZmFhNjFhYzMzZDczZTM4ZmM5ZDA0YzU2YWVmZWNiMTAxMDA4OGEwNmFlOWFiZTE5ZDIyYWQ4MzNiMDhhM2VlNWNmZWM5ZDQ0MWMiLCJ7XCJpYXRcIjoxNTg1MDEwODIxLFwiZXh0XCI6MTkwMDQxMDgyMSxcImlzc1wiOlwiXFxcImRpZDpldGhyOjB4MDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMFxcXCJcIixcInN1YlwiOlwiNnRGWFRmUnh5a3dNS09PalNNYmRQckVNcnBVbDNtM2o4RFF5Y0ZxTzJ0dz1cIixcImF1ZFwiOlwiZGlkOm1hZ2ljOjMzZjAxNGVlLTNkZDUtNGRmZi1iYzE2LTgxNTU3MTFiN2UwMlwiLFwibmJmXCI6MTU4NTAxMDgyMSxcInRpZFwiOlwiOGEzYjdkZDUtZTFjZi00OTY1LWFlMmItZDIwZjE4OGU2ZWMyXCIsXCJhZGRcIjpcIjB4OTFmYmU3NGJlNmM2YmZkOGRkZGRkOTMwMTFiMDU5YjkyNTNmMTA3ODU2NDk3MzhiYTIxN2U1MWUwZTNkZjEzODFkMjBmNTIxYTM2NDFmMjNlYjk5Y2NiMzRlM2JjNWQ5NjMzMmZkZWJjOGVmYTUwY2RiNDE1ZTQ1NTAwOTUyY2QxY1wifSJd';

    const EXPIRED_DIDT = 'WyIweGE3MDUzYzg3OTI2ZjMzZDBjMTZiMjMyYjYwMWYxZDc2NmRiNWY3YWM4MTg2MzUyMzY4ZjAyMzIyMGEwNzJjYzkzM2JjYjI2MmU4ODQyNWViZDA0MzcyZGU3YTc0NzMwYjRmYWYzOGU0ZjgwNmYzOTJjMTVkNzY2YmVkMjVlZmUxMWIiLCJ7XCJpYXRcIjoxNTg1MDEwODM1LFwiZXh0XCI6MTU4NTAxMDgzNixcImlzc1wiOlwiZGlkOmV0aHI6MHhCMmVjOWI2MTY5OTc2MjQ5MWI2NTQyMjc4RTlkRkVDOTA1MGY4MDg5XCIsXCJzdWJcIjpcIjZ0RlhUZlJ4eWt3TUtPT2pTTWJkUHJFTXJwVWwzbTNqOERReWNGcU8ydHc9XCIsXCJhdWRcIjpcImRpZDptYWdpYzpkNGMwMjgxYi04YzViLTQ5NDMtODUwOS0xNDIxNzUxYTNjNzdcIixcIm5iZlwiOjE1ODUwMTA4MzUsXCJ0aWRcIjpcImFjMmE4YzFjLWE4OWEtNDgwOC1hY2QxLWM1ODg1ZTI2YWZiY1wiLFwiYWRkXCI6XCIweDkxZmJlNzRiZTZjNmJmZDhkZGRkZDkzMDExYjA1OWI5MjUzZjEwNzg1NjQ5NzM4YmEyMTdlNTFlMGUzZGYxMzgxZDIwZjUyMWEzNjQxZjIzZWI5OWNjYjM0ZTNiYzVkOTYzMzJmZGViYzhlZmE1MGNkYjQxNWU0NTUwMDk1MmNkMWNcIn0iXQ==';

    public static function getTokenThatShouldFailRecoveryProof()
    {
        $claim = json_encode(static::VALID_DIDT_PARSED_CLAIMS);
        $proof = [1, 2, 3]; // Not a string
        return base64_encode(json_encode([$proof, $claim]));
    }
}
