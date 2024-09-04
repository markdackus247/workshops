<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/x-icon" href="/images/mbo.ico">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="header sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02">
        <!-- logo -->
        <h1 class="w-3/12">
            <a href="/">
                <img src="/images/logo.png" width="250" alt="Logo MBOdigitaal">
            </a>
        </h1>

        <!-- navigation -->
        <nav class="nav font-semibold">
            <ul class="flex items-center">
                <li
                    class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-blue-100 hover:text-blue-500 duration-200 cursor-pointer active">
                    <a href="/keuzedelen/">Keuzedelen</a>
                </li>
                <li
                    class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-blue-100 hover:text-blue-500 duration-200 cursor-pointer">
                    <a href="/levels/">Levels</a>
                </li>
            </ul>
        </nav>

        <!-- Login Button -->
        <form method="GET" action="/admin/auth/login" class="max-w-sm">
            <div class="flex items-center py-2">
                <button
                    class="flex-shrink-0 bg-blue-500 hover:bg-blue-700 border-blue-500 hover:border-blue-700 border-4 text-lg text-white py-1 px-6 rounded"
                    type="submit">
                    Login
                </button>
            </div>
        </form>

    </header>


    <div class="mt-6 mb-16 w-11/12 p-6 space-y-8 sm:p-8 bg-white mx-auto">

        <h2 class="text-2xl font-bold ">Automatisering voor en door studenten</h2>
        <p class="my-4 font-bold text-gray-700">Het project MBO digitaal is een project van de Software Development
            opleiding van het Vista College. Studenten helpen om allerdaagse zaken zoals keuzedelen, beoordelingen en
            examenroosters overzichtelijk te maken voor studenten. Dit doen ze door processen, die veelal door docenten
            worden uitgevoerd, te automatiseren.</p>
        <p class="mb-4 font-normal text-gray-700 ">Dit project is een onderdeel van Challenge Based
            Learning (CBL) waarin groepen studenten worden uitgedaagd om het bestaande project MBO Digitaal uit te
            breiden met
            nieuwe functionaliteiten die van meerwaarde zijn voor studenten en docenten.</p>

        <h3 class="text-xl font-bold ">Overzicht van onze opleidingen</h3>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Crebo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Naam opleiding
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Niveau
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($educations as $education) {
                        ?>
                        <tr class="odd:bg-white even:bg-gray-50 border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <?php echo $education["creboNumber"]; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $education["name"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                Niveau <?php echo $education["level"]; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <footer class="bg-white rounded-lg m-4">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="https://vistacollege.nl/"
                        class="hover:underline">Vista College ICT Lyceum</a>
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
                    <li>
                        <a href="/aboutus" class="hover:underline me-4 md:me-6">Over Ons</a>
                    </li>
                    <li>
                        <a href="/contact" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>

    </div>


</body>

</html>