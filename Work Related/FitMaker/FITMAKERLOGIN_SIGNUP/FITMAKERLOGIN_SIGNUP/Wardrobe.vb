Public Class Wardrobe
    Private Sub btnAddClothing_Click(sender As Object, e As EventArgs) Handles btnAddClothing.Click
        pnlAddClothing.Visible = True
    End Sub

    Private Sub btnCancel_Click(sender As Object, e As EventArgs) Handles btnCancel.Click
        pnlAddClothing.Visible = False
    End Sub

    Private Sub cmbType_SelectedIndexChanged(sender As Object, e As EventArgs) Handles cmbType.SelectedIndexChanged
        cmbStyle.Items.Clear()

        Select Case cmbType.SelectedItem.ToString()
            Case "Topwear"
                cmbStyle.Items.Add("Round Neck Shirt")
                cmbStyle.Items.Add("Button Shirt")
                cmbStyle.Items.Add("Hoodie")
                cmbStyle.Items.Add("Long Sleeve Shirt")
                cmbStyle.Items.Add("Oversize Shirt")
                cmbStyle.Items.Add("Jersey")

            Case "Long Pants"
                cmbStyle.Items.Add("Jeans")
                cmbStyle.Items.Add("Formal Pants")
                cmbStyle.Items.Add("Cargo Pants")
                cmbStyle.Items.Add("Sweat Pants")
                cmbStyle.Items.Add("Joggers")

            Case "Shorts"
                cmbStyle.Items.Add("Denim Shorts")
                cmbStyle.Items.Add("Cargo Shorts")
                cmbStyle.Items.Add("Sweat Shorts")
                cmbStyle.Items.Add("Board Shorts")
                cmbStyle.Items.Add("Running Shorts")

            Case "Hijab"
                cmbStyle.Items.Add("Slip-On Hijab")
                cmbStyle.Items.Add("Shawl Hijab")
                cmbStyle.Items.Add("Bawal Hijab")

            Case "Skirt"
                cmbStyle.Items.Add("A-Line Skirt")
                cmbStyle.Items.Add("Pencil Skirt")
                cmbStyle.Items.Add("Maxi Skirt")
                cmbStyle.Items.Add("Mini Skirt")

            Case "Dresses"
                cmbStyle.Items.Add("Casual Dress")
                cmbStyle.Items.Add("Formal Dress")
                cmbStyle.Items.Add("Cocktail Dress")
                cmbStyle.Items.Add("Pleated Dress")
        End Select
    End Sub

    Private Sub btnSave_Click(sender As Object, e As EventArgs) Handles btnSave.Click
        If cmbType.SelectedItem Is Nothing OrElse cmbStyle.SelectedItem Is Nothing OrElse cmbColour.SelectedItem Is Nothing Then
            MessageBox.Show("Please select Type, Style, and Colour before saving.")
            Exit Sub
        End If

        Dim itemType As String = cmbType.SelectedItem.ToString()
        Dim itemStyle As String = cmbStyle.SelectedItem.ToString()
        Dim itemColour As String = cmbColour.SelectedItem.ToString()

        Dim clothingPanel As Panel = DuplicateClothingPanel(pnlImageClothing)

        Dim picBox As PictureBox = clothingPanel.Controls.OfType(Of PictureBox)().FirstOrDefault()
        Dim lbl As Label = clothingPanel.Controls.OfType(Of Label)().FirstOrDefault()

        If lbl IsNot Nothing Then
            lbl.Text = $"{itemStyle} - {itemColour}"
        End If

        Dim imagePath As String = ""

        Select Case itemType
            Case "Topwear"
                Select Case itemStyle
                    Case "Button Shirt"
                        imagePath = "Image for Outfits\TopWear\Button Shirt.jpeg"
                    Case "Hoodie"
                        imagePath = "Image for Outfits\TopWear\Hoodie.jpeg"
                    Case "Jersey"
                        imagePath = "Image for Outfits\TopWear\Jersey.jpeg"
                    Case "Long Sleeve Shirt"
                        imagePath = "Image for Outfits\TopWear\long Sleeve Shirt.jpeg"
                    Case "Oversize Shirt"
                        imagePath = "Image for Outfits\TopWear\Oversize Shirt.jpeg"
                    Case "Round Neck Shirt"
                        imagePath = "Image for Outfits\TopWear\Round Neck Shirt.jpeg"
                End Select

            Case "Long Pants"
                Select Case itemStyle
                    Case "Cargo Pants"
                        imagePath = "Image for Outfits\Long Pants\Cargo Pants.jpeg"
                    Case "Formal Pants"
                        imagePath = "Image for Outfits\Long Pants\Formal Pants.jpeg"
                    Case "Jeans"
                        imagePath = "Image for Outfits\Long Pants\Jeans.jpeg"
                    Case "Joggers"
                        imagePath = "Image for Outfits\Long Pants\Joggers.jpeg"
                    Case "Sweat Pants"
                        imagePath = "Image for Outfits\Long Pants\Sweat Pants.jpeg"
                End Select

            Case "Shorts"
                Select Case itemStyle
                    Case "Board Shorts"
                        imagePath = "Image for Outfits\Shorts\Board Shorts.jpeg"
                    Case "Cargo Shorts"
                        imagePath = "Image for Outfits\Shorts\Cargo Shorts.jpeg"
                    Case "Denim Shorts"
                        imagePath = "Image for Outfits\Shorts\Denim shorts.jpeg"
                    Case "Running Shorts"
                        imagePath = "Image for Outfits\Shorts\Running Shorts.jpeg"
                    Case "Sweat Shorts"
                        imagePath = "Image for Outfits\Shorts\Sweat Shorts.jpeg"
                End Select

            Case "Skirt"
                Select Case itemStyle
                    Case "A-Line Skirt"
                        imagePath = "Image for Outfits\Skirt\A-Line Skirt.jpg"
                    Case "Maxi Skirt"
                        imagePath = "Image for Outfits\Skirt\Maxi Skirt.jpg"
                    Case "Mini Skirt"
                        imagePath = "Image for Outfits\Skirt\Mini Skirt.jpg"
                    Case "Pencil Skirt"
                        imagePath = "Image for Outfits\Skirt\Pencil Skirt.jpg"
                End Select

            Case "Dresses"
                Select Case itemStyle
                    Case "Casual Dress"
                        imagePath = "Image for Outfits\Dresses\Casual Dress.jpg"
                    Case "Cocktail Dress"
                        imagePath = "Image for Outfits\Dresses\Cocktail Dress.jpg"
                    Case "Formal Dress"
                        imagePath = "Image for Outfits\Dresses\Formal Dress.jpg"
                    Case "Pleated Dress"
                        imagePath = "Image for Outfits\Dresses\Pleated Dress.jpg"
                End Select

            Case "Hijab"
                Select Case itemStyle
                    Case "Bawal Hijab"
                        imagePath = "Image for Outfits\Hijab\Bawal Hijab.jpg"
                    Case "Shawl Hijab"
                        imagePath = "Image for Outfits\Hijab\Shawl Hijab.jpg"
                    Case "Slip-On Hijab"
                        imagePath = "Image for Outfits\Hijab\Slip-On Hijab.jpg"
                End Select
        End Select

        If picBox IsNot Nothing AndAlso Not String.IsNullOrEmpty(imagePath) AndAlso IO.File.Exists(imagePath) Then
            picBox.Image = Image.FromFile(imagePath)
        End If

        Select Case itemType
            Case "Topwear"
                flpTopwear.Controls.Add(clothingPanel)
                lblTopwear.Visible = True
            Case "Long Pants"
                flpLongPants.Controls.Add(clothingPanel)
                lblLongPants.Visible = True
            Case "Skirt"
                flpSkirt.Controls.Add(clothingPanel)
                lblSkirt.Visible = True
            Case "Shorts"
                flpShorts.Controls.Add(clothingPanel)
                lblShorts.Visible = True
            Case "Hijab"
                flpHijab.Controls.Add(clothingPanel)
                lblHijab.Visible = True
            Case "Dresses"
                flpDresses.Controls.Add(clothingPanel)
                lblDresses.Visible = True
            Case Else
                MessageBox.Show("Unknown category")
        End Select
    End Sub
    Private Function DuplicateClothingPanel(template As Panel) As Panel
        Dim newPanel As New Panel()
        newPanel.Size = template.Size
        newPanel.BackColor = template.BackColor

        For Each ctrl As Control In template.Controls
            If TypeOf ctrl Is PictureBox Then
                Dim newPic As New PictureBox()
                newPic.Size = CType(ctrl, PictureBox).Size
                newPic.Location = CType(ctrl, PictureBox).Location
                newPic.SizeMode = CType(ctrl, PictureBox).SizeMode
                newPanel.Controls.Add(newPic)

            ElseIf TypeOf ctrl Is Label Then
                Dim newLabel As New Label()
                newLabel.Size = CType(ctrl, Label).Size
                newLabel.Location = CType(ctrl, Label).Location
                newLabel.Font = CType(ctrl, Label).Font
                newLabel.ForeColor = CType(ctrl, Label).ForeColor
                newLabel.TextAlign = CType(ctrl, Label).TextAlign
                newPanel.Controls.Add(newLabel)
            End If
        Next

        Return newPanel
    End Function

End Class