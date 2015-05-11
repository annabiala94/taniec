Feature: Web pages

  Scenario: Flamenco
    Given I am on homepage
    When I follow "Ballet"
    Then I should see "Ballet is a type of..."