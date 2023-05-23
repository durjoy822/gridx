@include('home.layout.head')
<style>
</style>
        <div class="card">
            <div class="card-header text-center"><h2>Contact Message</h2></div>
            <div class="card-body">
                <div class="text-center text-dark">
                    <h6><p>Name: {{$details['name']}}</p></h6>
                    <h6><p>Email: {{$details['email']}}</p></h6>
                    <h6><p>Subject: {{$details['subject']}}</p></h6>
                    <h6><p>Message: {{$details['message']}}</p></h6>
                </div>
            </div>
        </div>
@include('home.layout.script')
