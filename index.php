<?Php
function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("https://jsonplaceholder.typicode.com/posts");
$data = json_decode($data, TRUE); ?>



<!DOCTYPE Html>
<Html>

<Head>
    <Title>UAS AHMAD KURTUBI</Title>
</Head>

<Body>
    <H1>UAS AHMAD KURTUBI</H1>
    <a href="tambah.php">Tambah</a>
    <Table Border="1" Style="Width: 100%">
        <Thead>
            <Tr>
                <Th>User ID</Th>
                <Th>ID</Th>
                <Th>TITLE</Th>
                <Th>BODY</Th>
                <Th>EDIT</Th>
            </Tr>
        </Thead>
        <Tbody>
            <?Php foreach ($data as $Row) : ?>
                <Tr>
                    <Td><?= $Row["userId"] ?></Td>
                    <Td><?= $Row["id"] ?></Td>
                    <Td><?= $Row["title"] ?></Td>
                    <Td><?= $Row["body"] ?></Td>
                    <td>
                        <a href="edit.php?id=<?= $Row['id'] ?>">Edit</a>
                        <a href="api-hapus.php?id=<?= $Row['id'] ?>">Hapus</a>
                    </td>


                </Tr>
            <?Php endforeach ?>

        </Tbody>
    </Table>
</Body>

</Html>