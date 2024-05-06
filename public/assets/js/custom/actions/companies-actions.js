 
$(document).ready(function($)
{             

 
            var table = $('.data-table-companies').DataTable(
            {
                processing: true,
                serverSide: true,
                ordering: false,
                searching: false,
                info: false,
                ajax:
                {
                        url: "companies",
                                data: function (d) {
                                    // d.category = $('#category').val()
                                }
                },
                columns: [ 
                  {data:'organization_name',  name:'organization_name'},                                                  
                    {data:'organization_type'   ,                name:   'organization_type'   },
                    {data:'main_branch_address'  ,               name:   'main_branch_address'  },
                    {data:'social_media_sites' ,                 name: 'social_media_sites' },
                   {data:'annual_budget' ,                      name:     'annual_budget' },
                   {data:'number_of_centers' ,                  name:   'number_of_centers' },
                   {data:'number_of_employees' ,                name: 'number_of_employees' },
                   {data:'center_locations' ,                   name:   'center_locations' },
                    {data:'registration_number_ministry_interior' ,      name:'registration_number_ministry_interior' },
                   {data:'Number_current_projects' ,                    name: 'Number_current_projects' },
                   {data:'main_donors_projects' ,                       name:   'main_donors_projects' },
                   {data:'number_employees_organization' ,              name:   'number_employees_organization' },
                   {data:'nationalities_of_beneficiaries' ,             name:    'nationalities_of_beneficiaries' },
                    {data:'age_group_beneficiaries' ,                    name:  'age_group_beneficiaries' },
                   {data:'strategic_goals' ,                            name:       'strategic_goals' },
                   {data:'registration_certificate_ministry_interior'  ,name:      'registration_certificate_ministry_interior'  },
                   {data:'company_organizational_structure' ,           name:      'company_organizational_structure' }]     


            });
 
           
      


});





 