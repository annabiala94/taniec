Feature: Web pages

  Scenario: Rumba nazywana jest tańcem miłości lub tańcem namiętności.
    Given I am on homepage
    When I follow "Rumba"
    Then I should see "Rumba nazywana jest tańcem miłości lub tańcem namiętności."