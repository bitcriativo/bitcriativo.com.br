import '../node_modules/bootstrap/dist/css/bootstrap.css';
import './assets/sass/app.sass'

$(function () {
  const btnNewsletterSubscriberSubmit = $('#btn-newsletter-subscriber-submit');
  const inputNewsletterSubscriberEmail = $('#input-newsletter-subscriber-email');

  btnNewsletterSubscriberSubmit.on('click', () => {
    $.ajax(
      {
        method: 'post',
        url: 'https://newsletter.api.bitcriativo.com.br/newsletter',
        accepts: 'Accept: application/json',
        data: {
          "email": inputNewsletterSubscriberEmail.val()
        },
        beforeSend: () => {
          btnNewsletterSubscriberSubmit.addClass('btn-sending').children('span').removeClass('d-none')
        }
      }).done(() => {
        alert('Inscrito com sucesso!')
        btnNewsletterSubscriberSubmit.removeClass('btn-sending').children('span').addClass('d-none')
      }).fail(function (jqXHR, textStatus, msg) {
        alert('Erro ao realizar a inscrição na Newsletter', msg)
        btnNewsletterSubscriberSubmit.removeClass('btn-sending').children('span').addClass('d-none')
      });
  })

});