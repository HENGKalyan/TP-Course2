class CategoryTest extends TestCase {
    
     <!-- * Description: Check if we can access the get all categories api
     * Precondition: None
     * Test Steps: 1. Hit the get all categories api
     *             2. Check if the response status is 200
     * Test Data : None
     * Expected Result: The response status should be 200
     * Actual Result: The response status is 200
     * Status: Passed
     * Remark: None -->
     
    public function test_if_we_can_access_get_all_categories_api(): void
    {
        $response = $this->get('/api/categories');
        
        $response->assertStatus(200)->assertJsonFragment(["message"=>"success"]);
    }
}