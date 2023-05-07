@extends('front.master')

@section('title', 'Term And Conditions -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>{{ __("trmeez.Terms and Conditions") }}</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
  <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
</section>
<!-- end section title-page -->

<section class="policy">
  <div class="container">
    <div class="card">
        <p>{{ __("trmeez.Tarmeez Tech for Information Technology provides general terms and conditions for the purpose of providing an integrated service to all its customers by reviewing all the items contained in this document and fully understanding all its content, and the purpose of this is to provide all customers with information and technical services provided to them and to agree to them before concluding any contract or agreement to perform The company provides one of its services to the customer, as well as the right of the team of Tarmeez Tech to accept or refuse to provide any of the services provided without referring to the customer or notifying him of that.") }}</p>
        <h2>{{ __("trmeez.General terms and conditions:") }}</h2>
      <ul>
        <li>
            {{ __("trmeez.Tarmeez Tech is interested in the fair use policy in the services provided through the network and has the right to take all measures against any violation that affects the quality of the service provided through the company and has many ways to know the amount of consumption and the allowable limit.") }}
        </li>

        <li>
            {{ __("trmeez.It is not allowed to violate Islamic law, as well as not to violate the law of the country of residence and to put any content that violates public morals, and in the event that any violation is proven, the encoder has the right to stop the service provided without notice or referring to the customer who owns the service, and the customer is not entitled to obtain any compensation as a result of not Adhere to the rules specified by Markup Tech.") }}
        </li>

        <li>
            {{ __("trmeez.Obligation to pay all the fees specified for the renewal before the end of the grace period, to prove that the payment process has been completed, and to notify the technical support of that.") }}
        </li>

        <li>
            {{ __("trmeez.Tarmeez Tech is not responsible for concluding any agreement outside the scope of the means of communication specified by the company and shown in the phone numbers assigned to the company as well as the e-mail announced by Tarmeez Tech.") }}
        </li>

        <li>
            {{ __("trmeez.In the event of delay in payment of fees, alerts are automatically sent to the customer via his e-mail, and in the event of non-compliance with payment, the service is automatically stopped and not started until after payment of the fees, and the company is not responsible for service interruption in the event of delayed payment.") }}
        </li>

        <li>
            {{ __("trmeez.Record all messages and calls to ensure the provision of the best service and refer back to it when needed.") }}
        </li>

        <li>
            {{ __("trmeez.There are many free benefits that are not subject to exchange and obtaining an alternative fee for them, such as mobile messages, direct chats and other various features and additions.") }}
        </li>

        <li>
            {{ __("trmeez.When the customer requests to reopen his account again, this will be accepted after paying all due fees. If the customer requests to copy his files after the end of the specified period, the company will request payment of financial fees for the service.") }}
        </li>

        <li>
            {{ __("trmeez.When the customer's account and the service provided to him are suspended due to some violations and non-compliance with the conditions, and if he requests to activate the account again, he will undertake to comply and not violate again.") }}
        </li>

        <li>
            {{ __("trmeez.Technical support for Tarmeez Tech will be stopped in the event of non-compliance and violation of the terms and conditions, and warning messages will be sent to stop technical support for the service 48 days before the end of the renewal, and the customer will be confirmed in the event of a request to cancel the service.") }}
        </li>

        <li>
            {{ __("trmeez.The company is not responsible for paying the costs of taxes or transfers deducted from the cost of the project and the client is required to bear this cost.") }}
        </li>

        <li>
            {{ __("trmeez.The difficulty of recovering the payments transferred in advance, except for the cases excluded in a written agreement in which the possibility of recovering these amounts is indicated.") }}
        </li>

        <li>
            {{ __("trmeez.Not to offend the work team when the client makes any remarks or belittles the company and its employees, and the company must take all legal measures regarding any violation to protect the company's material and moral rights.") }}
        </li>

        <li>
            {{ __("trmeez.The customer is requested to commit to paying the agreed amounts in return for providing the service in the accounts allocated to the Tech or Cash coding company.") }}
        </li>

        <li>
            {{ __("trmeez.After completing all the procedures and editing the contract to obtain the service specified by the customer, it is considered a complete acceptance of all the terms and specifications agreed upon between both parties and mentioned in the terms of the contract, and any other items that are not agreed upon in the terms of the concluded contract are not considered.") }}
        </li>

        <li>
            {{ __("trmeez.Prices are changed in return for providing services provided by the company or hosting, and this is based on the time to renew or request a new service.") }}
        </li>

        <li>
            {{ __("trmeez.The customer must comply with all procedures required by the service provider company, shipping companies, or companies through which applications are uploaded, such as the App Store or Google Play, in order to upload applications for a specific fee.") }}
        </li>

        <li>
            {{ __("trmeez.The customer who owns the service is not entitled to remove the ownership rights of the design of the Tarmeez Tech company, except with a prior agreement with the company for an additional fee.") }}
        </li>

        <li>
            {{ __("trmeez.The company provides continuous technical support without any additional fees, and also provides complete protection against hacking and maintains security and privacy.") }}
        </li>

        <li>
            {{ __("trmeez.The company works to solve all problems through technical support, such as resetting the password, backups, e-mail problems, and secure communication between the client and the site.") }}
        </li>

        <li>
            {{ __("trmeez.In the event of changing the design or programming without referring to the technical support at that time, the company is not responsible for restoring the design to its original position, unless a new fee is paid for that.") }}
        </li>
      </ul>

      <p>{{ __("trmeez.Information Technology Company announces that it is not responsible for adding any content within the sites, and the customer is the only one who is fully responsible before any governmental or legal agency, and the company is also not responsible for the damages resulting from the discontinuation of the service for the customer, as the company provides all available services to provide the best service to customers It has full responsibility for the professional part of the technical work and for handling any errors as soon as they appear") }}</p>

      <p>{{ __("trmeez.Likewise, the hosting provided by your markup is carried out in accordance with the standards of modern technology, and it also clarifies that it is not responsible for external backups from private servers, as well as in the event of any information damage, the company provides another similar server with the same specifications within a specific period of time that does not exceed five days, and finally the company is not responsible for solving any problems that exist in designs attributed to other companies and are not designed by the team of your information technology company.") }}</p>
    </div>
  </div>
</section>

</div>
@endsection
