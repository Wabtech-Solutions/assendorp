{{-- aanmelding-form.blade.php --}}
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmeldingsformulier</title>
    <style>
        .aanForm-container {
            --primary-color: #27ae60;
            --secondary-color: #2ecc71;
            --black: #000000;
            --white: #ffffff;
            --gray: #9b9b9b;
            --gray-1: #999;
            --gray-2: #d9d9d9;
            --gray-3: #eeeeee;
            --gray-4: #f9f9f9;
            --window-height: 100vh;
            --font-family: 'Poppins', sans-serif;
        }
        .book-course-form{
            background-color: rgba(0, 0, 0, 0.416)!important;
            backdrop-filter: blur(10px);
            -webkit-box-shadow: 6px 5px 26px -3px rgba(0,0,0,0.75);
-moz-box-shadow: 6px 5px 26px -3px rgba(0,0,0,0.75);
box-shadow: 6px 5px 26px -3px rgba(0,0,0,0.75);

        }

        .aanForm-container * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-family);
        }

        .aanForm-container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .aanForm-card {
            background-color: var(--white);
            border-radius: 10px;
            width: 600px;
            padding: 40px 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 100;
            overflow: hidden;
        }

        .aanForm-steps {
            position: relative;
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .aanForm-steps .aanForm-step {
            font-size: 14px;
            font-weight: 500;
            text-align: center;
        }

        .aanForm-steps .aanForm-step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--gray-2);
            color: var(--black);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .aanForm-steps .aanForm-progress-bar {
            position: absolute;
            height: 2px;
            width: 100%;
            background-color: var(--gray-2);
            top: 15px;
            z-index: -1;
        }

        .aanForm-steps .aanForm-progress {
            position: absolute;
            height: 2px;
            width: 0%;
            background-color: var(--primary-color);

            z-index: -1;
            transition: all 0.3s ease;
        }

        .aanForm-step.aanForm-active .aanForm-step-number {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .aanForm-main {
            margin-top: 30px;
        }

        .aanForm-main h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .aanForm-main .aanForm-form-group {
            margin-bottom: 20px;
        }

        .aanForm-main .aanForm-form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
            color: var(--gray-1);
        }

        .aanForm-main .aanForm-form-group input,
        .aanForm-main .aanForm-form-group select {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid var(--gray-2);
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .aanForm-main .aanForm-form-group input:focus,
        .aanForm-main .aanForm-form-group select:focus {
            border-color: var(--primary-color);
        }

        .aanForm-main .aanForm-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .aanForm-main .aanForm-btn {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            background-color: var(--primary-color);
            color: var(--white);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .aanForm-main .aanForm-btn:hover {
            background-color: var(--secondary-color);
        }

        .aanForm-main .aanForm-btn.aanForm-btn-prev {
            background-color: var(--gray-2);
            color: var(--black);
        }

        .aanForm-main .aanForm-btn.aanForm-btn-prev:hover {
            background-color: var(--gray-1);
        }

        .aanForm-main .aanForm-tab {
            display: none;
        }

        .aanForm-main .aanForm-tab.aanForm-active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="aanForm-container">
        <div class="aanForm-card">
            <div class="aanForm-steps">
                <div class="aanForm-step aanForm-active">
                    <div class="aanForm-step-number">1</div>
                    <div class="aanForm-step-name">Naam</div>
                </div>
                <div class="aanForm-step">
                    <div class="aanForm-step-number">2</div>
                    <div class="aanForm-step-name">Contact</div>
                </div>
                <div class="aanForm-step">
                    <div class="aanForm-step-number">3</div>
                    <div class="aanForm-step-name">Pakket</div>
                </div>
                <div class="aanForm-step">
                    <div class="aanForm-step-number">4</div>
                    <div class="aanForm-step-name">Datum</div>
                </div>
                <div class="aanForm-progress-bar">
                    <div class="aanForm-progress"></div>
                </div>
            </div>

            <div class="aanForm-main">
                <form method="POST" action="/" id="aanForm-multisteps-form">
                    @csrf
                    <div class="aanForm-tab aanForm-active">
                        <h3>Welkom! uh?...</h3>
                        <div class="aanForm-form-group">
                            <label for="aanForm-name">Volledige Naam*</label>
                            <input type="text" id="aanForm-name" name="name" required
                                placeholder="Max Verstappen">
                        </div>
                    </div>

                    <div class="aanForm-tab">
                        <h3>Hoe kunnen we je bereiken <span id="liveOutput"></span>?</h3>
                        <div class="aanForm-form-group">
                            <label for="aanForm-telefoon">Telefoon*</label>
                            <input type="tel" id="aanForm-telefoon" name="telefoon" required
                                placeholder="06-12345678">
                            <br>
                            <label for="aanForm-mail">Email*</label>
                            <input type="email" id="aanForm-mail" name="mail" required
                                placeholder="max@redbullracing.com">
                        </div>
                    </div>

                    <div class="aanForm-tab">
                        <h3>Wat mogen wij je aanbieden?</h3>
                        <div class="aanForm-form-group">
                            <label for="aanForm-course-plan">Pakket*</label>
                            <select id="aanForm-course-plan" name="pakket" required>
                                <option value="Gratis Vrijblijvende Intake (Telefonisch)">Gratis Vrijblijvende Intake (Telefonisch)</option>
                                <option value="Pakket A">Pakket A</option>
                                <option value="Pakket B">Pakket B</option>
                                <option value="Pakket C">Pakket C</option>
                                <option value="Ik weet het niet">Ik weet het niet</option>
                            </select>
                        </div>
                    </div>

                    <div class="aanForm-tab">
                        <h3>Wanneer kunnen we kennismaken?</h3>
                        <div class="aanForm-form-group">
                            <label for="aanForm-date">Selecteer de dag*</label>
                            <input type="date" id="aanForm-date" name="date" required>
                        </div>
                        <div class="aanForm-form-group">
                            <label for="aanForm-time">Selecteer het tijdstip*</label>
                            <select id="aanForm-time" name="time" required>
                                <option value="" disabled selected>Kies een tijd</option>
                                <!-- Tijdstippen van 08:00 tot 18:00 in stappen van 30 minuten -->
                                <option value="08:00">08:00</option>
                                <option value="08:30">08:30</option>
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                                <option value="18:00">18:00</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">

                    <div class="aanForm-buttons">
                        <button type="button" class="aanForm-btn aanForm-btn-prev" id="aanForm-prevBtn"
                            style="display:none">Vorige</button>
                        <button type="button" class="aanForm-btn aanForm-btn-next"
                            id="aanForm-nextBtn">Volgende</button>
                        <button type="submit" class="aanForm-btn" id="aanForm-submitBtn"
                            style="display:none">Verzenden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('aanForm-multisteps-form');
            const tabs = form.getElementsByClassName('aanForm-tab');
            const steps = document.getElementsByClassName('aanForm-step');
            const progress = document.querySelector('.aanForm-progress');
            const prevBtn = document.getElementById('aanForm-prevBtn');
            const nextBtn = document.getElementById('aanForm-nextBtn');
            const submitBtn = document.getElementById('aanForm-submitBtn');
            let currentTab = 0;

            showTab(currentTab);

            function validateForm() {
    let valid = true; // Verander validatie naar true
    const currentInputs = steps[currentTab].querySelectorAll('input, textarea, select'); // Verkrijg alle invoervelden in de huidige stap

    currentInputs.forEach((input) => {
        // Verwijder eventuele foutmeldingen en styles van vorige validatie
        const errorLabel = input.parentNode.querySelector('.error-message');
        if (errorLabel) {
            errorLabel.remove();
        }
        input.classList.remove('error');

        if (input.required && !input.value.trim()) { // Controleer of het veld verplicht is en leeg is
            valid = false;
            input.classList.add('error'); // Voeg een foutklasse toe voor visuele feedback

            // Maak een foutmelding aan
            const errorMessage = document.createElement('div');
            errorMessage.className = 'error-message'; // Voeg een klasse toe voor styling
            errorMessage.innerText = 'Vergeten'; // De foutmelding
            errorMessage.style.color = 'red'; // Stel de kleur in op rood

            // Voeg de foutmelding toe boven het invoerveld
            input.parentNode.insertBefore(errorMessage, input);
        }
    });

    return valid; // Geef de validatie status terug
}

            function showTab(n) {
                tabs[n].classList.add('aanForm-active');
                steps[n].classList.add('aanForm-active');

                if (n === 0) {
                    prevBtn.style.display = 'none';
                } else {
                    prevBtn.style.display = 'inline';
                }

                if (n === (tabs.length - 1)) {
                    nextBtn.style.display = 'none';
                    submitBtn.style.display = 'inline';
                } else {
                    nextBtn.style.display = 'inline';
                    submitBtn.style.display = 'none';
                }

                updateProgress(n);
            }

            function updateProgress(n) {
                const percent = (100 / (steps.length - 1)) * n;
                progress.style.width = percent + '%';
            }

            function nextPrev(n) {
                tabs[currentTab].classList.remove('aanForm-active');
                steps[currentTab].classList.remove('aanForm-active');
                currentTab += n;
                showTab(currentTab);
            }

            prevBtn.addEventListener('click', function() {
                nextPrev(-1);
            });

            nextBtn.addEventListener('click', function() {
                if (validateForm()) {
                    nextPrev(1);
                } else {
                    alert('Vul alstublieft alle vereiste velden in.'); // Optionele waarschuwing
                }
            });

            function validateForm() {
                const inputs = tabs[currentTab].getElementsByTagName('input');
                const selects = tabs[currentTab].getElementsByTagName('select');
                let valid = true;

                for (let i = 0; i < inputs.length; i++) {
                    if (inputs[i].value === '') {
                        inputs[i].classList.add('invalid');
                        valid = false;
                    } else {
                        inputs[i].classList.remove('invalid');
                    }
                }

                for (let i = 0; i < selects.length; i++) {
                    if (selects[i].value === '') {
                        selects[i].classList.add('invalid');
                        valid = false;
                    } else {
                        selects[i].classList.remove('invalid');
                    }
                }

                return valid;
            }

            const nameInput = document.getElementById('aanForm-name');
            const liveOutputName = document.getElementById('live-outputName');

            nameInput.addEventListener('input', function() {
                const fullName = this.value.trim();
                const firstName = fullName.split(' ')[0]; // Pak alleen het eerste woord
                liveOutput.textContent = firstName ? `${firstName}` : '';
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                if (validateForm()) {
                    // Hier kunt u AJAX gebruiken om het formulier te verzenden of het formulier normaal laten verzenden
                    this.submit();
                }
            });
        });


        // Functie om te controleren of een gegeven datum een werkdag is (ma-vr)
        function isWorkingDay(date) {
            const day = date.getDay();
            return day !== 0 && day !== 6; // 0 = zondag, 6 = zaterdag
        }

        // Functie om de minimale datum in te stellen
        function setMinDate() {
            const today = new Date();
            // Voeg 7 dagen toe aan de huidige datum
            const minDate = new Date(today);
            minDate.setDate(today.getDate() + 1);

            // Zoek de eerstvolgende werkdag na de minimumdatum
            while (!isWorkingDay(minDate)) {
                minDate.setDate(minDate.getDate() + 1);
            }

            // Stel de minimumdatum in op het invoerveld
            const dateInput = document.getElementById('aanForm-date');
            dateInput.min = minDate.toISOString().split('T')[0]; // Zet in formaat YYYY-MM-DD

            // Voeg een change event listener toe om de geselecteerde datum te controleren
            dateInput.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                if (!isWorkingDay(selectedDate)) {
                    alert('Oepsss... Je mag alleen een werkdag selecteren (ma-vr).');
                    this.value = ''; // Reset de waarde als een niet-werkdag is geselecteerd
                }
            });
        }

        // Stel de minimumdatum in bij het laden van de pagina
        window.onload = setMinDate;
    </script>



    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lfi71UqAAAAANcMjb0UOa2lkQiyIlQRFNSk1WG-', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('recaptchaResponse').value = token;
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#aanForm-multisteps-form').on('submit', function(event) {
                event.preventDefault(); // Voorkom standaard formulier gedrag

                $.ajax({
                    url: $(this).attr('action'), // De actie van het formulier
                    type: 'POST',
                    data: $(this).serialize(), // Seriële gegevens van het formulier
                    success: function(response) {
                        // Hier kun je iets doen met de response van de server
                        alert('Formulier succesvol verzonden!'); // Bijvoorbeeld een alert
                        // Je kunt ook de formulierwaarden resetten of een ander bericht tonen
                        $('#aanForm-multisteps-form')[0].reset(); // Reset het formulier
                    },
                    error: function(xhr) {
                        // Hier kun je foutafhandeling doen
                        alert('Er is een fout opgetreden: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>



</body>

</html>
