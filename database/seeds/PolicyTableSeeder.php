<?php

use Illuminate\Database\Seeder;

class PolicyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('policy')->insert([
            'text12' => 'Privacy Policy',
            'text13' => 'Last Updated: October 8, 2017',
            'topic1' => '1. Introduction',
            'text1' =>'Careerinsights values the trust our users and customers place in us when they give us access to their Personal Information. The Privacy Policy describes how we work to maintain that trust and protect that information. Careerinsights has created this Privacy Policy in order to describe its collection, use and disclosure of personal data you give to Careerinsights when you access or use Careerinsights’s online and/or mobile services and websites, and software provided by Careerinsights on or in connection with such services or websites (collectively, the “Site”). “Careerinsights” or “we” means Careerinsights, Inc. if you are a Job Seeker or Employer located in the United States, Careerinsights Brasil Pesquisa de Empregos ltda. if you are an Employer located in Brazil, Careerinsights India Operations (Pte.) Ltd. if you are an Employer located in India, Careerinsights Singapore Operations (Pte.) Ltd. if you are an Employer in the Asia-Pacific RegionCareerinsights Ireland Operations Limited if you are a Job Seeker or Employer located elsewhere, and Careerinsights Hire, Inc. if you are receiving the Careerinsights Hire services. ',
            'topic2'=> '2. Information Collected',
            'text2' => 'When you create an Careerinsights account, request information, subscribe for a service, participate in a survey, post a rating or review, post a question or answer, post a resume, upload content or otherwise actively send us data on our Site, we collect such data including, but not limited to, your user name, password, first and last name, email address, telephone number (including mobile phone number), street address, gender, occupation, interests, messages you send to users, and any other data included in a submitted profile or resume, including but not limited to application materials and answers to screener questions submitted to Employers through Careerinsights  and answers you give to any questionnaires sent to you, which you answer.',
            'topic3' => '3. Limitation of Use or Disclosure of Personal Data',
            'text3' => 'When a Job Seeker deletes an account, the Job Seeker will no longer have access to any of the data which we provided under that account name, including but not limited to, search history, job search preferences, saved jobs, jobs the Job Seeker has applied to, job alerts, resume, and any other data associated with the account.',
            'topic4' => '4. Uses and Disclosures of Information',
            'text4' => 'We may use any information collected pursuant to this Privacy Policy, including information that identifies you as a specific individual (“Personal Information”), for the purposes set forth in this Paragraph 4 and Paragraphs 5, 6, and 10 below. ',
			'topic5' => '5. Contact and Other Information',
            'text5' => 'When you give <b><i>Careerinsights</i></b> contact information (such as your name and email address) and demographic information, you agree that <b><i>Careerinsights</i></b> may utilize this information as set forth herein. ',
            'topic6' => '6. Additional Uses and Disclosures of Non-Personal Information',
            'text6' => 'In addition to the other uses and disclosures of information set forth in this Privacy Policy, and notwithstanding anything in this Privacy Policy to the contrary, we may use and disclosure, for any purpose, any information that does not identify you as a specific individual (“Non-Personal&nbsp;<span style="font-weight: 400;">Information”), except where we are required to do otherwise under applicable law.',
            'topic7' => '7. Security',
            'text7' => '<b><i>Careerinsights</i></b> seeks to use reasonable security measures to help protect against the loss, misuse and alteration of the Personal Information under <b><i>Careerinsights</i></b>’s control. No method of transmission over the Internet, or method of electronic storage, is 100% secure, however. ',
            'topic8' => '8. Cookies',
            'text8' => '“Cookies” are small pieces of information that are stored by your browser on your computer’s hard drive. Please see our cookie policy for further information regarding <b><i>Careerinsights</i></b>’s use of Cookies.',
            'topic9' => '9. Links to Third-Party Sites',
            'text9' => 'The Site may make available links to other websites. When you click on such links, you may leave our Site. The Site may also make available Company Pages, which may contain information provided by third-party Employers. WE ARE NOT RESPONSIBLE FOR THE INFORMATION COLLECTION, USE, DISCLOSURE OR OTHER PRIVACY PRACTICES OF ANY THIRD PARTY, INCLUDING OUR AFFILIATES, THIRD-PARTY SERVICE PROVIDERS, ANY EMPLOYERS (INCLUDING ANY EMPLOYER THAT PROVIDES A COMPANY PAGE), ANY THIRD-PARTY SOCIAL MEDIA PLATFORM, ANY THIRD PARTY MAKING AVAILABLE THE DEVICES OR OPERATING SYSTEMS FOR WHICH THE SITE IS AVAILABLE, AND ANY&nbsp;</span>THIRD PARTY OPERATING ANY WEBSITE TO WHICH THE SITE CONTAINS A LINK. YOU MAY HAVE RIGHTS DIRECTLY ENFORCEABLE AGAINST THESE THIRD PARTIES SO YOU SHOULD CONSIDER THEIR PRIVACY POLICIES TO LEARN MORE.',
            'topic10' => '10. Acquisitions and Other Reorganizations',
            'text10' => 'Information collected pursuant to this Privacy Policy, including Personal Information, may be disclosed to one or more third parties in connection with any change of ownership or control in <b><i>Careerinsights</i></b>’s business (whether by merger, sale, or otherwise), or any other reorganization or joint venture, or assignment, transfer or other disposition of all or any portion of our business, assets or stock (including in connection with any bankruptcy or similar proceeding), and&nbsp;</span><span style="font-weight: 400;">any such information may be used by such third party in accordance with this Privacy Policy. Equally, information collected pursuant to this Privacy Policy, including Personal Information, may be disclosed to one or more third parties in connection with any acquisition or merger carried out by <b><i>Careerinsights</i></b> of such third parties.',
            'topic11' => '11. Personal Data of People',
            'text11' => 'The following section pertains to users who are located in the European Union and Switzerland. <b><i>Careerinsights</i></b> Ireland transfers certain data to <b><i>Careerinsights</i></b>, Inc. in the U.S..&nbsp;<b><i>Careerinsights</i></b>, Inc. complies with the EU-U.S. Privacy Shield Framework and the Swiss-U.S. Privacy Shield Framework as set forth by the U.S. Department of Commerce regarding the collection, use, and retention of personal information transferred from the European Union member countries and Switzerland to the United States. <b><i>Careerinsights</i></b> has certified that it adheres to the Privacy Shield Principles of Notice, Choice, Accountability for Onward Transfer, Security, Data Integrity, and Purpose Limitation, Access, Recourse, Enforcement and Liability. If there is any conflict between the policies in this privacy policy and the Privacy Shield Principles, the Privacy Shield Principles shall govern. To learn more about the Privacy Shield program, and to view our certification, please visit </span><a href="https://www.privacyshield.gov/"><span style="font-weight: 400;">https://www.privacyshield.gov/</span></a><span style="font-weight: 400;">.</span></p> '
            


            ]
            );
    }
}
