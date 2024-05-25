<head>
    <link rel="stylesheet" href="{{ asset('css/mailForm.css') }}">

</head>
<body>
    <div class="containerForm d-flex">
        <form action="{{ url('/FormUtente') }}" method="POST" class="d-Custom">
            @csrf
            <input type="text" id="nome" name="nome" required placeholder="Nome" class="w-100">
            <input type="email" id="email" name="email" required placeholder="Email" class="w-100">

            <div class="d-flex inputCustom">
                <input type="text" id="Birth-Place" name="Birth-Place" required placeholder="Birt Place">
                <input type="date" id="BirthDay" name="BirthDay" required placeholder="Birthday">
            </div>

            <div class="d-flex inputCustom">
                <input type="number" id="Phone" name="Phone" required placeholder="Phone">
                <input type="text" id="Company" name="Company" required placeholder="Company">
            </div>

            <textarea name="Your-Message" id="Your-Message" cols="30" rows="2" required placeholder="Your Message"></textarea>

            <div class="dl">
                <input type="checkbox" name="Privacy" id="Privacy" required>
                <p>
                    Privacy Accept
                </p>

            </div>

            <input type="submit" value="SEND">
        </form>
    </div>

</body>
