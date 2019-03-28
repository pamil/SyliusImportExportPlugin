<?php

declare(strict_types=1);

namespace Tests\FriendsOfSylius\SyliusImportExportPlugin;

final class OrderJsonImportExportTest extends AbstractJsonImportExportTest
{
    protected function provideName(): string
    {
        return 'order';
    }

    protected function provideJsonData(): string
    {
        return <<<LOL
[
  {
    "CreatedAt": "2019-03-28 12:14:00",
    "UpdatedAt":"2019-03-28 12:14:00",
    "CheckoutCompletedAt": "2019-03-28 12:14:00",
    "CheckoutState": "completed",
    "Shipments": [
      {
        "CreatedAt": "2019-03-28 12:14:00",
        "UpdatedAt":"2019-03-28 12:14:00",
        "State": "ready",
        "Method": "ups",
        "Tracking": null,
        "Tracked": false
      }
    ],
    "ShippingRequired": "",
    "ShippingState": "ready",
    "ShippingAddress": {
      "FirstName": "Zackary",
      "LastName": "Wunsch",
      "PhoneNumber": null,
      "Company": null,
      "CountryCode": "US",
      "ProvinceCode": null,
      "ProvinceName": null,
      "Street": "492 Linwood Vista Apt. 868",
      "City": "Lake Gracie",
      "Postcode": "36673"
    },
    "BillingAddress": {
      "FirstName": "Zackary",
      "LastName": "Wunsch",
      "PhoneNumber": null,
      "Company": null,
      "CountryCode": "US",
      "ProvinceCode": null,
      "ProvinceName": null,
      "Street": "492 Linwood Vista Apt. 868",
      "City": "Lake Gracie",
      "Postcode": "36673"
    },
    "Number": "000000001",
    "Notes": "Sit quisquam suscipit cumque.",
    "Items": [
      {
        "CreatedAt": "2019-03-28 12:14:00",
        "UpdatedAt":"2019-03-28 12:14:00",
        "Quantity": 2,
        "UnitPrice": 71,
        "Total": 36,
        "Immutable": false,
        "Units": [
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 18,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -53,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 18,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -53,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          }
        ],
        "Adjustments": [],
        "Product": "8c557914-00cf-3796-a070-69fc9c0d0e70",
        "Variant": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-0"
      },
      {
        "CreatedAt": "2019-03-28 12:14:00",
        "UpdatedAt":"2019-03-28 12:14:00",
        "Quantity": 3,
        "UnitPrice": 412,
        "Total": 322,
        "Immutable": false,
        "Units": [
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 107,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -305,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 107,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -305,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 108,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -304,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          }
        ],
        "Adjustments": [],
        "Product": "8c557914-00cf-3796-a070-69fc9c0d0e70",
        "Variant": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-1"
      },
      {
        "CreatedAt": "2019-03-28 12:14:00",
        "UpdatedAt":"2019-03-28 12:14:00",
        "Quantity": 4,
        "UnitPrice": 111,
        "Total": 116,
        "Immutable": false,
        "Units": [
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 29,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -82,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 29,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -82,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 29,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -82,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 29,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -82,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          }
        ],
        "Adjustments": [],
        "Product": "8c557914-00cf-3796-a070-69fc9c0d0e70",
        "Variant": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-2"
      },
      {
        "CreatedAt": "2019-03-28 12:14:00",
        "UpdatedAt":"2019-03-28 12:14:00",
        "Quantity": 4,
        "UnitPrice": 370,
        "Total": 385,
        "Immutable": false,
        "Units": [
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 96,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -274,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "Total": 96,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -274,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 96,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -274,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          },
          {
            "CreatedAt": "2019-03-28 12:14:00",
            "UpdatedAt":"2019-03-28 12:14:00",
            "Total": 97,
            "Shipment": {
              "CreatedAt": "2019-03-28 12:14:00",
              "UpdatedAt":"2019-03-28 12:14:00",
              "State": "ready",
              "Method": "ups",
              "Tracking": null,
              "Tracked": false
            },
            "Adjustments": [
              {
                "CreatedAt": "2019-03-28 12:14:00",
                "UpdatedAt":"2019-03-28 12:14:00",
                "Type": "order_promotion",
                "Label": "Christmas",
                "Amount": -273,
                "Neutral": false,
                "Locked": false,
                "Charge": true,
                "Credit": false,
                "OriginCode": "christmas"
              }
            ]
          }
        ],
        "Adjustments": [],
        "Product": "8c557914-00cf-3796-a070-69fc9c0d0e70",
        "Variant": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-4"
      }
    ],
    "ItemsTotal": 859,
    "Total": "25.70",
    "State": "new",
    "Adjustments": [
      {
        "CreatedAt": "2019-03-28 12:14:00",
        "UpdatedAt":"2019-03-28 12:14:00",
        "Type": "shipping",
        "Label": "UPS",
        "Amount": 1711,
        "Neutral": false,
        "Locked": false,
        "Charge": false,
        "Credit": true,
        "OriginCode": null
      }
    ],
    "Customer": {
      "CreatedAt": "2019-03-28 12:14:00",
      "UpdatedAt":"2019-03-28 12:14:00",
      "Email": "bergnaum.maudie@yahoo.com",
      "EmailCanonical": "bergnaum.maudie@yahoo.com",
      "FirstName": "Buck",
      "LastName": "Zboncak",
      "Birthday": null,
      "Gender": "u",
      "Group": "Wholesale",
      "PhoneNumber": null,
      "SubscribedToNewsletter": false,
      "DefaultAddress": []
    },
    "Payments": [
      {
        "CreatedAt": "2019-03-28 12:14:00",
        "UpdatedAt":"2019-03-28 12:14:00",
        "PaymentMethod": "bank_transfer",
        "State": "new",
        "CurrencyCode": "USD",
        "Amount": 2570,
        "Details": []
      }
    ],
    "PaymentState": "awaiting_payment",
    "CurrencyCode": "USD",
    "LocaleCode": "en_US",
    "TokenValue": "j-xxPGloqi",
    "CustomerIp": "",
    "Channel": "US_WEB"
  }
]
LOL;
    }

    public function setUp(): void
    {
        parent::setUp();

        $this->loadJsonFixtures('locale', <<<LOL
[
    {
        "Code": "pl_PL"
    }
]
LOL
        );

        $this->loadJsonFixtures('currency', <<<LOL
[
    {
        "Code": "PLN"
    }
]
LOL
        );

        $this->loadJsonFixtures('zone', <<<LOL
[
    {
        "Code": "NA",
        "Name": "North America",
        "Type": "country",
        "Scope": "all",
        "Members": ["US", "CA"]
    }
]
LOL
        );

        $this->loadJsonFixtures('channel', <<<LOL
[
    {
        "Code": "US_WEB",
        "Name": "US Web Store",
        "Description": "sample_description",
        "Hostname": "localhost",
        "Color": "GreenYellow",
        "Enabled": true,
        "BaseCurrency": "PLN",
        "DefaultLocale": "pl_PL",
        "DefaultTaxZone": "NA",
        "TaxCalculationStrategy": "order_items_based",
        "ThemeName": "default",
        "ContactEmail": "sylius@example.com",
        "SkippingShippingStepAllowed": false,
        "SkippingPaymentStepAllowed": false,
        "AccountVerificationRequired": true,
        "ShopBillingData" : {
            "City": "sample_city",
            "Street": "sample_street",
            "Country": "sample_country",
            "TaxId": "sample_tax_id",
            "Company": "sample_company",
            "Postcode": "11-111"
        }
    }
]
LOL
        );

        $this->loadJsonFixtures('shipping_method', <<<LOL
[
    {
        "Code": "ups",
        "Position": 0,
        "Category": "LIGHT",
        "CategoryRequirement": 1,
        "Configuration": {
            "US_WEB": {
                "amount": 7024
            }
        },
        "Translations": {
            "en_US": {
                "Name": "UPS",
                "Description": "Necessitatibus nemo et nihil inventore."
            }
        },
        "Zone": "NA",
        "TaxCategory": "clothing",
        "Calculator": "flat_rate",
        "Enabled": true
    }
]
LOL
        );

        $this->loadJsonFixtures('payment_method', <<<LOL
[
    {
        "Code": "bank_transfer",
        "Environment": "",
        "Enabled": false,
        "Position": 1,
        "GatewayConfig": {
            "GatewayName": "Offline Custom",
            "FactoryName": "offline_custom",
            "Config": {
                "Bar": "Foo"
            }
        }
    }
]
LOL
        );

        $this->loadJsonFixtures('product_association_type', <<<LOL
[
    {
        "Code": "similar_products",
        "Translations": {
            "en_US": {
                "Name": "Similar products"
            }
        }
    }
]
LOL
        );

        $this->loadJsonFixtures('product_attribute', <<<LOL
[
    {
        "Code": "t_shirt_brand",
        "Type": "text",
        "StorageType": "text",
        "Configuration": [],
        "Position": 0,
        "Translations": {
            "en_US": {
                "Name": "T-Shirt Brand"
            }
        }
    },
    {
        "Code": "t_shirt_collection",
        "Type": "text",
        "StorageType": "text",
        "Configuration": [],
        "Position": 1,
        "Translations": {
            "en_US": {
                "Name": "T-Shirt Collection"
            }
        }
    },
    {
        "Code": "book_author",
        "Type": "text",
        "StorageType": "text",
        "Configuration": [],
        "Position": 2,
        "Translations": {
            "en_US": {
                "Name": "Book Author"
            }
        }
    }
]
LOL
        );

        $this->loadJsonFixtures('product_option', <<<LOL
[
    {
        "Code": "t_shirt_color",
        "Position": 0,
        "Translations": {
            "en_US": {
                "Name": "T-Shirt Color"
            }
        },
        "Values": [
            {
                "Code": "t_shirt_color_red",
                "Translations": {
                    "en_US": {
                        "Value": "Red"
                    }
                }
            }
        ]
    },
    {
        "Code": "t_shirt_size",
        "Position": 0,
        "Translations": {
            "en_US": {
                "Name": "T-Shirt Size"
            }
        },
        "Values": [
            {
                "Code": "t_shirt_size_s",
                "Translations": {
                    "en_US": {
                        "Value": "S"
                    }
                }
            },
            {
                "Code": "t_shirt_size_m",
                "Translations": {
                    "en_US": {
                        "Value": "M"
                    }
                }
            }
        ]
    }
]
LOL
        );

        $this->loadJsonFixtures('taxon', <<<LOL
[
    {
        "Code": "t_shirts",
        "Parent": "",
        "Translations": {
            "en_US": {
                "Name": "T-Shirts",
                "Slug": "tshirts",
                "Description": "T-Shirts"
            }
        },
        "Position": 0
    },
    {
        "Code": "books",
        "Parent": "",
        "Translations": {
            "en_US": {
                "Name": "Books",
                "Slug": "books",
                "Description": "Books"
            }
        },
        "Position": 1
    },
    {
        "Code": "womens_t_shirts",
        "Parent": "t_shirts",
        "Translations": {
            "en_US": {
                "Name": "Women T-Shirts",
                "Slug": "women-tshirts",
                "Description": "Women T-Shirts"
            }
        },
        "Position": 0
    }
]
LOL
        );

        $this->loadJsonFixtures('product', <<<LOL
[
    {
        "Code": "8c557914-00cf-3796-a070-69fc9c0d0e70",
        "MainTaxon": "womens_t_shirts",
        "Enabled": true,
        "VariantSelectionMethod": "match",
        "AverageRating": 0,
        "Translations": {
            "en_US": {
                "Name": "T-Shirt \"dicta\"",
                "Slug": "t-shirt-dicta",
                "Description": "Nihil in ullam itaque rerum doloremque qui quia.",
                "ShortDescription": "Qui dolorum sint ut minima reprehenderit tenetur.",
                "MetaKeywords": null,
                "MetaDescription": null
            }
        },
        "Taxons": [
            {
                "Taxon": "t_shirts",
                "Position": 7
            },
            {
                "Taxon": "womens_t_shirts",
                "Position": 2
            }
        ],
        "Channels": [
            "US_WEB"
        ],
        "Images": [
            {
                "Type": "main",
                "Path": "0d\/e5\/72ef9f324b7862835324643a0161.jpeg"
            },
            {
                "Type": "thumbnail",
                "Path": "49\/d8\/d9d0e42d5d7dfefebed7348983dc.jpeg"
            }
        ],
        "Associations": [
            {
                "Type": "similar_products",
                "Products": [
                    "a77722c5-8482-3995-b279-9da18a2416d4"
                ]
            }
        ],
        "Attributes": [
            {
                "Attribute": "t_shirt_brand",
                "Locale": "en_US",
                "Value": "JKM-476 Streetwear"
            },
            {
                "Attribute": "t_shirt_collection",
                "Locale": "en_US",
                "Value": "Sylius Autumn 2011"
            }
        ],
        "Options": [
            "t_shirt_color",
            "t_shirt_size"
        ],
        "Variants": [
            {
                "Code": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-0",
                "Position": 0,
                "Version": 1,
                "OnHold": 0,
                "OnHand": 4,
                "Tracked": false,
                "Width": null,
                "Height": null,
                "Depth": null,
                "Weight": null,
                "ShippingRequired": true,
                "TaxCategory": null,
                "ShippingCategory": "HEAVY",
                "Images": [],
                "Translations": {
                    "en_US": {
                        "Name": "distinctio"
                    }
                },
                "Options": [
                    "t_shirt_color_red",
                    "t_shirt_size_s"
                ]
            },
            {
                "Code": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-1",
                "Position": 1,
                "Version": 1,
                "OnHold": 0,
                "OnHand": 1,
                "Tracked": false,
                "Width": null,
                "Height": null,
                "Depth": null,
                "Weight": null,
                "ShippingRequired": false,
                "TaxCategory": "clothing",
                "ShippingCategory": "LIGHT",
                "Images": [],
                "Translations": {
                    "en_US": {
                        "Name": "dolor"
                    }
                },
                "Options": [
                    "t_shirt_color_red",
                    "t_shirt_size_s"
                ]
            },
            {
                "Code": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-2",
                "Position": 1,
                "Version": 1,
                "OnHold": 0,
                "OnHand": 1,
                "Tracked": false,
                "Width": null,
                "Height": null,
                "Depth": null,
                "Weight": null,
                "ShippingRequired": false,
                "TaxCategory": "clothing",
                "ShippingCategory": "LIGHT",
                "Images": [],
                "Translations": {
                    "en_US": {
                        "Name": "dolor"
                    }
                },
                "Options": [
                    "t_shirt_color_red",
                    "t_shirt_size_s"
                ]
            },
            {
                "Code": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-3",
                "Position": 1,
                "Version": 1,
                "OnHold": 0,
                "OnHand": 1,
                "Tracked": false,
                "Width": null,
                "Height": null,
                "Depth": null,
                "Weight": null,
                "ShippingRequired": false,
                "TaxCategory": "clothing",
                "ShippingCategory": "LIGHT",
                "Images": [],
                "Translations": {
                    "en_US": {
                        "Name": "dolor"
                    }
                },
                "Options": [
                    "t_shirt_color_red",
                    "t_shirt_size_m"
                ]
            },
            {
                "Code": "8c557914-00cf-3796-a070-69fc9c0d0e70-variant-4",
                "Position": 1,
                "Version": 1,
                "OnHold": 0,
                "OnHand": 1,
                "Tracked": false,
                "Width": null,
                "Height": null,
                "Depth": null,
                "Weight": null,
                "ShippingRequired": false,
                "TaxCategory": "clothing",
                "ShippingCategory": "LIGHT",
                "Images": [],
                "Translations": {
                    "en_US": {
                        "Name": "dolor"
                    }
                },
                "Options": [
                    "t_shirt_color_red",
                    "t_shirt_size_s"
                ]
            }
        ]
    }
]
LOL
        );
    }
}
