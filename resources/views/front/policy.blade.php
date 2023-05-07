@extends('front.master')

@section('title', 'Policy -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>{{ __("trmeez.company's policy") }}</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
  <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
</section>
<!-- end section title-page -->

<section class="policy">
  <div class="container">
    <div class="card">
        <p class="text-center">{{ __("trmeez.Tarmeez Tech offers the basic terms of the usage policy, and the company is responsible for protecting all services provided by Tarmeez Tech to all customers, while providing full protection for the servers and sites that it provides via the Internet, in order for customers to obtain distinguished service. Therefore, the company has prepared a set of policies and the following conditions that are applicable and fully adhered to. with all clients.") }}</p>
      <h2>{{ __("trmeez.Use of the site:") }}</h2>
      <ul>
        <li>{{ __("trmeez.You are allowed to use the site for the purposes agreed upon only, and it is not considered private property, and you have the right to use only, and you do not have the ability to rent the site or allow anyone to use the site or the content available on it, and you are not entitled to trade or store any information available on the site except after obtaining With written permission.") }}</li>

        <li>{{ __("trmeez.Strictly prohibiting the publication of any illegal works such as commercial voices, works that have private property rights, or audio files, videos, or content that contradicts international laws or legitimacy.") }}</li>

        <li>{{ __("trmeez.Not to publish any content that urges certain tendencies such as terrorist tendencies or interference in the policies of countries or any other type of such.") }}</li>

        <li>{{ __("trmeez.Not to allow the publication of any pornographic content, such as sexual images, or videos that incite vice and immorality, as well as content that calls for racism and attacks on any creed, gender, or color.") }}</li>

        <li>{{ __("trmeez.Prevent programs for hacking passwords, programs for hackers and electronic piracy, as well as programs used in espionage operations.") }}</li>

        <li>{{ __("trmeez.Block hosting of the following websites by Tarmeez Tech") }}</li>

        <li>{{ __("trmeez.Extremist political websites") }}</li>

        <li>{{ __("trmeez.sexual sites") }}</li>

        <li>{{ __("trmeez.Sites that violate the law (professional licenses, property rights, hacking sites and hackers)") }}</li>
      </ul>

      <h2>{{ __("trmeez.Legal violations:") }}</h2>
      <p>{{ __("trmeez.The company prohibits the use of the services it provides in illegal acts such as hacking systems as well as acts of piracy, distributing some copied files in violation of the publishing law or planning fraud operations, or eating materials that incite vice, or messages with inappropriate content for the purpose of threatening and harassment, as well as preventing any act that violates the law.") }}</p>

      <h2>{{ __("trmeez.Literally inappropriate material:") }}</h2>
      <p>{{ __("trmeez.The network's orders prohibit the publication of any pornographic materials or works related to sex, or any of the works related to these materials indirectly, or insulting the Islamic direct law, or by insinuation.") }}</p>

      <h2>{{ __("trmeez.Technical Support:") }}</h2>
      <p>{{ __("trmeez.It is available to solve any problems related to hosting, in order for the customer to obtain a distinguished service in accordance with the conditions and standards that the company determines and must be implemented by customers.") }}</p>

      <h2>{{ __("trmeez.Intellectual property rights:") }}</h2>
      <p>{{ __("trmeez.In the hosting offers, it may be necessary to put some additions such as installing a forum at the request of the customer. Therefore, Tarmeez Tech requires the customer to obtain full licenses from the forums that are installed through the site in order to preserve intellectual property and prevent the issuance of any complaint against the customer from the programmer company.") }}</p>

      <h2>{{ __("trmeez.Code and programming problems:") }}</h2>
      <p>{{ __("trmeez.Tarmeez Tech offers the best protection programs for all the company’s servers and accurate and professional systems carried out by a specialized team. Therefore, many important controls and standards are put in place for the use of permissions related to scripts as well as codes, and there are many scripts working on an old software system that is dangerous, although many sought to obtain Everything that is new in programming, which increases obtaining the highest levels of security against hacking, and therefore the company disclaims responsibility for faults resulting from the use of the script, and therefore the company is not committed to recovering any amounts paid in this case.") }}</p>

      <h2>{{ __("trmeez.Free site transfer service:") }}</h2>
      <p>{{ __("trmeez.The company offers free transfer of sites without diamonds with the content or problems related to the transfer between different servers without referring to the content of the content. Therefore, Markup Tech is not responsible for any damage resulting from the differences between versions. Therefore, the basis for the service provided is the non-stop hosting work, and this is one of the items Explicit and binding.") }}</p>

      <h2>{{ __("trmeez.Abuse from the customer during the transaction:") }}</h2>
      <p>{{ __("trmeez.Commitment to public morals in dealing with Tarmeez Tech employees and choosing an appropriate method in dealing, and the company has the right to take all measures against those who neglect or make mistakes against the Tarmeez Tech team, whether it is punishing with immediate suspension of the account or final deletion, and this is according to the vision and appreciation of the company, and in this case it loses The customer has all his material rights.") }}</p>

      <h2>{{ __("trmeez.legal responsibility:") }}</h2>
      <p>{{ __("trmeez.Tarmeez Tech is not committed to refunding any financial payments to the customer in the event of non-compliance with the aforementioned terms and conditions and his many violations and violation of the policies announced by the company, and he is not entitled to reject the company’s decision to stop or temporarily suspend the service provided by the company.") }}</p>

      <h2>{{ __("trmeez.Contracts to be renewed:") }}</h2>
      <p>{{ __("trmeez.The contract is automatically renewed after the expiration of the period specified in the contract by Tarmeez Tech for another similar period, and the customer is obligated to pay all the prescribed fees for the renewal. If there is a delay in payment within a maximum period of five days from the date of renewal, a temporary suspension of the service is made until payment is made by the customer. Opening the site for subscribers again, additional fees are imposed at the discretion of the company, and in the event of non-payment within a maximum period of 15 days, the service will be permanently suspended, and the company is not responsible for any damages resulting from stopping the service.") }}</p>
    </div>
  </div>
</section>

</div>
@endsection
