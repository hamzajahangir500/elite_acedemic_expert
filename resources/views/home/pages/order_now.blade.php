@extends('home.layouts.app')
@section('title')
    <title>Order Now | Elite Academic Expert</title>
@endsection
@push('styles')
    <style>
        .text-error {
            color: red
        }
    </style>
@endpush
@section('section')
    <div class="main-content">
        <div class="main-container">
            <section class="elite-about">
                <div class="elite-about__container">
                    <h1 class="elite-about__heading">Place Order</h1>
                </div>
                <div class="row container">
                    @include('home.partials.message')
                    <div class="col-lg-8">
                        <form action="{{route('order.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="total_price" id="total-price">
                            <div class="d-flex mb-3">
                                <div class="form-group me-3">
                                    <label for="name">Name</label>
                                    <input type="name" name="name" class="form-control border border-dark"
                                        id="name" placeholder="Enter Name" value="{{old('name')}}">
                                        <div class="text-error">
                                            {{ $errors->first('name') }}
                                        </div>
                                </div>
                                <div class="form-group me-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control border border-dark" id="email"
                                        placeholder="Enter Email" value="{{old('email')}}">
                                    <div class="text-error">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>
                                <div class="form-group me-3">
                                    <label for="phone">Phone</label>
                                    <input type="phone" name="phone" class="form-control border border-dark" id="phone"
                                        placeholder="Enter Phone" value="{{old('phone')}}">
                                    <div class="text-error">
                                        {{ $errors->first('phone') }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="form-group me-3">
                                    <label for="type_of_paper">Type Of Paper</label>
                                    <select class="form-select" name="type_of_paper" id="type_of_paper">
                                        <option value="Essay (any type)">Essay (any type)</option>
                                        <option value="Assignment">Assignment</option>
                                        <option value="Coursework">Coursework</option>
                                        <option value="Admission essay">Admission essay</option>
                                        <option value="Analysis (any type)">Analysis (any type)</option>
                                        <option value="Annotated bibliography">Annotated bibliography</option>
                                        <option value="Argumentative essays">Argumentative essays</option>
                                        <option value="Article review">Article review</option>
                                        <option value="Blog post">Blog post</option>
                                        <option value="Book/movie review">Book/movie review</option>
                                        <option value="Business plan">Business plan</option>
                                        <option value="Capstone project">Capstone project</option>
                                        <option value="Case study">Case study</option>
                                        <option value="College essay">College essay</option>
                                        <option value="Creative writing">Creative writing</option>
                                        <option value="Critical thinking">Critical thinking</option>
                                        <option value="Discussion essay">Discussion essay</option>
                                        <option value="Dissertation/Dissertation chapter">Dissertation/Dissertation chapter
                                        </option>
                                        <option value="Homework">Homework</option>
                                        <option value="Journal article">Journal article</option>
                                        <option value="Lab report">Lab report</option>
                                        <option value="Literature analysis/review">Literature analysis/review</option>
                                        <option value="Memo/Letter">Memo/Letter</option>
                                        <option value="Outline">Outline</option>
                                        <option value="Personal reflection">Personal reflection</option>
                                        <option value="Poem">Poem</option>
                                        <option value="Presentation/PPT">Presentation/PPT</option>
                                        <option value="Project">Project</option>
                                        <option value="Question-Answer">Question-Answer</option>
                                        <option value="Reflection paper/Reflection essay">Reflection paper/Reflection essay
                                        </option>
                                        <option value="Report (any type)/Brief report">Report (any type)/Brief report
                                        </option>
                                        <option value="Research proposal">Research proposal</option>
                                        <option value="Response essay">Response essay</option>
                                        <option value="See paper instructions">See paper instructions</option>
                                        <option value="Speech">Speech</option>
                                        <option value="Summary">Summary</option>
                                        <option value="Term paper">Term paper</option>
                                        <option value="Thesis/Thesis chapter">Thesis/Thesis chapter</option>
                                    </select>
                                    <div class="text-error">
                                        {{ $errors->first('type_of_paper') }}
                                    </div>
                                </div>
                                <div class="form-group me-3">
                                    <label for="discipline">Discipline</label>
                                    <select class="form-select" name="discipline" id="discipline">
                                        <option value="English 101">English 101</option>
                                        <option value="Business Studies">Business Studies</option>
                                        <option value="Nursing">Nursing</option>
                                        <option value="Management">Management</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Classic English Literature">Classic English Literature</option>
                                        <option value="Film &amp; Theater Studies">Film &amp; Theater Studies</option>
                                        <option value="History">History</option>
                                        <option value="Music">Music</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Religious Studies">Religious Studies</option>
                                        <option value="Shakespeare">Shakespeare</option>
                                        <option value="Literature">Literature</option>
                                        <option value="English 101">English 101</option>
                                        <option value="Composition">Composition</option>
                                        <option value="Linguistics">Linguistics</option>
                                        <option value="Poetry">Poetry</option>
                                        <option value="Art (Fine arts &amp; Performing arts)">Art (Fine arts &amp;
                                            Performing arts)</option>
                                        <option value="Anthropology">Anthropology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Political Science">Political Science</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Sociology">Sociology</option>
                                        <option value="Women's &amp; Gender Studies">Women's &amp; Gender Studies</option>
                                        <option value="Social Work and Human Services">Social Work and Human Services
                                        </option>
                                        <option value="Culture and Ethnic Studies">Culture and Ethnic Studies</option>
                                        <option value="Tourism">Tourism</option>
                                        <option value="Ethics">Ethics</option>
                                        <option value="Urban Studies">Urban Studies</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Business Studies">Business Studies</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Management">Management</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="International Relations">International Relations</option>
                                        <option value="Logistics">Logistics</option>
                                        <option value="Human Resource Management (HRM)">Human Resource Management (HRM)
                                        </option>
                                        <option value="Public Relations (PR)">Public Relations (PR)</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Biology (and other Life Sciences)">Biology (and other Life Sciences)
                                        </option>
                                        <option value="Zoology">Zoology</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Astronomy (and other Space Sciences)">Astronomy (and other Space
                                            Sciences)</option>
                                        <option value="Ecology">Ecology</option>
                                        <option value="Geology (and other Earth Sciences)">Geology (and other Earth
                                            Sciences)</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Statistics">Statistics</option>
                                        <option value="Application Letters">Application Letters</option>
                                        <option value="Architecture, Building and Planning">Architecture, Building and
                                            Planning</option>
                                        <option value="Communications">Communications</option>
                                        <option value="Education">Education</option>
                                        <option value="Family and Consumer Science">Family and Consumer Science</option>
                                        <option value="Law">Law</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Technology">Technology</option>
                                        <option value="IT, Web">IT, Web</option>
                                        <option value="International Trade">International Trade</option>
                                        <option value="Nursing">Nursing</option>
                                        <option value="Criminal Law">Criminal Law</option>
                                        <option value="Environmental Studies and Forestry">Environmental Studies and
                                            Forestry</option>
                                        <option value="Health Care">Health Care</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="Aviation">Aviation</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Criminal Justice">Criminal Justice</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Leadership Studies">Leadership Studies</option>
                                        <option value="Nutrition/Dietary">Nutrition/Dietary</option>
                                        <option value="Public Administration">Public Administration</option>
                                        <option value="Medical Sciences (Anatomy, Physiology, Pharmacology etc.)">Medical
                                            Sciences (Anatomy, Physiology, Pharmacology etc.)</option>
                                    </select>
                                    <div class="text-error">
                                        {{ $errors->first('discipline') }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="form-group me-3">
                                    <label for="academic_level">Academic Level</label>
                                    <select class="form-select" name="academic_level" id="academic_level">
                                        <option value="High School" data-level-price="7">High School</option>
                                        <option value="Undergraduate (yrs. 1-2)" data-level-price="8">Undergraduate (yrs. 1-2)</option>
                                        <option value="Undergraduate (yrs. 3-4)" data-level-price="9">Undergraduate (yrs. 3-4)</option>
                                        <option value="Graduate" data-level-price="10">Graduate</option>
                                        <option value="PhD" data-level-price="11">PhD</option>
                                    </select>
                                    <div class="text-error">
                                        {{ $errors->first('academic_level') }}
                                    </div>
                                </div>
                                <div class="form-group me-3">
                                    <label for="urgency">Deadline</label>
                                    <select class="form-select" name="urgency" id="urgency">
                                        <option value="4h" data-deadline-price="6">4 Hours</option>
                                        <option value="8h" data-deadline-price="5">8 Hours</option>
                                        <option value="24h" data-deadline-price="4">24 Hours</option>
                                        <option value="2d" data-deadline-price="3">2 Days</option>
                                        <option value="3d" data-deadline-price="2">3 Days</option>
                                        <option value="5d" data-deadline-price="1">5 Days</option>
                                        <option value="14d" data-deadline-price="0">14 Days</option>
                                    </select>
                                    <div class="text-error">
                                        {{ $errors->first('urgency') }}
                                    </div>
                                </div>
                                <div class="form-group me-3">
                                    <label for="spacing">Spacing</label>
                                    <select class="form-select" name="spacing" id="spacing">
                                        <option value="Double" data-spacing-price="1">Double</option>
                                        <option value="Single" data-spacing-price="2">Single</option>
                                    </select>
                                    <div class="text-error">
                                        {{ $errors->first('spacing') }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="form-group me-3">
                                    <label for="name">Paper Title</label>
                                    <textarea class="form-control border border-dark" name="paper_title"></textarea>
                                    <div class="text-error">
                                        {{ $errors->first('paper_title') }}
                                    </div>
                                </div>
                                <div class="form-group me-3">
                                    <label for="email">Paper Details</label>
                                    <textarea class="form-control border border-dark" name="paper_details"></textarea>
                                    <div class="text-error">
                                        {{ $errors->first('paper_details') }}
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Additional Material (Documents)
                                    <input class="form-control" type="file" name="additional_material"
                                        multiple="">
                                    <div class="text-error">
                                        {{ $errors->first('additional_material') }}
                                    </div>
                                </label>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <label for="pages">Pages</label>
                                    <input class="form-control rounded border" type="number" id="pages"
                                        name="pages" min="0" max="999" value="1">
                                    <div class="text-error">
                                        {{ $errors->first('pages') }}
                                    </div>
                                </div>
                                {{-- <div class="me-3">
                                    <label for="charts">Charts</label>
                                    <input class="form-control rounded border" type="number" id="charts"
                                        name="charts" min="0" max="999" value="0">
                                </div> --}}
                                {{-- <div class="me-3">
                                    <label for="slides">PowerPoint Slides</label>
                                    <input class="form-control rounded border" type="number" id="slides"
                                        name="slides" min="0" max="999" value="0">
                                </div> --}}
                                <div class="me-3">
                                    <label for="sources">Citations</label>
                                    <input class="form-control rounded border" type="number" id="sources"
                                        name="sources" min="0" max="999" value="0">
                                    <div class="text-error">
                                        {{ $errors->first('sources') }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="me-3 d-flex flex-column">
                                    <label for="format" class="">Paper Format</label>
                                    <select class="form-select" name="format" id="format">
                                        <option value="MLA">MLA</option>
                                        <option value="APA 6">APA 6</option>
                                        <option value="APA 7">APA 7</option>
                                        <option value="Chicago / Turabian">Chicago / Turabian</option>
                                        <option value="Not applicable">Not applicable</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="text-error">
                                        {{ $errors->first('format') }}
                                    </div>
                                    <label for="writer_preference">Writer Preference</label>
                                    <select class="form-select" name="writer_preference" id="writer_preference">
                                        <option value="Best available" data-pref="0">Best available</option>
                                        <option value="Advanced (+5%)" data-pref="5">Advanced (+5%)</option>
                                        <option value="Top 10 (+7%)" data-pref="7">Top 10 (+7%)</option>
                                        <option value="Native speaker (+9%)" data-pref="9">Native speaker (+9%)</option>
                                    </select>
                                    <div class="text-error">
                                        {{ $errors->first('writer_preference') }}
                                    </div>
                                </div>
                                {{-- Additional Service --}}
                                {{-- <div class=""> 
                                    <div>
                                        <label for="">Additional Services
                                    </div>
                                    <div>
                                        <label>
                                            <input type="checkbox" name="additional_services" class="me-1"
                                                value="Smart paper">Smart paper
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input type="checkbox" name="additional_services" class="me-1"
                                                value="Writer's sample work">Writer's sample work
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input type="checkbox" name="additional_services" class="me-1"
                                                value="Copy of sources">Copy of sources
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input type="checkbox" name="additional_services" class="me-1"
                                                value="Draft Delivery">Draft Delivery
                                        </label>
                                    </div>
                                    </label>
                                </div> --}}
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary text-white" type="submit"
                                    style="background-color: rgb(243, 143, 30); border: none;">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <h5 class="card-title text-center">Order Summary</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong id="adm-level">Undergraduate (yrs. 1-2)</strong>
                                        <br>
                                        <span id="paper-type">Essay (any type)</span> 
                                        <br>
                                        <span id="desc">English 101</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Deadline:</strong> 
                                        <span id="deadline-text">14d</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Pages:</strong> <span id="no_of_pages">1</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Spacing:</strong> <span id="spacing-text">Double</span>
                                    </li>
                                    <li class="list-group-item" id='writer-pref'>
                                        <strong>Writer Preference:</strong> <span id="writer-preference"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Total Price:</strong> £<span id="total_price"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        setTimeout(function() {
            document.querySelectorAll(".text-error, .alert-success").forEach(el => el.style.display = "none");
        }, 5000);
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = {
                academicLevel: document.getElementById("academic_level"),
                urgency: document.getElementById("urgency"),
                spacing: document.getElementById("spacing"),
                pages: document.getElementById("pages"),
                paperType: document.getElementById("type_of_paper"),
                discipline: document.getElementById("discipline"),
                totalPrice: document.getElementById("total_price"),
                admLevel: document.getElementById("adm-level"),
                paperTypeText: document.getElementById("paper-type"),
                desc: document.getElementById("desc"),
                deadlineText: document.getElementById("deadline-text"),
                noOfPages: document.getElementById("no_of_pages"),
                spacingText: document.getElementById("spacing-text"),
                writerPreference: document.getElementById("writer_preference"),
                writerPreferenceText: document.getElementById("writer-preference"),
            };

            // Initialize price calculation
            changePrice();

            // Attach event listeners
            Object.values(elements).forEach((el) => {
                if (el) el.addEventListener("change", changePrice);
            });

            function changePrice() {
                // Update displayed values
                updateTextContent(elements.admLevel, elements.academicLevel.value);
                updateTextContent(elements.paperTypeText, elements.paperType.value);
                updateTextContent(elements.desc, elements.discipline.value);
                updateTextContent(elements.deadlineText, elements.urgency.value);
                updateTextContent(elements.noOfPages, elements.pages.value);
                updateTextContent(elements.spacingText, elements.spacing.value);
                updateTextContent(elements.writerPreferenceText, elements.writerPreference.value);

                // Retrieve selected prices
                const academicLevelPrice = getSelectedData(elements.academicLevel, "levelPrice");
                const deadlinePrice = getSelectedData(elements.urgency, "deadlinePrice");
                const writerPreferencePerc = getSelectedData(elements.writerPreference, "pref");
                console.log(writerPreferencePerc);
                const spacingValue = elements.spacing.value;
                const pages = parseFloat(elements.pages.value) || 1;

                // Calculate total price
                let total = (academicLevelPrice + deadlinePrice) ;
                if (spacingValue === "Single") total *= 2;
                total *= pages;
                let writerPrefPer = (total * writerPreferencePerc) / 100
                total += writerPrefPer;

                document.getElementById('total-price').value = total.toFixed(2);

                // Display total price
                updateTextContent(elements.totalPrice, total.toFixed(2));
                updateTextContent(
                    elements.writerPreferenceText, 
                    `${elements.writerPreference.value} = ${writerPrefPer}`
                );
            }

            // Helper function to update text content
            function updateTextContent(element, value) {
                if (element) element.textContent = value;
            }

            // Helper function to get dataset values safely
            function getSelectedData(element, dataAttr) {
                return parseFloat(element.options[element.selectedIndex]?.dataset[dataAttr]) || 0;
            }
        });
    </script>
@endpush
