<?php

namespace Drupal\ibew_contact\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Mail\MailManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * IBEW Contact Form.
 */
class ContactForm extends FormBase
{

    /**
     * The mail manager service.
     *
     * @var \Drupal\Core\Mail\MailManagerInterface
     */
    protected $mailManager;

    /**
     * Constructs ContactForm.
     */
    public function __construct(MailManagerInterface $mail_manager)
    {
        $this->mailManager = $mail_manager;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get('plugin.manager.mail')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'ibew_contact_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['#attributes']['class'][] = 'ibew-contact-form';

        // Contact information section.
        $form['contact_info'] = [
            '#type' => 'container',
            '#attributes' => ['class' => ['ibew-contact-info']],
        ];

        $form['contact_info']['intro'] = [
            '#markup' => '<div class="ibew-contact-intro">
        <h2>Get In Touch</h2>
        <p>Have a question about membership, training, or need to reach our office? Fill out the form below and we\'ll get back to you as soon as possible.</p>
      </div>',
        ];

        // Form fields container.
        $form['fields'] = [
            '#type' => 'container',
            '#attributes' => ['class' => ['ibew-contact-fields']],
        ];

        // Two column layout for name fields.
        $form['fields']['name_row'] = [
            '#type' => 'container',
            '#attributes' => ['class' => ['ibew-form-row']],
        ];

        $form['fields']['name_row']['first_name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('First Name'),
            '#required' => TRUE,
            '#attributes' => [
                'class' => ['ibew-form-input'],
                'placeholder' => $this->t('John'),
            ],
        ];

        $form['fields']['name_row']['last_name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Last Name'),
            '#required' => TRUE,
            '#attributes' => [
                'class' => ['ibew-form-input'],
                'placeholder' => $this->t('Doe'),
            ],
        ];

        $form['fields']['email'] = [
            '#type' => 'email',
            '#title' => $this->t('Email Address'),
            '#required' => TRUE,
            '#attributes' => [
                'class' => ['ibew-form-input'],
                'placeholder' => $this->t('john.doe@example.com'),
            ],
        ];

        $form['fields']['phone'] = [
            '#type' => 'tel',
            '#title' => $this->t('Phone Number'),
            '#attributes' => [
                'class' => ['ibew-form-input'],
                'placeholder' => $this->t('(203) 555-0123'),
            ],
        ];

        $form['fields']['subject'] = [
            '#type' => 'select',
            '#title' => $this->t('Subject'),
            '#required' => TRUE,
            '#options' => [
                '' => $this->t('- Select a subject -'),
                'membership' => $this->t('Membership Inquiry'),
                'training' => $this->t('Training & Apprenticeship'),
                'contractor' => $this->t('Contractor Services'),
                'employment' => $this->t('Employment Opportunities'),
                'general' => $this->t('General Question'),
                'other' => $this->t('Other'),
            ],
            '#attributes' => [
                'class' => ['ibew-form-select'],
            ],
        ];

        $form['fields']['message'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Message'),
            '#required' => TRUE,
            '#rows' => 6,
            '#attributes' => [
                'class' => ['ibew-form-textarea'],
                'placeholder' => $this->t('How can we help you?'),
            ],
        ];

        // Privacy consent.
        $form['fields']['privacy'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('I agree to the <a href="/privacy-policy" target="_blank">Privacy Policy</a> and consent to being contacted regarding my inquiry.'),
            '#required' => TRUE,
            '#attributes' => [
                'class' => ['ibew-form-checkbox'],
            ],
        ];

        $form['actions'] = [
            '#type' => 'actions',
            '#attributes' => ['class' => ['ibew-form-actions']],
        ];

        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Send Message'),
            '#attributes' => [
                'class' => ['ibew-btn', 'ibew-btn--primary'],
            ],
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $email = $form_state->getValue('email');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $form_state->setErrorByName('email', $this->t('Please enter a valid email address.'));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Get form values.
        $values = $form_state->getValues();

        // Log the submission.
        \Drupal::logger('ibew_contact')->notice('Contact form submission from @name (@email): @subject', [
            '@name' => $values['first_name'] . ' ' . $values['last_name'],
            '@email' => $values['email'],
            '@subject' => $values['subject'],
        ]);

        // Send email notification.
        $to = \Drupal::config('system.site')->get('mail');
        $params = [
            'subject' => $this->t('Contact Form: @subject', ['@subject' => $values['subject']]),
            'body' => $this->t("New contact form submission:\n\nName: @first @last\nEmail: @email\nPhone: @phone\nSubject: @subject\n\nMessage:\n@message", [
                '@first' => $values['first_name'],
                '@last' => $values['last_name'],
                '@email' => $values['email'],
                '@phone' => $values['phone'] ?? 'Not provided',
                '@subject' => $values['subject'],
                '@message' => $values['message'],
            ]),
        ];

        $this->mailManager->mail('ibew_contact', 'contact_form', $to, 'en', $params);

        // Show success message.
        $this->messenger()->addStatus($this->t('Thank you for contacting IBEW Local 90! We have received your message and will respond within 1-2 business days.'));

        // Redirect to homepage or stay on page.
        $form_state->setRedirect('<front>');
    }

}
